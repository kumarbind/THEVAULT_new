@php
use App\Models\Developer;
use App\Models\File;
use App\Models\Propertie;

$users = Developer::all();
$propert_search = Propertie::all();

$search_property_now = $search_property ?? '';

$property_now = count($search_property_now);

foreach($search_property_now as $search_prop){
    $search_prop->pricerange;
}

$count_search =0;

$i=0;
$access_feature = ["Bolcony", "Basement Parking", "BBBQ Area", "Garden", "Golf View",];
$near_by = ["Near Restaurants", "Near Beach","Near Supermarket"];
$cat_feature = ["Apartment", "Villa", "Townhouse", "Penthouse", "Duplex", "Retail", "Half Floor", "Office Space"];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>The Vault</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/Logo gold 1.png" rel="icon">
  <!-- <link href="https://thevaultrealestate.com/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=PT+Serif&family=Roboto:wght@400;500&display=swap"
      rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="https://thevaultrealestate.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://thevaultrealestate.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://thevaultrealestate.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slick CSS Files -->
    <link rel="stylesheet" type="text/css" href="https://thevaultrealestate.com/assets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://thevaultrealestate.com/assets/vendor/slick/slick-theme.css">
    <!-- Template Main CSS File -->
    <link href="cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
    <link href="https://thevaultrealestate.com/assets/slick/css/slick-theme.css" rel="stylesheet">
    <link href="https://thevaultrealestate.com/assets/css/omniyat.css" rel="stylesheet">
    <link href="https://thevaultrealestate.com/assets/css/search.css" rel="stylesheet">
    <link href="https://thevaultrealestate.com/assets/css/home.css" rel="stylesheet">
   <!-- <link href="https://thevaultrealestate.com/assets/css/header-footer.css" rel="stylesheet"> -->

</head>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-center">
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul class="me-auto">
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#">Developers  <i class="bi bi-chevron-down"></i></a>
         <ul class="overflow-y-auto">
         <li><a href="search">Search</a></li>
            @foreach($users as $user)
              <li><a href="{{route('developers', $user->developerName)}}">{{$user->developerName}}</a></li>
            @endforeach

          </ul>
        </li>
        <li><a class="nav-link scrollto" href="aboutus.html">About Us</a></li>
        <li><a href="index.html"><img src="https://thevaultrealestate.com/assets/images/Logo gold 1.png" alt=""></a></li>
        <li><a class="nav-link scrollto " href="#">Our Services</a></li>
        <li><a class="nav-link scrollto" href="#">News</a></li>
        <li class="dropdown">
          <a href="#">
          <span> <img src="https://thevaultrealestate.com/assets/images/vector-icon.png"></span> <i class="bi bi-chevron-down"></i>
        </a>
          <ul>
            <li><a href="#">English</a></li>
            <li><a href="#">Arabic</a></li>
            <li><a href="#">French</a></li>
            <li><a href="#">Spanish</a></li>
            <li><a href="#">Chinese</a></li>
            <li><a href="#">German</a></li>
            <li><a href="#">Italian</a></li>
            <li><a href="#">German</a></li>
            <li><a href="#">Italian</a></li>
            <li><a href="#">Portugal</a></li>
            <li><a href="#">Dutch</a></li>
          </ul>
        </li>
        
         <li><a id="toggle" class="nav-link scrollto sidebar-nav active" role="button" data-bs-toggle="offcanvas" href="#offcanvasScrolling" aria-controls="offcanvasScrolling">
          <img src="https://thevaultrealestate.com/assets/images/Menu_lines.png"></a></li>
        
        
        <!--<li><a id="toggle" class="nav-link scrollto sidebar-nav" href="#" data-bs-toggle="offcanvas"-->
        <!--  data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"  onclick="toggle(this.id)"><i class="bi bi-filter-right"></i></a></li>-->
      </ul>
      
  
     
   
    
      <i class="bi bi-list mobile-nav-toggle mobile-none"></i>
    </nav><!-- .navbar -->

    
          <!--offcanvas-->
         
         <div class="offcanvas offcanvas-end bg-header " tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
              
               <!---close-btn-->
               
              <!--<div class="offcanvas-header">-->
              <!--    <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
              <!--</div>-->
              
              <div class="">
                    <div class="bg-hdr-img">
                        <img class="img-fluid d-blcok" src="https://thevaultrealestate.com/assets/images/Logo gold 1.png" alt="">
                    </div>

                    <div class="search-br">
                          <i class="fa fa-search" aria-hidden="true"></i>
                          <input type="text" placeholder="Search.." class="searchinput">

                            <button type="button" class="btn dropdown-toggle searchdrop" data-bs-toggle="dropdown">All</button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                              </ul>
                    </div>
                              <hr class="bg-bdr-line">
                     <div class="bg-hdr-list">
                                  <ul>
                                      <li class="dropdown bfrimg" data-bs-toggle="dropdown"><img src="https://thevaultrealestate.com/assets/images/bg01.png" class="img-fluid d-block">Developers<img src="https://thevaultrealestate.com/assets/images/bg06.png" class="img-fluid d-block mr-0" style="margin-left: 19% !important;"></li>
                                       <ul class="overflow-y-auto dropdown-menu sidebarclss">
         <li><a href="search.html">Search</a></li>
         <li><a href="omniyet.html">Omniyat</a></li>
         <li><a href="vincitore.html">Vincitore</a></li>
          <li><a href="mag.html">Mag</a></li>
         <li><a href="emaar.html">Emaar</a></li>
         <li><a href="damag.html">Damac</a></li>
            <li><a href="aldar.html">Aldar</a></li>
               <li><a href="Octa.html">Octa</a></li>
               <li><a href="meeras.html">Meeras</a></li>
               <li><a href="devmark.html">Devmark</a></li>
               <li><a href="reportage.html">Reportage</a></li>
          <li><a href="omniyet-thepad.html">The Pad</a></li>
         
         <li><a href="the-opus.html">The Opus</a></li>
               <li><a href="vincitore-volare.html">Vincitore Volare</a></li>
               <li><a href="mbl.html">Mag MBL</a></li>
          <li><a href="marina-shores.html">Marina Shores</a></li>
         
         
         <li><a href="safa-two.html">Safa Two</a></li>
               <li><a href="safa-one.html">Safa One</a></li>
               <li><a href="monte-carlo.html">Monte Carlo</a></li>
          <li><a href="monte-marbella.html">Marbella</a></li>
         
         
         <li><a href="venice-malta.html">Venice &amp; Malta</a></li>
               <li><a href="protofino.html">Protofino</a></li>
               <li><a href="nice.html">Nice</a></li>
          <li><a href="costa-brava.html">Costa Brava</a></li>
                                       
                                       
                                       
                                       
          <li><a href="yes-park.html">Yrs Park</a></li>
               <li><a href="yatch.html">Yatch</a></li>
               <li><a href="hills.html">Hills</a></li>
          <li><a href="hills-2.html">Hills 2</a></li>
         
         
         <li><a href="cavalli.html">Cavalli</a></li>
               <li><a href="Santorini.html">Santorini</a></li>
               <li><a href="mag-rize.html">Mag Rize</a></li>
                                       <li><a href="anwa.html">Anwa</a></li>
                                       <li><a href="Emaar-Raya.html">Emaar Raya</a></li>
                                       <li><a href="/nadal-sheba.html">Nadal Sheba</a></li>
                                        <li><a href="laurel.html">Laurel</a></li>
                                       <li><a href="castleton.html">Castoleton</a></li>
                                    

          </ul>
                                      
                                  <a href="aboutus.html"><li class="dropdown bfrimg" data-bs-toggle=""><img src="https://thevaultrealestate.com/assets/images/bg05.png" class="img-fluid d-block">About Us</li></a>
                                      <!--<ul class="dropdown-menu">-->
                                      <!--   <li><a class="dropdown-item" href="#">Link 3</a></li>-->
                                      <!--   <li><a class="dropdown-item" href="#">Link 4</a></li>-->
                                      <!--</ul>-->
                                      
                                      <li><img src="https://thevaultrealestate.com/assets/images/bg01.png" class="img-fluid d-block">Our Service</li>
                                      <li><img src="https://thevaultrealestate.com/assets/images/bg03.png" class="img-fluid d-block">News</li>
                                      <li><img src="https://thevaultrealestate.com/assets/images/bg04.png" class="img-fluid d-block">After Sale</li>
                                      <li class="dropdown"><img src="https://thevaultrealestate.com/assets/images/bg06.png" class="img-fluid d-block">Support</li>
                                      
                                  </ul>
                              </div>
                </div>
          </div>

          <!--end offcancas-->

      <div class="mobile-row-hdr w-100 d-none d-xs-block">
         <ul class="list-unstyled d-flex align-items-center justify-content-end">
           <!-- <li><a href="developers-page.html">Developers</a></li> -->
           <li><a href="index.html"><img src="https://thevaultrealestate.com/assets/images/Logo gold 1.png" alt=""></a></li>
           <li class="mobile-tgl d-none">
             <a id="toggle" class="nav-link scrollto sidebar-nav active" role="button" data-bs-toggle="offcanvas" href="#offcanvasScrolling" aria-controls="offcanvasScrolling">
             
             <img src="https://thevaultrealestate.com/assets/images/Menu_lines.png"></a>
           </li> 
         </ul>
       </div>
  
  
  </div>
