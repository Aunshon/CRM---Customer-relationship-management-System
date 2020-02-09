@extends('dashboard.homepage.app')
<!-- Main Content -->

@section('content')


<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>CRM Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Product List</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
      </div>
</section>


<!-- BEGIN::HERE WE PUT OUR CONTENT -->

<!-- START -->
<!-- @yield('content') -->

<div class="container">
  <div class="row">

    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>List</strong> Product</h2>
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
                            <th>Price</th>
                            <th>Qunatity</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Brand</th>
                            <th>Activation</th>
                            <!-- <th>Created At</th> -->
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                      @foreach($products as $product)
                        <tr>
                            <td>
                              <img src="{{ asset('uploads/products') }}/{{ $product->photo }}" alt="">

                            </td>
                            <td><span class="list-name">{{ $product->product_name }}</span>
                                <!-- <span class="text-muted">Florida, United States</span> -->
                            </td>

                            <td>
                                <span class="badge badge-success">{{ $product->product_price }}</span>
                            </td>

                            <td>
                                <span class="badge badge-success">{{ $product->product_quantity }}</span>
                            </td>

                            <td>
                                <span>{{ Str::limit($product->product_description,10) }}</span>
                            </td>

                            <td>
                                <span>{{ $product->relationBetweenCategory->category_name }}</span>
                            </td>

                            <td>
                                <span>{{ $product->relationBetweensubcategory->subcategory_name }}</span>
                            </td>

                            <td>
                                <span class="badge badge-info">{{ $product->brand }}</span>
                            </td>

                            <td>
                                <span class="badge badge-success">{{ $product->activation }}</span>
                            </td>

                            <!-- <td>
                                <span class="badge badge-success">{{ $product->created_at }}</span>
                            </td> -->

                            <td>
                                <a href="{{ url('/v1/dashboard/trash/product') }}/{{ $product->id }}/{{ $product->slug }}" class="btn-sm btn-danger">Delete</a>
                            </td>
                          </tr>

                      @endforeach



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
</section>

@endsection

@section('custom_js')



@endsection
