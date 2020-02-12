@extends('dashboard.homepage.app')
<!-- Main Content -->

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">

          <!-- BEGIN::HERE WE PUT OUR CONTENT -->

          <!-- START -->
          <!-- @yield('content') -->
          <!-- BEGIN:Order panel -->
          <div class="row clearfix">
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $totalOrder }}</h5>
                              <span><i class="zmdi zmdi-eye col-amber"></i> Total Order</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#FFC107">5,2,3,7,6,4,8,1100</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $newOrder }}</h5>
                              <span><i class="zmdi zmdi-thumb-up col-blue"></i> New Order</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#46b6fe">8,2,6,5,1,4,4,3</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $pendingOrder }}</h5>
                              <span><i class="zmdi zmdi-comment-text col-red"></i> Pending</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $followupOrder }}</h5>
                              <span><i class="zmdi zmdi-account text-success"></i> Follow Up</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#04BE5B">7,5,3,8,4,6,2,9</div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row clearfix">
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $confirmOrder }}</h5>
                              <span><i class="zmdi zmdi-eye col-amber"></i> Confirmed</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#FFC107">5,2,3,7,6,4,8,1</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $cancelOrder }}</h5>
                              <span><i class="zmdi zmdi-thumb-up col-blue"></i> Canceled</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#46b6fe">8,2,6,5,1,4,4,3</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $cashOnDelivery }}</h5>
                              <span><i class="zmdi zmdi-comment-text col-red"></i> Cash On Delivery</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card state_w1">
                      <div class="body d-flex justify-content-between">
                          <div>
                              <h5>{{ $advancedPayment }}</h5>
                              <span><i class="zmdi zmdi-account text-success"></i>Advance Payment</span>
                          </div>
                          <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#04BE5B">7,5,3,8,4,6,2,9</div>
                      </div>
                  </div>
              </div>

          <!-- END:Order panel -->