</header>
      <!-- End Header -->

            <section id="section_search" class="section_search">
                <!-- <img src="./assets/images-r/search-page-baneer.jpg" alt="">  -->
                <div class="container">
             <div class="row">
                <div class="col-xl-6">
                    <div class="search_banner_heading">
                        <h1>FIND YOUR NEXT <br>BEST PLACE</h1>
                        <p>Find the best places around you at the <br>cheepest and affordable prices.</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card banner-topcard">
                        <img src="https://thevaultrealestate.com/assets/images-r/secrcardtop.png" class="card-img-top upper_img" alt="...">
                        <div class="card-body">
                            <div class="row bottom_text">
                                <div class="col-xl-7">
                                 <div class="d-flex align-items-center"><img src="https://thevaultrealestate.com/assets/images-r/cardrinimg.png"><h5>3BHK at Goergia
                                    front tower... </h5></div>
                                </div>
                                <div class="col-xl-5">
                                    <p class="btn_type d-flex align-items-center justify-content-center"><span>for sale</span> </p>
                                    <p class="price_txt">$ 34,200</p>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>

            </div>
            </div>
            </section>
            <!-- end_banner -->

            <!-- start_title_section -->
            <section class="over-all-search">
                <div class="container">
                    <section class="scroling mobile-tabs1">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist"> 
                                <li class="nav-item item-nav">
                                <a class="nav-link link-nav active" data-bs-toggle="tab" href="#home">Sale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-nav" data-bs-toggle="tab" href="#menu1">Rent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-nav" data-bs-toggle="tab" href="#menu2">Off Plane</a>
                                </li>      
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="tab-pane active">
                                    <form action="{{route('filterSearch')}}" method="POST">
                                        @csrf
                                    <div class="scroling-search">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <div class="dropdown">
                                                    <button id="porpose" name="Porpose" type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                        <span class="mr-3"><i class="fa fa-home" aria-hidden="true"></i></span>Sale
                                                    </button>

                                                    <ul name="developer" class="dropdown-menu dropset">
                                                        <select id="sale_search" name="sale_search">
                                                            <option value="residential">Residential </option>
                                                            <option value="commercial">Commercial</option> 
                                                        </select>
                                                    </ul>
                                                </div>
                                                <div class="dropdown mt-3">
                                                    <label class="font-s">Price Range</label><br>
                                                    <select id="sale_pricerange" name="sale_pricerange">
                                                        <option value="residential">1000 </option>
                                                        <option value="commercial">2000 </option> 
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <!-- <form class="fm"> -->
                                                <input type="text" class="inputcity " id="location_search" name="location" placeholder="City / Community / Bulding">
                                                <div class="dual-range mt-5" data-min="1000" data-max="20000">
                                                    <span id="location1" name="name"class="handle left"></span>
                                                    <span id="location2" name="name"class="highlight"></span>
                                                    <span id="location3" name="name" class="handle right"></span>
                                                </div>
                                                
                                                <!-- </form> -->
                                            </li>
                                            
                                            <li>  
                                                <div class="dropdown">
                                                    <button type="button" class="btn sale-btn  dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">

                                                    <span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/taaj.png" class="img-fluid d-flex"></span>Popularity
                                                    </button>
                                                    <ul class="dropdown-menu dropset">
                                                        <select id="popularity" name="popularity">
                                                            <option value="residential">Newest </option>
                                                            <option value="commercial">Lowest price</option>
                                                            <option value="residential">Highest price</option>
                                                            <option value="commercial">Most bedrooms</option>
                                                            <option value="commercial">Least bedrooms</option>    
                                                        </select>
                                                    </ul>
                                                </div> 
                                                <div class="dropdown mt-5">
                                                    <button type="button" class="btn sale-btn dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" style="width:97%;"><span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/building.png" class="img-fluid d-flex"></span>developer</button>
                                                    <ul class="dropdown-menu dropset">
                                                        <select id="search_developer" name="search_developer">
                                                            @foreach($users as $user)
                                                                <option value="{{$user->developerName}}">{{$user->developerName}}</option>
                                                            @endforeach    
                                                        </select>
                                                    </ul>
                                                </div> 
                                            </li>
                                            <li style="border-left: 1px solid #F4F4F4; margin-left: -1%;"></li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Min. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <select id="search_min_sq" name="search_min_sq">
                                                                        <option value="residential">25</option>
                                                                        <option value="residential">30</option>   
                                                                </select>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Max. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <select id="search_max_sq" name="search_max_sq">
                                                                    <option value="residential">25</option>
                                                                    <option value="residential">30</option>   
                                                                </select>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form>
                                                    <div class="dual-range1 mt-5" data-min="100" data-max="10000">
                                                        <span class="handle1 left1"></span>
                                                        <span class="highlight1"></span>
                                                        <span class="handle1 right1"></span>
                                                    </div>
                                                </form>
                                            </li>
                                            <li class="line-mrgin">
                                                <h6 id="text" class="56-reslt">{{$property_now}}</h6>
                                                <p>Result</p>
                                                <button type="submit" class="btn btn-info mt-2" id="search_id">Search</button>
                                            </li>
                                        </ul>
                                    </div>
                                    </form> 
                                </div>
                                <div id="menu1" class="container tab-pane fade">
                                    <form action="{{route('filterSearch')}}" method="POST">
                                        @csrf
                                      <div class="scroling-search">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <div class="dropdown">
                                                    <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                        <span class="mr-3"><i class="fa fa-home" aria-hidden="true"></i></span>Rent
                                                    </button>

                                                    <ul class="dropdown-menu dropset">
                                                        <select class="select2-multiple_bothrooms form-control" name="bothrooms[]" multiple="multiple" id="select2-multiple_bothrooms">
                                                            <option value="residential">Residential </option>
                                                            <option value="commercial">Commercial</option>
                                                            <option value="residential">Short term(Monthly)</option>
                                                            <option value="commercial">Short term(Daily)</option>  
                                                        </select>
                                                    </ul>
                                                </div>
                                                <div class="dropdown mt-3">
                                                    <label class="font-s">Price Range</label><br>
                                                    <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                        <span class="mr-3"><i class="fa fa-dollar"></i></span>-----
                                                    </button>
                                                    <ul class="dropdown-menu dropset">
                                                    @foreach($search_property_now as $user)
                                                    <li><a href="#">{{$user->pricerange}}</a></li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><form class="fm">
                                                <input type="text" class="inputcity " name=""placeholder="City / Community / Bulding">
                                                <div class="dual-range3 mt-5" data-min="1000" data-max="20000">
                                                    <span class="handle3 left3"></span>
                                                    <span class="highlight3"></span>
                                                    <span class="handle3 right3"></span>
                                                </div>
                                                
                                                </form>
                                            </li>
                                            
                                             <li>  
                                                <div class="dropdown">
                                                    <button type="button" class="btn sale-btn  dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">

                                                    <span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/taaj.png" class="img-fluid d-flex"></span>Popularity
                                                    </button>
                                                    <ul class="dropdown-menu dropset">
                                                        <select class="select2-multiple_bothrooms form-control" name="bothrooms[]" multiple="multiple" id="select2-multiple_bothrooms">
                                                            <option value="residential">Newest </option>
                                                            <option value="commercial">Lowest price</option>
                                                            <option value="residential">Highest price</option>
                                                            <option value="commercial">Most bedrooms</option>
                                                            <option value="commercial">Least bedrooms</option>    
                                                        </select>
                                                    </ul>
                                                </div> 
                                                <div class="dropdown mt-5">
                                                    <button type="button" class="btn sale-btn dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" style="width:97%;"><span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/building.png" class="img-fluid d-flex">
                                                        </span>EMMAR</button>
                                                    <ul class="dropdown-menu dropset">
                                                    @foreach($users as $user)
                                                    <li><a href="{{route('developers', $user->developerName)}}">{{$user->developerName}}</a></li>
                                                    @endforeach
                                                      <!-- <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li> -->
                                                      
                                                    </ul>
                                                </div> 
                                            </li>
                                             <li style="border-left: 1px solid #F4F4F4; margin-left: -1%;"></li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Min. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                                <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Max. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                                <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form>
                                                    <div class="dual-range4 mt-5" data-min="100" data-max="10000">
                                                        <span class="handle4 left4"></span>
                                                        <span class="highlight4"></span>
                                                        <span class="handle4 right4"></span>
                                                    </div>
                                                </form>
                                            </li>
                                            <li class="line-mrgin">
                                                <h6 class="56-reslt">{{$property_now}} </h6>
                                                <p>Result</p>
                                                <button type="submit" class="btn btn-info mt-2">search</button>
                                            </li>
                                        </ul>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <div class="container">
                    <!------mobile-tab----------->
                <div class="row d-lg-none d-sm-block d-xs-block">
            
                    <section class="scroling">
                            <!-- Nav tabs -->
                            <!-- <ul class="nav nav-tabs d-flex justify-content-center mb-2" role="tablist">
                                <li class="nav-item item-nav">
                                    <a class="nav-link link-nav active" data-bs-toggle="tab" href="#home01">Sale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-nav" data-bs-toggle="tab" href="#menu02">Rent</a>
                                </li>
                                 
                            </ul> -->
                            <!-- Tab panes -->
                            <!-- <div class="tab-content">
                                <div id="home01" class="tab-pane active">
                                    <div class="scroling-search">
                                       <ul class="justify-content-between">
                                           <ul>
										    <li>
                                                <div class="dropdown ctm-box">
                                                    <button type="button" class="btn sale-btn dropdown-toggle ctm-button" data-bs-toggle="dropdown">
                                                        <span class="mr-3"><i class="fa fa-home" aria-hidden="true"></i></span>Sale
                                                    </button>

                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">item 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                     
                                                    </ul>
                                                </div>
                                                <div class="dropdown ctm-box">
                                                    <label class="font-s">Price Range</label><br>
                                                    <button type="button" class="btn sale-btn dropdown-toggle ctm-button1" data-bs-toggle="dropdown">
                                                        <span class="mr-3"><i class="fa fa-dollar"></i></span>-----
                                                    </button>
                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                     
                                                    </ul>
                                                </div>
                                            </li>
										   </ul>
                                            <li><form class="fm">
                                                <input type="text" class="inputcity " name="" placeholder="City / Community / Bulding">
                                                <div class="dual-range mt-3" data-min="1000" data-max="20000">
                                                    <span class="handle left"></span>
                                                    <span class="highlight"></span>
                                                    <span class="handle right"></span>
                                                </div>
                                                
                                                </form>
                                            </li>
                                            
                                           <ul> 
										   <li>  
                                                <div class="dropdown ctm-box1">
                                                    <button type="button" class="btn sale-btn  dropdown-toggle d-flex justify-content-center align-items-center" data-bs-toggle="dropdown">

                                                    <span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/taaj.png" class="img-fluid d-flex"></span>Popularity
                                                    </button>
                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                      
                                                    </ul>
                                                </div> 
                                                <div class="dropdown mt-3 ctm-box2">
                                                    <button type="button" class="btn sale-btn dropdown-toggle d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" style="width:97%;"><span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/building.png" class="img-fluid d-flex"></span>EMMAR</button>
                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                      
                                                    </ul>
                                                </div> 
                                            </li>
											</ul>
                                            <li style="border-left: 1px solid #F4F4F4; margin-left: -1%;"></li>
                                             <ul>
											    <li>
                                                <div class="row mt-3">
                                                    <div class="col-sm-6 col-6">
                                                        <div class="dropdown ctm-box3">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Min. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                                <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-6">
                                                        <div class="dropdown ctm-box4">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Max. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                                <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form>
                                                    <div class="dual-range1 mt-3" data-min="100" data-max="10000">
                                                        <span class="handle1 left1"></span>
                                                        <span class="highlight1"></span>
                                                        <span class="handle1 right1"></span>
                                                    </div>
                                                </form>
                                            </li>
											 </ul>
                                            <li class="line-mrgin">
                                                <h6 class="56-reslt">563 </h6>
                                                <p>Result</p>
                                                <div class="btn serach-begin">Search</div>

                                            </li>
                                        </ul>
                                    </div>
                                 </div>
                                <div id="menu02" class="container tab-pane fade">
                                       <div class="scroling-search">
                                       <ul class="justify-content-between">
                                           <ul>
										    <li>
                                                <div class="dropdown ctm-box">
                                                    <button type="button" class="btn sale-btn dropdown-toggle ctm-button" data-bs-toggle="dropdown">
                                                        <span class="mr-3"><i class="fa fa-home" aria-hidden="true"></i></span>Sale
                                                    </button>

                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">item 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                     
                                                    </ul>
                                                </div>
                                                <div class="dropdown ctm-box">
                                                    <label class="font-s">Price Range</label><br>
                                                    <button type="button" class="btn sale-btn dropdown-toggle ctm-button1" data-bs-toggle="dropdown">
                                                        <span class="mr-3"><i class="fa fa-dollar"></i></span>-----
                                                    </button>
                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                     
                                                    </ul>
                                                </div>
                                            </li>
										   </ul>
                                            <li><form class="fm">
                                                <input type="text" class="inputcity " name="" placeholder="City / Community / Bulding">
                                                <div class="dual-range mt-3" data-min="1000" data-max="20000">
                                                    <span class="handle left"></span>
                                                    <span class="highlight"></span>
                                                    <span class="handle right"></span>
                                                </div>
                                                
                                                </form>
                                            </li>
                                            
                                           <ul> 
										   <li>  
                                                <div class="dropdown ctm-box1">
                                                    <button type="button" class="btn sale-btn  dropdown-toggle d-flex justify-content-center align-items-center" data-bs-toggle="dropdown">

                                                    <span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/taaj.png" class="img-fluid d-flex"></span>Popularity
                                                    </button>
                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                      
                                                    </ul>
                                                </div> 
                                                <div class="dropdown mt-3 ctm-box2">
                                                    <button type="button" class="btn sale-btn dropdown-toggle d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" style="width:97%;"><span class="mr-3"><img src="https://thevaultrealestate.com/assets/images/building.png" class="img-fluid d-flex"></span>EMMAR</button>
                                                    <ul class="dropdown-menu dropset">
                                                      <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                      <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                      
                                                    </ul>
                                                </div> 
                                            </li>
											</ul>
                                            <li style="border-left: 1px solid #F4F4F4; margin-left: -1%;"></li>
                                             <ul>
											    <li>
                                                <div class="row mt-3">
                                                    <div class="col-sm-6 col-6">
                                                        <div class="dropdown ctm-box3">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Min. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                                <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-6">
                                                        <div class="dropdown ctm-box4">
                                                            <button type="button" class="btn sale-btn dropdown-toggle" data-bs-toggle="dropdown">
                                                                <span class="mr-3"><i class="fa fa-arrows-v rotat" aria-hidden="true"></i></span>Max. Sq.Ft</button>
                                                            <ul class="dropdown-menu dropset">
                                                                <li><a class="dropdown-item dropset-item" href="#">Link 1</a></li>
                                                                <li><a class="dropdown-item dropset-item" href="#">item 2</a></li>
                                                             </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form>
                                                    <div class="dual-range1 mt-3" data-min="100" data-max="10000">
                                                        <span class="handle1 left1"></span>
                                                        <span class="highlight1"></span>
                                                        <span class="handle1 right1"></span>
                                                    </div>
                                                </form>
                                            </li>
											 </ul>
                                            <li class="line-mrgin">
                                                <h6 class="56-reslt">563 </h6>
                                                <p>Result</p>
                                                <div class="btn serach-begin">Search</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                    </section>
               </div>  
                 <!------mobile-tab----------->
                
                    <div class="row mrgn_top01" style="padding-top: 17%;">
                        <div class="col-md-4">
                            <div class="accessibilites">
                                <div class="sec1">
                                    <div class="feature" id="feature">Accessibility features
                                        &nbsp<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </div>
                                      <form class="radio-dropd group mt-2"id="feature-list">
                                            <div class="radio">
                                                <input type="checkbox" id="opt1" name="condition_tab" value="{{$access_feature[$count_search]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$access_feature[$count_search]}}
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt2" name="condition_tab" value="{{$access_feature[$count_search+1]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$access_feature[$count_search+1]}}
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt3" name="condition_tab" value="{{$access_feature[$count_search+2]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$access_feature[$count_search+2]}}
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt4" name="condition_tab" value="{{$access_feature[$count_search+3]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$access_feature[$count_search+3]}}
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt5" name="condition_tab" value="{{$access_feature[$count_search+4]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$access_feature[$count_search+4]}}
                                            </div>
                                        </form>  
                                      
                                    <img src="https://thevaultrealestate.com/assets/images/search-btmline.png" class="img-fluid d-block"> 
                                </div>
                                <div class="sec2 mt-2">
                                    <div class="feature" id="nearvey">Near-by
                                        &nbsp<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </div>
                                      <form class="radio-dropd mt-2"id="nearvey-list">
                                        <div class="radio">
                                                <input type="checkbox" id="opt6" name="condition_tab" value="{{$near_by[$count_search]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$near_by[$count_search]}}
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt7" name="condition_tab" value="{{$near_by[$count_search+1]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$near_by[$count_search+1]}}
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt8" name="condition_tab" value="{{$near_by[$count_search+2]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">{{$near_by[$count_search+2]}}
                                            </div>
                                      </form>
                                       <img src="https://thevaultrealestate.com/assets/images/search-btmline.png" class="img-fluid d-block">
                                </div>
                                <div class="sec3 mt-2">
                                    <div class="feature" id="Bedrooms">Categories Property
                                        &nbsp<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </div>
                                        <form class="radio-dropd mt-2"id="Bedrooms-list">

                                            <div class="radio">
                                                <input class="d-flex align-items-center justify-content-end" type="checkbox" id="opt15" name="condition_tab" value="{{$cat_feature[$count_search]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search]}}</div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt9" name="condition_tab" value="{{$cat_feature[$count_search+1]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search+1]}} </div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt10" name="condition_tab" value="{{$cat_feature[$count_search+2]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search+2]}} </div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt16" name="condition_tab" value="{{$cat_feature[$count_search+3]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search+3]}} </div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt11" name="condition_tab" value="{{$cat_feature[$count_search+4]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search+4]}} </div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt12" name="condition_tab" value="{{$cat_feature[$count_search+5]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search+5]}} </div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt13" name="condition_tab" value="{{$cat_feature[$count_search+6]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search+6]}} </div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                            <div class="radio">
                                                <input type="checkbox" id="opt14" name="condition_tab" value="{{$cat_feature[$count_search+7]}}" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit"><div class=" d-flex align-items-center" style="width:70%">{{$cat_feature[$count_search+7]}} </div><div class="d-flex align-items-center justify-content-end " style="width:30%"><span class="num">{{count($cat_feature)}}</span></div>
                                            </div>
                                        </form>
                                       <img src="https://thevaultrealestate.com/assets/images/search-btmline.png" class="img-fluid d-block">
                                </div>
                                <div class="sec4 mt-2">
                                    <div class="feature" id="Categories">Numbers Of Bedrooms
                                        &nbsp<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </div>
                                      <div id="Categories-list">
                                        <ul class="d-flex mb-0">
                                            <li><div class="btn catagery-btn mt-3"> 2 Rooms</div></li>
                                            <li><div class="btn catagery-btn mt-3">3  Rooms</div></li>
                                            <li><div class="btn catagery-btn mt-3">4  Rooms</div></li>
                                        </ul>
                                        <ul class="d-flex">
                                            <li ><div class="btn active catagery-btn mt-3">5 Rooms </div></li>
                                            <li><div class="btn catagery-btn mt-3">6  Rooms </div></li>
                                        </ul>
                                       
                                      </div>
                                </div>
                                
                                <div class="sec5 mt-2">
                                    <div class="feature" id="Bathrooms">Numbers Of Bathrooms
                                        &nbsp<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </div>
                                      <div id="Bathrooms-list">
                                        <ul class="d-flex">
                                            <li><div class="btn badroom-btn mt-3">2 </div></li>
                                            <li><div class="btn active badroom-btn mt-3">3 </div></li>
                                            <li><div class="btn badroom-btn mt-3">4 </div></li>
                                            
                                            <li><div class="btn badroom-btn mt-3">5 +  </div></li>
                                            
                                        </ul>
                                       
                                      </div>
                                       <img src="https://thevaultrealestate.com/assets/images/search-btmline.png" class="img-fluid d-block">
                                </div>
                                 <div class="sec6 mt-2">
                                    <div class="feature" id="location">Location
                                        &nbsp<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </div>
                                      <form id="Location-list">
                                       <img src="https://thevaultrealestate.com/assets/images-r/serchlocation-map.png"class="mt-3">
                                      </form>
                                </div>
                            </div>
                        </div>
                        <div id="search_img" class="col-md-8 mobile-search-top">
                            <div class="row">
                                @foreach($search_property_now as $search_property)
                                <div id="filter_img" class="col-md-4 mb-4">
                                    <div class="card card_box5">
                                   
                                        <div class="img_box5">
                                            <img src="https://thevaultrealestate.com/assets/search/Frame 632.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="card-body text_box5">
                                            <h6>{{$search_property->developer_name}}</h6>
                                            <p>{{$search_property->location_country}}</p>
                                            <h5>$ {{$search_property->pricerange}}</h5>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <nav aria-label="Page navigation example">
                                <!-- <ul class="pagination d-flex align-items-center"> -->
                                  <!-- <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                    </a>
                                  </li> -->
                                  <!-- <li class="page-item active d-flex align-items-center justify-content-center"><a class="page-link text-center" href="#">1</a></li>
                                  <li class="page-item text-center"><a class="page-link text-center" href="#">2</a></li>
                                  <li class="page-item text-center"><a class="page-link text-center" href="#">3</a></li>
                                  <li class="page-item text-center"><a class="page-link text-center" href="#">...</a></li>
                                  <li class="page-item text-center"><a class="page-link text-center" href="#">32</a></li>
                                  <li class="page-item text-center">
                                    <a class="page-link page-arrw text-center" href="#" aria-label="Next">
                                      <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    </a>
                                  </li>
                                </ul> -->
                              </nav>
                        </div>
                    </div>
                    
                </div>
               
                <!-- start_two_image_container -->
                
                <section class="Popular-Searches search-ftrsec d-lg-block d-sm-none d-xs-none">
                    <ul>
                        <li><img src="https://thevaultrealestate.com/assets/images-r/seacrsecline.png"><span>Popular Searches</span></li>
                    </ul>
                    <div class="container">
                        <div class="row mobile-search-none">
                            <div class="col-md-3 mb-4">
                                <div class="card card_box5">

                                    <div class="img_box5">
                                        <img src=".\assets\search\Frame 632-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body text_box5">
                                        <h6>Project Name </h6>
                                        <p>Location name</p>
                                        <h5>$ {{$search_property->pricerange}}</h5>
                                    </div>
                    
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card card_box5">
                                    <div class="img_box5">
                                        <img src=".\assets\search\Frame 632-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body text_box5">
                                        <h6>Project Name </h6>
                                        <p>Location name</p>
                                        <h5>$000.000</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card card_box5">
                                    <div class="img_box5">
                                        <img src=".\assets\search\Frame 632-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body text_box5">
                                        <h6>Project Name </h6>
                                        <p>Location name</p>
                                        <h5>$000.000</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card card_box5">
                                    <div class="img_box5">
                                        <img src=".\assets\search\Frame 632-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body text_box5">
                                        <h6>Project Name </h6>
                                        <p>Location name</p>
                                        <h5>$000.000</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    
                          <!----mobile-slider------>
                    <div clas="row"> <div id="carouselExampleControls09" class="carousel d-lg-none d-sm-block d-xs-block" data-bs-ride="carousel">     
                        <div class="carousel-inner">
                        
                            <div class="carousel-item active">
                            <div class="col-md-3 mb-4">
                                <div class="card card_box5">
                                    <div class="img_box5">
                                        <img src=".\assets\search\Frame 632-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body text_box5">
                                        <h6>Project Name </h6>
                                        <p>Location name</p>
                                        <h5>$000.000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
    <div class="carousel-item">
      <div class="col-md-3 mb-4">
                                <div class="card card_box5">
                                    <div class="img_box5">
                                        <img src=".\assets\search\Frame 632-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body text_box5">
                                        <h6>Project Name </h6>
                                        <p>Location name</p>
                                        <h5>$000.000</h5>
                                    </div>
                                </div>
                            </div>
    </div>
    <div class="carousel-item">
      <div class="col-md-3 mb-4">
                                <div class="card card_box5">
                                    <div class="img_box5">
                                        <img src=".\assets\search\Frame 632-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body text_box5">
                                        <h6>Project Name </h6>
                                        <p>Location name</p>
                                        <h5>$000.000</h5>
                                    </div>
                                </div>
                            </div>
    </div>
  
  </div>
  <button class="carousel-control-prev mobile-sldr-btn" type="button" data-bs-target="#carouselExampleControls09" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next mobile-sldr-btn" type="button" data-bs-target="#carouselExampleControls09" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></div>
            <!----mobile-slider------>
    </div>
    <img src=".\assets\images\serachftrimg.png"width="100%" class="serchimg">
</section>
    



<!-- end_two_image_container -->
    
<!-- start_three_image_section -->

<!-- end_three_image_section -->


</section>

         
    
<!-- start_footer -->
<footer id="footer">
        <div class="container pt-5 pb-5">
            <div class="row footer_row mt-3">
                <div class="col-xl-4 col-md-12 col-12 ftr-rgt-pdn">
                <a href="index.html">
                    <img src="./assets/images/Logo gold 1.png" class="img-fluid footer_logo" alt="">
                </a>
                    <p>We are dedicated to guiding our clients to make the best real estate decisions possible by
                        providing professional knowledge, excellent client service, and a memorable experience.
                    </p>
                    <div class="footer_social">
                        <ul>
                             <a href="https://www.instagram.com/thevaultrealestate/"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                        
                            <a href="https://www.facebook.com/TheVaultRealEstateUAE?mibextid=ZbWKwL"><li><i class="fa fa-facebook-f" aria-hidden="true"></i> </li></a>
                        
                             <a class="tiktok-icon" href="https://www.tiktok.com/@thevaultrealestate?_t=8ZZJCRZ3dHK&_r=1"><li><i class="bi bi-tiktok"></i></li></a>
                
                            <a href="https://t.snapchat.com/UjnPjG2x"><li><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></li></a>
                        
                             <a href="https://www.linkedin.com/company/thevaultrealestate/"><li><i class="fa fa-linkedin" aria-hidden="true"></i></li></a>
                        
                            <a href="https://twitter.com/vaultrealestate"><li><i class="fa fa-twitter" aria-hidden="true"></i></li></a>
                        
                           <a href="https://www.youtube.com/@thevaultrealestate"> <li> <i class="fa fa-youtube-play" aria-hidden="true"></i> </li></a>
                        </ul>
                    </div>
                </div>
                <div class="footer_col col-xl-2 col-md-3 col-3">
                    <h3>Company</h3>
                    <ul>
                        <li> <a href="">Vision</a> </li>
                        <li> <a href="">Mission</a> </li>
                        <li> <a href="">The Team</a> </li>
                        <li> <a href="">Developers</a> </li>
                    </ul>
                </div>
                <div class=" footer_col col-xl-2 col-md-3 col-3">
                    <h3>Properties</h3>
                    <ul>
                        <li> <a href="">Buy</a> </li>
                        <li> <a href="">Sell</a> </li>
                        <li> <a href="">Rent</a> </li>
                        <li> <a href="">Off Plans</a> </li>
                    </ul>
                </div>
                <div class=" footer_col col-xl-2 col-md-3 col-3">
                    <h3>Our Services</h3>
                    <ul>
                        <li> <a href="">Financing</a> </li>
                        <li> <a href="">After Sale</a> </li>
                        <li> <a href="">V Design</a> </li>
                    </ul>
                </div>
                <div class="footer_col col-xl-2 col-md-3 col-3">
                    <h3>Categories</h3>
                    <ul>
                        <li> <a href="">Rent</a> </li>
                        <li> <a href="">Sale</a> </li>
                        <li> <a href="">Buy</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<a href="https://api.whatsapp.com/send?phone=%2B971588006088&text&app_absent=0" class="floats" target="_blank">
<i class="fa fa-whatsapp my-floats"></i>
</a>



<script>
    window.addEventListener('DOMContentLoaded', () => {
	new dualRangeSlider(document.querySelector(".dual-range"))
})


class dualRangeSlider {
	constructor(rangeElement) {
		this.range = rangeElement
		this.min = Number(rangeElement.dataset.min)
		this.max = Number(rangeElement.dataset.max)
		this.handles = [...this.range.querySelectorAll(".handle")]
		this.startPos = 0;
		this.activeHandle;
		
		this.handles.forEach(handle => {
			handle.addEventListener("mousedown", this.startMove.bind(this))
			handle.addEventListener("touchstart", this.startMoveTouch.bind(this))
		})
		
		window.addEventListener("mouseup", this.stopMove.bind(this))
		window.addEventListener("touchend", this.stopMove.bind(this))
		window.addEventListener("touchcancel", this.stopMove.bind(this))
		window.addEventListener("touchleave", this.stopMove.bind(this))
		
		const rangeRect = this.range.getBoundingClientRect();
		const handleRect = this.handles[0].getBoundingClientRect()
		this.range.style.setProperty("--x-1", "0px");
		this.range.style.setProperty("--x-2", rangeRect.width - handleRect.width/2 + "px");
		this.handles[0].dataset.value = this.range.dataset.min;
		this.handles[1].dataset.value = this.range.dataset.max;
	}
	
	startMoveTouch(e) {
		const handleRect = e.target.getBoundingClientRect()
		this.startPos = e.touches[0].clientX - handleRect.x;
		this.activeHandle = e.target;
		this.moveTouchListener = this.moveTouch.bind(this)
		window.addEventListener("touchmove", this.moveTouchListener);
	}
	
	startMove(e) {
		this.startPos = e.offsetX;
		this.activeHandle = e.target;
		this.moveListener = this.move.bind(this)
		window.addEventListener("mousemove", this.moveListener);
	}
	
	moveTouch(e) {
		this.move({clientX: e.touches[0].clientX})
	}
	
	move(e) {
		const isLeft = this.activeHandle.classList.contains("left")
		const property = isLeft ? "--x-1" : "--x-2";
		const parentRect = this.range.getBoundingClientRect();
		const handleRect = this.activeHandle.getBoundingClientRect();
		let newX = e.clientX - parentRect.x - this.startPos;
		if(isLeft) {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-2"));
			newX = Math.min(newX, otherX - handleRect.width)
			newX = Math.max(newX, 0 - handleRect.width/2)
		} else {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-1"));
			newX = Math.max(newX, otherX + handleRect.width)
			newX = Math.min(newX, parentRect.width - handleRect.width/2)
		}
		this.activeHandle.dataset.value = this.calcHandleValue((newX + handleRect.width/2) / parentRect.width)
		this.range.style.setProperty(property, newX + "px");

	}
	
	calcHandleValue(percentage) {
		return Math.round(percentage * (this.max - this.min) + this.min)
	}
	
	stopMove() {
		window.removeEventListener("mousemove", this.moveListener);
		window.removeEventListener("touchmove", this.moveTouchListener);
	}
}
</script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
	new dualRangeSlidero(document.querySelector(".dual-range1"))
})


