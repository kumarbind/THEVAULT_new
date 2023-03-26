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
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>The Vault</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://thevaultrealestate.com/assets/img/Logo gold 1.png" rel="icon">
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

.consultation-image img {
    height: 850px;
    width: 100%;
}
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
height: 720px;
/*     height: 789px; */
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
    height: 720px;
/*     height: 789px; */
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


<style>
    

    /*=======*/
    .tbs-row {
        display: flex;
        justify-content: space-between;
        margin: 0% 12%;
    }

    /* .hide-tbs {
        display: none;
    } */

    .d_none-tab {
        display: none;
    }

    .four-tabs {
        display: flex;
    }

    .circle :active {
        background-color: antiquewhite;
    }
    .tab-content {
    width: 100%;
    margin: 0 auto;
    box-shadow: 2.67366px 0.891221px 12.4771px rgba(0, 0, 0, 0.4);
    background: #fff;
    padding: 14px;
    border-radius: 42px;
}
.top-search-sec {
    display: flex;
}
ul.mdl-tbas {
    display: flex;
    padding: 0;
    margin: 0;
}
.top-search-sec01 {
    display: flex;
    justify-content: space-between;
    padding: 0 5%;
}

.top-srch-text>li a.active {
   background-color: #DFB15A !important;
    border-radius: 8.72513px 8.72513px 0px 0px;
    border: none;
    padding: 10px 20px 12px;
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 500;
    font-size: 14px;
    line-height: 18px;
    text-align: center;
    letter-spacing: 0.04em;
    color: #091B24 !important;
    text-transform: uppercase;
}
.top-srch-text li a {
background: #E5E8EA !important;
    border-radius: 8.72513px 8.72513px 0px 0px !important;
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 400;
    font-size: 14px;
    text-align: center;
    letter-spacing: 0.04em;
    color: #091B24;
    text-transform: uppercase;
    line-height: 23px;
}
.srchbtm-text p {
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 400;
    font-size: 11.5859px;
    line-height: 21px;
    letter-spacing: 0.02em;
    color: #686868;
    margin: 0;
    padding-left: 12px;
    text-align: left;
}
.dropdown.srchbtm-text button {
    outline: none !important;
    border: none !important;
}
.city-caption {
    background: #E9E9E9;
    border-radius: 7px;
    padding: 7px 5px;
    margin: 4px 0px;
}
.city-caption a {
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 400;
    font-size: 14.5859px;
    line-height: 21px;
    letter-spacing: 0.02em;
    color: #303030;
    margin: 4px 0px;
}
.city-caption a:hover {
    background: rgba(238, 182, 102, 0.22);
    border-radius: 3px;
    margin: 4px 0px;
}
li.nav-item.propety-text a.active {
    background: transparent;
    border-bottom: 1px solid #EEB666 !important;
    box-shadow: none !important;
    border: none;
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 700;
    font-size: 12.5859px;
    line-height: 21px;
    letter-spacing: 0.02em;
    color: #303030;
    padding: 4px;
}
li.nav-item.propety-text a {
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 700;
    font-size: 11.5859px;
    line-height: 21px;
    letter-spacing: 0.02em;
    color: #7f7e7e;
    padding: 4px;
    border-bottom: 1px solid #000 !important;
    width: 100px !important;
    text-align: center;
}
.residential-text {
    display: flex;
}
ul.price-caption {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    width: 100%;
    padding-bottom: 6px;
}
ul.price-caption li p {
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 600;
    font-size: 12.5859px;
    line-height: 21px;
    letter-spacing: 0.02em;
    color: #303030;
    padding: 0px 0 7px 2px;
}
ul.price-caption li input {
    border: 0.4px solid #9D9D9D;
    border-radius: 5px;
    background: transparent;
}
ul.price-caption li {
    padding: 0 3px;
    width: 100%;
}
.multi-buttons a {
    border: 0.4px solid #9D9D9D;
    border-radius: 47px;
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 400;
    font-size: 13.5859px;
    text-align: center;
    letter-spacing: 0.02em;
    color: #303030;
    padding: 5px 15px;
    text-decoration: none;
}
.multi-buttons a:hover {
    border: 0.4px solid rgba(238, 182, 102, 0.22) ;
    border-radius: 47px;
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 400;
    font-size: 13.5859px;
    text-align: center;
    letter-spacing: 0.02em;
    color: #303030;
    padding: 5px 15px;
    background: rgba(238, 182, 102, 0.22);
    text-decoration: none;
}
.top-srch-text li {
    margin: 0 2px;
}
.search_button button {
    background: #DFB15A;
    border-radius: 20px;
    font-family: 'Roboto' !important;
    font-style: normal !important;
    font-weight: 700;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
    letter-spacing: 0.02em;
    color: #FFFFFF;
    padding: 10px 30px;
}
.first01 {
    display: flex;
}
.dropdown.srchbtm-text {
    padding  : 0 25px;
}
.tabsflex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.p-style-txt p{
    padding-bottom: 7px;
                            font-size: 12.5859px;
                            line-height: 21px;
                            letter-spacing: 0.02em;
                            color: #303030;
                            margin: 0;
                            padding-left: 6px;
                            font-weight: 600;
                            padding-top: 15px;
}
input.form-check-input.check_round {
    border: 0.4px solid #9D9D9D !important;
    border-radius: 12px !important;
    margin: 0 !important;
    position: initial;
    width: 19px;
    background: transparent !important;
    opacity: 1 !important;
}
li.d_flx {
    display: flex;
}
.d_flx p {
    padding: 0 !important;
    margin-left: 5px;
}
.d_flx {
    display: flex;
}
a.nav-link.blue-active.active {
    background-color: #19364D!important;
    color: #fff !important;
    font-family: 'Roboto' !important;
    font-style: normal !important;
}
button.btn.search-bttn:hover {
    color: #fff;
    box-shadow: 0px 0px 7px -1px #000;
    transition: .5s all;
}
a.nav-link.blue-active {
    background: #D0D0D0 !important;

    color: #686868;
    font-style: normal !important;
    font-family: 'Roboto' !important;
}

/*****/
.dropdown.srchbtm-text button {
    padding: 0px 12px !important;
}
.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}


</style>


</head>
 
<body>


    <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-center">
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul class="me-auto">
        <li><a class="nav-link scrollto active" href="#">Home</a></li>
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
        <li><a class="nav-link scrollto" href="news">News</a></li>
        <li class="dropdown">
          <a href="#">
          <span> <img src="https://thevaultrealestate.com/assets/images/index-page/vector-icon.webp"></span> <i class="bi bi-chevron-down"></i>
        </a>
          <ul>
            <li><a href="{{route('laguage', 'English')}}">English</a></li>
            <li><a href="{{route('laguage', 'Arabic')}}">Arabic</a></li>
            <li><a href="{{route('laguage', 'Hindi')}}">Hindi</a></li>
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
                                       
                                         <li><a href="elysian-mansions.html">Elysian Mansions</a></li>
                                       
                                       
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
 <li><a href="mag-park.html">Mag Park</a></li>
                                                <li><a href="palm.html">palm</a></li>
         <li><a href="private-homes.html">Private Homes</a></li>
         <li><a href="sls.html">SLS</a></li>
         <li><a href="mag-city.html">Mag City</a></li>
         <li><a href="castleton.html">The Residences</a></li>
         <li><a href="tilal.html">tilal</a></li>
         <li><a href="sobha-hartland.html">Sobha Hartland</a></li>
         <li><a href="reportge-vaerdan.html">Reportge Vaerdan</a></li>
         <li><a href="mansio.html">Mansio</a></li>
         <li><a href="reportge-rukian-2.html">Reportge Rukian-2</a></li>
         <li><a href="the-valley.html">The Valley</a></li>
         <li><a href="rove-city-walk.html">Rove City Walk</a></li>
         <li><a href="Golf-heights.html">Golf heights</a></li>
                                         <li><a href="urbana2.html">Urbana 2</a></li>
                  <li><a href="golf-view.html">Golf View</a></li>
                                       
         <li><a href="emaar_mv.html">Emaar mv</a></li>
         <li><a href="fairway.html">Fairway</a></li>
         <li><a href="the-cove.html">The cove</a></li>
         <li><a href="creekside.html">Creekside</a></li>
