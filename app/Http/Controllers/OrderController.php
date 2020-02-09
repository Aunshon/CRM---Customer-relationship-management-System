<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\billingOrderDetails;

class OrderController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  // dashboard_index
  function index()
  {
    $totalOrder = billingOrderDetails::all()->count();
    $newOrder = billingOrderDetails::where('actionStatus',0)->count();
    $pendingOrder = billingOrderDetails::where('actionStatus',1)->count();
    $followupOrder = billingOrderDetails::where('actionStatus',2)->count();
    $confirmOrder = billingOrderDetails::where('actionStatus',3)->count();
    $cancelOrder = billingOrderDetails::where('actionStatus',4)->count();

    $cashOnDelivery = billingOrderDetails::where('paymentType',1)->count();
    $advancedPayment = billingOrderDetails::where('paymentType',2)->count();



    return view('dashboard.homepage.index',compact('totalOrder','newOrder','pendingOrder','followupOrder','confirmOrder','cancelOrder','cashOnDelivery','advancedPayment'));
  }
    function totalorder(){
      $allOrders = billingOrderDetails::paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.totalOrder',compact('allOrders'));
    }
    function neworder(){
      $allOrders = billingOrderDetails::where('actionStatus',0)->paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.newOrder',compact('allOrders'));
    }

    function pendingorder(){
      $allOrders = billingOrderDetails::where('actionStatus',1)->paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.pendingOrder',compact('allOrders'));
    }
    function followuporder(){
      $allOrders = billingOrderDetails::where('actionStatus',2)->paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.followupOrder',compact('allOrders'));
    }
    function confirmedorder(){
      $allOrders = billingOrderDetails::where('actionStatus',3)->paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.confirmedOrder',compact('allOrders'));
    }
    function canceledorder(){
      $allOrders = billingOrderDetails::where('actionStatus',4)->paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.canceledOrder',compact('allOrders'));
    }
    function changeactionstatus($id , $status){
      billingOrderDetails::findOrFail($id)->update([
        'actionStatus' => $status,
      ]);
      return back();
    }




    // Controller Class End Here
}
