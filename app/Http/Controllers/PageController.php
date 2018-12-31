<?php

namespace App\Http\Controllers;

use App\Service;
use App\Profile;
use App\star;
use App\matchstar;
use App\rasi;
use App\education;
use App\thisaiirupu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;


class PageController extends Controller
{
    public function home()
    {
      $star = star::all();
      $rasi = rasi::all();
      $thisaiirupu = thisaiirupu::all();
      $education = education::all();
      return view('page/home',compact('star','rasi','thisaiirupu','education'));
    }

    public function about()
    {
      $gender="Female";  
      $limitprofile  = DB::table('profiles')
           ->select('*')
           //->where('gender',$gender)
           ->where('role',0)
           ->take(3)->get();
      return view('page/about_us',compact('limitprofile'));
    }

    public function bride()
    {
      $gender="Female";               
      $profile  = DB::table('profiles')
           ->select('*')
           ->where('gender',$gender)
           ->where('role',0)
           ->paginate(6);
      $limitprofile  = DB::table('profiles')
           ->select('*')
           ->where('gender',$gender)
           ->where('role',0)
           ->take(3)->get();
      return view('page/bride',compact('profile','limitprofile'));
    }

    public function contact()
    {
        return view('page/contact');
    }

    public function groom()
    {
      $gender="Male";
      $profile  = DB::table('profiles')
           ->select('*')
           ->where('gender',$gender)
           ->where('role',0)
           ->paginate(6);
      $limitprofile  = DB::table('profiles')
           ->select('*')
           ->where('gender',$gender)
           ->where('role',0)
           ->take(3)->get();
      return view('page/groom',compact('profile','limitprofile'));
    }

    public function service()
    {
      $service  = DB::table('services')
           ->select('*')
           ->paginate(6);
      return view('page/service',compact('service'));
    }

    public function login()
    {
        return view('page/login');
    }
    
    public function customerdashboard()
    {
      $payment  = DB::table('payments')
           ->select('*')
           ->where('profile_id',session()->get('id'))
           ->get();
      $viewed  = DB::table('viewprofiles')
           ->select('*')
           ->where('your_id',session()->get('id'))
           ->count();
        return view('customer/dashboard',compact('payment','viewed'));
    }


}