class dualRangeSlidero {
	constructor(rangeElement) {
		this.range = rangeElement
		this.min = Number(rangeElement.dataset.min)
		this.max = Number(rangeElement.dataset.max)
		this.handles = [...this.range.querySelectorAll(".handle1")]
		this.startPos = 0;
		this.activeHandle;
		
		this.handles.forEach(handle => {
			handle.addEventListener("mousedown", this.startMove.bind(this))
			handle.addEventListener("touchstart", this.startMoveTouch.bind(this))
		})
		
		window.addEventListener("mouseup", this.stopMove.bind(this))
		window.addEventListener("touchend", this.stopMove.bind(this))
		window.addEventListener("touchcancel", this.stopMove.bind(this))
		window.addEventListener("touchleave", this.stopMove.bind(this))
		
		const rangeRect = this.range.getBoundingClientRect();
		const handleRect = this.handles[0].getBoundingClientRect()
		this.range.style.setProperty("--x-1", "0px");
		this.range.style.setProperty("--x-2", rangeRect.width - handleRect.width/2 + "px");
		this.handles[0].dataset.value = this.range.dataset.min;
		this.handles[1].dataset.value = this.range.dataset.max;
	}
	
	startMoveTouch(e) {
		const handleRect = e.target.getBoundingClientRect()
		this.startPos = e.touches[0].clientX - handleRect.x;
		this.activeHandle = e.target;
		this.moveTouchListener = this.moveTouch.bind(this)
		window.addEventListener("touchmove", this.moveTouchListener);
	}
	
