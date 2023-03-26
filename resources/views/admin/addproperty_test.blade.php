@php
use App\Models\Propertie;
$properties = Propertie::all();
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
                                <a class="nav-link" href="addpropertyform">
                                    <i class="ni ni-bullet-list-67 text-default"></i>
                                    <span class="nav-link-text badge badge-success">Add Propety</span>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                                    <label class="cstm-name badge badge-secondary">Property Descriptions*</label><br>
                                                    <textarea name="description" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name badge badge-secondary">Photo For slider:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="developerPageProperty[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Banner Image:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="bannerImag[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Logo Img:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="logoImg[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Amenities Photo:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="amenitiesimage[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Amenities Icons:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="amenitiesIcon[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Villa Descriptions*</label><br>
                                                    <textarea name="villaDescription" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name badge badge-secondary">Amenities List:</label><br>
                                                    <textarea name="amenitiesList[]" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name badge badge-secondary">Amenities Nearby:</label><br>
                                                    <textarea name="amenitiesNearby[]" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name">Location</label><br>
                                                    <input type="text" class="frm-custom"  name="location[]" required><br><br>
                                                    <label class="cstm-name badge badge-secondary">Gallery Photo:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="gallaryPhoto[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name">Availabilities</label><br>
                                                    <input type="text" class="frm-custom"  name="availabilities[]" required><br>
                                                    <label class="cstm-name">Payment Plan</label><br>
                                                    <input type="text" class="frm-custom"  name="paymentPlane[]" required><br>
                                                    <label class="cstm-name">Agents</label><br>
                                                    <input type="text" class="frm-custom" name="agants[]" required><br>
                                                    <label class="cstm-name badge badge-secondary">Agent Img:</label><br>
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
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                        <!-- <h4 class="mt-0 header-title">Website Users</h4>
                                        <p class="text-muted m-b-30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nulla assumenda minus nisi distinctio. Distinctio, amet omnis quasi est consequuntur quis ullam dignissimos, delectus ut numquam et itaque, dolorem cumque.
                                        </p> -->

                                        <table class="table table-bordered">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Developer Name</th>
                                                    <th>Property Type</th>
                                                    <th>Property name</th>
                                                    <th>Country</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($properties as  $properties)
                                            
                                            <tbody>
                                                <tr>
                                                    <th>{{$properties->id}}</th>
                                                    <th>{{$properties->developer_name}}</th>
                                                    <th>{{$properties->developer_name}}</th>
                                                    <th>{{$properties->property_name}}</th>
                                                    <th>{{$properties->Country}}</th>
                                                    <th>
                                                    <a class="nav-link" href="" data-toggle="modal" data-target="#editModalLong">
                                                        <i class="ni ni-bullet-list-67 text-default"></i>
                                                        <span class="nav-link-text badge badge-success">Edit</span>
                                                    </a>
                                                    </th>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



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
        
    </body>

</html>