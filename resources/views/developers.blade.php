@php
use App\Models\Developer;
use App\Models\File;
$users = Developer::all();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$developers->developerName}}</title>
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
    <link href="https://thevaultrealestate.com/assets/css/home.css" rel="stylesheet" type="text/css">
 <style>
        .slick-prev{
            display: none !important;
        }
    </style>
</head>

<body>

   
    <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-center">
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul class="me-auto">
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#>Developers  <i class="bi bi-chevron-down"></i></a>
            <ul class="overflow-y-auto">
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
                                       @foreach($users as $user)
                                        <li>
                                            <a href="{{route('developers', $user->developerName)}}">{{$user->developerName}}</a>
                                        </li>
                                        @endforeach
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
</header><!-- End Header -->
    <!-- End Header -->

    <section class="banner">
        <div class="top-banner">
            <img class="banner-img" src="{{asset('publice/images/'.$banner_daveloper[0])}}">   
            <h1><img class="banner-img" src="{{asset('publice/images/'.$devlogo[0])}}">
            </h1>
    </section>
    <section class="project-section">
        <div class="container p-b p-t">
            <div class="row">
                <div class="col-md-4 order-lg-1 order-2">
                    <div class="project">
                        <h1>
                        <hr class="bold-line">
                            Projects
                        </h1>
                        <p>{{$developers->description}}</p>
                    </div>
                </div>
                
                 <div class="col-md-8 order-lg-1 order-1">
                    <div class="row">
                        <section class="regular slider">
                            @php 
                                $dibf = ceil(count($project_of_developer)/3);
                                $count=0;
                            @endphp
                    
                        @for($i=0; $i < $dibf; $i++)
                            <div class="col-md-4  pe-2">
                              <a href="{{route('propertyDetails', $developers->developerName)}}"> 
                                <div class="back-img1">
                                <img class="" src="{{asset('publice/images/'.$project_of_developer[$count][0])}}"> 
                                 </div>    
                                </a>
                            </div>
                            <div class="col-md-4  pe-2">
                              <a href="{{route('propertyDetails', $developers->developerName)}}"> 
                                <div class="back-img1">
                                <img class="" src="{{asset('publice/images/'.$project_of_developer[$count+1][0])}}"> 
                                 </div>    
                                </a>
                            </div>
                            <div class="col-md-4  pe-2">
                              <a href="{{route('propertyDetails', $developers->developerName)}}"> 
                                <div class="back-img1">
                                <img class="" src="{{asset('publice/images/'.$project_of_developer[0][0])}}"> 
                                 </div>    
                                </a>
                            </div>
                            @php 
                                $count=$count+1;
                            @endphp
                        @endfor
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-img">
            <img src="https://thevaultrealestate.com/assets/images-r/layer.png">
        </div>
    </section>
    <footer id="footer">
        <div class="container pt-5 pb-5">
            <div class="row footer_row mt-3">
                <div class="col-xl-4 col-md-12 col-12 ftr-rgt-pdn">
                <a href="index.html">
                    <img src="https://thevaultrealestate.com/assets/images-r/Logo gold 1.png" class="img-fluid footer_logo" alt="">
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
     
             <!-- slick css -->

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://thevaultrealestate.com/assets/vendor/slick/slick.js" type="text/javascript" charset="utf-8"></script>

    <!-- Vendor JS Files -->
    <script src="https://thevaultrealestate.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://thevaultrealestate.com/assets/js/main.js"></script>


    <script type="text/javascript">
         $(document).on('ready', function() {
            $(".regular").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true,
        slidesToScroll: 1,
        infinite: true,
        autoplay:false,
        autoplaySpeed: 1000,
        });
      });
    </script>
</body>

</html>
<!-- <script type="text/javascript">
         function propertyDetails() {
            alert("Hello..");
            $.ajax({
               type:'POST',
               url:'/propertyDetails',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
      }
</script> -->