	startMove(e) {
		this.startPos = e.offsetX;
		this.activeHandle = e.target;
		this.moveListener = this.move.bind(this)
		window.addEventListener("mousemove", this.moveListener);
	}
	
	moveTouch(e) {
		this.move({clientX: e.touches[0].clientX})
	}
	
	move(e) {
		const isLeft = this.activeHandle.classList.contains("left1")
		const property = isLeft ? "--x-1" : "--x-2";
		const parentRect = this.range.getBoundingClientRect();
		const handleRect = this.activeHandle.getBoundingClientRect();
		let newX = e.clientX - parentRect.x - this.startPos;
		if(isLeft) {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-2"));
			newX = Math.min(newX, otherX - handleRect.width)
			newX = Math.max(newX, 0 - handleRect.width/2)
		} else {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-1"));
			newX = Math.max(newX, otherX + handleRect.width)
			newX = Math.min(newX, parentRect.width - handleRect.width/2)
		}
		this.activeHandle.dataset.value = this.calcHandleValue((newX + handleRect.width/2) / parentRect.width)
		this.range.style.setProperty(property, newX + "px");

	}
	
	calcHandleValue(percentage) {
		return Math.round(percentage * (this.max - this.min) + this.min)
	}
	
	stopMove() {
		window.removeEventListener("mousemove", this.moveListener);
		window.removeEventListener("touchmove", this.moveTouchListener);
	}
}
</script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
	new dualRangeSlider3(document.querySelector(".dual-range3"))
})


