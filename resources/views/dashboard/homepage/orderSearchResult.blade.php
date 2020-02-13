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
                        <li class="breadcrumb-item active">Orders Search Result</li>
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
          {{-- <div class="row clearfix">
erghrei
          </div>

          <div class="row clearfix">
fhhfgrhui
          </div> --}}




  <button onclick="makePdf();" type="button" name="makePdf" class="btn btn-primary">PDF</button>
          <table id="printMe" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">User</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($afterSearch as $singleOrder)
    <tr>
      <th scope="row">{{ $singleOrder->relationBill->orderTrackingId  }}</th>
      <td>{{ $singleOrder->relationUser->name }}</td>
      <td>{{ $singleOrder->relationUser->email }}</td>
      <td>৳ {{ $singleOrder->tot }}</td>
      <td>{{ $singleOrder->created_at }}</td>
      <td>
        @if ($singleOrder->actionStatus == 0)
          <span class="badge badge-pill badge-primary">New Order</span>
        @elseif($singleOrder->actionStatus == 1)
          <span class="badge badge-pill badge-warning">Pending</span>
        @elseif($singleOrder->actionStatus == 2)
          <span class="badge badge-pill badge-info">Follow Up</span>
        @elseif($singleOrder->actionStatus == 3)
          <span class="badge badge-pill badge-success">Confirmed</span>
        @elseif($singleOrder->actionStatus == 4)
          <span class="badge badge-pill badge-danger">Canceled</span>
        @endif
      </td>
    </tr>
  @endforeach
  </tbody>
  {{ $afterSearch->links() }}
</table>





      </div>
</section>

@endsection
