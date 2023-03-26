@php
use App\Models\Developer;
$developers = Developer::all();
@endphp
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>THE VAULT</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="https://attendance.smileitsolutions.com/assets/images/favicon.ico">

        
        <!-- Sweet-Alert  -->
        <script src="https://attendance.smileitsolutions.com/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/pages/sweet-alert.init.js"></script>

        <!-- DataTables -->
        <link href="https://attendance.smileitsolutions.com/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="https://attendance.smileitsolutions.com/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="https://attendance.smileitsolutions.com/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert -->
        <link href="https://attendance.smileitsolutions.com/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <link href="https://attendance.smileitsolutions.com/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://attendance.smileitsolutions.com/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="https://attendance.smileitsolutions.com/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="https://attendance.smileitsolutions.com/assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo">
                        <h1 class="text-white"> Admin
                            <!-- <img src="https://www.smileitsolutions.com/images/logo.png" alt="" height="60"> -->
                        </h1>
                        <!-- <i>
                            <img src="https://www.smileitsolutions.com/images/logo.png" alt="" height="60">
                        </i> -->
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0"> 
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form> 
                        </li>

                        <li class="dropdown notification-list">
                            <!-- <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ti-bell noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a> -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                    Notifications (258)
                                </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>        
                        </li>
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <!-- <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="https://attendance.smileitsolutions.com/assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a> -->
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>                                                                    
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <!-- <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        <li class="d-none d-sm-block"> -->
                            <!-- <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </li> -->
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Section</li>
                            <li>
                                <a href="admin" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>

                            
                            
                            <li>
                                <a href="addProperty" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span>Add property</span>
                                </a>
                            </li>

                            <li>
                                <a href="addDeveloper" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span>Add developer</span>
                                </a>
                            </li>
                                                        <li>
                                <!-- <a href="change-password.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span> Change Password  </span>
                                </a> -->
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Data Table</h4>
                                    <!-- <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Smile IT Solutions</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Table</li>
                                    </ol> -->
            
                                    <!-- <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card">
                    <div class="card-header">
                        <h1>Add Property</h1>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <!-- Button trigger modal -->
                                <!-- <a class="nav-link" href="addpropertyform">
                                    <i class="ni ni-bullet-list-67 text-default"></i>
                                    <span class="nav-link-text badge badge-success">Add Propety</span>
                                </a> -->
                                <!-- Modal -->
                                <!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('Submitproperty')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <label class="cstm-name">Property Name *</label><br>
                                                    <input type="text" class="frm-custom" name="propertyname" required><br>
                                                    <label class="cstm-name">Developer Name *</label><br>
                                                    <input type="text" class="frm-custom" name="developername" required><br>
                                    

                                                    <label class="cstm-name  ">Property Descriptions*</label><br>
                                                    <textarea name="description" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name  ">Photo For slider:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="developerPageProperty[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name  ">Banner Image:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="bannerImag[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name  ">Logo Img:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="logoImg[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name  ">Amenities Photo:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="amenitiesimage[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name  ">Amenities Icons:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="amenitiesIcon[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name  ">Villa Descriptions*</label><br>
                                                    <textarea name="villaDescription" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name  ">Amenities List:</label><br>
                                                    <textarea name="amenitiesList[]" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name  ">Amenities Nearby:</label><br>
                                                    <textarea name="amenitiesNearby[]" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name">Location</label><br>
                                                    <input type="text" class="frm-custom"  name="location[]" required><br><br>
                                                    <label class="cstm-name  ">Gallery Photo:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="gallaryPhoto[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name">Availabilities</label><br>
                                                    <input type="text" class="frm-custom"  name="availabilities[]" required><br>
                                                    <label class="cstm-name">Payment Plan</label><br>
                                                    <input type="text" class="frm-custom"  name="paymentPlane[]" required><br>
                                                    <label class="cstm-name">Agents</label><br>
                                                    <input type="text" class="frm-custom" name="agants[]" required><br>
                                                    <label class="cstm-name  ">Agent Img:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="agentImg[]" multiple>
                                                    </div><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button id="sumintpro" type="sumit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
                        <!-- end row-->
        <form action="{{route('Submitproperty')}}" method="POST" enctype="multipart/form-data">
         <div class="row">
        @csrf                           
            <div class="col-sm-3">
                <label class="cstm-name  ">Property Name *</label><br>
                <input type="text" class="frm-custom" name="propertyname" required><br><br>

                <label class="cstm-name  ">Location</label><br>
                <input type="text" class="frm-custom" name="location_one" required>
                <button type="button" id="location">Add</button><br>
                <div id="location_dynamic_field"><br></div>

                <label class="cstm-name  ">Agents</label><br>
                <input type="text" class="frm-custom" name="agant_one" required>
                <button type="button" id="agants">Add</button><br>
                <div id="agants_dynamic_field"><br></div>

                <label class="cstm-name">Amenities List:</label><br>
                <input type="text" class="frm-custom" name="amenities_list">
                <button type="button" id="amenitiesList">Add</button><br>
                <div id="amenitiesList_dynamic_field"><br></div>

                <label class="cstm-name">Amenities Nearby:</label><br>
                <input type="text" class="frm-custom" name="amenities_nearby">
                <button type="button" id="amenitiesNearby">Add</button><br>
                <div id="amenitiesNearby_dynamic_field"><br></div>

                <label class="cstm-name  ">Features:</label><br>
                <input type="text" class="frm-custom" name="feature_one">
                <button type="button" id="features">Add</button><br>
                <div id="features_dynamic_field"><br></div>
                <label class="cstm-name">PRICE *</label><br>
                <label class="cstm-name">Min:&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="number" class="frm-custom" name="min"><br>
                <label class="cstm-name">Max:&nbsp&nbsp&nbsp&nbsp</label><input type="number" class="frm-custom" name="max"><br><br>

                <label class="cstm-name">Availabilities:</label><br>
                <!-- <input type="text" class="frm-custom" name="availabilities" required> -->
                <label class="cstm-name">Description:</label>
                <input type="text" class="frm-custom" name="aval_des"><br>
                <label class="cstm-name">Size in Sq.Ft:</label>
                <input type="text" class="frm-custom" name="aval_size"><br>
                <label class="cstm-name">starting Price:</label>
                <input type="number" class="frm-custom" name="aval_price">
                <button type="button" id="availabilities">Add more</button><br>
                <div id="availabilities_dynamic_field"><br></div>

            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-3">

                <label class="cstm-name  ">Developer Name *</label><br>
                <!-- <input type="text" class="frm-custom" name="developername" required><br> -->
                <select class="form-control" name="developerid">
                    <option>Select developer</option>
                    @foreach ($developers as $developer)
                        <option value="{{ $developer->id }}"> {{ $developer->developerName }} </option>
                    @endforeach   
                </select>
                <label class="cstm-name  ">Photo For slider:</label>
                <div class="form-group">  
                    <input type="file" class="form-control" required name="developerPageProperty[]" multiple>
                </div>

                <label class="cstm-name  ">Banner Image:</label>
                <div class="form-group">  
                    <input type="file" class="form-control" required name="bannerImag[]" multiple>
                </div>

                <label class="cstm-name  ">Gallery Photo:</label>
                <div class="form-group">  
                    <input type="file" class="form-control" required name="gallaryPhoto[]" multiple>
                </div>

                <label class="cstm-name">Logo Img:</label>
                <div class="form-group">  
                    <input type="file" class="form-control" required name="logoImg[]" multiple>
                </div>

                <label class="cstm-name">Amenities Photo:</label>
                <div class="form-group">  
                    <input type="file" class="form-control" required name="amenitiesimage[]" multiple>
                </div>

                <label class="cstm-name ">Agent Img:</label>
                    <div class="form-group">  
                        <input type="file" class="form-control" required name="agentImg[]" multiple>
                    </div>
                <label class="cstm-name  ">Amenities Icons:</label><br>
                <div class="form-group">  
                    <input type="file" class="form-control" required name="amenitiesIcon[]" multiple>
                </div>

                <label class="cstm-name  ">Villa Descriptions*</label><br>
                <textarea name="villaDescription" rows="5" cols="43"></textarea></br>

                <label class="cstm-name  ">Property Descriptions*</label><br>
                <textarea name="description" rows="5" cols="43"></textarea></br>
                
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-3">
                <label class="cstm-name">PROPOSE *</label><br>
                <select class="form-control" name="porpose">
                    <option>Select porpose</option>
                    <option value="sale">Sale</option>
                    <option value="rent" >Rent</option>
                </select><br>

                <!-- <label class="cstm-name">Accessibility Features: </label><br>
                <select class="form-control" name="accessibility[]" multiple>
                    <option>Select Accessibility</option>
                    <option value="Balcony">Balcony</option>
                    <option value="Basement_Parking" >Basement Parking</option>
                    <option value="BBBQ_Area">BBBQ Area</option>
                    <option value="Garden" >Garden</option>
                    <option value="Golf_View">Golf View</option>
                </select><br> -->

                <div class="form-group mb-3">
                    <label for="select2Multiple">Accessibility Features: </label>
                    <select class="select2-multiple form-control" name="accessibility[]" multiple="multiple" id="select2Multiple">
                        <!-- <option>Select Accessibility</option> -->
                        <option value="Balcony">Balcony</option>
                        <option value="Basement_Parking" >Basement Parking</option>
                        <option value="BBBQ_Area">BBBQ Area</option>
                        <option value="Garden" >Garden</option>
                        <option value="Golf_View">Golf View</option>           
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="select2-multiple_nearby">Near-By: </label>
                    <select class="select2-multiple_nearby form-control" name="nearby[]" multiple="multiple" id="select2-multiple_nearby">
                    <option value="sale">Near Mall</option>
                    <option value="rent" >Near Restaurants</option>
                    <option value="sale">Near Beach</option>
                    <option value="rent" >Near Supermarket</option>           
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="select2-multiple_categories">Near-By: </label>
                    <select class="select2-multiple_categories form-control" name="categories[]" multiple="multiple" id="select2-multiple_categories">
                    <option value="sale">Apartment</option>
                    <option value="rent" >Villa</option>
                    <option value="sale">Townhouse</option>
                    <option value="rent" >Penthouse</option>
                    <option value="sale">Retail</option>
                    <option value="rent" >Duplex</option>
                    <option value="sale">Half Floor</option>
                    <option value="rent" >Office Space</option>        
                    </select>
                </div>

                <!-- <label class="cstm-name">Numbers Of Bedrooms </label><br>
                <select class="form-control" name="bedrooms">
                    <option>Numbers Of Bedrooms</option>
                    <option value="1">1 rooms</option>
                    <option value="2" >2 rooms</option>
                    <option value="3">3 rooms</option>
                    <option value="4" >4 rooms</option>
                    <option value="5">5 rooms</option>
                    <option value="6" >6 rooms</option>
                </select><br> -->

                <div class="form-group mb-3">
                    <label for="select2-multiple_bedrooms">Numbers Of Bedrooms</label>
                    <select class="select2-multiple_bedrooms form-control" name="bedrooms[]" multiple="multiple" id="select2-multiple_bedrooms">
                        <option value="1">1 rooms</option>
                        <option value="2" >2 rooms</option>
                        <option value="3">3 rooms</option>
                        <option value="4" >4 rooms</option>
                        <option value="5">5 rooms</option>
                        <option value="6" >6 rooms</option>     
                    </select>
                </div>

                <!-- <label class="cstm-name ">Numbers Of Bathrooms</label><br>
                <select class="form-control" name="bothrooms">
                    <option>Numbers Of Bathrooms</option>
                    <option value="1">1 </option>
                    <option value="2" >2</option>
                    <option value="3">3 </option>
                    <option value="4" >4 </option>
                    <option value="5">5</option>
                    <option value="6" >6</option>
                </select><br> -->

                <div class="form-group mb-3">
                    <label for="select2-multiple_bothrooms">Numbers Of Bedrooms</label>
                    <select class="select2-multiple_bothrooms form-control" name="bothrooms[]" multiple="multiple" id="select2-multiple_bothrooms">
                        <option value="1">1 </option>
                        <option value="2" >2</option>
                        <option value="3">3 </option>
                        <option value="4" >4 </option>
                        <option value="5">5</option>
                        <option value="6" >6</option>   
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="select2-multiple_payment">Payment Plan</label>
                    <select class="select2-multiple_payment form-control" name="payment[]" multiple="multiple" id="select2-multiple_payment">
                        <option value="1">10% Down Payment </option>
                        <option value="2" >50% During Construction</option>
                        <option value="3">40% On Handover</option> 
                    </select>
                </div>
                <!-- <label class="cstm-name ">Payment Plan</label><br>
                <select class="form-control" name="payment">
                    <option>Payment Plan</option>
                    <option value="1">10% Down Payment </option>
                    <option value="2" >50% During Construction</option>
                    <option value="3">40% On Handover</option>
                </select><br> -->
            </div>
            
        </div> 
        <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="sumintpro" type="sumit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
                                    <!-- </div>
                                </div> -->
                            <!-- </div> end col -->
                        <!-- </div> end row -->



                    </div> <!-- container-fluid -->

                </div> <!-- content -->

            	<footer class="footer">
                        © 2023 Admin - <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by Smile IT Solutions</span>.
                </footer>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
            
        <!-- jQuery  -->
        <script src="https://attendance.smileitsolutions.com/assets/js/jquery.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/js/metisMenu.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/js/jquery.slimscroll.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/js/waves.min.js"></script>
    
        
        <script src="ckeditor/ckeditor.js"></script>
        
        <!-- Sparkline  -->        
        <script src="https://attendance.smileitsolutions.com/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="https://attendance.smileitsolutions.com/assets/js/app.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Required datatable js -->
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/jszip.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="https://attendance.smileitsolutions.com/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="https://attendance.smileitsolutions.com/assets/pages/datatables.init.js"></script>

        <script>
            $(document).ready(function() {
                var i=1; 
                $('#availabilities').click(function() {
                    
                    var inputs = $('input');
                    i++;
                    $('#availabilities_dynamic_field').append('<div id="row'+i+'"><label" for="member_'+ i +'">Availabilities '+ i +'</label><br><label class="cstm-name">Description:</label><input type="text" class="frm-custom" name="aval_de[]"><br><label class="cstm-name">Size in Sq.Ft:</label><input type="text" class="frm-custom" name="av_size[]"><br><label class="cstm-name">Starting Price:</label><input type="number" class="frm-custom" name="av_price[]"><button type="button" class="btn_remove_availabilities" name="remove" id="'+ i +'">X</button></div><br>')

                });
                $(document).on('click', '.btn_remove_availabilities', function() {
                    var button_id_availabilities = $('.btn_remove_availabilities').attr("id");
                    $('#row' + button_id_availabilities + '').remove();
                });

                // var ac=1;
                // $('#accessibility').click(function() {
                   
                //     var inputs = $('input');
                //     ac++;
                //     $('#accessibility_dynamic_field').append('<div id="row_access'+ac+'"><label" for="member_'+ ac +'">Member '+ ac +'</label><input type="text" name="access[]" value=""><button type="button" class="btn_remove_access" name="remove" id="'+ ac +'">X</button></div><br>')

                // });
                // $(document).on('click', '.btn_remove_access', function() {
                //     var button_id_access = $('.btn_remove_access').attr("id");
                //     $('#row_access' + button_id_access + '').remove();
                // });

                // var by=1;
                // $('#nearby').click(function() {
                   
                //     var inputs = $('input');
                //     by++;
                //     $('#nearby_dynamic_field').append('<div id="row_nearby'+by+'"><label" for="member_'+ by +'">nearby '+ by +'</label><input type="text" name="nearby[]" value=""><button type="button" class="btn_remove_nearby" name="remove" id="'+ by +'">X</button></div><br>')

                // });
                // $(document).on('click', '.btn_remove_nearby', function() {
                //     var button_id_nearby = $('.btn_remove_nearby').attr("id");
                //     $('#row_nearby' + button_id_nearby + '').remove();
                // });

                // var ct=1;
                // $('#categories_property').click(function() {
                   
                //     var inputs = $('input');
                //     ct++;
                //     $('#categories_property_dynamic_field').append('<div id="row_categories_property'+ct+'"><label" for="member_'+ ct +'">category '+ ct +'</label><input type="text" name="categories_property[]" value=""><button type="button" class="btn_remove_categories_property" name="remove" id="'+ ct +'">X</button></div><br>')

                // });
                // $(document).on('click', '.btn_remove_categories_property', function() {
                //     var button_id_categories_property = $('.btn_remove_categories_property').attr("id");
                //     $('#row_categories_property' + button_id_categories_property + '').remove();
                // });

                // var bd=1;
                // $('#bedrooms').click(function() {
                   
                //     var inputs = $('input');
                //     bd++;
                //     $('#bedrooms_dynamic_field').append('<div id="row_bedrooms'+bd+'"><label" for="member_'+ bd +'">bedrooms '+ bd +'</label><input type="text" name="bedrooms[]" value=""><button type="button" class="btn_remove_bedrooms" name="remove" id="'+ bd +'">X</button></div><br>')

                // });
                // $(document).on('click', '.btn_remove_bedrooms', function() {
                //     var button_id_bedrooms = $('.btn_remove_bedrooms').attr("id");
                //     $('#row_bedrooms' + button_id_bedrooms + '').remove();
                // });

                // var btr=1;
                // $('#bathrooms').click(function() {
                   
                //     var inputs = $('input');
                //     btr++;
                //     $('#bathrooms_dynamic_field').append('<div id="row_bathrooms'+btr+'"><label" for="member_'+ btr +'">bathrooms '+ btr +'</label><input type="text" name="bathrooms[]" value=""><button type="button" class="btn_remove_bathrooms" name="remove" id="'+ btr +'">X</button></div><br>')

                // });
                // $(document).on('click', '.btn_remove_bathrooms', function() {
                //     var button_id_bathrooms = $('.btn_remove_bathrooms').attr("id");
                //     $('#row_bathrooms' + button_id_bathrooms + '').remove();
                // });

                // var pp=1;
                // $('#paymentplane').click(function() {
                   
                //     var inputs = $('input');
                //     pp++;
                //     $('#paymentplane_dynamic_field').append('<div id="row_paymentplane'+pp+'"><label" for="member_'+ pp +'">paymentplane '+ pp +'</label><input type="text" name="paymentplane[]" value=""><button type="button" class="btn_remove_paymentplane" name="remove" id="'+ pp +'">X</button></div><br>')

                // });
                // $(document).on('click', '.btn_remove_paymentplane', function() {
                //     var button_id_paymentplane = $('.btn_remove_paymentplane').attr("id");
                //     $('#row_paymentplane' + button_id_paymentplane + '').remove();
                // });


                var loc=1;
                $('#location').click(function() {
                   
                    var inputs = $('input');
                    loc++;
                    $('#location_dynamic_field').append('<div id="row_location'+loc+'"><label" for="member_'+ loc +'">location '+ loc +'</label><input type="text" name="location[]" value=""><button type="button" class="btn_remove_location" name="remove" id="'+ loc +'">X</button></div><br>')

                });
                $(document).on('click', '.btn_remove_location', function() {
                    var button_id_location = $('.btn_remove_location').attr("id");
                    $('#row_location' + button_id_location + '').remove();
                });

                var ag=1;
                $('#agants').click(function() {
                   
                    var inputs = $('input');
                    ag++;
                    $('#agants_dynamic_field').append('<div id="row_agants'+ag+'"><label" for="member_'+ ag +'">agants '+ ag +'</label><input type="text" name="agants[]" value=""><button type="button" class="btn_remove_agants" name="remove" id="'+ ag +'">X</button></div><br>')

                });
                $(document).on('click', '.btn_remove_agants', function() {
                    var button_id_agants = $('.btn_remove_agants').attr("id");
                    $('#row_agants' + button_id_agants + '').remove();
                });

                var al=1;
                $('#amenitiesList').click(function() {
                   
                    var inputs = $('input');
                    al++;
                    $('#amenitiesList_dynamic_field').append('<div id="row_amenitiesList'+al+'"><label" for="member_'+ al +'">amenitiesList '+ al +'</label><input type="text" name="amenitiesList[]" value=""><button type="button" class="btn_remove_amenitiesList" name="remove" id="'+ al +'">X</button></div><br>')

                });
                $(document).on('click', '.btn_remove_amenitiesList', function() {
                    var button_id_amenitiesList = $('.btn_remove_amenitiesList').attr("id");
                    $('#row_amenitiesList' + button_id_amenitiesList + '').remove();
                });


                // var an=1;
                // $('#amenitiesNearby').click(function() {
                   
                //     var inputs = $('input');
                //     an++;
                //     $('#amenitiesNearby_dynamic_field').append('<div id="row_amenitiesNearby'+an+'"><label" for="member_'+ an +'">amenitiesNearby '+ an +'</label><input type="text" name="categories_property[]" value=""><button type="button" class="btn_remove_amenitiesNearby" name="remove" id="'+ an +'">X</button></div><br>')

                // });
                // $(document).on('click', '.btn_remove_amenitiesNearby', function() {
                //     var button_id_amenitiesNearby = $('.btn_remove_amenitiesNearby').attr("id");
                //     $('#row_amenitiesNearby' + button_id_amenitiesNearby + '').remove();
                // });

                var fr=1;
                $('#features').click(function() {
                   
                    var inputs = $('input');
                    fr++;
                    $('#features_dynamic_field').append('<div id="row_features'+fr+'"><label" for="member_'+ fr +'">features '+ fr +'</label><input type="text" name="features[]" value=""><button type="button" class="btn_remove_features" name="remove" id="'+ fr +'">X</button></div><br>')

                });
                $(document).on('click', '.btn_remove_features', function() {
                    var button_id_features = $('.btn_remove_features').attr("id");
                    $('#row_features' + button_id_features + '').remove();
                });
            });
        </script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
       <script>
         $(document).ready(function() {
             // Select2 Multiple
             $('.select2-multiple').select2({
                 placeholder: "Select",
                 allowClear: true
             });

             $('.select2-multiple_nearby').select2({
                 placeholder: "Select",
                 allowClear: true
             });

             $('.select2-multiple_categories').select2({
                 placeholder: "Select",
                 allowClear: true
             });

             $('.select2-multiple_bedrooms').select2({
                 placeholder: "Select",
                 allowClear: true
             });

             $('.select2-multiple_bothrooms').select2({
                 placeholder: "Select",
                 allowClear: true
             });

             $('.select2-multiple_payment').select2({
                 placeholder: "Select",
                 allowClear: true
             });
             
         });
         
 
     </script>
        
    </body>

</html>