<!-- BEGIN:chart -->

          <div class="row clearfix">
                          <div class="col-md-12 col-lg-12 col-xs-12">
                              <div class="card">
                                  <div class="header">
                                      <h2><strong>Daily</strong> Reports</h2>
                                      <ul class="header-dropdown">
                                          <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                              <ul class="dropdown-menu dropdown-menu-right slideUp">
                                                  <li><a href="javascript:void(0);">Edit</a></li>
                                                  <li><a href="javascript:void(0);">Delete</a></li>
                                                  <li><a href="javascript:void(0);">Report</a></li>
                                              </ul>
                                          </li>
                                          <li class="remove">
                                              <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="body">
                                      <div id="m_bar_chart" class="graph" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="1098" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.75px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="37.015625" y="304" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#000000" d="M49.515625,304.5H1073" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="37.015625" y="234.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22.5</tspan></text><path fill="none" stroke="#000000" d="M49.515625,234.5H1073" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="37.015625" y="164.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">45</tspan></text><path fill="none" stroke="#000000" d="M49.515625,164.5H1073" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="37.015625" y="94.75" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">67.5</tspan></text><path fill="none" stroke="#000000" d="M49.515625,94.5H1073" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="37.015625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">90</tspan></text><path fill="none" stroke="#000000" d="M49.515625,25.5H1073" stroke-opacity="0" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="999.8939732142857" y="316.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.5)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2019</tspan></text><text x="853.6819196428571" y="316.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.5)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="707.4698660714286" y="316.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.5)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="561.2578125" y="316.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.5)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="415.04575892857144" y="316.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.5)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="268.8337053571429" y="316.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.5)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="122.62165178571429" y="316.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.5)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><rect x="67.79213169642857" y="56" width="34.553013392857146" height="248" rx="0" ry="0" fill="#72c2ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="105.34514508928572" y="130.4" width="34.553013392857146" height="173.6" rx="0" ry="0" fill="#46b6fe" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="142.89815848214286" y="28.099999999999966" width="34.553013392857146" height="275.90000000000003" rx="0" ry="0" fill="#5cc5cd" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="214.00418526785717" y="71.5" width="34.553013392857146" height="232.5" rx="0" ry="0" fill="#72c2ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="251.5571986607143" y="102.5" width="34.553013392857146" height="201.5" rx="0" ry="0" fill="#46b6fe" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="289.11021205357144" y="186.2" width="34.553013392857146" height="117.80000000000001" rx="0" ry="0" fill="#5cc5cd" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="360.2162388392857" y="121.1" width="34.553013392857146" height="182.9" rx="0" ry="0" fill="#72c2ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="397.7692522321429" y="211" width="34.553013392857146" height="93" rx="0" ry="0" fill="#46b6fe" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="435.322265625" y="189.3" width="34.553013392857146" height="114.69999999999999" rx="0" ry="0" fill="#5cc5cd" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="506.42829241071433" y="71.5" width="34.553013392857146" height="232.5" rx="0" ry="0" fill="#72c2ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="543.9813058035714" y="102.5" width="34.553013392857146" height="201.5" rx="0" ry="0" fill="#46b6fe" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="581.5343191964287" y="180" width="34.553013392857146" height="124" rx="0" ry="0" fill="#5cc5cd" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="652.6403459821429" y="133.5" width="34.553013392857146" height="170.5" rx="0" ry="0" fill="#72c2ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="690.193359375" y="180" width="34.553013392857146" height="124" rx="0" ry="0" fill="#46b6fe" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="727.7463727678572" y="164.5" width="34.553013392857146" height="139.5" rx="0" ry="0" fill="#5cc5cd" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="798.8523995535714" y="71.5" width="34.553013392857146" height="232.5" rx="0" ry="0" fill="#72c2ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="836.4054129464286" y="102.5" width="34.553013392857146" height="201.5" rx="0" ry="0" fill="#46b6fe" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="873.9584263392858" y="180" width="34.553013392857146" height="124" rx="0" ry="0" fill="#5cc5cd" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="945.0644531250001" y="34.30000000000001" width="34.553013392857146" height="269.7" rx="0" ry="0" fill="#72c2ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="982.6174665178572" y="31.19999999999999" width="34.553013392857146" height="272.8" rx="0" ry="0" fill="#46b6fe" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="1020.1704799107144" y="192.39999999999998" width="34.553013392857146" height="111.60000000000002" rx="0" ry="0" fill="#5cc5cd" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 93.8795px; top: 113px; display: none;"><div class="morris-hover-row-label">2011</div><div class="morris-hover-point" style="color: #72c2ff">
            A:
            80
          </div><div class="morris-hover-point" style="color: #46b6fe">
            B:
            56
          </div>
          <div class="morris-hover-point" style="color: #5CC5CD">
            C:
            89
          </div></div></div>
                      </div>
                  </div>
              </div>
          </div>
<!-- END:chart -->

