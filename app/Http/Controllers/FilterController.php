<?php

namespace App\Http\Controllers;
use App\Profile;
use App\star;
use App\matchstar;
use App\rasi;
use App\education;
use App\thisaiirupu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class FilterController extends Controller
{
    public function index()
    {
      if(session()->get('gender')=="Male"){
       $gender="Female";               
      } else{
        $gender="Male";
      }
      $profile  = DB::table('profiles')
           ->select('*')
           ->where('gender',$gender)
           ->where('role','0')
           ->paginate(6);
      //$profile = profile::paginate(6);
      $star = star::all();
      $rasi = rasi::all();
      $thisaiirupu = thisaiirupu::all();
      $education = education::all();
$your_id='';
if(!empty(session()->get('id'))){
   $your_id = session()->get('id'); 
}
$planprofile = profile::where('id','=',session()->get('id'))->get();
  $viewcount = DB::table('viewprofiles')
    ->where('your_id',$your_id)
    ->whereBetween('date', [$planprofile[0]->planstartdate, $planprofile[0]->nextduedate])
    ->count();
      return view('customer/filter',compact('profile','star','rasi','thisaiirupu','education','viewcount'));
    }

    public function filter(Request $request)
    {
        $star = star::all();
        $rasi = rasi::all();
        $thisaiirupu = thisaiirupu::all();
        $education = education::all();

$yourstar=$request->yourstar;
$gender=$request->gender;
$agefrom=$request->agefrom;
$ageto=$request->ageto;
$subcaste=$request->subcaste;
$star1=$request->star1;
$education1=$request->education1;

// $array=array();
// $matchstar = matchstar::all();
// foreach ($matchstar as $value) {
//   if($yourstar==$value->id){

//     $array[] = explode(",",$value->matchstar);
    
//   }
// }

// echo json_encode($array);

  $q = profile::select('*'); //What ever field you need, This will create model instance

  if (Input::has('gender') && !empty(Input::get('gender')))
  {
    $q->where('gender',Input::get('gender'));
  }

  if (Input::has('agefrom') && !empty(Input::get('agefrom')) && Input::has('ageto') && !empty(Input::get('ageto')) )
  {
    $q->whereBetween('age', [Input::get('agefrom'), Input::get('ageto')]);
  }

  if (Input::has('education') && !empty(Input::get('education')))
  {
    $q->where('education', Input::get('education'));
  }

  if (Input::has('subcaste') && !empty(Input::get('subcaste')))
  {
    $q->where('subcaste', Input::get('subcaste'));
  }

  if (Input::has('star') && !empty(Input::get('star')))
  {
    $q->where('star', Input::get('star'));
  }

 // $q->where('star',$array);
  $q->where('role',0);
  $profile = $q->paginate(6); 


return view('customer/filter',compact('profile','star','rasi','thisaiirupu','education'))->withInput(Input::all());

}





public function adminfilter(Request $request)
{
  $star = star::all();
  $rasi = rasi::all();
  $thisaiirupu = thisaiirupu::all();
  $education = education::all();

$searchgender=$request->searchgender;
$searchagefrom=$request->searchagefrom;
$searchageto=$request->searchageto;
$searchedu=$request->searchedu;
$searchstar=$request->searchstar;
$searchcaste=$request->searchcaste;


 $q = profile::select('*'); //What ever field you need, This will create model instance

  if (Input::has('searchgender') && !empty(Input::get('searchgender')))
  {
    $q->where('gender',Input::get('searchgender'));
  }

  if (Input::has('searchagefrom') && !empty(Input::get('searchagefrom')) && Input::has('searchageto') && !empty(Input::get('searchageto')) )
  {
    $q->whereBetween('age', [Input::get('searchagefrom'), Input::get('searchageto')]);
  }

  if (Input::has('searchedu') && !empty(Input::get('searchedu')))
  {
    $q->where('education', Input::get('searchedu'));
  }

  if (Input::has('searchcaste') && !empty(Input::get('searchcaste')))
  {
    $q->where('subcaste', Input::get('searchcaste'));
  }

  if (Input::has('searchstar') && !empty(Input::get('searchstar')))
  {
    $q->where('star', Input::get('searchstar'));
  }

  $q->where('role',0);

$profile = $q->get(); 

return view('admin/viewprofile',compact('profile','star','rasi','thisaiirupu','education'));

}




}
