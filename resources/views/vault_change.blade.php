@php
use App\Models\Developer;
$users = Developer::all();
$countries = ["Dubai", "Abu Dhabi"];
$states=["DownTown", "The Palm Jumeirah", "Dubai Hills", "Dubai Creek Harbour", "DIFC", "Za'abeel", "Jebel Ali", "Jumeirah Beach Residence", "Dubai Marina", "Blue Waters", "Sheikh Zayed Road", "Jumeirah Village Circle", "Jumeirah Village Triangle", "Barsha", "Qudra", "Dubai Investment Park","Yas Island","Saadiyat Island","Al Reem Island", "Sharjah"];
@endphp
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
 <!-- Important Owl stylesheet -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">

 <!-- Default Theme -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css">
<!--  jQuery 1.7+  -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

 <!-- Include js plugin -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js">
 </script>


  <link href="https://thevaultrealestate.com/assets/css/home.css" rel="stylesheet" type="text/css">
  <!--<link href="https://thevaultrealestate.com/assets/css/header-footer.css" rel="stylesheet">-->


  <!-----slider----->
<link rel="stylesheet" type="text/css" href="http://www.24limousine.com/wp-content/themes/24Limousine/assets/css/owl.carousel.min.css">

<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}

.subscribe-txt input::placeholder {
    color: #fff!important;
}

.carousel-nav-icon {
   height: 48px;
   width: 48px;
}
/* .carousel-item { 
      margin: 8px;
      height: 300px;
      background-size: cover;
      background-position: center center;
   
} */

.prjcticn1:hover::before {
    content: "";
    background-image: url('https://www.linkpicture.com/q/hover-img.png');
    /*width: 446.36px;*/
    /*height: 218.46px;*/
        width: 400px;
    height: 235px;
}



.prjct-cptn02:hover::before {
    content: "";
   background-image: url('https://www.linkpicture.com/q/hover-img.png');
    width: 400px;
    height: 235px;
}

.prjct-cptn03:hover::before {
    content: "";
   background-image: url('https://www.linkpicture.com/q/hover-img.png');
    width: 400px;
    height: 235px;
}

.prjct-cptn04:hover::before {
    content: "";
    background-image: url('https://www.linkpicture.com/q/hover-img.png');
    width: 400px;
    height: 235px;
}

 .hover-animation {
  position:relative;
}

.hover-animation img {
  position: absolute;

}



.hover-animation:hover img.image-front {
    opacity: 1;
    cursor: pointer;
    width: 320%;
    height: 789px;
    z-index:9999;
   
}

 .hover-animation2 {
  position:relative;
 width: 20%;
}

.hover-animation2 img {
  position: absolute;

}
.hover-animation img.image-front{
  opacity:0;
  width: 100%;
  height: 982px;
  transition: width 2s;
  transition: 2s ease-in-out;
}

.hover-animation2 img.image-front{
  opacity:0;
  width: 100%;
  height: 982px;
  /*transition: width 2s;*/
  /*transform: translateX(100%);*/
  transition: 2s ease-in-out;
    /*transition: .5s ease;*/
  right: 0;
  overflow: hidden;
}

.hover-animation2:hover img.image-front {
    /*opacity: 1;*/
    /*cursor: pointer;*/
    width: 384%;
    height: 789px;
    /*transform: translateX(-74%);*/
    /*z-index: 9999;*/
      opacity: 1;
    cursor: pointer;
}