<div class="container">

  <div class="row clearfix">
      <div class="col-sm-12 col-md-4">
          <div class="card">
              <div class="header">
                  <h2><strong>Top</strong> Product</h2>
                  <ul class="header-dropdown">
                      <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                          <ul class="dropdown-menu dropdown-menu-right">
                              <li><a href="javascript:void(0);">Action</a></li>
                              <li><a href="javascript:void(0);">Another action</a></li>
                              <li><a href="javascript:void(0);">Something else</a></li>
                          </ul>
                      </li>
                      <li class="remove">
                          <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                      </li>
                  </ul>
              </div>
              <div class="table-responsive social_media_table">
                  <table class="table table-hover c_table">
                      <thead>
                          <tr>
                              <th>Image</th>
                              <th>Product Name</th>
                              <th>Total sale</th>

                          </tr>
                      </thead>
                      <tbody>
                        @while (count($topQ))
                          @php
                          $key = array_search (max($topQ), $topQ);
                          // echo  "Key : ".$key."      P ID: ".$topPId[$key]."   Amount: " .$topQ[$key]."<br>";
                          @endphp
                          <tr>
                              <td><span class="social_icon linkedin"><img src="{{asset('uploads/product')}}/{{App\product::findOrFail($topPId[$key])->photo}}" width="50"alt="P"></i></span>
                              </td>
                              <td><span class="list-name">{{ App\product::findOrFail($topPId[$key])->product_name }}</span>
                                  <span class="text-muted">Total Sold {{ $topQ[$key] }} Piece</span>
                              </td>

                              <td>
                                  <span class="badge badge-success">৳ {{ $topQ[$key] * (App\product::findOrFail($topPId[$key])->product_price ) }}</span>
                              </td>
                          </tr>
                          @php
                            unset($topQ[array_search (max($topQ), $topQ)]);
                          @endphp
                        @endwhile
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <div class="col-sm-12 col-md-4">
          <div class="card">
              <div class="header">
                  <h2><strong>Top</strong> Vendor</h2>
                  <ul class="header-dropdown">
                      <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                          <ul class="dropdown-menu dropdown-menu-right">
                              <li><a href="javascript:void(0);">Action</a></li>
                              <li><a href="javascript:void(0);">Another action</a></li>
                              <li><a href="javascript:void(0);">Something else</a></li>
                          </ul>
                      </li>
                      <li class="remove">
                          <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                      </li>
                  </ul>
              </div>
              <div class="table-responsive social_media_table">
                  <table class="table table-hover c_table">
                      <thead>
                          <tr>
                              <th>Brand</th>
                              <th>Vendor</th>
                              <th>Sales</th>

                          </tr>
                      </thead>
                      <tbody>

                        @foreach($topVendorId as $key => $single)
                          <tr>
                              <td><span class="social_icon linkedin">V</i></span>
                              </td>
                              <td><span class="list-name">{{ App\User::findOrFail($single)->name }}</span>
                                  <span class="text-muted">Total Sold {{ $topVendorPAmount[$key] }} Piece</span>
                              </td>

                              <td>
                                  <span class="badge badge-success">৳ {{ $topVendorSale[$key] }}</span>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <div class="col-sm-12 col-md-4">
          <div class="card">
              <div class="header">
                  <h2><strong>Top</strong> Customer</h2>
                  <ul class="header-dropdown">
                      <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                          <ul class="dropdown-menu dropdown-menu-right">
                              <li><a href="javascript:void(0);">Action</a></li>
                              <li><a href="javascript:void(0);">Another action</a></li>
                              <li><a href="javascript:void(0);">Something else</a></li>
                          </ul>
                      </li>
                      <li class="remove">
                          <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                      </li>
                  </ul>
              </div>
              <div class="table-responsive social_media_table">
                  <table class="table table-hover c_table">
                      <thead>
                          <tr>
                              {{-- <th>Image</th> --}}
                              <th>Info.</th>
                              <th>Cost</th>

                          </tr>
                      </thead>
                      <tbody>
                        @while (count($topUserIdamount))
                          @php
                          $key = array_search (max($topUserIdamount), $topUserIdamount);
                          // echo  "Key : ".$key."      User: ".$topUserId[$key]."   Amount: " .$topUserIdamount[$key]."<br>";
                          // unset($topUserIdamount[array_search (max($topUserIdamount), $topUserIdamount)]);
                          @endphp
                          <tr>
                              {{-- <td><span class="social_icon linkedin"><i class="zmdi zmdi-linkedin"></i></span> --}}
                              </td>
                              <td><span class="list-name">{{ App\User::findOrFail($topUserId[$key])->name }}</span>
                                  <span class="text-muted">{{ App\User::findOrFail($topUserId[$key])->email  }}</span>
                              </td>

                              <td>
                                  <span class="badge badge-success">৳ {{ App\billingOrderDetails::where('userId',$topUserId[$key])->sum('tot')}}</span>
                              </td>
                          </tr>
                          @php
                            unset($topUserIdamount[array_search (max($topUserIdamount), $topUserIdamount)]);
                          @endphp
                        @endwhile
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>



</div>

          <!-- END -->

          <!-- END::HERE WE PUT OUR CONTENT -->


        </div>
    </div>
</section>

@endsection
