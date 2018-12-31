<?php

namespace App\Http\Controllers;

use App\viewprofile;
use App\plan;
use App\Profile;
use App\star;
use App\rasi;
use App\education;
use App\thisaiirupu;
use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;


class ProfileController extends Controller
{
    public function index()
    {
        $profile = profile::where('role','!=','1')->get()->take(6);
        $star = star::all();
        $rasi = rasi::all();
        $thisaiirupu = thisaiirupu::all();
        $education = education::all();
        return view('page/register',compact('star','rasi','thisaiirupu','education','profile'));
    }

    public function registerSave(Request $request)
    {


    $rules = array (
        'profilefor' => 'required',
        'name' => 'required',
        'mobile' => 'required|unique:profiles',
        'gender' => 'required',
        'age' => 'required',
        'religion' => 'required',
        'caste' => 'required',
        'subcaste' => 'required',
        'education' => 'required',
        'empolyedin' => 'required',
        'martialstatus' => 'required',
        'physicalstatus' => 'required',
        'email' => 'required|unique:profiles',
        'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'min:6|required'
    );

    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ()) {
        return Redirect::back()->withErrors ( $validator, 'register' )->withInput();
    }
    else
{

    

    $first_date = date('Y-m-d',strtotime('first day of this month'));
    $last_date = date('Y-m-d',strtotime('last day of this month'));  
    $userId1 = profile::whereBetween('created_at', [$first_date, $last_date])->count();
    $userId1 += 1;
    $userId = date('y').date('m').$userId1;

    //image upload
    $fileName = null;
    if($request->file('url')!=""){
    $image = $request->file('url');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('uploads/'), $fileName);
    }

        $profile = new profile;
        $profile->date = date('Y-m-d');
        $profile->userid = $userId;
        $profile->profilefor = $request->profilefor;
        $profile->name = $request->name;
        $profile->password =  Hash::make ( $request->get ( 'password' ) );
        $profile->remember_token = $request->get ( '_token' );
        $profile->gender = $request->gender;
        $profile->age = $request->age;
        $profile->religion = $request->religion;
        $profile->caste = $request->caste;
        $profile->subcaste = $request->subcaste;
        $profile->education = $request->education;
        $profile->educationdes = $request->educationdes;
        $profile->empolyedin = $request->empolyedin;
        $profile->jobdes = $request->jobdes;
        $profile->compayname = $request->compayname;
        $profile->income = $request->income;
        $profile->blood = $request->blood;
        $profile->martialstatus = $request->martialstatus;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->company_address = $request->company_address;
        $profile->colour = $request->colour;
        $profile->language = $request->language;
        $profile->physicalstatus = $request->physicalstatus;
        $profile->email = $request->email;
        $profile->mobile = $request->mobile;
        $profile->altmobile = $request->altmobile;
        $profile->address = $request->address;
        $profile->pincode = $request->pincode;
        $profile->district = $request->district;
        $profile->state = $request->state;
        $profile->fathername = $request->fathername;
        $profile->fatherwork = $request->fatherwork;
        $profile->mothername = $request->mothername;
        $profile->motherwork = $request->motherwork;
        $profile->nativeplace = $request->nativeplace;
        $profile->nativedistrict = $request->nativedistrict;
        $profile->noofbrothers = $request->noofbrothers;
        $profile->noofbrothersmarried = $request->noofbrothersmarried;
        $profile->noofsisters = $request->noofsisters;
        $profile->noofsistersmarried = $request->noofsistersmarried;
        $profile->familystatus = $request->familystatus;
        $profile->star = $request->star;
        $profile->rasi = $request->rasi;
        $profile->laknam = $request->laknam;
        $profile->thisaiirupu = $request->thisaiirupu;
        $profile->year = $request->year;
        $profile->month = $request->month;
        $profile->day = $request->day;
        $profile->rasi1 = $request->rasi1;
        $profile->rasi2 = $request->rasi2;
        $profile->rasi3 = $request->rasi3;
        $profile->rasi4 = $request->rasi4;
        $profile->rasi5 = $request->rasi5;
        $profile->rasi6 = $request->rasi6;
        $profile->rasi7 = $request->rasi7;
        $profile->rasi8 = $request->rasi8;
        $profile->rasi9 = $request->rasi9;
        $profile->rasi10 = $request->rasi10;
        $profile->rasi11 = $request->rasi11;
        $profile->rasi12 = $request->rasi12;
        $profile->am1 = $request->am1;
        $profile->am2 = $request->am2;
        $profile->am3 = $request->am3;
        $profile->am4 = $request->am4;
        $profile->am5 = $request->am5;
        $profile->am6 = $request->am6;
        $profile->am7 = $request->am7;
        $profile->am8 = $request->am8;
        $profile->am9 = $request->am9;
        $profile->am10 = $request->am10;
        $profile->am11 = $request->am11;
        $profile->am12 = $request->am12;
        $profile->dateofbirth = $request->dateofbirth;
        $profile->placeofbirth = $request->placeofbirth;
        $profile->timeofbirth = $request->timeofbirth;
        $profile->url = $fileName;
        $profile->save();