button.carousel-control-next.home-right-icon {
    margin-right: -10%!important;
    display: block;
}
button.carousel-control-next.home-right-icon-right {
    position: absolute !important;
    left: 16%;
    top: 40% !important;
}
span.services-btm-img {
    content: "";
    position: absolute;
    background-image: url(https://i.ibb.co/jbBXJH8/Group-1-1.png);
    background-repeat: no-repeat;
    background-size: auto;
    width: 410px;
    height: 423.2px;
    right: 0%;
    /* top: 61px; */
    z-index: 999 !important;
    bottom: 12%;
}

.bg-background-overlay {
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: absolute;
}
.dropdown-toggle::after{
  display:none;
}

/*.crsl-inner{*/
/*    overflow:inherit;*/
/*}*/

</style>

</head>
 
<body>


    <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-center">
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul class="me-auto">
        <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#">Developers  <i class="bi bi-chevron-down"></i></a>
         <ul class="overflow-y-auto">
            <li><a href="search">Search</a></li>
            @foreach($users as $user)
              <li><a href="{{route('developers', $user->developerName)}}">{{$user->developerName}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="aboutus">About Us</a></li>
        <li><a href="index.html"><img src="https://thevaultrealestate.com/assets/images/index-page/Logo gold 1.webp" alt=""></a></li>
        <li><a class="nav-link scrollto " href="#">Our Services</a></li>
        <li><a class="nav-link scrollto" href="#">News</a></li>
        <li class="dropdown">
          <a href="#">
          <span> <img src="https://thevaultrealestate.com/assets/images/index-page/vector-icon.webp"></span> <i class="bi bi-chevron-down"></i>
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
        
         <li><a id="toggle" class="nav-link scrollto sidebar-nav" role="button" data-bs-toggle="offcanvas"
          href="#offcanvasScrolling" aria-controls="offcanvasScrolling">
          <img src="https://thevaultrealestate.com/assets/images/Menu_lines.png"></a></li>
        
        
        <!--<li><a id="toggle" class="nav-link scrollto sidebar-nav" href="#" data-bs-toggle="offcanvas"-->
        <!--  data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"  onclick="toggle(this.id)"><i class="bi bi-filter-right"></i></a></li>-->
      </ul>
      
  
     
   
    
      <i class="bi bi-list mobile-nav-toggle mobile-none"></i>
    </nav><!-- .navbar -->

    
          <!--offcanvas-->
         
         <div  class="offcanvas offcanvas-end bg-header "  tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
              
               <!---close-btn-->
               
              <!--<div class="offcanvas-header">-->
              <!--    <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
              <!--</div>-->
              
              <div class="">
                    <div class="bg-hdr-img">
                        <img class="img-fluid d-blcok" src="https://thevaultrealestate.com/assets/images/Logo gold 1.png" alt="" />
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
         
         
         <li><a href="venice-malta.html">Venice & Malta</a></li>
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
                                                <li><a href="castleton.html">Mag City</a></li>
                                                <li><a href="palm.html">palm</a></li>
         <li><a href="private-homes.html">Private Homes</a></li>
         <li><a href="sls.html">SLS</a></li>
         <li><a href="the-residences.html">Mag City</a></li>
         <li><a href="castleton.html">The Residences</a></li>
         <li><a href="tilal.html">tilal</a></li>
         <li><a href="sobha-hartland.html">Sobha Hartland</a></li>
         <li><a href="reportge-vaerdan.html">Reportge Vaerdan</a></li>
         <li><a href="mansio.html">Mansio</a></li>
         <li><a href="reportge-rukian-2.html">Reportge Rukian-2</a></li>
         <li><a href="the-valley.html">The Valley</a></li>
         <li><a href="rove-city-walk.html">Rove City Walk</a></li>
         <li><a href="Golf-heights.html">Golf heights</a></li>
                                         <li><a href="emaar-south-urbana 3.html">Emaar South Urbana 3</a></li>
                  <li><a href="emaar-south-urbana 4.html">Emaar South Urbana 4</a></li>
                                       
         <li><a href="emaar_mv.html">Emaar mv</a></li>
         <li><a href="fairway.html">Fairway</a></li>
         <li><a href="the-cove.html">The cove</a></li>
         <li><a href="creekside.html">Creekside</a></li>
<!--          <li><a href="hills-2.html">Damac Hills</a></li> -->
                                                <li><a href="hills-park.html">Hills Park</a></li>
                                       

                                    

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
           <!-- <li><a href="#>Developers</a></li> -->
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
     <!-- Background video -->
<div class="video-background-holder">
    
    
    <div class="bg-background-overlay" id="bg_over"></div>
  <!--<div class="video-background-overlay"></div>-->
    <video class="banner-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://thevaultrealestate.com/assets/images/The-Vault-Villa.mp4" type="video/mp4">
    </video><!-- end video source-->
    <div class="video-background-content container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <!--<h1 class="display-4">A Highter Standard of Realty</h1>         -->
        </div>
      </div><!-- end text/button area -->
    </div>
  </div>
</section><!-- End Hero -->

<section class="email-box d-lg-block d-sm-none d-xs-none" id="skipsec">
  <div class="container">
    <div class="row text-left skip-txt">
      <span onclick="myFunction()">Skip</span>
    </div>
    <div class="row">
      <div class="col-md-12 col-12 email-txt">
        <h2>Dont't miss our<br> hottest news updates!</h2>
          <p>Enter your email to recieve the most hottest news</p>
          <form class="subscribe-txt">
            <input type="text" name="text" placeholder="Enter Your Email Id">
            <button type="button" class="btn-info">Subscribe</button>
          </form>
      </div>
    </div>


</div>
</section>



   <!--header-detail-->
    <section class="header-detail">
      <div class="container">
        <form action="{{route('searchProperty')}}" method="POST">
          <div class="row hdr-brdr">
              @csrf
              <div class="col-lg-9 col-md-9 col-sm-12 col-12 d-sm-none d-md-block mobile-top01">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-12 slider-dropdown">
                    <label class="slider-txt">Property type</label>
                    <!--new-->
                    <div class="sec-center"> 	
                      <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
                      <label class="for-dropdown" for="dropdown">ALL <i class="bi bi-chevron-down me-5"></i></label>
                      <div class="section-dropdown"> 
                        <select name="property_type" id="color">
                        <option value="">Please select</option>
                          <option value="Studio">Studio</option>
                          <option value="Bedroom Apartment">Bedroom Apartment</option>
                          <option value="Loft">Loft</option>
                          <option value="Duplex">Duplex</option>
                          <option value="Townhouse">Townhouse</option>
                          <option value="Penthouse">Penthouse</option>
                          <option value="Villa">Villa</option>
                        </select>
                      </div>
                        
                    </div>
                    <!--end new-->
                  </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 slider-dropdown">
                    <label class="slider-txt">propose</label>
                    <!--new-->
                    <div class="sec-center"> 	
                      <input class="dropdown" type="checkbox" id="dropdown1" name="dropdown1"/>
                      <label class="for-dropdown" for="dropdown1">ALL <i class="bi bi-chevron-down me-5"></i></label>
                      <div class="section-dropdown"> 
                      <select name="porpose" id="porpose">
                          <option value="" class="for-dropdown">Please select</option>
                          <option value="BUY" class="for-dropdown-sub">BUY</option>
                          <option value="RENT">RENT</option>
                          <option value="SALE">SALE</option>
                      </select>
                      
                      </div>
                    </div>
      
                    <!--end new-->
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-12 col-12 slider-dropdown">
                    <label class="slider-txt">Location</label>
                    <!--new-->
                    <div class="sec-center"> 	
                      <input class="dropdown" type="checkbox" id="dropdown2" name="dropdown2"/>
                      <label class="for-dropdown" for="dropdown2">ALL <i class="bi bi-chevron-down me-5"></i></label>
                      <div class="section-dropdown"> 
                        <!-- <input class="dropdown-sub" type="checkbox" id="dropdown-sub4" name="dropdown-sub4"/>
                        <label class="for-dropdown-sub" for="dropdown-sub4">Country<i class="bi bi-chevron-down"></i></label>
                        
                        <div class="section-dropdown-sub mt-2"> 
                          <select id="location">
                            <option value="0">Select Cunrty</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                          </select>
                        </div>

                        <input class="dropdown-sub" type="checkbox" id="dropdown-sub3" name="dropdown-sub3"/>
                        <label class="for-dropdown-sub" for="dropdown-sub3">Stats<i class="bi bi-chevron-down"></i></label>
                        <div class="section-dropdown-sub mt-2"> 
                          <select id="aioConceptName">
                            <option value="">All</option>
                            <option value="0">DUPLEX</option>
                            <option value="1">VILLA</option>
                            <option value="2">PENTHOUSE</option>
                            <option value="2">TOWNHOUSE</option>
                            <option value="2">HALF FLOOR</option>
                            <option value="2">FULL FLOOR</option>
                            <option value="2">WHOLE BUILDING </option>
                            <option value="2">COMMERCIAL PROPERTY</option>
                          </select>
                        </div> -->

                        <select name="country">
                          <option value="">selec country<option>
                          @foreach ($countries as $country)
                              <option value="{{$country}}">{{ $country}}</option>
                          @endforeach
                      </select>

                      <select name="state">
                          @foreach ($states as $state)
                              <option value="">{{ $state}}</option>
                          @endforeach
                      </select>

                      <script>
                          $(function() {
                              $('select[name=country]').change(function() {
                                  var url =''+ $(this).val() + '/states/';

                                  $.get(url, function(data) {
                                      var select = $('form select[name= state]');

                                      select.empty();
                                      select.empty();

                                      $.each(data,function(key, value) {
                                          select.append('<option value=' + value.id + '>' + value.name + '</option>');
                                      });
                                  });
                              });
                          });
                      </script>
                      
                      </div>
                    </div>
                    <!--end new-->
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-12 col-12 slider-dropdown" style="border:none;">
                    <label class="slider-txt">Price Range</label>
                    <!--new-->
                    <div class="sec-center"> 	
                      <input class="dropdown" type="checkbox" id="dropdown6" name="dropdown6"/>
                      <label class="for-dropdown" for="dropdown6">ALL <i class="bi bi-chevron-down me-5"></i></label>
                      <div class="section-dropdown"> 
                        <input class="dropdown-sub" type="checkbox" id="dropdown-sub5"/>
                        <label class="for-dropdown-sub" for="dropdown-sub5">MIN PRICE<i class="bi bi-chevron-down"></i></label>
                        
                        <div class="section-dropdown-sub mt-2"> 
                          <select name="minprice" id="minprice">
                              <option value="">No selected</option>
                              <option value="1000">1000</option>
                              <option value="8000">2000</option>
                              <option value="3000">3000</option>
                          </select>
                        </div>

                        <input class="dropdown-sub " type="checkbox" id="dropdown-sub9"/>
                        <label class="for-dropdown-sub mt-2" for="dropdown-sub9">MAX PRICE<i class="bi bi-chevron-down"></i></label>
                        <div class="section-dropdown-sub mt-2"> 
                          <select name="maxprice" id="maxprice">
                              <option value="">No selected</option>
                              <option value="5000">5000</option>
                              <option value="56000">6000</option>
                              <option value="9000">9000</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!--end new-->
                  </div>

                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-12">  
                <button type="submit" class="btn btn-info mt-2">FIND MY PROPERTY</button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info mobile-modal-button d-lg-none d-sm-block d-xs-block trigger">FIND MY <b>PROPERTY</b></button>     
              </div>
          </div>
          </form>
      </div>
  </section>



<!-- Modal -->
<div class="modal1">
    <div class="modal-content1">
        <span class="close-button1">×</span>
     <div class="row hdr-brdr">
          <div class="col-lg-9 col-md-9 col-sm-12 col-12 d-lg-none d-sm-block d-xs-block d-md-none mobile-mdl-top01">
              <div class="row">
                  <div class="dropdown">
		<p>Property Type</p>
    <button class="btn btn-default dropdown-toggle w-100 d-flex P-text justify-content-between" type="button" data-toggle="dropdown">All
    <i class="bi bi-chevron-down"></i></button>
    <ul class="dropdown-menu menu2 ">
     <li class="dropdown-submenu menu1">
            <a class="test" href="#">Ready to Move<i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu menu2">
              <a href="#" class="rounded-top">Duplex</a>
                       <li><a href="#" class="rounded-bottom">Villa</a></li>
                         <li><a href="#" class="rounded-top">Penthouse</a></li>
                         <li><a href="#" class="rounded-bottom">Townhouse</a></li>
                         <li><a href="#" class="rounded-top">Half Floor</a></li>
                         <li><a href="#" class="rounded-bottom">Full Floor</a></li>
                         <li><a href="#" class="rounded-top">Whole Building</a></li>
                         <li><a href="#" class="rounded-bottom">Commercial Property</a></li>
            </ul>
          </li>
      <li><a tabindex="-1" href="#">Off Plans</a></li>
    </ul>
  </div>
	
	<div class="dropdown">
		<p>Propose</p>
    <button class="btn btn-default dropdown-toggle P-text w-100 d-flex justify-content-between" type="button" data-toggle="dropdown">All
    <i class="bi bi-chevron-down"></i></button>
   <ul class="dropdown-menu menu2 ">
    
                       <li><a href="#" class="rounded-bottom">Buy</a></li>
                         <li><a href="#" class="rounded-top">Rent</a></li>
                         <li><a href="#" class="rounded-bottom">Sale</a></li>
            </ul>
          
   
  </div>
	
	<div class="dropdown">
		<p>Location</p>
    <button class="btn btn-default dropdown-toggle P-text w-100 d-flex justify-content-between" type="button" data-toggle="dropdown">All
    <i class="bi bi-chevron-down"></i></button>
   <ul class="dropdown-menu menu2 ">
     <li class="dropdown-submenu menu1">
            <a class="test" href="#">Ready to Move<i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu menu2">
              <a href="#" class="rounded-top">Duplex</a>
                       <li><a href="#" class="rounded-bottom">Villa</a></li>
                         <li><a href="#" class="rounded-top">Penthouse</a></li>
                         <li><a href="#" class="rounded-bottom">Townhouse</a></li>
                         <li><a href="#" class="rounded-top">Half Floor</a></li>
                         <li><a href="#" class="rounded-bottom">Full Floor</a></li>
                         <li><a href="#" class="rounded-top">Whole Building</a></li>
                         <li><a href="#" class="rounded-bottom">Commercial Property</a></li>
            </ul>
          </li>
      <li><a tabindex="-1" href="#">Off Plans</a></li>
    </ul>
  </div>
	
		<div class="dropdown">
		<p>Price Range</p>
    <button class="btn btn-default dropdown-toggle P-text w-100 d-flex justify-content-between" type="button" data-toggle="dropdown">All
     <i class="bi bi-chevron-down"></i></button>
     <ul class="dropdown-menu menu2 ">
     <li class="dropdown-submenu menu1">
            <a class="test" href="#">Max Price<i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu menu2">
                       <li><a href="#" class="rounded-bottom">300,000 AED</a></li>
                         <li><a href="#" class="rounded-top">400,000 AED</a></li>
                         <li><a href="#" class="rounded-bottom">500,000 AED </a></li>
                         <li><a href="#" class="rounded-top">600,000 AED</a></li>
                         <li><a href="#" class="rounded-bottom">600,000 AED</a></li>
                         <li><a href="#" class="rounded-top">800,000 AED</a></li>
            
            
            
            </ul>
     <li> <a class="test" href="#">Max Price<i class="bi bi-chevron-down"></i></a>
      <ul class="dropdown-menu menu2">
                       <li><a href="#" class="rounded-bottom">300,000 AED</a></li>
                         <li><a href="#" class="rounded-top">400,000 AED</a></li>
                         <li><a href="#" class="rounded-bottom">500,000 AED </a></li>
                         <li><a href="#" class="rounded-top">600,000 AED</a></li>
                         <li><a href="#" class="rounded-bottom">600,000 AED</a></li>
                         <li><a href="#" class="rounded-top">800,000 AED</a></li>
            
            
            
            </ul>
     </li>
         
      
    </ul>
  </div>
              
            </div>
     </div>
    </div>
</div>
</div>



      <!--end header detail-->


  <section class="developers-sec vector-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">

          
          <div class="title-caption">
            <h2 class="title">Developers</h2>
            <p>Real estate developers timetable, build and manage properties and communities. They use technology to improve the process of building and maintaining properties with an emphasis on sustainability. 
            They turn plans into reality through their expertise in real estate development.</p>
          </div>
          <a href="#>
          <button class="carousel-control-next home-right-icon-right" type="button">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </a>
        </div>

        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="developer-three-img">
          
          
             <div id="carouselExampleControls" class="carousel slide d-lg-block d-sm-none" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        
        <div class="row">
            <div class="col-xl-4">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@97.webp" class="d-block w-100" alt="...">
            </div>
            <div class="col-xl-4">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@98.webp" class="d-block w-100" alt="...">
            </div>
            <div class="col-xl-4">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@96.webp" class="d-block w-100" alt="...">
            </div>
        </div>
      
      
    </div>
    <div class="carousel-item">
       <div class="row">
            <div class="col-xl-4">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@97.webp" class="d-block w-100" alt="...">
            </div>
            <div class="col-xl-4">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@98.webp" class="d-block w-100" alt="...">
            </div>
            <div class="col-xl-4">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@96.webp" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next home-right-icon" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
      </div> 
        
        
        
        
        
        <!----Mobile-Slider---------->
      <section class="testimonials d-lg-none d-sm-block d-xs-block">
             <div class="inner-testimonials">
               <div class="owl-carousel custome_slide" id="slide-testimonal1">
                <div class="test_img">
                  <div class="main-reviewimage">
                    <img src="https://thevaultrealestate.com/assets/images/@97.jpg" style="opacity: 1;" alt="">
                  </div>
           
                </div>
               
               <div class="test_img">
                 <div class="main-reviewimage">
                    <img src="https://thevaultrealestate.com/assets/images/@98.jpg" style="opacity: 1;" alt="">
                 </div>
               </div>
               
               
               <div class="test_img">
                 <div class="main-reviewimage">
                   <img src="https://thevaultrealestate.com/assets/images/@96.jpg" style="opacity: 1;" alt="">
                 </div>
               </div>    
              </div>
             </div>
           </section>
        
<!--         <div id="carouselExampleControls01" class="carousel slide d-lg-none d-sm-block d-xs-none" data-bs-ride="carousel">
         <div class="carousel-indicators sliderdot">
    <button type="button" data-bs-target="#carouselExampleControls01" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleControls01" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleControls01" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
          <div class="carousel-inner">
          
           <div class="carousel-item mobile-sldr1 active">
            <a href="#> <img src="https://thevaultrealestate.com/assets/images/@97.jpg" class="d-block w-100" alt="..."></a>
           </div>
          
           <div class="carousel-item mobile-sldr1">
               <a href="#> <img src="https://thevaultrealestate.com/assets/images/@98.jpg" class="d-block w-100" alt="..."></a>
           </div>
          
           <div class="carousel-item mobile-sldr1">
               <a href="#><img src="https://thevaultrealestate.com/assets/images/@96.jpg" class="d-block w-100" alt="..."></a>
           </div>

        </div>
  <button class="carousel-control-prev mobile-sldr-btn" type="button" data-bs-target="#carouselExampleControls01" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next mobile-sldr-btn" type="button" data-bs-target="#carouselExampleControls01" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
        
        
        </div>
        
        </div>


       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="project-box">
              <h2 class="title"><span class="vellaysection-side-bdrs"></span>Projects</h2>
            </div>   
        </div>
      </div>
  
  
      <div class="row mobile-counter" id="counter">
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 prjct-aftr-img01">
          <div class="project-caption prjcticn1">
           <h2 class="timer" data-from="10" data-to="232" data-speed="1000" data-target="#yesyes">10</h2>
          
          <p>Available <br>
            Villas</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-12 prjct-aftr-img02">
          <div class="project-caption prjct-cptn02">
           <h2 class="timer" data-from="8" data-to="26" data-speed="1000" data-target="#yesyes">8</h2>
          
          <p>Available<br> Penthouses</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-12 prjct-aftr-img03">
          <div class="project-caption prjct-cptn03">
           <h2 class="timer" data-from="48" data-to="368" data-speed="1000" data-target="#yesyes">48</h2>
          
          <p>Available<br> Townhouses</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-12 prjct-aftr-img04">
          <div class="project-caption prjct-cptn02">
           <h2 class="timer" data-from="82" data-to="1390" data-speed="1000" data-target="#yesyes">82</h2>
          
          <p>Available <br>Apartment</p>
          </div>
        </div>

        <span class="project-aftr-btm-img"></span>
      </div>
    
      <!-----mobile-view---->
       <div class="row d-lg-none d-sm-block d-xs-block mobileview" id="counter">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prjct-aftr-img01">
          <div class="project-caption prjcticn1">
           <h2 class="timer" data-from="10" data-to="232" data-speed="1000" data-target="#yesyes">10</h2>
          
          <p>Available <br>
            Villas</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prjct-aftr-img02">
          <div class="project-caption prjct-cptn02">
           <h2 class="timer" data-from="8" data-to="26" data-speed="1000" data-target="#yesyes">8</h2>
          
          <p>Available<br> Penthouses</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prjct-aftr-img03">
          <div class="project-caption prjct-cptn03">
           <h2 class="timer" data-from="48" data-to="368" data-speed="1000" data-target="#yesyes">48</h2>
          
          <p>Available<br> Townhouses</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prjct-aftr-img04">
          <div class="project-caption prjct-cptn02">
           <h2 class="timer" data-from="82" data-to="1390" data-speed="1000" data-target="#yesyes">82</h2>
          
          <p>Available <br>Apartment</p>
          </div>
        </div>

        <span class="project-aftr-btm-img"></span>
      </div>
    
    
     </div>
  </section>


<style>
  .testimonials {
     position: relative;
}
.inner-testimonials .owl-dots {
     display: none;
}
.custome_slide.owl-carousel .owl-item.active.center .main-reviewimage {
     border: 2px solid #fff;
}
.main-reviewimage {
     border-radius: 0%;
     height: 310px;
     width: 100%;
     background: #000;
}
.main-reviewimage img {
     opacity: 0.3;
}
#slide-testimonal .active.center .main-reviewimage img {
     opacity: 1;
}
.test_img {
     position: relative;
     opacity: 1;
     -webkit-transition: .4s ease all;
     transition: .4s ease all;
     margin: 0 -48px;
     margin-top: 40px;
}
.inner-testimonials {
     width: 100%;
     max-width: 680px;
     margin: 0 auto;
}
#slide-testimonal .center .test_img:before {
     content: none;
     transition: 0.7s ease-in-out;
}
.test_img img {
     border-radius: 100%;
     overflow: hidden;
     margin: 0 auto;
     height: 100%;
     object-fit: cover;
}
body {
     font-family: tahoma;
}
.custome_slide.owl-carousel .owl-item.active.center {
     transform: scale(1.3);
     margin-top: 0 !important;
     position: relative;
     z-index: 999;
     -webkit-transform: scale(1);
     transform: scale(1);
}
.custome_slide.owl-carousel .owl-item {
     transform: scale(0.7);
     padding: 10px 0px;
     transition: all 0.5s;
}
 .testimonial_detail {
     text-align: center;
}
 .testimonial_detail {
     transform: scale(0.7) !important;
     width: 447px;
     position: relative;
     left: -71px;
}
.testimonial_detail h4 {
     font-size: 38px;
     margin: 0;
}
 .testimonial_detail p {
     color: #ccc;
     font-size: 26px;
}
.custome_slide.owl-carousel .active .testimonial_detail {
     display: none;
}
.custome_slide.owl-carousel .active.center .testimonial_detail {
     display: block !important;
}

