<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }




// if($agefrom!="" && $ageto!="" && $subcaste!="" && $star1!="" && $education1!=""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->whereBetween('age', [$agefrom, $ageto])
//            ->where('subcaste',$subcaste)
//            ->where('star',$star1)
//            ->where('education',$education1)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom!="" && $ageto!="" && $subcaste!="" && $star1!="" && $education1==""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->whereBetween('age', [$agefrom, $ageto])
//            ->where('subcaste',$subcaste)
//            ->where('star',$star1)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom!="" && $ageto!="" && $subcaste!="" && $star1=="" && $education1==""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->whereBetween('age', [$agefrom, $ageto])
//            ->where('subcaste',$subcaste)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom!="" && $ageto!="" && $subcaste=="" && $star1=="" && $education1==""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->whereBetween('age', [$agefrom, $ageto])
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom!="" && $ageto!="" && $subcaste=="" && $star1!="" && $education1==""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->whereBetween('age', [$agefrom, $ageto])
//            ->where('star',$star1)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom!="" && $ageto!="" && $subcaste=="" && $star1=="" && $education1!=""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->whereBetween('age', [$agefrom, $ageto])
//            ->where('education',$education1)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom!="" && $ageto!="" && $subcaste=="" && $star1!="" && $education1!=""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->whereBetween('age', [$agefrom, $ageto])
//            ->where('star',$star1)
//            ->where('education',$education1)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom=="" && $ageto=="" && $subcaste=="" && $star1=="" && $education1!=""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->where('education',$education1)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom=="" && $ageto=="" && $subcaste=="" && $star1!="" && $education1==""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->where('star',$star1)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// elseif($agefrom=="" && $ageto=="" && $subcaste!="" && $star1=="" && $education1==""){
//     $profile  = DB::table('profiles')
//            // ->select('cat','price','sub_cat', DB::raw('sum(price) as totals'))
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->where('subcaste',$subcaste)
//            //->groupBy('sub_cat')
//            ->get(); 
// }
// else{
//     $profile  = DB::table('profiles')
//            ->select('*')
//            ->where('gender',$gender)
//            ->where('star',$array)
//            ->get(); 
// }



    
}