class dualRangeSlider3 {
	constructor(rangeElement) {
		this.range = rangeElement
		this.min = Number(rangeElement.dataset.min)
		this.max = Number(rangeElement.dataset.max)
		this.handles = [...this.range.querySelectorAll(".handle3")]
		this.startPos = 0;
		this.activeHandle;
		
		this.handles.forEach(handle => {
			handle.addEventListener("mousedown", this.startMove.bind(this))
			handle.addEventListener("touchstart", this.startMoveTouch.bind(this))
		})
		
		window.addEventListener("mouseup", this.stopMove.bind(this))
		window.addEventListener("touchend", this.stopMove.bind(this))
		window.addEventListener("touchcancel", this.stopMove.bind(this))
		window.addEventListener("touchleave", this.stopMove.bind(this))
		
		const rangeRect = this.range.getBoundingClientRect();
		const handleRect = this.handles[0].getBoundingClientRect()
		this.range.style.setProperty("--x-1", "0px");
		this.range.style.setProperty("--x-2", rangeRect.width - handleRect.width/2 + "px");
		this.handles[0].dataset.value = this.range.dataset.min;
		this.handles[1].dataset.value = this.range.dataset.max;
	}
	
	startMoveTouch(e) {
		const handleRect = e.target.getBoundingClientRect()
		this.startPos = e.touches[0].clientX - handleRect.x;
		this.activeHandle = e.target;
		this.moveTouchListener = this.moveTouch.bind(this)
		window.addEventListener("touchmove", this.moveTouchListener);
	}
	