<!--          <li><a href="hills-2.html">Damac Hills</a></li> -->
                                                <li><a href="hills-park.html">Hills Park</a></li>
                                                                                   <li><a href="hills-park-address.html">Hills Park Address</a></li>
         <li><a href="strelling.html">Strelling</a></li>
          <li><a href="lagoons.html">Lagoons</a></li>
           <li><a href="creek-gate.html">Creek Gate</a></li>
           <li><a href="creek-rise.html">Creek Rise</a></li>
         <li><a href="hills-park-horizon.html">Hills Park Horizon</a></li>
         <li><a href="lime-gardens.html">Lime Gardens</a></li>
         <li><a href="creekside.html">Creekside</a></li>
         
         <li><a href="pagani.html">Pagani</a></li>
         <li><a href="the-binary.html">The Binary</a></li>
          <li><a href="Beachgate.html">Beachgate</a></li>
          <li><a href="binghatti.html">Binghatti</a></li>
          <li><a href="dubai-creek.html">Dubai Creek</a></li>
         <li><a href="emaar-downtown.html">Emaar Downtown</a></li>
         <li><a href="ocean-house.html">Ocean House</a></li>
         
          <li><a href="orla.html">Orla</a></li>
         
         <li><a href="Omniyat-Dorchester Collection.html">The Residences</a></li>
         <li><a href="one-at-palm.html">ONE AT PALM</a></li>
         <li><a href="omniyat-dorchester-collection-ava.html">Omniyat Dorchester Collection Ava</a></li>
         <li><a href="bluewater.html">Bluewater</a></li>
         <li><a href="aldar-yas-golf.html">Aldar Yas Golf</a></li>
         <li><a href="aldar-grove-museum.html">Aldar Grove Museum</a></li>
         <li><a href="aldar-louvre.html">Aldar Louvre</a></li>
         <li><a href="aldar-north-bay.html">Aldar North Bay</a></li>
         <li><a href="aldar-waters-edge.html">Aldar Waters Edge</a></li>
         <li><a href="aldar-saadiyat-lagoons.html">Aldar Saadiyat Lagoons</a></li>
         <li><a href="emaar-south-urbana 2.html">Emaar South Urbana 2</a></li>
                  <li><a href="emaar-south-urbana 3.html">Emaar South Urbana 3</a></li>
                  <li><a href="emaar-south-urbana 4.html">Emaar South Urbana 4</a></li>
                  <li><a href="dubai-creek2.html">Dubai Creek2</a></li>
                  <li><a href="dubai-hills.html">Dubai Hills</a></li>
                  <li><a href="emaar-south.html">Emaar South </a></li>
                  <li><a href="sobha.html">Sobha </a></li>
                  <li><a href="seagate.html">Seagate </a></li>
                           <li><a href="seascape.html">Seascape </a></li>
                           <li><a href="one-zabeel.html">One Zabeel </a></li>
                           <li><a href="blvd-heights.html">Blvd Heights </a></li>
                                    <li><a href="blvd-crescent.html">Blvd Crescent</a></li>
                                    <li><a href="beachgate-by-address.html">Beachgate By Address</a></li>
                                    <li><a href="the-ritz-carlton.html">The Ritz Carlton</a></li>
                                       <li><a href="elie-saab.html">Elie Saab</a></li>
                                         <li><a href="aldar-fay-alreeman.html">Aldar Fay Alreeman
          </a></li>
                                                							          <li><a href="catch.html">Catch</a></li>
         							          <li><a href="binghati-creek.html">Binghatti Creek</a></li>
                  							          <li><a href="sobha-realty.html">Sobha Realty </a></li>
                   <li><a href="missoni.html">Missoni </a></li>
                   <li><a href="center-park.html">Central Park </a></li>
                            <li><a href="creek-horizone.html">Creek Horizone </a></li>

         							


         
                                       

                                    

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
  @if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
  @endif
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
        <div class="row hdr-brdr">
          <div class="top-search-sec01">
            <ul class="nav nav-tabs top-srch-text" role="tablist" id="porpose_select">
              <li class="nav-item" value="sale">
                <a class="nav-link active" onclick="mySale()"  id="sale_id" data-toggle="tab" href="#tabs01" role="tab" aria-controls="home" aria-selected="true">sale</a>
              </li>
              <li class="nav-item" value="rent">
                <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="profile"  aria-selected="false" onclick="myRent()">Rent</a>
              </li>
              <li class="nav-item" value="offplane">
                <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="contact" aria-selected="false" onclick="myFunctionOff()">Offplan</a>
              </li>
            </ul>
            
            <ul class="mdl-tbas" id="sale_id_sed">
                <ul class="nav nav-tabs top-srch-text" role="tablist" id="sale_id_first">
                  <li class="nav-item" value="residential">
                    <a class="nav-link blue-active active" name="porpose1" data-toggle="tab" href="#tabs04" role="tab" aria-controls="home" aria-selected="true">Residential</a>
                  </li>
                  <li class="nav-item" value="commercial">
                    <a class="nav-link blue-active" name="porpos22" data-toggle="tab" href="#tabs05" role="tab" aria-controls="profile" aria-selected="false">Commercial</a>
                  </li>
                </ul>
                <ul class="nav nav-tabs d_none-tab top-srch-text dsplyflx" id="open-tb" role="tablist" id="rent_property">
                  <li class="nav-item" value="short_term_monthly">
                    <a class="nav-link blue-active" data-toggle="tab" href="#tabs06" role="tab" aria-controls="home" aria-selected="true">Short term (monthly)</a>
                  </li>
                  <li class="nav-item" value="short_term_daily">
                    <a class="nav-link blue-active" data-toggle="tab" href="#tabs07" role="tab" aria-controls="profile" aria-selected="false">Short term (daily)</a>
                  </li> 
                </ul>
            </ul>
          </div>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active w-100" id="tabs01" role="tabpanel" aria-labelledby="home-tab">
                <form action="{{route('searchProperty')}}" method="POST">
                    <div class="tabsflex">
                        @csrf
                        <div class="first01">
                            <div class="dropdown srchbtm-text">
                                <p>City</p>
                                <input type="hidden" id="search_filter_min" value="" name="filter_min" list="priceflt" class="form-control">
                                <input type="hidden" id="area_filter_max" value="" name="filter_max" list="priceflt" class="form-control">
                                <input type="hidden" id="filter_furnished" value="" name="filter_furnished" list="priceflt" class="form-control">
                                <input type="hidden" id="filter_listed" value="" name="filter_listed" list="priceflt" class="form-control">
                                <input type="hidden" id="filter_keyword" value="" name="filter_keyword" list="priceflt" class="form-control">
                                <input type="hidden" id="porpose_filter_search" value="residential" name="porpose_filter_search" list="priceflt" class="form-control">
                                <input type="hidden" id="porpose_type_filter" value="Sale" name="porpose_type_filter" list="priceflt" class="form-control">
                                  <!-- <datalist id="priceflt">
                                    <option value="sandip" href="!#">select value</option>
                                  </datalist> -->
                                <!-- <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dubai
                                </button> -->
                                <!--<div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Abu dhabi</a>
                                <a class="dropdown-item" href="#">All Cities</a>
                                <a class="dropdown-item" href="#">sharjah</a>
                                <a class="dropdown-item" href="#">fujairah</a>
                                <a class="dropdown-item" href="#">Ajman</a>
                                <a class="dropdown-item" href="#">Umm Al Quwain</a>
                                </div> -->
                                <!-- <label class="btn dropdown-toggle">Dubai</label><br> -->
                                <select class="btn dropdown-toggle" id="sale_pricerange" name="city_locaion">
                                    <option value="Abu_dhabi">Dubai</option>
                                    <option value="Abu_dhabi">Abu dhabi</option>    
                                    <option value="All_Cities ">All Cities(UAE) </option>
                                    <option value="sharjah">sharjah </option>
                                    <option value="fujairah">fujairah </option> 
                                    <option value="Ajman">Ajman </option> 
                                    <option value="Umm_Al_Quwain ">Umm Al Quwain </option>  
                                </select>
                            </div>
            
                            <div class="dropdown srchbtm-text">
                                <p>Location</p>
                                <select class="btn dropdown-toggle" id="sa_pricerange" name="location_sale">
                                    <option value="Abu_dhabi">Enter Location</option>
                                    <option value="Abu_dhabi">Business bay</option>    
                                    <option value="All_Cities ">Downtown</option>
                                    <option value="sharjah">Dubai Hills</option>
                                    <option value="fujairah">Dubailand</option> 
                                    <option value="JBC">JBC</option> 
                                    <option value="Umm_Al_Quwain ">Palm jumeirah</option>  
                                    <option value="Ajman">Town Square</option>
                                </select>
                            </div>
            
                            <div class="dropdown srchbtm-text">
                                <p>Property Type</p>
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Types
                                </button>
                                <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                    <ul class="nav nav-tabs d-flex justify-content-around" role="tablist">
                                        <li class="nav-item propety-text">
                                        <a class="nav-link active" data-toggle="tab" href="#sale01" role="tab" aria-controls="property01" aria-selected="true">Residential</a>
                                        </li>
                                        <li class="nav-item propety-text">
                                        <a class="nav-link" data-toggle="tab" href="#sale02" role="tab" aria-controls="property02" aria-selected="false">Commercial</a>
                                        </li>
                                    </ul>
            
                                    <div class="tab-content" id="myTabContent1" style="background: transparent;  box-shadow: none;">
                                        <div class="tab-pane fade show active" id="sale01" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="residential-text">
                                                    <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                        <!-- <a class="dropdown-item" href="#">Apartment</a>
                                                        <a class="dropdown-item" href="#">Penthouse</a>
                                                        <a class="dropdown-item" href="#">Resid.Bulding</a>
                                                        <a class="dropdown-item" href="#">Resid.Floor</a>
                                                        <a class="dropdown-item" href="#">Resid. Land</a> -->
                                                        <select class="btn dropdown-toggle" id="sale_pricerange" name="property_type">
                                                            <option value="Abu_dhabi">Apartment</option>
                                                            <option value="Abu_dhabi">Penthouse</option>    
                                                            <option value="All_Cities ">Resid.Bulding</option>
                                                            <option value="sharjah">Resid.Floor</option>
                                                            <option value="fujairah">Resid. Land</option> 
                                                        </select>
                                                    </div>
                                                    <div class="" aria-labelledby="dropdownMenuButton">
                                                        <!-- <a class="dropdown-item" href="#">Resid.Plot</a>
                                                        <a class="dropdown-item" href="#">Services Apto.</a>
                                                        <a class="dropdown-item" href="#">Townhouse</a>
                                                        <a class="dropdown-item" href="#">Villa</a>
                                                        <a class="dropdown-item" href="#">Villa Compound</a> -->
                                                        <select class="btn dropdown-toggle" id="sale_pricerange" name="property_type1">
                                                            <option value="Abu_dhabi">Resid.Plot</option>
                                                            <option value="Abu_dhabi">Services Apto.</option>    
                                                            <option value="All_Cities ">Townhouse</option>
                                                            <option value="sharjah">Villa</option>
                                                            <option value="fujairah">Villa Compound</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                        
            
                                        </div>
            
                                        <div class="tab-pane fade" id="sale02" role="tabpanel" aria-labelledby="profile-tab">
            
                                            <div class="residential-text">
                                                <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="#">Bulding</a>
                                                    <a class="dropdown-item" href="#">Bulk Unit</a>
                                                    <a class="dropdown-item" href="#">Commercial Villa</a>
                                                    <a class="dropdown-item" href="#">Commercial Plot</a>
                                                    <a class="dropdown-item" href="#">Commercial Floor</a>
                                                    <a class="dropdown-item" href="#">Factory</a>
            
                                                    <a class="dropdown-item" href="#">Floor</a>
                                                    <a class="dropdown-item" href="#">Industrial Land</a>
                                                </div>
                                                <div class="" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Labour Camp</a>
                                                    <a class="dropdown-item" href="#">Mixed Use</a>
                                                    <a class="dropdown-item" href="#">Office</a>
                                                    <a class="dropdown-item" href="#">Retail for Rent/Sale</a>
                                                    <a class="dropdown-item" href="#">Shop</a>
                                                    <a class="dropdown-item" href="#">Showroom</a>
            
                                                    <a class="dropdown-item" href="#">Staff accom.</a>
                                                    <a class="dropdown-item" href="#">Warehouse</a>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="dropdown srchbtm-text">
                                <p>Price Range</p>
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Any
                                </button>
                                <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                                <ul class="price-caption">
                                    <li>
                                        <p>Minimum</p>
                                        <input type="text" placeholder="0" list="price01" class="form-control" name="minimum">
                                        <datalist id="price01">
                                            <option href="!#">1,000,000</option>
                                            <option href="!#">5,000,000</option>
                                            <option href="!#">10,000,000</option>
                                            <option href="!#">15,000,000</option>
                                            <option href="!#">20,000,000</option>
                                            <option href="!#">25,000,000</option>
                                            <option href="!#">30,000,000</option>
                                            <option href="!#">35,000,000</option>
                                            <option href="!#">40,000,000</option>
                                            <option href="!#">45,000,000</option>
                                            <option href="!#">50,000,000</option>
                                        </datalist>
                                    </li>
                                    <li>
                                        <p>Maximum</p>
                                        <input type="text" placeholder="Any" list="price02" class=" form-control" name="maximum">
                                        <datalist id="price02">
                                            <option href="!#">1,000,000</option>
                                            <option href="!#">5,000,000</option>
                                            <option href="!#">10,000,000</option>
                                            <option href="!#">15,000,000</option>
                                            <option href="!#">20,000,000</option>
                                            <option href="!#">25,000,000</option>
                                            <option href="!#">30,000,000</option>
                                            <option href="!#">35,000,000</option>
                                            <option href="!#">40,000,000</option>
                                            <option href="!#">45,000,000</option>
                                            <option href="!#">50,000,000</option>
                                        </datalist>
                                    </li>
                                </ul>
                                </div>
                            </div>
            
            
                            <div class="dropdown srchbtm-text">
                                <p>Beds</p>
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Any
                                </button>
                                <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                                <ul class="price-caption d-block">
                                    <li>
                                        <p>Beds</p>
                                          <div class="multi-buttons" name="sdljfsdfji">
                                          
                                            <a href="!#" type="button">Studio</a>
                                            <a href="!#" type="button">1</a>
                                            <a href="!#" type="button">2</a>
                                            <a href="!#" type="button">3</a>
                                            <a href="!#" type="button">4</a>
                                            <a href="!#" type="button">5</a>
                                            <a href="!#" type="button">6</a>
                                            <a href="!#" type="button">7</a>
                                            <a href="!#" type="button">8+</a>
                                        </div>
                                        
                                    </li>
                                    <li>
                                        <p>Baths</p>
                                        <div class="multi-buttons">
                                            <a href="!#" type="button">1</a>
                                            <a href="!#" type="button">2</a>
                                            <a href="!#" type="button">3</a>
                                            <a href="!#" type="button">4</a>
                                            <a href="!#" type="button">5</a>
                                            <a href="!#" type="button">6</a>
                                            <a href="!#" type="button">7</a>
                                            <a href="!#" type="button">8+</a>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
            
                            <div class="dropdown srchbtm-text">
                                <p>More</p>
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filters
                                </button>
                                <div class="dropdown-menu city-caption p-style-txt" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                                    <p>Area (sqft)</p>
                                <ul class="price-caption">
                                
                                    <li>
                                        <p>Minimum</p>
                                        <input type="text" value="" id="min_area" placeholder="0" list="list-minimum01" class="form-control">
                                        <datalist id="list-minimum01">
                                            <option value="1,000,000" href="!#">1,000,000</option>
                                            <option value="5,000,000" href="!#">5,000,000</option>
                                            <option value="10,000,000" href="!#">10,000,000</option>
                                            <option value="15,000,000" href="!#">15,000,000</option>
                                            <option value="20,000,000" href="!#">20,000,000</option>
                                            <option value="25,000,000" href="!#">25,000,000</option>
                                            <option value="30,000,000" href="!#">30,000,000</option>
                                            <option value="35,000,000" href="!#">35,000,000</option>
                                            <option value="40,000,000" href="!#">40,000,000</option>
                                            <option value="45,000,000" href="!#">45,000,000</option>
                                            <option value="50,000,000" href="!#">50,000,000</option>
                                        </datalist>
                                    </li>
                                    <li>
                                        
                                        <p>Maximum</p>
                                        <input type="text" id="max_area" placeholder="Any" list="list-minimum02" class=" form-control">
                                        <datalist id="list-minimum02">
                                            <option value="1,000,000" href="!#">1,000,000</option>
                                            <option value="5,000,000" href="!#">5,000,000</option>
                                            <option value="10,000,000" href="!#">10,000,000</option>
                                            <option value="15,000,000" href="!#">15,000,000</option>
                                            <option value="20,000,000" href="!#">20,000,000</option>
                                            <option value="25,000,000" href="!#">25,000,000</option>
                                            <option value="30,000,000" href="!#">30,000,000</option>
                                            <option value="35,000,000" href="!#">35,000,000</option>
                                            <option value="40,000,000" href="!#">40,000,000</option>
                                            <option value="45,000,000" href="!#">45,000,000</option>
                                            <option value="50,000,000" href="!#">50,000,000</option>
                                        </datalist>
                                    </li>
                                </ul>
                                <p>Furnishing</p>
                                <!-- <ul class="price-caption"> -->
                                    <!-- <li>
                                        <input type="checkbo" id="furnished" placeholder="Furnished"  class=" form-control">
                                    </li>
                                    <li>
                                        <input type="text" id="Unfurnished" placeholder="Unfurnished"  class=" form-control">
                                    </li> -->
                                    <!-- <li> -->
                                
                                    <div class="radio">
                                      <input type="checkbox" id="opt1" name="furnishing_status[]" value="furnished" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Furnished
                                    <!-- </div>
                                    <div class="radio"> -->
                                      <input type="checkbox" id="opt2" name="furnishing_status[]" value="Unfurnished" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Unfurnished
                                    </div>
                                    <!-- </li>
                                </ul> -->

                                <p>Listed By</p>
                                <!-- <ul class="price-caption" id="listed_by">
                                    <li class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                        <p class="form-check-label">Agent</p>
                                    </li>
                                    <li class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                        <p class="form-check-label">Developer</p>
                                    </li>
                                    <li class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                        <p class="form-check-label">Landlord</p>
                                    </li>
                                    
                                </ul> -->
                                <div class="radio">
                                  <input type="checkbox" id="opt3" name="listed_by[]" value="agents" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Agent
                                <!-- </div>
                                <div class="radio"> -->
                                  <input type="checkbox" id="opt4" name="listed_by[]" value="developer" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Developer

                                  <input type="checkbox" id="opt5" name="listed_by[]" value="landlord" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Landlord
                                </div>

                                <p>Keyword Search</p>
                                <ul class="price-caption">
                                    <li>
                                        <input type="text" name="keyword_search" placeholder="City / Community / Bulding"  class=" form-control">
                                    </li>
                                    </ul>

                                    <p>Amenities</p>
                                    <!-- <ul class="price-caption">
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Maids Room</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Covered Parking</p>
                                            </div>
                                        </li>
                                        
                                    </ul> -->
                                    <div class="radio">
                                      <input type="checkbox" id="opt6" name="keyword_search[]" value="maids_room" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Maids Room
                                    <!-- </div>
                                    <div class="radio"> -->
                                      <input type="checkbox" id="opt7" name="keyword_search[]" value="covered_parking" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Covered Parking
                                    </div>
                                    <!-- <ul class="price-caption">
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Private Garden</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Outdoor Games</p>
                                            </div>
                                        </li>
                                        
                                    </ul> -->
                                    <div class="radio">
                                      <input type="checkbox" id="opt8" name="keyword_search[]" value="private_garden" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Private Garden
                                    <!-- </div>
                                    <div class="radio"> -->
                                      <input type="checkbox" id="opt9" name="keyword_search[]" value="outdoor_games" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Outdoor Games
                                    </div>
                                    <!-- <ul class="price-caption">
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Gym</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Sauna</p>
                                            </div>
                                        </li>
                                        
                                    </ul> -->
                                    <div class="radio">
                                      <input type="checkbox" id="opt10" name="keyword_search[]" value="gym" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Gym
                                    <!-- </div>
                                    <div class="radio"> -->
                                      <input type="checkbox" id="opt11" name="keyword_search[]" value="sauna" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Sauna
                                    </div>
                                    <!-- <ul class="price-caption">
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Shared Pool</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Water Parks</p>
                                            </div>
                                        </li>
                                        
                                    </ul> -->
                                    <div class="radio">
                                      <input type="checkbox" id="opt12" name="keyword_search[]" value="shared_pool" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Shared Pool
                                    <!-- </div>
                                    <div class="radio"> -->
                                      <input type="checkbox" id="opt13" name="keyword_search[]" value="water_park" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Water Parks
                                    </div>
                                    <!-- <ul class="price-caption">
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Concierge Service</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Balcony</p>
                                            </div>
                                        </li>
                                        
                                    </ul> -->
                                    <div class="radio">
                                      <input type="checkbox" id="opt14" name="keyword_search[]" value="concierge_service" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Concierge Service
                                    <!-- </div>
                                    <div class="radio"> -->
                                      <input type="checkbox" id="opt15" name="keyword_search[]" value="balcony" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Balcony
                                    </div>
                                    <!-- <ul class="price-caption">
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">Kids play area</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div  class="d_flx">
                                                <input type="checkbox" class="form-check-input check_round" >
                                            <p class="form-check-label">BBQ Areas</p>
                                            </div>
                                        </li>
                                        
                                    </ul> -->
                                    <div class="radio">
                                      <input type="checkbox" id="opt1" name="keyword_search[]" value="kids_play_area" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">Kids play area
                                    <!-- </div>
                                    <div class="radio"> -->
                                      <input type="checkbox" id="opt2" name="keyword_search[]" value="bbq_areas" class="flat-red" style="position: inherit; opacity: 1; pointer-events:inherit">BBQ Areas
                                    </div>

                                    <div class="search_button text-center pt-2">
                                        <button type="button" class="btn search-bttn" style="width:96%;" id="search_filter_next">Search</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="search_button">
                            <button type="submit" class="btn search-bttn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="tab-pane fade" id="tabs02" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tabsflex">
                    <div class="first01">
                        <div class="dropdown srchbtm-text">
                            <p>City</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dubai
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Abu dhabi</a>
                              <a class="dropdown-item" href="#">All Cities</a>
                              <a class="dropdown-item" href="#">sharjah</a>
                              <a class="dropdown-item" href="#">fujairah</a>
                              <a class="dropdown-item" href="#">Ajman</a>
                              <a class="dropdown-item" href="#">Umm Al Quwain</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Location</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Enter Location
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Business bay</a>
                              <a class="dropdown-item" href="#">Downtown</a>
                              <a class="dropdown-item" href="#">Dubai Hills</a>
                              <a class="dropdown-item" href="#">Dubailand</a>
                              <a class="dropdown-item" href="#">JBC</a>
                              <a class="dropdown-item" href="#">Palm jumeirah</a>
                              <a class="dropdown-item" href="#">Town Square</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Property Type</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Types
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                <ul class="nav nav-tabs d-flex justify-content-around" role="tablist">
                                    <li class="nav-item propety-text">
                                      <a class="nav-link active" data-toggle="tab" href="#rent01" role="tab" aria-controls="property01" aria-selected="true">Residential</a>
                                    </li>
                                    <li class="nav-item propety-text">
                                      <a class="nav-link" data-toggle="tab" href="#rent02" role="tab" aria-controls="property02" aria-selected="false">Commercial</a>
                                    </li>
                                  </ul>
        
                                  <div class="tab-content" id="myTabContent1" style="background: transparent; box-shadow: none;">
        
                                    <div class="tab-pane fade show active" id="rent01" role="tabpanel" aria-labelledby="home-tab">
                                    
                                      
                                            <div class="residential-text">
                                                <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="#">Apartment</a>
                                                    <a class="dropdown-item" href="#">Penthouse</a>
                                                    <a class="dropdown-item" href="#">Resid.Bulding</a>
                                                    <a class="dropdown-item" href="#">Resid.Floor</a>
                                                    <a class="dropdown-item" href="#">Resid. Land</a>
                                                </div>
                                                <div class="" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Resid.Plot</a>
                                                    <a class="dropdown-item" href="#">Services Apto.</a>
                                                    <a class="dropdown-item" href="#">Townhouse</a>
                                                    <a class="dropdown-item" href="#">Villa</a>
                                                    <a class="dropdown-item" href="#">Villa Compound</a>
                                                </div>
                                            </div>
                                            
                                      
        
                                    </div>
        
                                    <div class="tab-pane fade" id="rent02" role="tabpanel" aria-labelledby="profile-tab">
        
                                        <div class="residential-text">
                                            <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                <a class="dropdown-item" href="#">Bulding</a>
                                                <a class="dropdown-item" href="#">Bulk Unit</a>
                                                <a class="dropdown-item" href="#">Commercial Villa</a>
                                                <a class="dropdown-item" href="#">Commercial Plot</a>
                                                <a class="dropdown-item" href="#">Commercial Floor</a>
                                                <a class="dropdown-item" href="#">Factory</a>
        
                                                <a class="dropdown-item" href="#">Floor</a>
                                                <a class="dropdown-item" href="#">Industrial Land</a>
                                            </div>
                                            <div class="" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Labour Camp</a>
                                                <a class="dropdown-item" href="#">Mixed Use</a>
                                                <a class="dropdown-item" href="#">Office</a>
                                                <a class="dropdown-item" href="#">Retail for Rent/Sale</a>
                                                <a class="dropdown-item" href="#">Shop</a>
                                                <a class="dropdown-item" href="#">Showroom</a>
        
                                                <a class="dropdown-item" href="#">Staff accom.</a>
                                                <a class="dropdown-item" href="#">Warehouse</a>
                                            </div>
                                        </div>
        
                                    </div>
                                  </div>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Price Range</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption">
                                <li>
                                    <p>Minimum</p>
                                    <input type="text" placeholder="0" list="price01" class="form-control">
                                    <datalist id="price01">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                                <li>
                                    <p>Maximum</p>
                                    <input type="text" placeholder="Any" list="price02" class=" form-control">
                                    <datalist id="price02">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                              </ul>
                            </div>
                          </div>
        
        
                          <div class="dropdown srchbtm-text">
                            <p>Beds</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption d-block">
                                <li>
                                    <p>Beds</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">Studio</a>
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                    
                                </li>
                                <li>
                                    <p>Baths</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                </li>
                              </ul>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                        <p>More</p>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                        </button>
                        <div class="dropdown-menu city-caption p-style-txt" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                            <p>Area (sqft)</p>
                          <ul class="price-caption">
                          
                            <li>
                                
                                
                                <p>Minimum</p>
                                <input type="text" placeholder="0" list="list-minimum01" class="form-control">
                                <datalist id="list-minimum01">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                            <li>
                                
                                <p>Maximum</p>
                                <input type="text" placeholder="Any" list="list-minimum02" class=" form-control">
                                <datalist id="list-minimum02">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                          </ul>
                          <p>Furnishing</p>
                          <ul class="price-caption">
                            <li>
                              
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            <li>
                              
                                <input type="text" placeholder="Unfurnished"  class=" form-control">
                            </li>
                          </ul>

                          <p>Listed By</p>
                          <ul class="price-caption">
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Agent</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Developer</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Landlord</p>
                            </li>
                            
                          </ul>

                          <p>Keyword Search</p>
                          <ul class="price-caption">
                            <li>
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            </ul>

                            <p>Amenities</p>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Maids Room</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Covered Parking</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Private Garden</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Outdoor Games</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Gym</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Sauna</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Shared Pool</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Water Parks</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Concierge Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Balcony</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Kids play area</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">BBQ Areas</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <div class="search_button text-center pt-2">
                                <button type="button" class="btn search-bttn" style="width:96%;">Search</button>
                              </div>

                        </div>
                      </div>
        
        
                      </div>
                      
        
                      <div class="search_button">
                        <button type="button" class="btn search-bttn">Search</button>
                      </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="tabs03" role="tabpanel" aria-labelledby="contact-tab">
                <div class="tabsflex">
                    <div class="first01">
                        <div class="dropdown srchbtm-text">
                            <p>City</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dubai
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Abu dhabi</a>
                              <a class="dropdown-item" href="#">All Cities</a>
                              <a class="dropdown-item" href="#">sharjah</a>
                              <a class="dropdown-item" href="#">fujairah</a>
                              <a class="dropdown-item" href="#">Ajman</a>
                              <a class="dropdown-item" href="#">Umm Al Quwain</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Location</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Enter Location
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Business bay</a>
                              <a class="dropdown-item" href="#">Downtown</a>
                              <a class="dropdown-item" href="#">Dubai Hills</a>
                              <a class="dropdown-item" href="#">Dubailand</a>
                              <a class="dropdown-item" href="#">JBC</a>
                              <a class="dropdown-item" href="#">Palm jumeirah</a>
                              <a class="dropdown-item" href="#">Town Square</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Property Type</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Types
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                <ul class="nav nav-tabs d-flex justify-content-around" role="tablist">
                                    <li class="nav-item propety-text">
                                      <a class="nav-link active" data-toggle="tab" href="#offplan01" role="tab" aria-controls="property01" aria-selected="true">Residential</a>
                                    </li>
                                    <li class="nav-item propety-text">
                                      <a class="nav-link" data-toggle="tab" href="#offplan02" role="tab" aria-controls="property02" aria-selected="false">Commercial</a>
                                    </li>
                                  </ul>
        
                                  <div class="tab-content" id="myTabContent1" style="background: transparent; box-shadow: none;">
        
                                    <div class="tab-pane fade show active" id="offplan01" role="tabpanel" aria-labelledby="home-tab">
                                    
                                      
                                            <div class="residential-text">
                                                <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="#">Apartment</a>
                                                    <a class="dropdown-item" href="#">Penthouse</a>
                                                    <a class="dropdown-item" href="#">Resid.Bulding</a>
                                                    <a class="dropdown-item" href="#">Resid.Floor</a>
                                                    <a class="dropdown-item" href="#">Resid. Land</a>
                                                </div>
                                                <div class="" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Resid.Plot</a>
                                                    <a class="dropdown-item" href="#">Services Apto.</a>
                                                    <a class="dropdown-item" href="#">Townhouse</a>
                                                    <a class="dropdown-item" href="#">Villa</a>
                                                    <a class="dropdown-item" href="#">Villa Compound</a>
                                                </div>
                                            </div>
                                            
                                      
        
                                    </div>
        
                                    <div class="tab-pane fade" id="offplan02" role="tabpanel" aria-labelledby="profile-tab">
        
                                        <div class="residential-text">
                                            <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                <a class="dropdown-item" href="#">Bulding</a>
                                                <a class="dropdown-item" href="#">Bulk Unit</a>
                                                <a class="dropdown-item" href="#">Commercial Villa</a>
                                                <a class="dropdown-item" href="#">Commercial Plot</a>
                                                <a class="dropdown-item" href="#">Commercial Floor</a>
                                                <a class="dropdown-item" href="#">Factory</a>
        
                                                <a class="dropdown-item" href="#">Floor</a>
                                                <a class="dropdown-item" href="#">Industrial Land</a>
                                            </div>
                                            <div class="" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Labour Camp</a>
                                                <a class="dropdown-item" href="#">Mixed Use</a>
                                                <a class="dropdown-item" href="#">Office</a>
                                                <a class="dropdown-item" href="#">Retail for Rent/Sale</a>
                                                <a class="dropdown-item" href="#">Shop</a>
                                                <a class="dropdown-item" href="#">Showroom</a>
        
                                                <a class="dropdown-item" href="#">Staff accom.</a>
                                                <a class="dropdown-item" href="#">Warehouse</a>
                                            </div>
                                        </div>
        
                                    </div>
                                  </div>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Price Range</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption">
                                <li>
                                    <p>Minimum</p>
                                    <input type="text" placeholder="0" list="price01" class="form-control">
                                    <datalist id="price01">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                                <li>
                                    <p>Maximum</p>
                                    <input type="text" placeholder="Any" list="price02" class=" form-control">
                                    <datalist id="price02">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                              </ul>
                            </div>
                          </div>
        
        
                          <div class="dropdown srchbtm-text">
                            <p>Beds</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption d-block">
                                <li>
                                    <p>Beds</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">Studio</a>
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                    
                                </li>
                                <li>
                                    <p>Baths</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                </li>
                              </ul>
                            </div>
                          </div>
        
                        <div class="dropdown srchbtm-text">
                        <p>More</p>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                        </button>
                        <div class="dropdown-menu city-caption p-style-txt" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                            <p>Area (sqft)</p>
                          <ul class="price-caption">
                          
                            <li>
                                
                                
                                <p>Minimum</p>
                                <input type="text" placeholder="0" list="list-minimum01" class="form-control">
                                <datalist id="list-minimum01">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                            <li>
                                
                                <p>Maximum</p>
                                <input type="text" placeholder="Any" list="list-minimum02" class=" form-control">
                                <datalist id="list-minimum02">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                          </ul>
                          <p>Furnishing</p>
                          <ul class="price-caption">
                            <li>
                              
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            <li>
                              
                                <input type="text" placeholder="Unfurnished"  class=" form-control">
                            </li>
                          </ul>

                          <p>Listed By</p>
                          <ul class="price-caption">
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Agent</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Developer</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Landlord</p>
                            </li>
                            
                          </ul>

                          <p>Keyword Search</p>
                          <ul class="price-caption">
                            <li>
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            </ul>

                            <p>Amenities</p>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Maids Room</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Covered Parking</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Private Garden</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Outdoor Games</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Gym</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Sauna</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Shared Pool</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Water Parks</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Concierge Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Balcony</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Kids play area</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">BBQ Areas</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <div class="search_button text-center pt-2">
                                <button type="button" class="btn search-bttn" style="width:96%;">Search</button>
                              </div>

                        </div>
                      </div>
        
        
                      </div>
                      
        
                      <div class="search_button">
                        <button type="button" class="btn search-bttn">Search</button>
                      </div>
                  </div>
    
            </div>

            <div class="tab-pane fade" id="tabs04" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tabsflex">
                    <div class="first01">
                        <div class="dropdown srchbtm-text">
                            <p>City</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dubai
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Abu dhabi</a>
                              <a class="dropdown-item" href="#">All Cities</a>
                              <a class="dropdown-item" href="#">sharjah</a>
                              <a class="dropdown-item" href="#">fujairah</a>
                              <a class="dropdown-item" href="#">Ajman</a>
                              <a class="dropdown-item" href="#">Umm Al Quwain</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Location</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Enter Location
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Business bay</a>
                              <a class="dropdown-item" href="#">Downtown</a>
                              <a class="dropdown-item" href="#">Dubai Hills</a>
                              <a class="dropdown-item" href="#">Dubailand</a>
                              <a class="dropdown-item" href="#">JBC</a>
                              <a class="dropdown-item" href="#">Palm jumeirah</a>
                              <a class="dropdown-item" href="#">Town Square</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Property Type</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Types
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                <ul class="nav nav-tabs d-flex justify-content-around" role="tablist">
                                    <li class="nav-item propety-text">
                                      <a class="nav-link active" data-toggle="tab" href="#residential01" role="tab" aria-controls="property01" aria-selected="true">Residential</a>
                                    </li>
                                    <li class="nav-item propety-text">
                                      <a class="nav-link" data-toggle="tab" href="#residential02" role="tab" aria-controls="property02" aria-selected="false">Commercial</a>
                                    </li>
                                  </ul>
        
                                  <div class="tab-content" id="myTabContent1" style="background: transparent;box-shadow: none;">
        
                                    <div class="tab-pane fade show active" id="residential01" role="tabpanel" aria-labelledby="home-tab">
                                    
                                      
                                            <div class="residential-text">
                                                <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="#">Apartment</a>
                                                    <a class="dropdown-item" href="#">Penthouse</a>
                                                    <a class="dropdown-item" href="#">Resid.Bulding</a>
                                                    <a class="dropdown-item" href="#">Resid.Floor</a>
                                                    <a class="dropdown-item" href="#">Resid. Land</a>
                                                </div>
                                                <div class="" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Resid.Plot</a>
                                                    <a class="dropdown-item" href="#">Services Apto.</a>
                                                    <a class="dropdown-item" href="#">Townhouse</a>
                                                    <a class="dropdown-item" href="#">Villa</a>
                                                    <a class="dropdown-item" href="#">Villa Compound</a>
                                                </div>
                                            </div>
                                            
                                      
        
                                    </div>
        
                                    <div class="tab-pane fade" id="residential02" role="tabpanel" aria-labelledby="profile-tab">
        
                                        <div class="residential-text">
                                            <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                <a class="dropdown-item" href="#">Bulding</a>
                                                <a class="dropdown-item" href="#">Bulk Unit</a>
                                                <a class="dropdown-item" href="#">Commercial Villa</a>
                                                <a class="dropdown-item" href="#">Commercial Plot</a>
                                                <a class="dropdown-item" href="#">Commercial Floor</a>
                                                <a class="dropdown-item" href="#">Factory</a>
        
                                                <a class="dropdown-item" href="#">Floor</a>
                                                <a class="dropdown-item" href="#">Industrial Land</a>
                                            </div>
                                            <div class="" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Labour Camp</a>
                                                <a class="dropdown-item" href="#">Mixed Use</a>
                                                <a class="dropdown-item" href="#">Office</a>
                                                <a class="dropdown-item" href="#">Retail for Rent/Sale</a>
                                                <a class="dropdown-item" href="#">Shop</a>
                                                <a class="dropdown-item" href="#">Showroom</a>
        
                                                <a class="dropdown-item" href="#">Staff accom.</a>
                                                <a class="dropdown-item" href="#">Warehouse</a>
                                            </div>
                                        </div>
        
                                    </div>
                                  </div>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Price Range</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption">
                                <li>
                                    <p>Minimum</p>
                                    <input type="text" placeholder="0" list="price01" class="form-control">
                                    <datalist id="price01">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                                <li>
                                    <p>Maximum</p>
                                    <input type="text" placeholder="Any" list="price02" class=" form-control">
                                    <datalist id="price02">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                              </ul>
                            </div>
                          </div>
        
        
                          <div class="dropdown srchbtm-text">
                            <p>Beds</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption d-block">
                                <li>
                                    <p>Beds</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">Studio</a>
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                    
                                </li>
                                <li>
                                    <p>Baths</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                </li>
                              </ul>
                            </div>
                          </div>
        
                        <div class="dropdown srchbtm-text">
                        <p>More</p>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                        </button>
                        <div class="dropdown-menu city-caption p-style-txt" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                            <p>Area (sqft)</p>
                          <ul class="price-caption">
                          
                            <li>
                                
                                
                                <p>Minimum</p>
                                <input type="text" placeholder="0" list="list-minimum01" class="form-control">
                                <datalist id="list-minimum01">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                            <li>
                                
                                <p>Maximum</p>
                                <input type="text" placeholder="Any" list="list-minimum02" class=" form-control">
                                <datalist id="list-minimum02">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                          </ul>
                          <p>Furnishing</p>
                          <ul class="price-caption">
                            <li>
                              
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            <li>
                              
                                <input type="text" placeholder="Unfurnished"  class=" form-control">
                            </li>
                          </ul>

                          <p>Listed By</p>
                          <ul class="price-caption">
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Agent</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Developer</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Landlord</p>
                            </li>
                            
                          </ul>

                          <p>Keyword Search</p>
                          <ul class="price-caption">
                            <li>
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            </ul>

                            <p>Amenities</p>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Maids Room</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Covered Parking</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Private Garden</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Outdoor Games</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Gym</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Sauna</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Shared Pool</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Water Parks</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Concierge Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Balcony</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Kids play area</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">BBQ Areas</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <div class="search_button text-center pt-2">
                                <button type="button" class="btn search-bttn" style="width:96%;">Search</button>
                              </div>

                        </div>
                      </div>
        
        
                      </div>
                      
        
                      <div class="search_button">
                        <button type="button" class="btn search-bttn">Search</button>
                      </div>
                  </div>
            </div> -->
            <!-- <div class="tab-pane fade" id="tabs05" role="tabpanel" aria-labelledby="contact-tab">
                <div class="tabsflex">
                    <div class="first01">
                        <div class="dropdown srchbtm-text">
                            <p>City</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dubai
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Abu dhabi</a>
                              <a class="dropdown-item" href="#">All Cities</a>
                              <a class="dropdown-item" href="#">sharjah</a>
                              <a class="dropdown-item" href="#">fujairah</a>
                              <a class="dropdown-item" href="#">Ajman</a>
                              <a class="dropdown-item" href="#">Umm Al Quwain</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Location</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Enter Location
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Business bay</a>
                              <a class="dropdown-item" href="#">Downtown</a>
                              <a class="dropdown-item" href="#">Dubai Hills</a>
                              <a class="dropdown-item" href="#">Dubailand</a>
                              <a class="dropdown-item" href="#">JBC</a>
                              <a class="dropdown-item" href="#">Palm jumeirah</a>
                              <a class="dropdown-item" href="#">Town Square</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Property Type</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Types
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                <ul class="nav nav-tabs d-flex justify-content-around" role="tablist">
                                    <li class="nav-item propety-text">
                                      <a class="nav-link active" data-toggle="tab" href="#commercial01" role="tab" aria-controls="property01" aria-selected="true">Residential</a>
                                    </li>
                                    <li class="nav-item propety-text">
                                      <a class="nav-link" data-toggle="tab" href="#commercial02" role="tab" aria-controls="property02" aria-selected="false">Commercial</a>
                                    </li>
                                  </ul>
        
                                  <div class="tab-content" id="myTabContent1" style="background: transparent;box-shadow: none;">
        
                                    <div class="tab-pane fade show active" id="commercial01" role="tabpanel" aria-labelledby="home-tab">
                                    
                                      
                                            <div class="residential-text">
                                                <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="#">Apartment</a>
                                                    <a class="dropdown-item" href="#">Penthouse</a>
                                                    <a class="dropdown-item" href="#">Resid.Bulding</a>
                                                    <a class="dropdown-item" href="#">Resid.Floor</a>
                                                    <a class="dropdown-item" href="#">Resid. Land</a>
                                                </div>
                                                <div class="" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Resid.Plot</a>
                                                    <a class="dropdown-item" href="#">Services Apto.</a>
                                                    <a class="dropdown-item" href="#">Townhouse</a>
                                                    <a class="dropdown-item" href="#">Villa</a>
                                                    <a class="dropdown-item" href="#">Villa Compound</a>
                                                </div>
                                            </div>
                                            
                                      
        
                                    </div>
        
                                    <div class="tab-pane fade" id="commercial02" role="tabpanel" aria-labelledby="profile-tab">
        
                                        <div class="residential-text">
                                            <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                <a class="dropdown-item" href="#">Bulding</a>
                                                <a class="dropdown-item" href="#">Bulk Unit</a>
                                                <a class="dropdown-item" href="#">Commercial Villa</a>
                                                <a class="dropdown-item" href="#">Commercial Plot</a>
                                                <a class="dropdown-item" href="#">Commercial Floor</a>
                                                <a class="dropdown-item" href="#">Factory</a>
        
                                                <a class="dropdown-item" href="#">Floor</a>
                                                <a class="dropdown-item" href="#">Industrial Land</a>
                                            </div>
                                            <div class="" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Labour Camp</a>
                                                <a class="dropdown-item" href="#">Mixed Use</a>
                                                <a class="dropdown-item" href="#">Office</a>
                                                <a class="dropdown-item" href="#">Retail for Rent/Sale</a>
                                                <a class="dropdown-item" href="#">Shop</a>
                                                <a class="dropdown-item" href="#">Showroom</a>
        
                                                <a class="dropdown-item" href="#">Staff accom.</a>
                                                <a class="dropdown-item" href="#">Warehouse</a>
                                            </div>
                                        </div>
        
                                    </div>
                                  </div>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Price Range</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption">
                                <li>
                                    <p>Minimum</p>
                                    <input type="text" placeholder="0" list="price01" class="form-control">
                                    <datalist id="price01">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                                <li>
                                    <p>Maximum</p>
                                    <input type="text" placeholder="Any" list="price02" class=" form-control">
                                    <datalist id="price02">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                              </ul>
                            </div>
                          </div>
         -->
        
                          <!-- <div class="dropdown srchbtm-text">
                            <p>Beds</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption d-block">
                                <li>
                                    <p>Beds</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">Studio</a>
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                    
                                </li>
                                <li>
                                    <p>Baths</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                </li>
                              </ul>
                            </div>
                          </div> -->
        
                        <!-- <div class="dropdown srchbtm-text">
                        <p>More</p>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                        </button>
                        <div class="dropdown-menu city-caption p-style-txt" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                            <p>Area (sqft)</p>
                          <ul class="price-caption">
                          
                            <li>
                                
                                
                                <p>Minimum</p>
                                <input type="text" placeholder="0" list="list-minimum01" class="form-control">
                                <datalist id="list-minimum01">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                            <li>
                                
                                <p>Maximum</p>
                                <input type="text" placeholder="Any" list="list-minimum02" class=" form-control">
                                <datalist id="list-minimum02">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                          </ul>
                          <p>Furnishing</p>
                          <ul class="price-caption">
                            <li>
                              
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            <li>
                              
                                <input type="text" placeholder="Unfurnished"  class=" form-control">
                            </li>
                          </ul>

                          <p>Listed By</p>
                          <ul class="price-caption">
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Agent</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Developer</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Landlord</p>
                            </li>
                            
                          </ul>

                          <p>Keyword Search</p>
                          <ul class="price-caption">
                            <li>
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            </ul>

                            <p>Amenities</p>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Maids Room</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Covered Parking</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Private Garden</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Outdoor Games</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Gym</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Sauna</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Shared Pool</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Water Parks</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Concierge Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Balcony</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Kids play area</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">BBQ Areas</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <div class="search_button text-center pt-2">
                                <button type="button" class="btn search-bttn" style="width:96%;" >Search</button>
                              </div>

                        </div>
                      </div>
        
        
                      </div>
                      
        
                      <div class="search_button">
                        <button type="button" class="btn search-bttn">Search</button>
                      </div>
                  </div>
            </div> -->


            <!-- <div class="tab-pane fade" id="tabs06" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tabsflex">
                    <div class="first01">
                        <div class="dropdown srchbtm-text">
                            <p>City</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dubai
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Abu dhabi</a>
                              <a class="dropdown-item" href="#">All Cities</a>
                              <a class="dropdown-item" href="#">sharjah</a>
                              <a class="dropdown-item" href="#">fujairah</a>
                              <a class="dropdown-item" href="#">Ajman</a>
                              <a class="dropdown-item" href="#">Umm Al Quwain</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Location</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Enter Location
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Business bay</a>
                              <a class="dropdown-item" href="#">Downtown</a>
                              <a class="dropdown-item" href="#">Dubai Hills</a>
                              <a class="dropdown-item" href="#">Dubailand</a>
                              <a class="dropdown-item" href="#">JBC</a>
                              <a class="dropdown-item" href="#">Palm jumeirah</a>
                              <a class="dropdown-item" href="#">Town Square</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Property Type</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Types
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                <ul class="nav nav-tabs d-flex justify-content-around" role="tablist">
                                    <li class="nav-item propety-text">
                                      <a class="nav-link active" data-toggle="tab" href="#shortmonth01" role="tab" aria-controls="property01" aria-selected="true">Residential</a>
                                    </li>
                                    <li class="nav-item propety-text">
                                      <a class="nav-link" data-toggle="tab" href="#shortmonth02" role="tab" aria-controls="property02" aria-selected="false">Commercial</a>
                                    </li>
                                  </ul>
        
                                  <div class="tab-content" id="myTabContent1" style="background: transparent;box-shadow: none;">
        
                                    <div class="tab-pane fade show active" id="shortmonth01" role="tabpanel" aria-labelledby="home-tab">
                                    
                                      
                                            <div class="residential-text">
                                                <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="#">Apartment</a>
                                                    <a class="dropdown-item" href="#">Penthouse</a>
                                                    <a class="dropdown-item" href="#">Resid.Bulding</a>
                                                    <a class="dropdown-item" href="#">Resid.Floor</a>
                                                    <a class="dropdown-item" href="#">Resid. Land</a>
                                                </div>
                                                <div class="" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Resid.Plot</a>
                                                    <a class="dropdown-item" href="#">Services Apto.</a>
                                                    <a class="dropdown-item" href="#">Townhouse</a>
                                                    <a class="dropdown-item" href="#">Villa</a>
                                                    <a class="dropdown-item" href="#">Villa Compound</a>
                                                </div>
                                            </div>
                                            
                                      
        
                                    </div>
        
                                    <div class="tab-pane fade" id="shortmonth02" role="tabpanel" aria-labelledby="profile-tab">
        
                                        <div class="residential-text">
                                            <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                <a class="dropdown-item" href="#">Bulding</a>
                                                <a class="dropdown-item" href="#">Bulk Unit</a>
                                                <a class="dropdown-item" href="#">Commercial Villa</a>
                                                <a class="dropdown-item" href="#">Commercial Plot</a>
                                                <a class="dropdown-item" href="#">Commercial Floor</a>
                                                <a class="dropdown-item" href="#">Factory</a>
        
                                                <a class="dropdown-item" href="#">Floor</a>
                                                <a class="dropdown-item" href="#">Industrial Land</a>
                                            </div>
                                            <div class="" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Labour Camp</a>
                                                <a class="dropdown-item" href="#">Mixed Use</a>
                                                <a class="dropdown-item" href="#">Office</a>
                                                <a class="dropdown-item" href="#">Retail for Rent/Sale</a>
                                                <a class="dropdown-item" href="#">Shop</a>
                                                <a class="dropdown-item" href="#">Showroom</a>
        
                                                <a class="dropdown-item" href="#">Staff accom.</a>
                                                <a class="dropdown-item" href="#">Warehouse</a>
                                            </div>
                                        </div>
        
                                    </div>
                                  </div>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Price Range</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption">
                                <li>
                                    <p>Minimum</p>
                                    <input type="text" placeholder="0" list="price01" class="form-control">
                                    <datalist id="price01">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                                <li>
                                    <p>Maximum</p>
                                    <input type="text" placeholder="Any" list="price02" class=" form-control">
                                    <datalist id="price02">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                              </ul>
                            </div>
                          </div>
        
        
                          <div class="dropdown srchbtm-text">
                            <p>Beds</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption d-block">
                                <li>
                                    <p>Beds</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">Studio</a>
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                    
                                </li>
                                <li>
                                    <p>Baths</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                </li>
                              </ul>
                            </div>
                          </div>
        
                        <div class="dropdown srchbtm-text">
                        <p>More</p>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                        </button>
                        <div class="dropdown-menu city-caption p-style-txt" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                            <p>Area (sqft)</p>
                          <ul class="price-caption">
                          
                            <li>
                                
                                
                                <p>Minimum</p>
                                <input type="text" placeholder="0" list="list-minimum01" class="form-control">
                                <datalist id="list-minimum01">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                            <li>
                                
                                <p>Maximum</p>
                                <input type="text" placeholder="Any" list="list-minimum02" class=" form-control">
                                <datalist id="list-minimum02">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                          </ul>
                          <p>Furnishing</p>
                          <ul class="price-caption">
                            <li>
                              
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            <li>
                              
                                <input type="text" placeholder="Unfurnished"  class=" form-control">
                            </li>
                          </ul>

                          <p>Listed By</p>
                          <ul class="price-caption">
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Agent</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Developer</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Landlord</p>
                            </li>
                            
                          </ul>

                          <p>Keyword Search</p>
                          <ul class="price-caption">
                            <li>
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            </ul>

                            <p>Amenities</p>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Maids Room</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Covered Parking</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Private Garden</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Outdoor Games</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Gym</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Sauna</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Shared Pool</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Water Parks</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Concierge Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Balcony</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Kids play area</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">BBQ Areas</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <div class="search_button text-center pt-2">
                                <button type="button" class="btn search-bttn" style="width:96%;">Search</button>
                              </div>

                        </div>
                      </div>
        
        
                      </div>
                      
        
                      <div class="search_button">
                        <button type="button" class="btn search-bttn" onclick="flt_search">Search</button>
                      </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="tabs07" role="tabpanel" aria-labelledby="contact-tab">
                <div class="tabsflex">
                    <div class="first01">
                        <div class="dropdown srchbtm-text">
                            <p>City</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dubai
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Abu dhabi</a>
                              <a class="dropdown-item" href="#">All Cities</a>
                              <a class="dropdown-item" href="#">sharjah</a>
                              <a class="dropdown-item" href="#">fujairah</a>
                              <a class="dropdown-item" href="#">Ajman</a>
                              <a class="dropdown-item" href="#">Umm Al Quwain</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Location</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Enter Location
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Business bay</a>
                              <a class="dropdown-item" href="#">Downtown</a>
                              <a class="dropdown-item" href="#">Dubai Hills</a>
                              <a class="dropdown-item" href="#">Dubailand</a>
                              <a class="dropdown-item" href="#">JBC</a>
                              <a class="dropdown-item" href="#">Palm jumeirah</a>
                              <a class="dropdown-item" href="#">Town Square</a>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Property Type</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Types
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton">
                                <ul class="nav nav-tabs d-flex justify-content-around" role="tablist">
                                    <li class="nav-item propety-text">
                                      <a class="nav-link active" data-toggle="tab" href="#term01" role="tab" aria-controls="property01" aria-selected="true">Residential</a>
                                    </li>
                                    <li class="nav-item propety-text">
                                      <a class="nav-link" data-toggle="tab" href="#term02" role="tab" aria-controls="property02" aria-selected="false">Commercial</a>
                                    </li>
                                  </ul>
        
                                  <div class="tab-content" id="myTabContent1" style="background: transparent;box-shadow: none;">
        
                                    <div class="tab-pane fade show active" id="term01" role="tabpanel" aria-labelledby="home-tab">
                                    
                                      
                                            <div class="residential-text">
                                                <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="#">Apartment</a>
                                                    <a class="dropdown-item" href="#">Penthouse</a>
                                                    <a class="dropdown-item" href="#">Resid.Bulding</a>
                                                    <a class="dropdown-item" href="#">Resid.Floor</a>
                                                    <a class="dropdown-item" href="#">Resid. Land</a>
                                                </div>
                                                <div class="" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Resid.Plot</a>
                                                    <a class="dropdown-item" href="#">Services Apto.</a>
                                                    <a class="dropdown-item" href="#">Townhouse</a>
                                                    <a class="dropdown-item" href="#">Villa</a>
                                                    <a class="dropdown-item" href="#">Villa Compound</a>
                                                </div>
                                            </div>
                                            
                                      
        
                                    </div>
        
                                    <div class="tab-pane fade" id="term02" role="tabpanel" aria-labelledby="profile-tab">
        
                                        <div class="residential-text">
                                            <div class="" aria-labelledby="dropdownMenuButton" style="border-right: 1px solid #ccc;">
                                                <a class="dropdown-item" href="#">Bulding</a>
                                                <a class="dropdown-item" href="#">Bulk Unit</a>
                                                <a class="dropdown-item" href="#">Commercial Villa</a>
                                                <a class="dropdown-item" href="#">Commercial Plot</a>
                                                <a class="dropdown-item" href="#">Commercial Floor</a>
                                                <a class="dropdown-item" href="#">Factory</a>
        
                                                <a class="dropdown-item" href="#">Floor</a>
                                                <a class="dropdown-item" href="#">Industrial Land</a>
                                            </div>
                                            <div class="" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Labour Camp</a>
                                                <a class="dropdown-item" href="#">Mixed Use</a>
                                                <a class="dropdown-item" href="#">Office</a>
                                                <a class="dropdown-item" href="#">Retail for Rent/Sale</a>
                                                <a class="dropdown-item" href="#">Shop</a>
                                                <a class="dropdown-item" href="#">Showroom</a>
        
                                                <a class="dropdown-item" href="#">Staff accom.</a>
                                                <a class="dropdown-item" href="#">Warehouse</a>
                                            </div>
                                        </div>
        
                                    </div>
                                  </div>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                            <p>Price Range</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption">
                                <li>
                                    <p>Minimum</p>
                                    <input type="text" placeholder="0" list="price01" class="form-control">
                                    <datalist id="price01">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                                <li>
                                    <p>Maximum</p>
                                    <input type="text" placeholder="Any" list="price02" class=" form-control">
                                    <datalist id="price02">
                                        <option href="!#">1,000,000</option>
                                        <option href="!#">5,000,000</option>
                                        <option href="!#">10,000,000</option>
                                        <option href="!#">15,000,000</option>
                                        <option href="!#">20,000,000</option>
                                        <option href="!#">25,000,000</option>
                                        <option href="!#">30,000,000</option>
                                        <option href="!#">35,000,000</option>
                                        <option href="!#">40,000,000</option>
                                        <option href="!#">45,000,000</option>
                                        <option href="!#">50,000,000</option>
                                    </datalist>
                                </li>
                              </ul>
                            </div>
                          </div>
        
        
                          <div class="dropdown srchbtm-text">
                            <p>Beds</p>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Any
                            </button>
                            <div class="dropdown-menu city-caption" aria-labelledby="dropdownMenuButton" style="width: 250px;">
                              <ul class="price-caption d-block">
                                <li>
                                    <p>Beds</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">Studio</a>
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                    
                                </li>
                                <li>
                                    <p>Baths</p>
                                    <div class="multi-buttons">
                                        <a href="!#" type="button">1</a>
                                        <a href="!#" type="button">2</a>
                                        <a href="!#" type="button">3</a>
                                        <a href="!#" type="button">4</a>
                                        <a href="!#" type="button">5</a>
                                        <a href="!#" type="button">6</a>
                                        <a href="!#" type="button">7</a>
                                        <a href="!#" type="button">8+</a>
                                    </div>
                                </li>
                              </ul>
                            </div>
                          </div>
        
                          <div class="dropdown srchbtm-text">
                        <p>More</p>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters
                        </button>
                        <div class="dropdown-menu city-caption p-style-txt" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                            <p>Area (sqft)</p>
                          <ul class="price-caption">
                          
                            <li>
                                
                                
                                <p>Minimum</p>
                                <input type="text" placeholder="0" list="list-minimum01" class="form-control">
                                <datalist id="list-minimum01">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                            <li>
                                
                                <p>Maximum</p>
                                <input type="text" placeholder="Any" list="list-minimum02" class=" form-control">
                                <datalist id="list-minimum02">
                                    <option href="!#">1,000,000</option>
                                    <option href="!#">5,000,000</option>
                                    <option href="!#">10,000,000</option>
                                    <option href="!#">15,000,000</option>
                                    <option href="!#">20,000,000</option>
                                    <option href="!#">25,000,000</option>
                                    <option href="!#">30,000,000</option>
                                    <option href="!#">35,000,000</option>
                                    <option href="!#">40,000,000</option>
                                    <option href="!#">45,000,000</option>
                                    <option href="!#">50,000,000</option>
                                </datalist>
                            </li>
                          </ul>
                          <p>Furnishing</p>
                          <ul class="price-caption">
                            <li>
                              
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            <li>
                              
                                <input type="text" placeholder="Unfurnished"  class=" form-control">
                            </li>
                          </ul>

                          <p>Listed By</p>
                          <ul class="price-caption">
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Agent</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Developer</p>
                            </li>
                            <li class="d_flx">
                                <input type="checkbox" class="form-check-input check_round" >
                                <p class="form-check-label">Landlord</p>
                            </li>
                            
                          </ul>

                          <p>Keyword Search</p>
                          <ul class="price-caption">
                            <li>
                                <input type="text" placeholder="Furnished"  class=" form-control">
                            </li>
                            </ul>

                            <p>Amenities</p>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Maids Room</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Covered Parking</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Private Garden</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Outdoor Games</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Gym</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Sauna</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Shared Pool</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Water Parks</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Concierge Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Balcony</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul class="price-caption">
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">Kids play area</p>
                                    </div>
                                </li>
                                <li>
                                    <div  class="d_flx">
                                        <input type="checkbox" class="form-check-input check_round" >
                                      <p class="form-check-label">BBQ Areas</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <div class="search_button text-center pt-2">
                                <button type="button" class="btn search-bttn" style="width:96%;">Search</button>
                              </div>

                        </div>
                      </div>
        
        
                      </div>
                      
        
                      <div class="search_button">
                        <button type="button" class="btn search-bttn">Search</button>
                      </div>
                  </div>
            </div> -->
          </div>
        </div>
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
          <a href="developers-page.html">
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
            <div class="col-xl-4 col-4">
            <a href="omniyet.html">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@97.webp" class="d-block w-100" alt="...">
            </a>
            </div>
            <div class="col-xl-4 col-4">
            <a href="vincitore.html">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@98.webp" class="d-block w-100" alt="...">
            </a>
            </div>
            <div class="col-xl-4 col-4">
            <a href="mag.html">
                 <img src="https://thevaultrealestate.com/assets/images/index-page/@96.webp" class="d-block w-100" alt="...">
            </a>
            </div>
        </div>
      
      
    </div>
    <div class="carousel-item">
       <div class="row">
            <div class="col-xl-4 col-4">
             <a href="one-zabeel.html">
                                    <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (8).png" class="develop-img img-fluid w-100">
                                </a>
            </div>
            <div class="col-xl-4 col-4">
            <a href="binghatti.html">
                                    <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (11).png" class="develop-img img-fluid w-100">
                                </a>
            </div>
            <div class="col-xl-4 col-4">
           <a href="vincitore-volare.html">
                                    <img src="https://thevaultrealestate.com/assets/images/index-page/@98.webp" class="develop-img mnt img-fluid w-100">
                                </a>
            </div>
        </div>
    </div>
  
    <div class="carousel-item">
       <div class="row">
            <div class="col-xl-4 col-4">
           <a href="damag.html">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (3).png" class="develop-img img-fluid w-100">
                                    </a>
            </div>
            <div class="col-xl-4 col-4">
          <a href="meeras.html">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (6).png" class="develop-img img-fluid w-100">
                                </a>
            </div>
            <div class="col-xl-4 col-4">
           <a href="sls.html">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (9).png" class="develop-img img-fluid w-100">
                            </a>
            </div>
        </div>
    </div>
  
    <div class="carousel-item">
       <div class="row">
            <div class="col-xl-4 col-4">
           <a href="reportage.html">
                            <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (13).png" class="develop-img img-fluid w-100">
                        </a>
            </div>
            <div class="col-xl-4 col-4">
         <a href="mag.html">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (2).png" class="develop-img img-fluid w-100">
                               </a>
            </div>
            <div class="col-xl-4 col-4">
           <a href="aldar.html">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (4).png" class="develop-img img-fluid w-100">
                            </a>
            </div>
        </div>
    </div>
  
    <div class="carousel-item">
       <div class="row">
            <div class="col-xl-4 col-4">
          <a href="devmark.html">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (7).png" class="develop-img img-fluid w-100">
                            </a>
            </div>
            <div class="col-xl-4 col-4">
        <a href="tilal.html">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (10).png" class="develop-img img-fluid w-100">
                            </a>
            </div>
            <div class="col-xl-4 col-4">
           <a href="!#">
                                <img src="https://thevaultrealestate.com/assets/images/developer_page/Property 1=Variant2 (12).png" class="develop-img img-fluid w-100">
                            </a>
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
            <a href="developers-page.html"> <img src="https://thevaultrealestate.com/assets/images/@97.jpg" class="d-block w-100" alt="..."></a>
           </div>
          
           <div class="carousel-item mobile-sldr1">
               <a href="developers-page.html"> <img src="https://thevaultrealestate.com/assets/images/@98.jpg" class="d-block w-100" alt="..."></a>
           </div>
          
           <div class="carousel-item mobile-sldr1">
               <a href="developers-page.html"><img src="https://thevaultrealestate.com/assets/images/@96.jpg" class="d-block w-100" alt="..."></a>
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
        <div class="col-lg-3 col-md-3 col-sm-12 col-12    prjct-aftr-img01">
          <div class="project-caption prjcticn1">
           <h2 class="timer" data-from="10" data-to="232" data-speed="1000" data-target="#yesyes">10</h2>
          
          <p>Available <br>
            Villas</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-12    prjct-aftr-img02">
          <div class="project-caption prjct-cptn02">
           <h2 class="timer" data-from="8" data-to="26" data-speed="1000" data-target="#yesyes">8</h2>
          
          <p>Available<br> Penthouses</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-12    prjct-aftr-img03">
          <div class="project-caption prjct-cptn03">
           <h2 class="timer" data-from="48" data-to="368" data-speed="1000" data-target="#yesyes">48</h2>
          
          <p>Available<br> Townhouses</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-12    prjct-aftr-img04">
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
     border: 2px solid transparent;
}
.main-reviewimage {
     border-radius: 0%;
     height: auto;
     width: 100%;
     background: transparent;
}
/* .main-reviewimage img {
     opacity: 0.3;
} */
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
     border-radius: 0%;
     overflow: hidden;
     margin: 0 auto;
     height: 100%;
     object-fit: cover;
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
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
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

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex align-items-center order-lg-2 order-1">

          
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
        <div class="col-lg-8 col-md-12  col-sm-12 col-12">
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
         
        
        

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex">

          
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
            <form action="{{route('personal')}}" method="POST" enctype="multipart/form-data">
                @csrf
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
                  <select class="frm-custom" name="language">
                    <option selected>English</option>
                    <!--<option>...</option> -->
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label class="cstm-name">Project of Interest *</label><br>
                  <input type="text" max="10" min="1" class="frm-custom" placeholder="123 4567" name="intrest">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <button type="sumit" class="btn cstm-button">Submit</button>
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
    <span class=".consultation-btm-image" style="background-size: auto;width: 457.68px; height: 240px; bottom: -1px; left: -12px;"></span>
  </section>






 <footer id="footer">
        <div class="container pt-5 pb-5">
            <div class="row footer_row mt-3">
                <div class="col-xl-4 col-md-12 col-12 ftr-rgt-pdn">
                <a href="index.html">
                    <img src="https://thevaultrealestate.com/assets/images/Logo gold 1.png" class="img-fluid footer_logo" alt="">
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
  function myRent() {
    // document.getElementById("open-tb").style.display = "none";

    // var porpose_text = $("#sale_id_first").text();
    // console.log(porpose_text);
    // console.log("porpose_text");
    // $("#rent_property").hide();
    // $("#sale_id_first").empty();
    // $("#rent_property").empty();
    $("#sale_id_sed").empty();
    var myhtml_rent_sec = '<ul class="nav nav-tabs top-srch-text" role="tablist" id="sale_id_sec"><li class="nav-item" value="residential"><a class="nav-link blue-active active" data-toggle="tab" href="#tabs04" role="tab" aria-controls="home" aria-selected="true">Residential</a></li><li class="nav-item" value="commercial"><a class="nav-link blue-active" data-toggle="tab" href="#tabs05" role="tab" aria-controls="profile" aria-selected="false">Commercial</a></li><li class="nav-item" value="short_term_monthly"><a class="nav-link blue-active" data-toggle="tab" href="#tabs06" role="tab" aria-controls="home" aria-selected="true">Short term (monthly)</a></li><li class="nav-item" value="short_term_daily"><a class="nav-link blue-active" data-toggle="tab" href="#tabs07" role="tab" aria-controls="profile" aria-selected="false">Short term (daily)</a></li>/ul>';
    $("#sale_id_sed").append(myhtml_rent_sec);

    // var rent = document.getElementById("open-tb");
    // $("#sale_id_first").empty();
    // document.getElementById("open-tb").style.display = "none";
    // myhtml = '<li class="nav-item"><a class="nav-link blue-active active" data-toggle="tab" href="#tabs04" role="tab" aria-controls="home" aria-selected="true">Residential</a></li><li class="nav-item"><a class="nav-link blue-active" data-toggle="tab" href="#tabs05" role="tab" aria-controls="profile" aria-selected="false">Commercial</a></li>';
    // $("#sale_id_first").append(myhtml);
    // if (rent.style.display = "flex") {

    // } else {
    //     rent.style.display = "none";
    // }
  }
  //======>

