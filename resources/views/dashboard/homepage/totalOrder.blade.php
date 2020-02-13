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
                        <li class="breadcrumb-item active">All Orders</li>
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


          <div class="row clearfix">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="card">

                                      <p>Search</p>
                                      <form id="searchForm" action="{{ route('searchOrder') }}" method="post">
                                      <div class="row clearfix">

                                        @csrf
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>From</label>
                                                <div class="input-group masked-input mb-3">
                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="zmdi zmdi-calendar-note"></i></span>
                                                  </div>
                                                  <input id="from" name="from" type="date" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>To</label>
                                                <div class="input-group masked-input mb-3">
                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="zmdi zmdi-calendar-note"></i></span>
                                                  </div>
                                                  <input id="to" name="to" type="date" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                              </div>
                                            </div>
                                        </div>
                                          <div class="col-md-4">
                                              <div class="mb-3">
                                                  <label>Name</label>
                                                  <div class="input-group colorpicker colorpicker-element">
                                                      <input id="userName" name="userName" type="text" class="form-control" placeholder="Ex: Name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="mb-3">
                                                  <label>Order Id</label>
                                                  <div class="input-group colorpicker colorpicker-element">
                                                      <input id="orderId" name="orderId" type="text" class="form-control" placeholder="Ex: SH00000)">
                                                  </div>
                                              </div>
                                          </div>


                                          <div class="col-md-4">
                                              <div class="mb-3">
                                                  <label>Phone</label>
                                                  <div class="input-group colorpicker colorpicker-element">
                                                      <input id="phone" name="phone" type="number" class="form-control" placeholder="Ex: 0100000000">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="mb-3">
                                                  <label>Transaction Id</label>
                                                  <div class="input-group colorpicker colorpicker-element">
                                                      <input id="transactionId" name="transactionId" type="text" class="form-control" placeholder="Ex: ">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="mb-3">
                                                  <div class="input-group colorpicker colorpicker-element">
                                                      <button class="form-control btn btn-info" style="background:#1cbfd0 !important;" type="submit">Find <i class="zmdi zmdi-arrow-right"></i></button>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                    </form>
                              </div>
                          </div>
                      </div>

  <button onclick="makePdf();" type="button" name="makePdf" class="btn btn-primary">PDF</button>
  <table class="table" id="printMe">
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
    @foreach($allOrders as $singleOrder)
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
  {{ $allOrders->links() }}
</table>





      </div>
</section>



@endsection

@section('custom_js')
  <script>


  let searchForm = document.getElementById('searchForm');
  searchForm.addEventListener('submit', e => {
    e.preventDefault();

    let from = $('#from').val();
    let to = $('#to').val();
    let userName = $('#userName').val();
    let orderId = $('#orderId').val();
    let phone = $('#phone').val();
    let transactionId = $('#transactionId').val();

    if (from != '' || to!= '') {
      if (from == '') {
          document.getElementById("from").style.border = "1px solid red";
      }
      else{
        $('#from').css('border','none');
        if (to == '') {
            document.getElementById("to").style.border = "1px solid red";
        }
        else{
          $('#to').css('border','none');
          searchForm.submit();
        }
      }

    }
    else{
      $('#from').css('border','none');
      $('#to').css('border','none');

      if (
      userName == '' &&
      orderId == '' &&
      phone == '' &&
      transactionId == '') {
        alert("All input can not be empty");
      }
      else {
        searchForm.submit();

      }


    }

  });




  </script>
@endsection
