<?php

namespace App\Http\Controllers;
use App\payment;
use Illuminate\Http\Request;
use DB;

class reportController extends Controller
{
    public function index(){
      $payment = payment::all();
      return view('admin/report',compact('payment'));
    }

    public function report(Request $request){
    	$payment = DB::table('payments')
    		->whereBetween('date', [$request->from_date, $request->to_date])
    		->get();
    	return view('admin/report',compact('payment'));
    }
}
