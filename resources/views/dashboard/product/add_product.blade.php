@extends('dashboard.homepage.app')
<!-- Main Content -->

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>CRM Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Add Product</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>


<!-- BEGIN::HERE WE PUT OUR CONTENT -->

<!-- START -->
<!-- @yield('content') -->

<!-- Basic Validation -->
           <div class="row clearfix">
               <div class="col-lg-8 col-md-6 col-sm-12" style="margin:0 auto;">

                {{-- Add Category --}}
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Add Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                        <form id="category_form" method="POST" action="{{ route('cat_create') }}">
                            @csrf
                                <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Category Name" name="category_name" required>
                            </div>
                        </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="btn-submit" class="btn btn-primary">Submit</button>
                        </div>

                        </div>
                    </div>
                    </div>
                {{-- Add categoty --}}


{{-- Add Subcategory --}}


                <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Add Subcategory
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Subcategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <form id="subcategory_form" method="POST" action="{{ route('sub_cat_create') }}">
                            @csrf
                                <div class="form-group form-float">
                                 <input type="text" class="form-control" placeholder="Subcategory Name" name="category_name" required>
                                </div>

                                <div class="form-group form-float">

                                        <select class="form-control show-tick ms select2"
                                            data-placeholder="Product Category" name="category_id">
                                            <option></option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach

                                        </select>
                                </div>
                        </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="subcategory_btn" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

{{-- Add Subcategory --}}




                   <div class="card">
                       <div class="header">
                           <h2><strong>Add</strong> Product</h2>
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
                       <div class="body">

                       <form id="form_validation" method="POST" action="{{ route('product_create') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Product Name" name="product_name" required>
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Product Price" name="product_price" required>
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Product Quantity" name="product_quantity" required>
                               </div>


                               <div class="form-group form-float">

                                        <select class="form-control show-tick ms select2"
                                            data-placeholder="Product Category" id="main_category_id" name="product_category">
                                            <option></option>
                                            @foreach ($categories as $category)
                               <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach

                                        </select>
                                </div>

                                <div class="form-group form-float">

                                    <select class="form-control show-tick ms select2"
                                        data-placeholder="Product Subcategory" id="subcategory_id" name="product_subcategory">
                                        <option></option>
                                        @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                           @endforeach
                                    </select>
                                </div>


                               <div class="form-group form-float">
                                   <textarea name="product_description" cols="30" rows="5" placeholder="Description" class="form-control no-resize" required></textarea>
                               </div>

                               <div class="form-group form-float">

                                   <select class="form-control show-tick ms select2"
                                       data-placeholder="Brand" name="brand">
                                       <option></option>
                                       <option>Sony</option>
                                       <option>Samsung</option>
                                   </select>
                               </div>

                                <div class="form-group form-float">

                                    <select class="form-control show-tick ms select2"
                                        data-placeholder="Product Activation"  name="activation">
                                        <option></option>
                                        <option>Active</option>
                                        <option>Deactive</option>
                                    </select>
                                </div>

                               <div class="form-group form-float">
                                 <div class="card">
                                    <div class="header">
                                        <h2>Feature Photo</h2>
                                    </div>
                                    <div class="body">
                                        <input type="file" class="dropify" name="photo">
                                    </div>
                                </div>
                               </div>

                               <div class="form-group form-float">
                                   <div class="row">
                                       <div class="col-md-4">
                                           <div class="card">
                                               <div class="header">
                                                   <h2>Child Photo</h2>
                                               </div>
                                               <div class="body">
                                                   <input type="file" class="dropify"  name="child_photo_1">
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           <div class="card">
                                               <div class="header">
                                                   <h2>Child Photo</h2>
                                               </div>
                                               <div class="body">
                                                   <input type="file" class="dropify"  name="child_photo_2">
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           <div class="card">
                                               <div class="header">
                                                   <h2>Child Photo</h2>
                                               </div>
                                               <div class="body">
                                                   <input type="file" class="dropify"  name="child_photo_3">
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="checkbox">
                                       <input id="checkbox" type="checkbox" name="form_checked">
                                       <label for="checkbox">I have read and accept the terms</label>
                                   </div>
                               </div>
                               <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                           </form>
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

<script>
    $(document).ready(function(){
        $('#btn-submit').on('click',function(){
            $('#category_form').submit();
        });

        $('#subcategory_btn').on('click',function(){
            $('#subcategory_form').submit();
        });
    });
</script>


<script>
    $(document).ready(function(){
        $('#main_category_id').change(function (e) {
            var main_category_id = this.value;

            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
            type:'POST',
            url:'/get/subcategory',
            data: {
              main_category_id: main_category_id
            },
            success: function (data) {
                    $( "#subcategory_id" ).html(data);
                    console.log(data);

                }
            });

        });
    });
</script>

@endsection