        // return back();
        // $data['userId'] = $request->mobile;
        // $data['password'] = $request->password;
        // return response()->json($data);
        }
        Session::flash ( 'mobile', $request->mobile );
        Session::flash ( 'password', $request->password );
        return redirect('login');

    }

    public function Update(Request $request)
    {
    
if($request->url!=""){
    $old_image = "uploads/".$request->url1;
    if (file_exists($old_image)) {
        @unlink($old_image);
    }
    //image upload
    $fileName = null;
    if($request->file('url')!=""){
    $image = $request->file('url');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('uploads/'), $fileName);
    }
}
else
{
    $fileName = $request->url1;
}
        $profile = profile::find($request->id);
        $profile->userid = $request->userid;
        $profile->profilefor = $request->profilefor;
        $profile->name = $request->name;
        //$profile->password = Hash::make ( $request->get ( 'password' ) );
        $profile->gender = $request->gender;
        $profile->age = $request->age;
        $profile->religion = $request->religion;
        $profile->caste = $request->caste;
        $profile->subcaste = $request->subcaste;
        $profile->education = $request->education;
        $profile->educationdes = $request->educationdes;
        $profile->empolyedin = $request->empolyedin;
        $profile->jobdes = $request->jobdes;
        $profile->compayname = $request->compayname;
        $profile->income = $request->income;
        $profile->blood = $request->blood;
        $profile->martialstatus = $request->martialstatus;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->company_address = $request->company_address;
        $profile->colour = $request->colour;
        $profile->language = $request->language;
        $profile->physicalstatus = $request->physicalstatus;
        $profile->email = $request->email;
        $profile->mobile = $request->mobile;
        $profile->altmobile = $request->altmobile;
        $profile->address = $request->address;
        $profile->pincode = $request->pincode;
        $profile->district = $request->district;
        $profile->state = $request->state;
        $profile->fathername = $request->fathername;
        $profile->fatherwork = $request->fatherwork;
        $profile->mothername = $request->mothername;
        $profile->motherwork = $request->motherwork;
        $profile->nativeplace = $request->nativeplace;
        $profile->nativedistrict = $request->nativedistrict;
        $profile->noofbrothers = $request->noofbrothers;
        $profile->noofbrothersmarried = $request->noofbrothersmarried;
        $profile->noofsisters = $request->noofsisters;
        $profile->noofsistersmarried = $request->noofsistersmarried;
        $profile->familystatus = $request->familystatus;
        $profile->star = $request->star;
        $profile->rasi = $request->rasi;
        $profile->laknam = $request->laknam;
        $profile->thisaiirupu = $request->thisaiirupu;
        $profile->year = $request->year;
        $profile->month = $request->month;
        $profile->day = $request->day;
        $profile->rasi1 = $request->rasi1;
        $profile->rasi2 = $request->rasi2;
        $profile->rasi3 = $request->rasi3;
        $profile->rasi4 = $request->rasi4;
        $profile->rasi5 = $request->rasi5;
        $profile->rasi6 = $request->rasi6;
        $profile->rasi7 = $request->rasi7;
        $profile->rasi8 = $request->rasi8;
        $profile->rasi9 = $request->rasi9;
        $profile->rasi10 = $request->rasi10;
        $profile->rasi11 = $request->rasi11;
        $profile->rasi12 = $request->rasi12;
        $profile->am1 = $request->am1;
        $profile->am2 = $request->am2;
        $profile->am3 = $request->am3;
        $profile->am4 = $request->am4;
        $profile->am5 = $request->am5;
        $profile->am6 = $request->am6;
        $profile->am7 = $request->am7;
        $profile->am8 = $request->am8;
        $profile->am9 = $request->am9;
        $profile->am10 = $request->am10;
        $profile->am11 = $request->am11;
        $profile->am12 = $request->am12;
        $profile->dateofbirth = $request->dateofbirth;
        $profile->placeofbirth = $request->placeofbirth;
        $profile->timeofbirth = $request->timeofbirth;
        $profile->url = $fileName;
        $profile->save();

        return back();

    }



    public function Edit($id)
    {
        $star = star::all();
        $rasi = rasi::all();
        $thisaiirupu = thisaiirupu::all();
        $education = education::all();
        $profile = profile::where('id','=',$id)->get();
        return view('customer/profile',compact('profile','star','rasi','thisaiirupu','education'));
    }
    
    public function viewprofile($id)
    {
        $star = star::all();
        $rasi = rasi::all();
        $thisaiirupu = thisaiirupu::all();
        $education = education::all();
        $profile = profile::where('id','=',$id)->get();

$your_id='';
if(!empty(session()->get('id'))){
   $your_id = session()->get('id'); 
}
$planprofile = profile::where('id','=',session()->get('id'))->get();

$alreadyview = DB::table('viewprofiles')
    ->where('your_id',$your_id)
    ->where('profile',$id)
    ->get();

$viewcount = DB::table('viewprofiles')
    ->where('your_id',$your_id)
    ->whereBetween('date', [$planprofile[0]->planstartdate, $planprofile[0]->nextduedate])
    ->count();

if($planprofile[0]->plan == '1' && $viewcount <= '20'){
    if(empty($alreadyview[0]->your_id)){
        $viewprofile = new viewprofile;
        $viewprofile->date = date('Y-m-d');
        $viewprofile->your_id = $your_id;
        $viewprofile->profile = $id;
        $viewprofile->save();
    }
}
elseif($planprofile[0]->plan == '2'){
   if(empty($alreadyview[0]->your_id)){
        $viewprofile = new viewprofile;
        $viewprofile->date = date('Y-m-d');
        $viewprofile->your_id = $your_id;
        $viewprofile->profile = $id;
        $viewprofile->save();
    } 
}

    return view('customer/viewprofile',compact('profile','star','rasi','thisaiirupu','education'));
}

