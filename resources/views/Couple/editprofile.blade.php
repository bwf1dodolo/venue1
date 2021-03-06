<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 17:33:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - Profile</title>
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{asset('assets/fontawesome/css/fontawesome-all.css')}}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{asset('assets/fontello/css/fontello.css')}}" rel="stylesheet">
    <!--jquery-ui  -->
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/summernote-bs4.css')}}" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Style CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/offcanvas.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg">
     <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <nav class="navbar navbar-expand-lg float-right db-nav-list">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropleft notification ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="notification-icon"> <i class="fas fa-bell"></i></span><span class="user-vendor-name"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <div class="notification-title"> Notification</div>
                                            <div class="notification-list">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="{{asset('assets/images/avatar-2.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="{{asset('assets/images/avatar-3.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">John Deo</span>is now following you
                                                                <div class="notification-date">2 days ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="{{asset('assets/images/avatar-4.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="{{asset('assets/images/avatar-4.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropleft user-vendor ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="user-icon"> <img src="{{ $weddinginfo == null  ? asset('assets/images/dashboard-profile-couple.jpg'): asset('storage/'.Auth::user()->email."/".$weddinginfo->image) }}" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name">{{$coupledetails->name}}</span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="couple-dashboard-overview.html">Dashboard</a>
                                        <a class="dropdown-item" href="couple-dashboard-mywishlist.html">My Wishlist </a>
                                        <a class="dropdown-item" href="couple-dashboard-todolist.html">To Do List</a>
                                        <a class="dropdown-item" href="couple-dashboard-budget.html">Budget</a>
                                        <a class="dropdown-item" href="couple-dashboard-guest-manager.html">Guestlist </a>
                                        <a class="dropdown-item" href="couple-dashboard-table-planner.html">Seating Table </a>
                                        <a class="dropdown-item" href="couple-dashboard-profile.html">My Profile </a>
                                        <a class="dropdown-item" href="{{route('logoutcouple')}}">Log Out </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    <img src="
                    {{ $weddinginfo == null  ? asset('assets/images/dashboard-profile-couple.jpg'): asset('storage/'.Auth::user()->email."/".$weddinginfo->image) }}
                   
                    
                    " alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name">{{$coupledetails->name}}</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="couple-dashboard-overview.html"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="couple-dashboard-mywishlist.html"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="couple-dashboard-todolist.html"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="couple-dashboard-budget.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <li><a href="couple-dashboard-guest-manager.html"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li>
                    <li><a href="couple-dashboard-table-planner.html"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li>
                    <li><a href="couple-dashboard-website.html"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                    <li><a href="couple-dashboard-realwedding.html"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
                    <li class="active"><a href="couple-dashboard-profile.html"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="index.html"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Log Out </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My Profile</h3>
                            <p>Update your wedding information, profile photo, and personal informations.</p>
                            <p>
                                @if(Session::has('message'))
                                    {{ Session::get('message') }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                            <a class="nav-link" id="v-pills-wedding-info" data-toggle="pill" href="#v-pills-wedding" role="tab" aria-controls="v-pills-wedding" aria-selected="false">Wedding Info</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Password Change</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Email Notifications</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Delete Account</a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-header">Profile</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('postcoupleeditprofile')}}" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Form Name -->
                                            <div class="profile-upload-img">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div id="image-preview">
                                                        </div>
                                                        <input type="file" name="image" id="image-upload" class="upload-profile-input">@error('image')
                                                            {{$message}}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="couplename">Couple Name</label>
                                                            <input id="couplename" name="couplename" type="text" placeholder="" class="form-control " value="{{ $weddinginfo == null  ? '' : $weddinginfo->couplename }}">@error('couplename')
                                                            {{$message}}
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email">Email</label>
                                                            <input id="email" name="email" type="email" value="{{ $weddinginfo == null  ? '' : $weddinginfo->email }}" placeholder="" class="form-control ">@error('email')
                                                            {{$message}}
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone">Phone</label>
                                                            <input id="phone" name="phone" type="text" value="{{ $weddinginfo == null  ? '' : $weddinginfo->phone }}" placeholder="" class="form-control ">@error('phone')
                                                            {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="summernote">Descriptions </label>
                                                            <textarea class="form-control" id="summernote" name="description" rows="6" placeholder="Write Descriptions">
                                                            
                                                                {{ $weddinginfo == null  ? '' : $weddinginfo->description }}    
                                                            </textarea>@error('description')
                                                            {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-form-info mb-0">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h3>Social Media </h3>
                                                        <div class="dashboard-section-line">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="facebook">Facebook</label>
                                                            <input id="facebook" name="facebook" type="url" value="{{ $weddinginfo == null  ? '' : $weddinginfo->facebook }}" placeholder="https://www.facebook.com" class="form-control ">@error('facebook')
                                                            {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="twitter">Twitter</label>
                                                            <input id="twitter" name="twitter" type="url" value="{{ $weddinginfo == null  ? '' : $weddinginfo->twitter }}" placeholder="https://www.twitter.com" class="form-control">@error('twitter')
                                                            {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="instagram">Instagram</label>
                                                            <input id="instagram" name="instagram" type="url" value="{{ $weddinginfo == null  ? '' : $weddinginfo->instagram }}" placeholder="https://www.instagram.com" class="form-control">@error('instagram')
                                                            {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="youtube">Youtube</label>
                                                            <input id="youtube" name="youtube" type="url" value="{{ $weddinginfo == null  ? '' : $weddinginfo->youtube }}" placeholder="https://www.youtube.com" class="form-control">@error('youtube')
                                                            {{$message}}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <button class="btn btn-default" type="submit">Update profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="v-pills-wedding" role="tabpanel" aria-labelledby="v-pills-wedding">
                                <div class="card">
                                    <div class="card-header">Wedding Info</div>
                                    <form method="post" action="{{route('postcoupleweddinginfo')}}">
                                        @csrf
                                        <!-- Text input-->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="weddingdate">Wedding Date</label>
                                                        <input id="weddingdate" name="date" value="{{ $weddinginfo == null  ? '' : $weddinginfo->wedding_date }}"type="text" placeholder="" class="form-control" required="">@error('date')
                                                            {{$message}}
                                                        @enderror
                                                        <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <h4>Wedding Details</h4>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="weddingaddress">Wedding Address</label>
                                                        <input id="weddingaddress" name="address" type="text" placeholder="" class="form-control" value="{{ $weddinginfo == null  ? '' : $weddinginfo->wedding_address }}">@error('address')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label for="Country">Country</label>
                                                        <select class="form-control select wide" id="Country" name="country">
                                                            <option>Select Country</option>
                                                            <option value="India">India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label for="State">State</label>
                                                        <select class="form-control select wide" id="State" name="state">
                                                            <option>Select State</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Mumbai">Mumbai</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label for="City">City</label>
                                                        <select class="form-control select wide" name="city" id="City">
                                                            <option>Select City</option>
                                                            <option value="Ahemdabad">Ahmedabad</option>
                                                            <option  value="Surat">Surat</option>
                                                            <option  value="Rajkot">Rajkot</option>
                                                            <option  value="Vadodara">Vadodara</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <h4>Couple Details</h4>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="bridefname">Bride First Name</label>
                                                        <input id="bridefname" name="bridefname" type="text" placeholder="" class="form-control " value="{{ $weddinginfo == null  ? '' : $weddinginfo->bride_first_name }}"required="">@error('bridefname')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="bridelname">Bride Last Name</label>
                                                        <input id="bridelname" name="bridelname" value="{{ $weddinginfo == null  ? '' : $weddinginfo->bride_last_name }}"type="text" placeholder="" class="form-control " required="">@error('bridelname')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="groomfname">Groom First Name</label>
                                                        <input id="groomfname"value="{{ $weddinginfo == null  ? '' : $weddinginfo->groom_first_name }}" name="groomfname" type="text" placeholder="" class="form-control " required="">@error('groomfname')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="groomlname">Groom last Name</label>
                                                        <input id="groomlname" name="groomlname" type="text" value="{{ $weddinginfo == null  ? '' : $weddinginfo->groom_last_name }}" placeholder="" class="form-control " required="">@error('groomlname')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-top">
                                            <button class="btn btn-default" type="submit">Save Changes</button>
                                        </div>
                                    </form>
                                
                            </div>
                        </div>
                        <div class="tab-pane " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-header">Password Change</div>
                                <div class="card-body">
                                    <form class="row" method="post" action="{{route('postchangecouplepassword')}}">
                                        @csrf
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="currentpassword">Current Password</label>
                                                <input id="currentpassword" name="currentpassword" type="password" placeholder="" class="form-control ">@error('currentpassword')
                                                    {{$message}}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="newpassword">New Password</label>
                                                <input id="newpassword" name="newpassword" type="password" placeholder="" class="form-control ">@error('newpassword')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="retypepassword">Retype Password</label>
                                                <input id="retypepassword" name="retypepassword" type="password" placeholder="" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="btn btn-default" type="submit">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="card">
                                <div class="card-header">Email Notifications</div>
                                <div class="">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #1
                                            <div class="switch-notification">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #2
                                            <div class="switch-notification">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #3
                                            <div class="switch-notification">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="card">
                                <div class="card-header">Account Delete</div>
                                <div class="card-body">
                                    <p>In the fields below, enter your new password.</p>
                                    <form method="post" action="{{route('postdeletecoupleaccount')}}">
                                        
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="bothaccountandlist" class="custom-control-input" id="customCheck1">@error('bothaccountandlist')
                                                {{$message}}
                                            @enderror
                                            <label class="custom-control-label" for="customCheck1">Delete my account and data listing also.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="onlyaccount"class="custom-control-input" id="customCheck2">@error('onlyaccount')
                                                {{$message}}
                                            @enderror
                                            <label class="custom-control-label" for="customCheck2">Delete my account only.</label>
                                        </div>
                                        <button class="btn btn-primary mt30" type="submit">Delete My Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/menumaker.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-script.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script>
    $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false // Default: false
        });
    });
    </script>
    <script src="{{asset('assets/js/jquery.uploadPreview.js')}}"></script>
    <script src="{{asset('assets/js/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/js/offcanvas.js')}}"></script>
    <!-- nice-select js -->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
     <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 17:33:29 GMT -->
</html>