@media only screen and (max-width:767px){
  .main-reviewimage {
    height: 400px;
    width: 425px;
    margin: 0 auto;
    display: block;
  }
  .testimonial_detail {
    left: inherit;
    width: 100%;
  }
}
</style>

  <section class="services-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 order-lg-1 order-2">
          <div class="sevices-box d-lg-block d-sm-none dxs-none">
            <ul class="list-items">
                <li>
                   <img class="imagetff w-100" src="https://thevaultrealestate.com/assets/images/index-page/Group16073.webp">
                  <!--<img class="mx-auto img-fluid d-block first01" src="https://thevaultrealestate.com/assets/images/Group16073.png">-->
                </li>
                <li>
                  <img class="imagetff02 w-100" src="https://thevaultrealestate.com/assets/images/index-page/Group16074.webp" class="mx-auto img-fluid d-block" alt="" />
                </li>
                <li>
                  <img class="imagetff03 w-100" src="https://thevaultrealestate.com/assets/images/index-page/Group16077.webp" class="mx-auto img-fluid d-block" alt="" />
                </li>
            </ul>
          </div>
        
          <!-- mobile-slider----->
        
            <section class="testimonials d-lg-none d-sm-block d-xs-block">
             <div class="inner-testimonials">
               <div class="owl-carousel custome_slide" id="slide-testimonal">
                <div class="test_img">
                  <div class="main-reviewimage">
                    <img src="https://thevaultrealestate.com/assets/images/index-page/Group16073.webp" alt="">
                  </div>
           
                </div>
               
               <div class="test_img">
                 <div class="main-reviewimage">
                    <img src="https://thevaultrealestate.com/assets/images/index-page/Group16074.webp" alt="">
                 </div>
               </div>
               
               
               <div class="test_img">
                 <div class="main-reviewimage">
                   <img src="https://thevaultrealestate.com/assets/images/index-page/Group16077.webp" alt="">
                 </div>
               </div>    
              </div>
             </div>
           </section>
        
          <!-- mobile-slider----->
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex align-items-center order-lg-2 order-1">

          
          <div class="service-title-caption">
            <h2 class="service-title">Our Services<span class="services-border"></span></h2>
            <p>The ongoing mission of “The Vault” is to provide comprehensive, concise, and up-to-date real estate solutions to those looking to buy, rent, sell or invest in properties in Dubai. </p>
            <hr class="our-btm-bdr">
              <span class="services-btm-img"></span>
          </div>

         
        </div>
      </div>

    
    </div>
  </section>

  <section class="featured-sec">
    <div class="container-fluid">