public function yourplan(){
    $plan = plan::all();
    return view('customer/plan',compact('plan'));
}

public function viewedprofile()
{
    $id = session()->get('id'); 
    $star = star::all();
    $rasi = rasi::all();
    $thisaiirupu = thisaiirupu::all();
    $education = education::all();

    $viewprofile = DB::table('viewprofiles')
               ->select('*')
               ->where('your_id',$id)
               ->get();
    
    $array_data=array();
if(!empty($viewprofile)){
    foreach($viewprofile as $key => $value) {
        $array_data[]=$value->profile;
    }
}

    $profile = DB::table('profiles')
               ->select('*')
               ->whereIn('id',$array_data)
               ->paginate(6);
    //print_r($array_data);


return view('customer/viewedprofile',compact('profile','star','rasi','thisaiirupu','education'));
}

public function settings(){
    return view('customer/settings');
}

public function changepass(Request $request)
{
    $rules = array (
        'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'min:6'
    );

    $validator = Validator::make ( Input::all (), $rules );
        if ($validator->fails ()) {
           return Redirect::back()->withErrors ( $validator, 'changepass' )->withInput();
        } else {
            $profile = profile::find($request->id);
            $profile->password = Hash::make ( $request->get ( 'password' ) );
            $profile->remember_token = $request->get ( '_token' );
            $profile->save();
            // return redirect()->route('logout');
            return redirect()->action('UserLoginController@logout');
        }
    return back()->withErrors();
}

    // public function destroy($id)
    // {
    //     $advance = advance::find($id);
    //     $advance->emp_id;

    //     $employee = employee::find($advance->emp_id);
    //     $employee->basicsalary;
    //     $employee->advance -= $advance->amount;
    //     $employee->save();

    //     advance::find($id)->delete();
    //    return response()->json("successfully Delete");
    // }
}
