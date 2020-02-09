<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li><a href="{{ route('dashboard_index') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Orders</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('totalorder') }}">Total Order</a></li>
                    <li><a href="{{ route('neworder') }}">New Order</a></li>
                    <li><a href="{{ route('pendingorder') }}">Pending</a></li>
                    <li><a href="{{ route('followuporder') }}">Follow Up</a></li>
                    <li><a href="{{ route('confirmedorder') }}">Confirmed</a></li>
                    <li><a href="{{ route('canceledorder') }}">Canceled</a></li>
                    <li><a href="{{ route('cash') }}">Cash On Delivery</a></li>
                    <li><a href="{{ route('advanced') }}">Advance Payment</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Products</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('product_list') }}">All Products</a></li>
                <li><a href="{{ route('add_product') }}">Add Products</a></li>
                </ul>
            </li>

            <li><a href="my-profile.html"><i class="zmdi zmdi-account"></i><span>Report</span></a></li>

            <li><a href="my-profile.html"><i class="zmdi zmdi-account"></i><span>Track Order</span></a></li>

        </ul>
    </div>
</aside>