	startMove(e) {
		this.startPos = e.offsetX;
		this.activeHandle = e.target;
		this.moveListener = this.move.bind(this)
		window.addEventListener("mousemove", this.moveListener);
	}
	
	moveTouch(e) {
		this.move({clientX: e.touches[0].clientX})
	}
	
	move(e) {
		const isLeft = this.activeHandle.classList.contains("left3")
		const property = isLeft ? "--x-1" : "--x-2";
		const parentRect = this.range.getBoundingClientRect();
		const handleRect = this.activeHandle.getBoundingClientRect();
		let newX = e.clientX - parentRect.x - this.startPos;
		if(isLeft) {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-2"));
			newX = Math.min(newX, otherX - handleRect.width)
			newX = Math.max(newX, 0 - handleRect.width/2)
		} else {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-1"));
			newX = Math.max(newX, otherX + handleRect.width)
			newX = Math.min(newX, parentRect.width - handleRect.width/2)
		}
		this.activeHandle.dataset.value = this.calcHandleValue((newX + handleRect.width/2) / parentRect.width)
		this.range.style.setProperty(property, newX + "px");

	}
	
	calcHandleValue(percentage) {
		return Math.round(percentage * (this.max - this.min) + this.min)
	}
	
	stopMove() {
		window.removeEventListener("mousemove", this.moveListener);
		window.removeEventListener("touchmove", this.moveTouchListener);
	}
}
</script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
	new dualRangeSlider4(document.querySelector(".dual-range4"))
})


