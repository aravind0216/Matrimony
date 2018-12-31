<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;

class UserLoginController extends Controller
{

    public function login(Request $request) {
    $rules = array (
      'mobile' => 'min:10|max:10|required',
      'password' => 'required' 
    );
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ()) {
      return Redirect::back ()->withErrors ( $validator, 'login' )->withInput ();
    } else {
      if (Auth::attempt ( array (
          
          'mobile' => $request->get ( 'mobile' ),
          'password' => $request->get ( 'password' ) 
      ) )) {
        $profile  = DB::table('profiles')
           ->select('*')
           ->where('mobile',$request->get ( 'mobile' ))
           ->get(); 

        session ( [ 
            'id' => $profile[0]->id, 
            'name' => $profile[0]->name, 
            'userid' => $profile[0]->userid, 
            'email' => $profile[0]->email, 
            'mobile' => $profile[0]->mobile, 
            'star' => $profile[0]->star, 
            'education' => $profile[0]->education, 
            'caste' => $profile[0]->caste, 
            'gender' => $profile[0]->gender, 
            'rasi' => $profile[0]->rasi, 
            'url' => $profile[0]->url,
            'role' => $profile[0]->role,
            'plan' => $profile[0]->plan,
            'nextduedate' => $profile[0]->nextduedate,
            'planstartdate' => $profile[0]->planstartdate
        ] );
        if($profile[0]->role == "0"){
          return redirect('customerdashboard');
        }
        else{
          return redirect('admindashboard');
        }
      } else {
        Session::flash ( 'message', "Invalid Mobile Number and Password , Please try again." );
        return Redirect::back ();
      }
    }
  }


  public function homelogin(Request $request) {
    $rules = array (
        
        'mobile' => 'min:10|max:10|required',
        'password' => 'required' 
    );
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ()) {
      return Redirect::back ()->withErrors ( $validator, 'home' )->withInput ();
    } else {
      if (Auth::attempt ( array (
          
          'mobile' => $request->get ( 'mobile' ),
          'password' => $request->get ( 'password' ) 
      ) )) {
        $profile  = DB::table('profiles')
           ->select('*')
           ->where('mobile',$request->get ( 'mobile' ))
           ->get(); 

        session ( [ 
            'id' => $profile[0]->id, 
            'name' => $profile[0]->name, 
            'userid' => $profile[0]->userid, 
            'email' => $profile[0]->email, 
            'mobile' => $profile[0]->mobile, 
            'star' => $profile[0]->star, 
            'education' => $profile[0]->education, 
            'caste' => $profile[0]->caste, 
            'gender' => $profile[0]->gender, 
            'rasi' => $profile[0]->rasi, 
            'url' => $profile[0]->url,
            'role' => $profile[0]->role,
            'plan' => $profile[0]->plan,
            'nextduedate' => $profile[0]->nextduedate,
            'planstartdate' => $profile[0]->planstartdate
        ] );

        if($profile[0]->role == "0"){
          return redirect('customerdashboard');
        }
        else{
          return redirect('admindashboard');
        }
      } else {
        Session::flash ( 'message', "Invalid Mobile Number and Password , Please try again." );
        return Redirect::back ();
      }
    }
  }

  public function logout() {
    Session::flush ();
    Auth::logout ();
    return redirect('login');
  }


    

}