<style>

ul.tuff-img {
list-style: none;
    display: flex;
    margin-top: 20px;
    padding: 0;
}
ul.tuff-img li {
    margin: 13px;
}
ul.tuff-img li img {
    width: 150px;
    border-radius: 117px;
    height: 150px;
}
img.img-fluid.d-block.icn-img {
    width: 53% !important;
    display: block;
    height: 40%;
}

.hover-animation,.hover-animation1 {
    width: 20% !important;
}



</style>


      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="feature-title">
         
          <img src="https://thevaultrealestate.com/assets/images/index-page/layer51.webp" class="img-fluid d-block" alt="" />
          <h2>Featured Listings <span class="ftr-border"></span></h2>
         </div>
        </div>
      </div>
      
      
          <div class="row text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="pb-5 position-relative">
            <div id="demo" class="carousel position-relative" >
                 
                <div class="carousel-inner ftr-slider-show">
                  <div class="carousel-item active carousel-item-left">
                    <div class="d-flex">
                        
                        
                        <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation">
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property01.webp" class="ftr-image image-back w-100" alt="" />
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property001.webp" class="ftr-image image-front" alt="" />
                          </div>
                        
                        
                        
                        <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation">
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property06.webp" class="ftr-image image-back w-100" alt="" />
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property006.webp" class="ftr-image image-front" alt="" />
                          </div>
                          
                        <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation">
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property02.webp" class="ftr-image image-back w-100" alt="" />
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property002.webp" class="ftr-image image-front" alt="" />
                          </div>
                          
                         <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation2">
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property07.webp" class="ftr-image image-back w-100" alt="" />
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property007.webp" class="ftr-image image-front" alt="" />
                          </div>
                          
                          
                           <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation2">
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property08.webp" class="ftr-image image-back w-100" alt="" />
                          <img src="https://thevaultrealestate.com/assets/images/index-page/Property008.webp" class="ftr-image image-front" alt="" />
                          </div>
                         
                          
                    </div>

                  </div>	
                  <div class="carousel-item carousel-item-next carousel-item-left">
                      <div class="d-flex">
                          
                        <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation1">
                          <img src="https://thevaultrealestate.com/assets/images/maskgroup1.png " class="ftr-image " alt="" />
                        </div>
                        
                        <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation1">
                          <img src="https://thevaultrealestate.com/assets/images/maskgroup1.png " class="ftr-image " alt="" />
                        </div>
                          
                        <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation1">
                          <img src="https://thevaultrealestate.com/assets/images/maskgroup2.png" class="ftr-image" alt="" />
                          </div>
                          
                          <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation1">
                            <img src="https://thevaultrealestate.com/assets/images/maskgroup3.png" class="ftr-image" alt="" />
                            </div>
                            
                            <div class="col-lg-2 col-sm-12 col-12 d-flex flex-column m-0 p-0 hover-animation1">
                            <img src="https://thevaultrealestate.com/assets/images/maskgroup3.png" class="ftr-image" alt="" />
                            </div>
                            
                      </div>
  
                    </div>
                   
                </div>
                

                    <a class="carousel-control-prev" href="#demo" data-slide="prev" style="transform: rotate(-180deg);display:none;">
                       <i class="fas fa-chevron-left" style="display: none;"></i>
                    </a>
                    <a class="carousel-control-next mobile-nn" href="#demo1" data-slide="next" style="transform: rotate(-360deg);">
                       <i class="fas fa-chevron-left" style="display: none;"></i>
                    </a>                
                </div>


        </div>
        </div>
      </div>


      <span class="feature-btm-img"></span>
    </div>
  </section>

  <section class="welcome-sec">
    <div class="container">
      <div class="welcome-title">
        <h2><span class="services-border001"></span>Welcome to The Vault Real Estate</h2>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
          <div class="welcome-image">
            <img src="https://thevaultrealestate.com/assets/images/index-page/image288.webp" class="mx-auto img-fluid d-block" alt="">
          </div>
            <div class="row card-marg">
                                <div class="col-md-12">
                                    <ul class="tuff-img">
                                        <li>
                                              <img src="https://thevaultrealestate.com/assets/images/index-page/Dalia-Nahlous.webp" alt="">
                                        </li>
                                         <li>
                                              <img src="https://thevaultrealestate.com/assets/images/index-page/Ahmed-Abozaid.webp" alt="">
                                        </li>
                                         <li>
                                              <img src="https://thevaultrealestate.com/assets/images/index-page/Alejandro Calderon.webp" alt="">
                                        </li>
                                        <li class="meetteeam"><h5>Meet The <br>Team</h5>
                                           <a href="aboutus.html">
                                                <span class=""><img class="img-fluid d-block icn-img" src="https://thevaultrealestate.com/assets/images/index-page/sdr-lft-icon.webp" alt=""></span>
                                           </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                 
                                </div>
          
          </div>
         
        
        

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex">

          
          <div class="welcome-title-caption">
            <h2 class="welcome-title">Our Founders<span class="welcome-border"></span></h2>
            <p>Khalid Al Fahim and Abir Al Sadek, wanted to create a company where people could grow and achieve without the fear of being fought. 
            That's why we empower our employees to do what they do best and give them the tools they need to succeed.
            We also emphasize capacity, energy, and creativity—we want our employees to thrive in their work!
 </p>
            
 <p>We specialize in niche markets like Dubai and Abu Dhabi, which gives us an edge over other real estate developers because we can provide specialized services for these areas. We are very selective when working with developers—we only partner with those who share our values and vision for success.</p>
 <div class=" ourbutton"><h5>Read <br>More</h5>
  <a href="aboutus.html">
       <span class=""><img class="img-fluid d-block" src="https://thevaultrealestate.com/assets/images/sdr-lft-icon.png" alt="" style="transform: rotate(90deg);"></span>
  </a>