</script>

  <script>
  function myFunctionOff() {
    // $("#sale_id_first").empty();
    $("#sale_id_sed").empty();
     
    var myhtml_rent = '<ul class="nav nav-tabs top-srch-text" role="tablist" id="sale_id_off"><li class="nav-item" value="residential"><a class="nav-link blue-active active" data-toggle="tab" href="#tabs04" role="tab" aria-controls="home" aria-selected="true">Residential</a></li><li class="nav-item" value="commercial"><a class="nav-link blue-active" data-toggle="tab" href="#tabs05" role="tab" aria-controls="profile" aria-selected="false">Commercial</a></li></ul>';
    $("#sale_id_sed").append(myhtml_rent);
    //   var off1 = document.getElementById("close-tb");
    //   if (off1.style.display = "none") {

    //   } else {
    //       off1.style.display = "flex";
    //   }
    // }

    // //===========>

    // function myFunctionOff() {
    //   document.getElementById("open-tb").style.display = "none";
  }

    //===========>

    function mySale() {
      // document.getElementById("open-tb").style.display = "none";

      var porpose_text = $("#sale_id_first").text();
      console.log(porpose_text);
      console.log("porpose_text");
      $("#rent_property").hide();
      $("#sale_id_first").empty();
      $("#sale_id_sed").empty();
        
      myhtml = '<ul class="nav nav-tabs top-srch-text" role="tablist" id="sale_id_second"><li class="nav-item" value="residential"><a class="nav-link blue-active active" data-toggle="tab" href="#tabs04" role="tab" aria-controls="home" aria-selected="true">Residential</a></li><li class="nav-item" value="commercial"><a class="nav-link blue-active" data-toggle="tab" href="#tabs05" role="tab" aria-controls="profile" aria-selected="false">Commercial</a></li></ul>';
      $("#sale_id_sed").append(myhtml);
    }
