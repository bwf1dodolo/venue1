<div class="dashboard-nav">
    <div class="dashboard-nav-inner">

        <ul data-submenu-title="Main">
            <li class="active"><a href="{{route('showadmindashnoard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
            <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li>
            <li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
            <li><a href="dashboard-wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
        </ul>
        
        <ul data-submenu-title="Listings">
            <li><a><i class="sl sl-icon-layers"></i> My Listings</a>
                <ul>
                    <li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
                    <li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
                    <li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
                </ul>	
            </li>
            <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
            <li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
            <li><a href="{{route('addlistingadmin')}}"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
        </ul>	

        <ul data-submenu-title="Account">
            <li><a href="{{route('editprofileadmin')}}"><i class="sl sl-icon-user"></i> My Profile</a></li>
            <li><a href="{{route('logoutadmin')}}"><i class="sl sl-icon-power"></i> Logout</a></li>
        </ul>
        
    </div>
</div>