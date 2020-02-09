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
                        <li class="breadcrumb-item active">Canceled Orders</li>
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





          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">User</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      {{-- <th scope="col">Status</th> --}}
    </tr>
  </thead>
  <tbody>
    @foreach($allOrders as $singleOrder)
    <tr>
      <th scope="row">{{ $singleOrder->relationBill->orderTrackingId }}</th>
      <td>{{ $singleOrder->relationUser->name }}</td>
      <td>{{ $singleOrder->relationUser->email }}</td>
      <td>৳ {{ $singleOrder->tot }}</td>
      <td>{{ $singleOrder->created_at }}</td>
      {{-- <td>
        @if($singleOrder->actionStatus == 4)
          <a id="navbarDropdown1" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
            <span class="caret"><span class="badge badge-pill badge-danger">Canceled</span></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1" x-placement="top-end" x-out-of-boundaries="" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(384px, 183px, 0px);">
          <a class="dropdown-item" href=" {{url('change/action/status')}}/{{$singleOrder->id}}/1 ">
                  Pending
          </a>
          <a class="dropdown-item" href=" {{url('change/action/status')}}/{{$singleOrder->id}}/2 ">
                  Follow Up
          </a>
          <a class="dropdown-item" href=" {{url('change/action/status')}}/{{$singleOrder->id}}/3 ">
                  Confirm
          </a>

          </div>

        @endif
      </td> --}}
    </tr>
  @endforeach
  </tbody>
  {{ $allOrders->links() }}
</table>





      </div>
</section>

@endsection