</script>



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
//</script>


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
<script>  
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
  });
});
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

<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
<script>
// var jsLang = $("#porpose_select").val();
var porpose_select_filter = "";
  $("#porpose_select li").click(function (){       
    porpose_select_filter = $(this).attr("value");
    console.log(porpose_select_filter);

    switch(porpose_select_filter) { 
      case 'sale': ;
        filterSearch();
        break;
      case 'rent': 
        filterSearch();
      case 'offplane': 
        filterSearch();
        break;
      default:
        alert('No porpose seleted');
    }
  });

  $(document).ready(function() {
    $("input[name='furnishing_status[]']").empty();
    $('#search_filter_next').click(function() {
      $("#search_filter_min").empty();
      $("#area_filter_max").empty();
      $("#filter_furnished").empty();
      $("#filter_furnished").empty();
      $("#filter_listed").empty();
      
      var minimum_area = $('#min_area').val();
      var myhtml = '<input type="hidden" value='+minimum_area+' name="filter_min" list="priceflt" class="form-control">';
      $("#search_filter_min").append(myhtml);
      
      var maximum_area = $('#max_area').val();
      var myhtml_max = '<input type="hidden" value='+maximum_area+' name="filter_max" list="priceflt" class="form-control">';
      $("#area_filter_max").append(myhtml_max);

      var furnis_status = $("input[name='furnishing_status[]']:checked:enabled").map(function(){return $(this).val() ;}).get();
      var myhtml_furnis_status = '<input type="hidden" value='+furnis_status+' name="filter_furnished" list="priceflt" class="form-control">';
      $("#filter_furnished").append(myhtml_furnis_status);

      var listed = $("input[name='listed_by[]']:checked:enabled").map(function(){return $(this).val();}).get();
      var myhtml_listed = '<input type="hidden" value='+listed+' name="filter_listed" list="priceflt" class="form-control">';
      $("#filter_listed").append(myhtml_listed);

      var keyword = $("input[name='keyword_search[]']:checked:enabled").map(function(){return $(this).val();}).get();
      var myhtml_keyword = '<input type="hidden" value='+keyword+' name="filter_keyword" list="priceflt" class="form-control">';
      $("#filter_keyword").append(myhtml_keyword);

      // var porpose_type_filter = '<input type="hidden" id="porpose_type_filter" value='sale' name="porpose_type_filter" list="priceflt" class="form-control">';
      // $("#porpose_type_filter").append(porpose_type_filter);
    });

    $("#sale_id_first li").click(function (){       
      var porpose_filter = $(this).attr("value");
      console.log(porpose_filter);
      var html_porpose_filter = '<input type="hidden" id="porpose_filter_search" value='+porpose_filter+' name="porpose_filter_search" list="priceflt" class="form-control">'
      $("#porpose_filter_search").append(html_porpose_filter);
    });

    $("#rent_property li").click(function (){       
        var porpose_filter_rent_property = $(this).attr("value");
        console.log(porpose_filter_rent_property);
    });  
  });

  function filterSearch(){
    if(porpose_select_filter == "sale"){
      $('#search_filter_next').click(function() {
        $("#search_filter_min").empty();
        $("#area_filter_max").empty();
        $("#filter_furnished").empty();
        $("#filter_furnished").empty();
        $("#filter_listed").empty();
        
        var minimum_area = $('#min_area').val();
        var myhtml = '<input type="hidden" value='+minimum_area+' name="filter_min" list="priceflt" class="form-control">';
        $("#search_filter_min").append(myhtml);
        
        var maximum_area = $('#max_area').val();
        var myhtml_max = '<input type="hidden" value='+maximum_area+' name="filter_max" list="priceflt" class="form-control">';
        $("#area_filter_max").append(myhtml_max);

        var furnis_status = $("input[name='furnishing_status[]']:checked:enabled").map(function(){return $(this).val() ;}).get();
        var myhtml_furnis_status = '<input type="hidden" value='+furnis_status+' name="filter_furnished" list="priceflt" class="form-control">';
        $("#filter_furnished").append(myhtml_furnis_status);

        var listed = $("input[name='listed_by[]']:checked:enabled").map(function(){return $(this).val();}).get();
        var myhtml_listed = '<input type="hidden" value='+listed+' name="filter_listed" list="priceflt" class="form-control">';
        $("#filter_listed").append(myhtml_listed);

        var keyword = $("input[name='keyword_search[]']:checked:enabled").map(function(){return $(this).val();}).get();
        var myhtml_keyword = '<input type="hidden" value='+keyword+' name="filter_keyword" list="priceflt" class="form-control">';
        $("#filter_keyword").append(myhtml_keyword);

        // var porpose_type_filter = '<input type="hidden" id="porpose_type_filter" value='sale' name="porpose_type_filter" list="priceflt" class="form-control">';
        // $("#porpose_type_filter").append(porpose_type_filter);
      });

    
      $("#sale_id_second li").click(function (){       
        var porpose_filter = $(this).attr("value");
        console.log(porpose_filter);
        var html_porpose_filter = '<input type="hidden" id="porpose_filter_search" value='+porpose_filter+' name="porpose_filter_search" list="priceflt" class="form-control">'
        $("#porpose_filter_search").append(html_porpose_filter);
      });

      // $("#rent_property li").click(function (){       
      //   var porpose_filter_rent_property = $(this).attr("value");
      //   console.log(porpose_filter_rent_property);
      // });
    }else if(porpose_select_filter == "rent"){
      $('#search_filter_next').click(function() {
      $("#search_filter_min").empty();
      $("#area_filter_max").empty();
      $("#filter_furnished").empty();
      $("#filter_furnished").empty();
      $("#filter_listed").empty();
      
      var minimum_area = $('#min_area').val();
      var myhtml = '<input type="hidden" value='+minimum_area+' name="filter_min" list="priceflt" class="form-control">';
      $("#search_filter_min").append(myhtml);
      
      var maximum_area = $('#max_area').val();
      var myhtml_max = '<input type="hidden" value='+maximum_area+' name="filter_max" list="priceflt" class="form-control">';
      $("#area_filter_max").append(myhtml_max);

      var furnis_status = $("input[name='furnishing_status[]']:checked:enabled").map(function(){return $(this).val() ;}).get();
      var myhtml_furnis_status = '<input type="hidden" value='+furnis_status+' name="filter_furnished" list="priceflt" class="form-control">';
      $("#filter_furnished").append(myhtml_furnis_status);

      var listed = $("input[name='listed_by[]']:checked:enabled").map(function(){return $(this).val();}).get();
      var myhtml_listed = '<input type="hidden" value='+listed+' name="filter_listed" list="priceflt" class="form-control">';
      $("#filter_listed").append(myhtml_listed);

      var keyword = $("input[name='keyword_search[]']:checked:enabled").map(function(){return $(this).val();}).get();
      var myhtml_keyword = '<input type="hidden" value='+keyword+' name="filter_keyword" list="priceflt" class="form-control">';
      $("#filter_keyword").append(myhtml_keyword);

      // var porpose_type_filter = '<input type="hidden" id="porpose_type_filter" value='sale' name="porpose_type_filter" list="priceflt" class="form-control">';
      // $("#porpose_type_filter").append(porpose_type_filter);
      });
      $("#sale_id_sec li").click(function (){       
        var porpose_rent_filter = $(this).attr("value");
        console.log(porpose_rent_filter);
        var rent_porpose_filter = '<input type="hidden" id="porpose_rent_filter" value='+porpose_rent_filter+' name="porpose_rent_filter" list="priceflt" class="form-control">';
        $("#rent_porpose_filter").append(rent_porpose_filter);
      });

      // $("#rent_property_sec li").click(function (){       
      //     var porpose_filter_rent_property = $(this).attr("value");
      //     console.log(porpose_filter_rent_property);
      // });
    }else if(porpose_select_filter == "offplane"){
      $("#sale_id_off li").click(function (){       
        var porpose_filter = $(this).attr("value");
        console.log(porpose_filter);
        var html_porpose_filter = '<input type="hidden" id="sale_id_off" value='+porpose_filter+' name="sale_id_off" list="priceflt" class="form-control">';
        $("#porpose_filter_search").append(html_porpose_filter);
      });

      
      // console.log(porpose_select_filter);
      $('#search_filter_next').click(function() {
      $("#search_filter_min").empty();
      $("#area_filter_max").empty();
      $("#filter_furnished").empty();
      $("#filter_furnished").empty();
      $("#filter_listed").empty();
      
      var minimum_area = $('#min_area').val();
      var myhtml = '<input type="hidden" value='+minimum_area+' name="filter_min" list="priceflt" class="form-control">';
      $("#search_filter_min").append(myhtml);
      
      var maximum_area = $('#max_area').val();
      var myhtml_max = '<input type="hidden" value='+maximum_area+' name="filter_max" list="priceflt" class="form-control">';
      $("#area_filter_max").append(myhtml_max);

      var furnis_status = $("input[name='furnishing_status[]']:checked:enabled").map(function(){return $(this).val() ;}).get();
      var myhtml_furnis_status = '<input type="hidden" value='+furnis_status+' name="filter_furnished" list="priceflt" class="form-control">';
      $("#filter_furnished").append(myhtml_furnis_status);

      var listed = $("input[name='listed_by[]']:checked:enabled").map(function(){return $(this).val();}).get();
      var myhtml_listed = '<input type="hidden" value='+listed+' name="filter_listed" list="priceflt" class="form-control">';
      $("#filter_listed").append(myhtml_listed);

      var keyword = $("input[name='keyword_search[]']:checked:enabled").map(function(){return $(this).val();}).get();
      var myhtml_keyword = '<input type="hidden" value='+keyword+' name="filter_keyword" list="priceflt" class="form-control">';
      $("#filter_keyword").append(myhtml_keyword);

      // var porpose_type_filter = '<input type="hidden" id="porpose_type_filter" value='sale' name="porpose_type_filter" list="priceflt" class="form-control">';
      // $("#porpose_type_filter").append(porpose_type_filter);
      });
    }
  // });
  }
</script>
</body>
</html>
