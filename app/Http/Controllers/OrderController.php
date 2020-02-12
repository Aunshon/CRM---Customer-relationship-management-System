<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use Carbon\Carbon;
use App\billingOrderDetails;
use App\product;
use App\orderedCarts;

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
    $allOrder = billingOrderDetails::all();
    $allOrderCart = orderedCarts::all();
    $newOrder = billingOrderDetails::where('actionStatus',0)->count();
    $pendingOrder = billingOrderDetails::where('actionStatus',1)->count();
    $followupOrder = billingOrderDetails::where('actionStatus',2)->count();
    $confirmOrder = billingOrderDetails::where('actionStatus',3)->count();
    $cancelOrder = billingOrderDetails::where('actionStatus',4)->count();

    $cashOnDelivery = billingOrderDetails::where('paymentType',1)->count();
    $advancedPayment = billingOrderDetails::where('paymentType',2)->count();

    $topUserId = array();
    $topUserIdamount = array();

    $topPId = array();
    $topQ = array();

    $allConfirmedOrder = billingOrderDetails::where('actionStatus',3)->get();
    // $allConfirmedOrder = billingOrderDetails::all();
    // echo $allConfirmedOrder;
    foreach($allConfirmedOrder as $single){
      if (in_array($single->userId, $topUserId)) {
        $index = array_search($single->userId, $topUserId);
        $topUserIdamount[$index] = $topUserIdamount[$index]+1;
      }
      else{
        array_push($topUserId, $single->userId );
        array_push($topUserIdamount, 1);
      }
    }

    foreach($allOrderCart as $single){
      if(billingOrderDetails::where('order_id',$single->orderID)->first()->actionStatus == 3){

      if (in_array($single->product_id , $topPId)) {
        $index = array_search($single->product_id, $topPId);
        $topQ[$index] = $topQ[$index]+1;
      }
      else{
        array_push($topPId, $single->product_id );
        array_push($topQ, 1);
      }
      }
    }

    // print user and Amount
    // foreach($topUserId as $key => $single){
    //   echo  "Key : ".$key ."      User: ".$single."   Amount: " .$topUserIdamount[$key]."<br>";
    // }
    // print product and Amount
    // foreach($topPId as $key => $single){
    //   echo  "Key : ".$key ."      product id: ".$single."   Number bought: " .$topQ[$key]."<br>";
    // }

    // print_r($topUserId);
    // print_r($topUserIdamount);
    //array.splice(index, 1);
    //array_search (max($topUserIdamount), $topUserIdamount) max amount index
    // echo "<br>";

    // while(count($topUserIdamount)){
    //   // echo array_search (max($topUserIdamount), $topUserIdamount)."<br>";
    //   $key = array_search (max($topUserIdamount), $topUserIdamount);
    //   echo  "Key : ".$key."      User: ".$topUserId[$key]."   Amount: " .$topUserIdamount[$key]."<br>";
    //   unset($topUserIdamount[array_search (max($topUserIdamount), $topUserIdamount)]);
    // }
    // product
    // while(count($topQ)){
    //   // echo array_search (max($topUserIdamount), $topUserIdamount)."<br>";
    //   $key = array_search (max($topQ), $topQ);
    //   echo  "Key : ".$key."      User: ".$topPId[$key]."   Amount: " .$topQ[$key]."<br>";
    //   unset($topQ[array_search (max($topQ), $topQ)]);
    // }

    // Vendor
    $vendorP = $topPId;
    $vendorQ = $topQ;

    $topVendorId = array();
    $topVendorSale = array();
    $topVendorPAmount= array();

    while(count($vendorQ)){
      $key = array_search (max($vendorQ), $vendorQ);
      $vendorId = product::findOrFail($vendorP[$key])->user_id;
      // echo  "Key : ".$key."      Product_Id: ".$vendorP[$key]."   vendor_id: ".$vendorId ."   Amount: " .$vendorQ[$key]."<br>";

      if (in_array($vendorId , $topVendorId)) {
        $index = array_search($vendorId, $topVendorId);
        $topVendorSale[$index] = $topVendorSale[$index]+((product::findOrFail($vendorP[$key])->product_price)*$vendorQ[$key]);
        $topVendorPAmount[$index] += $vendorQ[$key];
      }
      else{
        array_push($topVendorId, $vendorId);
        array_push($topVendorSale, (product::findOrFail($vendorP[$key])->product_price )*$vendorQ[$key]);
        array_push($topVendorPAmount, $vendorQ[$key]);
      }


      unset($vendorQ[array_search (max($vendorQ), $vendorQ)]);
    }
    // foreach($topVendorId as $key => $single){
    //   echo  "Key : ".$key ."      vendor_id: ".$single."   Sale: " .$topVendorSale[$key]."   p_amount: ".$topVendorPAmount[$key]."<br>";
    // }
    return view('dashboard.homepage.index',compact('totalOrder','newOrder','pendingOrder','followupOrder','confirmOrder','cancelOrder','cashOnDelivery','advancedPayment','topUserId','topUserIdamount','topQ','topPId','vendorP','vendorQ','topVendorId','topVendorSale','topVendorPAmount'));


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
    function cash(){
      $allOrders = billingOrderDetails::where('paymentType',1)->paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.cash',compact('allOrders'));

    }
    function advanced(){
      $allOrders = billingOrderDetails::where('paymentType',2)->paginate(30);
      // echo $allOrders;
      return view('dashboard.homepage.advanced',compact('allOrders'));

    }
    function searchOrder(Request $request){

      $afterSearch = '';
      if($request->from == '' && $request->to ==''){

          $userName = $request->userName; //
          $orderId = $request->orderId; //
          $phone = $request->phone; //
          // $transactionId = $request->transactionId;
          $afterSearch = billingOrderDetails::where('userName', 'LIKE', "%" . $userName . "%")
          ->where('orderTrackingId', 'LIKE', "%" . $orderId . "%")
          ->where('phone', 'LIKE', "%" . $phone . "%")
          ->paginate(30);
          // echo $afterSearch;
          return view('dashboard.homepage.orderSearchResult',compact('afterSearch'));
      }
      else{
        $from = date($request->from); //cant empy
        $to = date($request->to);  //cant empy
        $userName = $request->userName; //
        $orderId = $request->orderId; //
        $phone = $request->phone; //
        // $transactionId = $request->transactionId;
        $afterSearch = billingOrderDetails::whereBetween('created_at',[$from,$to])
        ->where('userName', 'LIKE', "%" . $userName . "%")
        ->where('orderTrackingId', 'LIKE', "%" . $orderId . "%")
        ->where('phone', 'LIKE', "%" . $phone . "%")
        ->paginate(30);
        // echo $afterSearch;
        return view('dashboard.homepage.orderSearchResult',compact('afterSearch'));
      }


    }


    // Controller Class End Here
}