class dualRangeSlider4 {
	constructor(rangeElement) {
		this.range = rangeElement
		this.min = Number(rangeElement.dataset.min)
		this.max = Number(rangeElement.dataset.max)
		this.handles = [...this.range.querySelectorAll(".handle4")]
		this.startPos = 0;
		this.activeHandle;
		
		this.handles.forEach(handle => {
			handle.addEventListener("mousedown", this.startMove.bind(this))
			handle.addEventListener("touchstart", this.startMoveTouch.bind(this))
		})
		
		window.addEventListener("mouseup", this.stopMove.bind(this))
		window.addEventListener("touchend", this.stopMove.bind(this))
		window.addEventListener("touchcancel", this.stopMove.bind(this))
		window.addEventListener("touchleave", this.stopMove.bind(this))
		
		const rangeRect = this.range.getBoundingClientRect();
		const handleRect = this.handles[0].getBoundingClientRect()
		this.range.style.setProperty("--x-1", "0px");
		this.range.style.setProperty("--x-2", rangeRect.width - handleRect.width/2 + "px");
		this.handles[0].dataset.value = this.range.dataset.min;
		this.handles[1].dataset.value = this.range.dataset.max;
	}
	
	startMoveTouch(e) {
		const handleRect = e.target.getBoundingClientRect()
		this.startPos = e.touches[0].clientX - handleRect.x;
		this.activeHandle = e.target;
		this.moveTouchListener = this.moveTouch.bind(this)
		window.addEventListener("touchmove", this.moveTouchListener);
	}
	
	startMove(e) {
		this.startPos = e.offsetX;
		this.activeHandle = e.target;
		this.moveListener = this.move.bind(this)
		window.addEventListener("mousemove", this.moveListener);
	}
	
	moveTouch(e) {
		this.move({clientX: e.touches[0].clientX})
	}
	
	move(e) {
		const isLeft = this.activeHandle.classList.contains("left4")
		const property = isLeft ? "--x-1" : "--x-2";
		const parentRect = this.range.getBoundingClientRect();
		const handleRect = this.activeHandle.getBoundingClientRect();
		let newX = e.clientX - parentRect.x - this.startPos;
		if(isLeft) {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-2"));
			newX = Math.min(newX, otherX - handleRect.width)
			newX = Math.max(newX, 0 - handleRect.width/2)
		} else {
			const otherX = parseInt(this.range.style.getPropertyValue("--x-1"));
			newX = Math.max(newX, otherX + handleRect.width)
			newX = Math.min(newX, parentRect.width - handleRect.width/2)
		}
		this.activeHandle.dataset.value = this.calcHandleValue((newX + handleRect.width/2) / parentRect.width)
		this.range.style.setProperty(property, newX + "px");

	}
	
