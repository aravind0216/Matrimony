<?php

namespace App\Http\Controllers;
use App\payment;
use App\Profile;
use App\plan;
use Illuminate\Http\Request;
use Redirect;
use Session;


class InstaController extends Controller
{

public function createRequest($id){

$plan=plan::find($id);
$profile=profile::find(session()->get('id'));
    	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_cbd73b5335a3ec0f75c8e124d74",
                  "X-Auth-Token:test_41a3784b0f54809eae755e4bbe6"));
$payload = Array(
    'purpose' => $plan->plan_name,
    'amount' => $plan->plan_amount,
    'phone' => $profile->mobile,
    'buyer_name' => $profile->name,
    'redirect_url' => 'http://matrimony.lrbtech.com/redirect/'.$id,
    'send_email' => true,
    'webhook' => 'http://matrimony.lrbtech.com/webhook/',
    'send_sms' => true,
    'email' => $profile->email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$data = json_decode($response,true);
if($data){
    return redirect($data['payment_request']['longurl']);
}
else{
    return redirect('yourplan');
}
//echo $response;

}

public function redirect(Request $request,$id){
    $end = date('Y-m-d', strtotime('+1 years'));

$plan=plan::find($id);

$profile=profile::find(session()->get('id'));
$profile->plan = $id;
$profile->planstartdate = date('Y-m-d');
$profile->nextduedate = $end;
$profile->save();

    $payment = new payment;
    $payment->date = date('Y-m-d');
    $payment->payment_id = $request->payment_id;
    $payment->payment_request_id = $request->payment_request_id;
    $payment->plan_id = $id;
    $payment->profile_id = session()->get('id');
    $payment->profile_name = $profile->name;
    $payment->profile_email = $profile->email;
    $payment->profile_mobile = $profile->mobile;
    $payment->plan_name = $plan->plan_name;
    $payment->plan_amount = $plan->plan_amount;
    $payment->next_due_date = $end;
    $payment->save();

    Session::put('plan', $id);
    Session::put('nextduedate', $end);
    Session::put('planstartdate', date('Y-m-d'));

    return redirect('yourplan');
}

}