</div>
          </div>
          
        </div>
      </div>
    </div>
  </section>


  <section class="consultation-sec">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-7 col-sm-12 col-12 d-flex justify-content-center order-lg-1 order-2">
          
          <div class="consultation-form">
            <div class="consultation-title">
              <h2>Need private consultation?<span class="consultation-border"></span></h2>
            </div>
            <form>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label class="cstm-name">Name *</label><br>
                  <input type="text" class="frm-custom" placeholder="Example Name" name="name" required>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label class="cstm-name">Email *</label><br>
                  <input type="email" class="frm-custom" placeholder="example@gmail.com" name="email" required>
                </div>
              </div>
           
            
          
           
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label class="cstm-name">Phone Number *</label><br>
                  <input type="text" max="10" min="1" class="frm-custom" placeholder="123 4567" name="Number" required>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label class="cstm-name">Preferred Language</label><br>
                  <select class="frm-custom">
                    <option selected>English</option>
<!--                     <option>...</option> -->
                  </select>
            
                </div>
              </div>
           

           
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label class="cstm-name">Project of Interest *</label><br>
                  <input type="text" class="frm-custom" placeholder="Enter email" name="email" required>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <button type="button" class="btn cstm-button">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 col-12 p-0 order-lg-1 order-1">
          <div class="consultation-image">
            <img src="https://thevaultrealestate.com/assets/images/index-page/pexels-alex-azabache-3214995 1.webp" class="img-fluid d-block" alt="" />
          </div>
        </div>
      </div>
    </div>
    <span class="consultation-btm-image"></span>
  </section>






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
                             <a href="https://www.instagram.com/thevaultrealestate/" target="_blank"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                        
                            <a href="https://www.facebook.com/TheVaultRealEstateUAE?mibextid=ZbWKwL" target="_blank"><li><i class="fa fa-facebook-f" aria-hidden="true"></i> </li></a>
                        
                             <a class="tiktok-icon" href="https://www.tiktok.com/@thevaultrealestate?_t=8ZZJCRZ3dHK&_r=1" target="_blank"><li><i class="bi bi-tiktok"></i></li></a>
                
                            <a href="https://t.snapchat.com/UjnPjG2x" target="_blank"><li><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></li></a>
                        
                             <a href="https://www.linkedin.com/company/thevaultrealestate/" target="_blank"><li><i class="fa fa-linkedin" aria-hidden="true"></i></li></a>
                        
                            <a href="https://twitter.com/vaultrealestate" target="_blank"><li><i class="fa fa-twitter" aria-hidden="true"></i></li></a>
                        
                           <a href="https://www.youtube.com/@thevaultrealestate" target="_blank"> <li> <i class="fa fa-youtube-play" aria-hidden="true"></i> </li></a>
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
$(document).ready(function(){
  $('.menu1 a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});


$(document).ready(function(){
  $('.menu01 a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});

$(document).ready(function(){
  $('.menu001 a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});

$(document).ready(function(){
  $('.menu0001 a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

<script>

var modal1 = document.querySelector(".modal1");
var trigger = document.querySelector(".trigger");
var closeButton = document.querySelector(".close-button1");

function toggleModal() {
    modal1.classList.toggle("show-modal1");
}

function windowOnClick(event) {
    if (event.target === modal1) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);

</script>

<script>
$('#slide-testimonal1').owlCarousel({
	margin: 0,
	center: true,
	loop: true,
	nav: true,
	responsive: {
	0: {
	   items: 3
	},
	768: {
	   items: 2,
	margin: 15,
	},
	1000: {
	   items: 3,
	}
    }
});



$('#slide-testimonal').owlCarousel({
	margin: 0,
	center: true,
	loop: true,
	nav: true,
	responsive: {
	0: {
	   items: 3
	},
	768: {
	   items: 2,
	margin: 15,
	},
	1000: {
	   items: 3,
	}
    }
});
</script>



<script>
    var myCarousel = document.querySelector('#demo')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false
})
</script>


<script> 

//=======Our-Services=section==========>
$(document).ready(function(){  
  $(".imagetff").hover(function(){  
    $(this).attr('src','assets/images/Group16073-01.png') 
    }, function(){  
    $(this).attr('src','assets/images/index-page/Group16073.webp');  
  });  
});  

//========>
$(document).ready(function(){  
  $(".imagetff02").hover(function(){  
    $(this).attr('src','assets/images/Group16074-01.png') 
    }, function(){  
    $(this).attr('src','assets/images/index-page/Group16074.webp');  
  });  
});  

//========>
$(document).ready(function(){  
  $(".imagetff03").hover(function(){  
    $(this).attr('src','assets/images/Group16077-01.png') 
    }, function(){  
    $(this).attr('src','assets/images/index-page/Group16077.webp');  
  });  
});  
</script>  
    


<script>
function myFunction() {
    
  document.getElementById('bg_over').style='display:none';
  const element = document.getElementById("skipsec");
  element.remove();
}

</script>


   <script>

// jQuery("#carousel").owlCarousel({
//   autoplay: true,
//   rewind: true, /* use rewind if you don't want loop */
//   margin: 20,
//   /*
//   animateOut: 'fadeOut',
//   animateIn: 'fadeIn',
//   */
//   responsiveClass: true,
//   autoHeight: true,
//   autoplayTimeout: 3000,
//   smartSpeed: 800,
//   nav: true,
//   responsive: {
//     0: {
//       items: 3
//     },

//     600: {
//       items: 3
//     },

//     1024: {
//       items: 3
//     },

//     1366: {
//       items: 3
//     }
//   }
// });
//     </script>


     <script>
//       /**
//   * Clients Slider
//   */
//   new Swiper('.clients-slider', {
//     speed: 400,
//     loop: true,
//     autoplay: {
//       delay: 5000,
//       disableOnInteraction: false
//     },
//     slidesPerView: 'auto',
//     pagination: {
//       el: '.swiper-pagination',
//       type: 'bullets',
//       clickable: true
//     },
//     breakpoints: {
//       320: {
//         slidesPerView: 2,
//         spaceBetween: 40
//       },
//       480: {
//         slidesPerView: 3,
//         spaceBetween: 60
//       },
//       640: {
//         slidesPerView: 3,
//         spaceBetween: 80
//       },
//       992: {
//         slidesPerView: 3,
//         spaceBetween: 120
//       }
//     }
//   });
//     </script>



      
 <script>
 
 (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.text(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

    jQuery(function ($) {
     
      // start all the timers
      $('.timer').each(count);
      
      // restart a timer when a button is clicked
      $( window ).scroll(function () {console.log($(window).scrollTop());
    if($(window).scrollTop() > 300 && $(window).scrollTop() < 850)
    {
       $('.timer').each(count);
     }
      });
      
      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
 
</script> 


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      
      </script>
  <!-----slider-script----->

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.24limousine.com/wp-content/themes/24Limousine/assets/js/owl.carousel.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="https://thevaultrealestate.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="https://thevaultrealestate.com/assets/js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>