	calcHandleValue(percentage) {
		return Math.round(percentage * (this.max - this.min) + this.min)
	}
	
	stopMove() {
		window.removeEventListener("mousemove", this.moveListener);
		window.removeEventListener("touchmove", this.moveTouchListener);
	}
}
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#filter_type").change(function(){
            var id=$(this).val();
            console.log(id);
            var dataString = 'id='+ id;
            console.log(dataString);
            $.ajax({
                type: "GET",
                url: "{{url('/users/abc')}}",
                data: dataString,
                cache: false,
                success: function(data)
                {
                console.log(data); // I get error and success function does not execute
                } 
            });
        });
    });
</script>


    <!-- Vendor JS Files -->
    <script src="https://thevaultrealestate.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Template Main JS File -->
    <script src="https://thevaultrealestate.com/assets/js/header.js"></script>
    <script src="https://thevaultrealestate.com/assets/js/main.js"></script>
    <!-- slick css -->

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://thevaultrealestate.com/assets/vendor/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // var developer = $('#search_developer').val();
  
    $("#search_id").click(function(e){
        $("#search_img").empty();
        
        e.preventDefault();
        // var developer ="";

        // var porpose = $.('#porpose').text();
        var porpose = "Sale";
        var porpose_type = $("#sale_search option:selected").text();
        var location = $("#location_search").val();
        var popularity = $("#popularity option:selected").text();
        var min_sp_ft = $("#search_min_sq option:selected").text();
        var max_sp_ft = $("#search_max_sq option:selected").text();
        var pricerange = $("#sale_pricerange option:selected").text();
        var developer = $("#search_developer option:selected").val();
     
        $.ajax({
           type:'POST',
           url:"{{ route('searchfilter') }}",
           data:{porpose:porpose, porpose_type:porpose_type, location:location, popularity:popularity, popularity:popularity, min_sp_ft:min_sp_ft, max_sp_ft:max_sp_ft, pricerange:pricerange, developer:developer},
           success:function(data){
                if(data.status == "succes"){
                    var count = 0;
                    $.each(data.users, function () {
                        count = count+1;
                        console.log("ID: " + this.id);
                        
                    });
                    var i=0;
                    var myhtml = '<div class="card card_box5"><div class="img_box5"> <img src="https://thevaultrealestate.com/assets/search/Frame 632.png" alt="" class="img-fluid"></div> // <div class="card-body text_box5"><h6>'+this.id+'</h6><p>'+this.id+'</p><h5>'+this.id+'</h5></div></div></div>'
                    ;
                    for(i; i<2; i++){
                        
                        $("#search_img").append(myhtml);
                            $("#search_img").show();
                    }
                    $("#text").html('<h6 id="text" class="56-reslt">'+count+'</h6>');
                    console.log(count);
                }else{
                    alert("No data match");
                }
           }
        });
    
    });
  
    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
  
</script>
<script>
    var sks = [];
    $(document).ready(function() {
    $('#opt1').change(function() {
        sks1 = $(this).is(':checked') ? $('#opt1').val() : "FALSE";
        sks.push(sks1);
        display(sks);
        console.log(sks);
    });

    $('#opt2').change(function() {
        sks2 = $(this).is(':checked') ? $('#opt2').val() : "FALSE";
        sks.push(sks2);
        console.log(sks);
    });

    $('#opt3').change(function() {
        sks3 = $(this).is(':checked') ? $('#opt3').val() : "FALSE";
        sks.push(sks3);
        console.log(sks);
    });

    $('#opt4').change(function() {
        sks4 = $(this).is(':checked') ? $('#opt4').val() : "FALSE";
        sks.push(sks4);
    });

    $('#opt5').change(function() {
        sks5 = $(this).is(':checked') ? $('#opt5').val() : "FALSE";
        sks.push(sks5);
    });

    $('#opt6').change(function() {
        sks6 = $(this).is(':checked') ? $('#opt6').val() : "FALSE";
        sks.push(sks6);
    });

    $('#opt7').change(function() {
        sks7 = $(this).is(':checked') ? $('#opt7').val() : "FALSE";
        sks.push(sks7);
    });

    $('#opt8').change(function() {
        sks8 = $(this).is(':checked') ? $('#opt8').val() : "FALSE";
        sks.push(sks8);
    });

    $('#opt9').change(function() {
        sks9 = $(this).is(':checked') ? $('#opt9').val() : "FALSE";
        sks.push(sks9);
    });

    $('#opt10').change(function() {
        sks10 = $(this).is(':checked') ? $('#opt10').val() : "FALSE";
        sks.push(sks10);
    });

    $('#opt11').change(function() {
        sks11 = $(this).is(':checked') ? $('#opt11').val() : "FALSE";
        sks.push(sks11);
    });

    $('#opt12').change(function() {
        sks12 = $(this).is(':checked') ? $('#opt12').val() : "FALSE";
        sks.push(sks12);
    });

    $('#opt13').change(function() {
        sks13 = $(this).is(':checked') ? $('#opt13').val() : "FALSE";
        sks.push(sks13);
    });


    $('#opt14').change(function() {
        sks14 = $(this).is(':checked') ? $('#opt14').val() : "FALSE";
        sks.push(sks14);
    });

    $('#opt15').change(function() {
        sks15 = $(this).is(':checked') ? $('#opt15').val() : "FALSE";
        sks.push(sks15);
    });

    $('#opt16').change(function() {
        sks16 = $(this).is(':checked') ? $('#opt16').val() : "FALSE";
        sks.push(sks16);
        console.log(sks);
    });

    function display(product){
        $("#search_img").empty();
        console.log(product);
        $.each(product, function( index, value ) {
            productName = value; // Here, I'm getting selected value of dropdown 
            console.log(productName);
            });
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('searchfilter')}}",
            type: "POST",
            data:{
                'feature' : productName // in header request I'm getting value [productName: plastic product] *
                },
            success:function(data){
                if(data.status == "succes"){
                    var count = 0;
                    $.each(data.users, function () {
                        count = count+1;
                        console.log("ID: " + this.id);
                        
                    });
                    var i=0;
                    var myhtml = '<div class="card card_box5"><div class="img_box5"> <img src="https://thevaultrealestate.com/assets/search/Frame 632.png" alt="" class="img-fluid"></div> // <div class="card-body text_box5"><h6>'+this.id+'</h6><p>'+this.id+'</p><h5>'+this.id+'</h5></div></div></div>'
                    ;
                    for(i; i<2; i++){
                        
                        $("#search_img").append(myhtml);
                            $("#search_img").show();
                    }
                    $("#text").html('<h6 id="text" class="56-reslt">'+count+'</h6>');
                    console.log(count);}
            },
            error:function(e){
                console.log(e,'error');
            }
        });
}
});
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
</body>

</html>