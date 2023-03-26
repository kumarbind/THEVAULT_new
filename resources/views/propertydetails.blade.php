@php
use App\Models\Developer;
use App\Models\File;
$users = Developer::all();
$logoImgs = File::where('type', "LOGO")->get();
foreach($logoImgs as $logoImg){
    $logo_name = json_decode($logoImg->path);
}

$banner_images = File::where('type', "Banner")->get();
foreach($banner_images as $projectImg){
    $banner_image = json_decode($projectImg->path);
}

$count_animity = 0;
$animites_images = File::where('type', "Animites")->where('owner_id', $properties->id)->get();
foreach($animites_images as $projectImg){
    $animites_image = json_decode($projectImg->path);
}

$animites_Icons = File::where('type', "LOGO")->get();
foreach($animites_Icons as $animites_Icon){
    $animites_show = json_decode($animites_Icon->path);
}

$count_gallary = 0;
$gallary_images = File::where('type', "Gallary")->get();
foreach($gallary_images as $gallary_image){
    $gallary_image = json_decode($gallary_image->path);
}

  $propertieDetails = $properties;
  $amenitiesList = $properties->amenitiesList;
  $animity_descriptions = $properties->amenitiesNearby;
  $location = $properties->location;
  $nearby =$properties->location;


  $payment_plan = $properties->payment_plan;

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
  <link href="http://brandsdynamo.agency/assets/img/Logo gold 1.png" rel="icon">
  <!-- <link href="http://brandsdynamo.agency/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans&family=PT+Serif&family=Roboto:wght@400;500&display=swap"
      rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="http://brandsdynamo.agency/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://brandsdynamo.agency/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://brandsdynamo.agency/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 


  <!-- Template Main CSS File -->

<link href="http://brandsdynamo.agency/assets/css/omniyat.css" rel="stylesheet">

  <!---------------------->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  

 <!-- Important Owl stylesheet -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css"> -->


<!--  jQuery 1.7+  -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

<!-- Include js plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js">
</script>


  <link  rel="stylesheet" type="text/css" href="http://brandsdynamo.agency/assets/css/home.css">

  <link  rel="stylesheet" type="text/css" href="http://brandsdynamo.agency/assets/vendor/swiper/swiper-bundle.min.css">




</head>
 
<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-center">
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul class="me-auto">
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#">Developers  <i class="bi bi-chevron-down"></i></a>
        <ul class="overflow-y-auto">
            @foreach($users as $user)
              <li><a href="{{route('developers', $user->developerName)}}">{{$user->developerName}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#">About Us</a></li>
        <li><a href="index.html"><img src="http://brandsdynamo.agency/assets/images/Logo gold 1.png" alt=""></a></li>
        <li><a class="nav-link scrollto " href="#">Our Services</a></li>
        <li><a class="nav-link scrollto" href="#">News</a></li>
        <li class="dropdown">
          <a href="#">
          <span> <img src="http://brandsdynamo.agency/assets/images/vector-icon.png"></span> <i class="bi bi-chevron-down"></i>
        </a>
          <ul>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a id="toggle" class="nav-link scrollto sidebar-nav" href="#" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"  onclick="toggle(this.id)"><i class="bi bi-filter-right"></i></a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    
          <!--offcanvas-->
          <div id="dspNone">
          <div  class="offcanvas offcanvas-end bg-header " data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
              id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
              
               <!---close-btn-->
               
              <!--<div class="offcanvas-header">-->
              <!--    <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
              <!--</div>-->
              
              <div class="">
                    <div class="bg-hdr-img">
                        <img class="img-fluid d-blcok" src="http://brandsdynamo.agency/assets/images/bg-hdr-frm.png" alt="" />
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
                                      <li class="dropdown bfrimg" data-bs-toggle="dropdown"><img src="http://brandsdynamo.agency/assets/images/bg01.png" class="img-fluid d-block">Developers<img src="http://brandsdynamo.agency/assets/images/bg06.png" class="img-fluid d-block mr-0" style="margin-left: 19% !important;"></li>
                                      <ul class="dropdown-menu">
                                         <li><a class="dropdown-item" href="#">Link 1</a></li>
                                         <li><a class="dropdown-item" href="#">Link 2</a></li>
                                      </ul>
                                      
                                      <li class="dropdown bfrimg" data-bs-toggle="dropdown"><img src="http://brandsdynamo.agency/assets/images/bg05.png" class="img-fluid d-block">About Us<img src="http://brandsdynamo.agency/assets/images/bg06.png" class="img-fluid d-block" style="margin-left: 29% !important;margin-right: 0% !important;"></li>
                                      <ul class="dropdown-menu">
                                         <li><a class="dropdown-item" href="#">Link 3</a></li>
                                         <li><a class="dropdown-item" href="#">Link 4</a></li>
                                      </ul>
                                      
                                      <li><img src="http://brandsdynamo.agency/assets/images/bg02.png" class="img-fluid d-block">Our Service</li>
                                      <li><img src="http://brandsdynamo.agency/assets/images/bg03.png" class="img-fluid d-block">News</li>
                                      <li><img src="http://brandsdynamo.agency/assets/images/bg04.png" class="img-fluid d-block">After Sale</li>
                                      <li class="dropdown"><img src="http://brandsdynamo.agency/assets/images/bg06.png" class="img-fluid d-block">Support</li>
                                      
                                  </ul>
                              </div>
                </div>
          </div>

          <!--end offcancas-->

  </div>
  </div>
</header><!-- End Header -->

<!-- ======= Section ======= -->
<section class="dorchester-sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 p-0">
        <img src="{{asset('publice/images/'.$banner_image[0])}}" alt="test" class="img-fluid w-100">
        <div class="heroContent">
          <h2><span><span class="logo-vellaysection-side-bdr"></span><img class="" src="{{asset('publice/images/'.$logo_name[0])}}" alt="" />
           </span></h2>
          <p class="pHero">{{$propertieDetails->description}}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--====== section-02= end========-->

<!---========SECTION--03===========---->
<section class="section-03 anwa-section-02">
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12">
      <div class="section-03-title">
        <h2><span class="vellaytopsection-side-bdr"></span>Amenities</h2>
      </div>
    </div>
   </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
        <div class="section02-image">
          <ul>
              @for($i=0; $i < 2; $i++)
                  <li><img class="mx-auto img-fluid d-block" src="{{asset('animites/images/'.$animites_image[0])}}" alt=""/></li>
                  @php
                    $count_animity = $count_animity+1;
                  @endphp
              @endfor
          </ul>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-12">
        <div class="section-03-second-img">
          <img class="mx-auto img-fluid d-block" src="{{asset('animites/images/'.$animites_image[count($animites_image)-1])}}" alt=""/>
        </div>
      </div>
    </div>
  </div>
</section>
<!---========SECTION-03=END================-->

<!---========SECTION-04=============-->
<section class="section-04 anwa-section-04">
  <div class="container-fluid">
   
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center align-items-center">
        <div class="section-left-box">
          <h3 class="text-left pl-4">{{$propertieDetails->property_name}} -<br>ORANIA</h3>
          <p>{{$propertieDetails->villaDescription}}</p>
          <ul class="mt-0">
            <li><p>DOWNLOAD BROCHURE</p></li>
            <li><a href="#" data-toggle="modal" data-target="#brochuremodal"><img class="mx-auto img-fluid-d-block" src="http://brandsdynamo.agency/assets/images/Group.png" alt=""></a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center align-items-center section-box02">
        <div class="section04-image">
           <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="section-caption">
                <h3><span class="section-side-bdr"></span>Amenities</h3>
                <ul>
                @for($i=0; $i < 3; $i++)
                  <li>
                    <div><img src="{{asset('publice/images/'.$animites_show[0])}}" alt="" /></div>
                    <div><p>{{$amenitiesList[0]}}</p></div>
                  </li>   
                @endfor  
                </ul>

              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <div class="section-caption">
                <h3><span class="section-side-bdr"></span>Nearby</h3>
                <ul>
                    @for($i=0; $i < 3; $i++)
                      <li>
                        <div><img src="http://brandsdynamo.agency/assets/images/Ellipse19.png" alt="" /></div>
                        <div><p>{{$amenitiesList[0][$i]}}</p></div>
                      </li>   
                    @endfor
                </ul>

              </div>
            </div>
           </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!---=========SECTION-04=END================-->
 

<!---========SECTION-05=============-->
<section class="section-05">
  <div class="container-fluid">
   
    <div class="row">
      <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-end align-items-center">
        <div class="section-caption-05 mrgn-lft1">
          <h3><span class="section-05-bdr"></span>Location Map</h3>
          
            <ol style="padding-left: 16px;">
              @foreach($location as $amenities)
                <li>
                    <div><p>{{$location[0]}}</p></br>
                  </div> 
                </li>
              @endforeach
            </ol>
         
        </div>
      </div>

      <div class="col-lg-7 col-md-7 col-12 d-flex justify-content-end align-items-center section-box05">
        <div class="section05-image">
          <img class="mx-auto img-fluid d-block" src="http://brandsdynamo.agency/assets/images/thevalley/valley-map.png" alt=""/>
        </div>
      </div>

    </div>
  </div>
</section>
<!---=========SECTION-05=END================-->
 

<section class="section-03 pt-0">
  <div class="container-fluid">
   <!-- <div class="row">
    <div class="col-lg-12">
      <div class="section-03-title">
        <h2><span class="vellaytopsection-side-bdr"></span>Amenities</h2>
      </div>
    </div>
   </div> -->
   <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="section-03-second-img">
          <img class="mx-auto img-fluid d-block" src="{{asset('publice/images/'.$gallary_image[count($gallary_image)-1])}}" alt=""/>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
        <div class="section02-image">
          <ul>
              @for($i=0; $i < count($gallary_image); $i++)
                  <li><img class="mx-auto img-fluid d-block" src="{{asset('publice/images/'.$gallary_image[$count_gallary])}}" alt=""/></li>
                  @php
                    $count_animity = $count_animity+1;
                  @endphp
              @endfor
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!---------===SECTION-08============-->
<section class="section-08 section-03">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-md-7 col-12">
        <div class="section-08-box">
         <div class="sectio-title-08">
          <h3><span class="section-08-bdr"></span>Availabilities </h3>
         </div>
          <div class="d-flex section-row-01 d-flex justify-content-center align-items-center">
            <ul>
              <li>
                <h3>Description</h3>
              </li>
              <li>
                <h3>Size Sq.Ft</h3>
              </li>
              <li>
                <h3>Starting Price</h3>
              </li>
            </ul>
          </div>
          <div class="d-flex section-row-01 d-flex justify-content-center align-items-center">
            <ul>
                <li>
                  <div><img src="http://brandsdynamo.agency/assets/images/Vector(13).png" alt="" /></div>
                    <div><p>{{$amenities}}</p></br>
                  </div> 
                </li>
              <li>
                <p>4,74</p>
              </li>
              <li>
                <p>1.15 M</p>
              </li>
            </ul>
          </div>
          <div class="d-flex section-row-01 d-flex justify-content-center align-items-center">
            <ul>
              <li>
                <p>1BR</p>
              </li>
              <li>
                <p>7,03</p>
              </li>
              <li>
                <p>1.6 M</p>
              </li>
            </ul>
          </div>
          <div class="d-flex section-row-01 d-flex justify-content-center align-items-center">
            <ul>
              <li>
                <p>2BR</p>
              </li>
              <li>
                <p>Studio</p>
              </li>
              <li>
                <p>3.4 M</p>
              </li>
            </ul>
          </div>

          <div class="d-flex section-row-01 d-flex justify-content-center align-items-center">
            <ul>
              <li>
                <p>3BR</p>
              </li>
              <li>
                <p>1,69</p>
              </li>
              <li>
                <p>1.69 M</p>
              </li>
            </ul>
          </div>

          <div class="d-flex section-row-01 d-flex justify-content-center align-items-center">
            <ul>
              <li>
                <p>Penthouse</p>
              </li>
              <li>
                <p>6,63</p>
              </li>
              <li>
                <p>16.4 M</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center align-items-center">
        <div class="section-08-right">
          <h2>Payment Plan
            <img src="http://brandsdynamo.agency/assets/images-r/payment-gold.png">
          </h2>
          <ul>
            <span class="text-white">{{$payment_plan}}</span> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!---------===SECTION-08============-->


<!---------===SECTION-09============-->

<section class="free-sec section-03">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-end p-0 free-right-image">
              <div class="free-text-box">
                  <h2><span class="section-08-bdr"></span>Get A Free Consultation</h2>
                  <form class="free-form">
                      <input class="form-control free-input" type="text" placeholder="Full Name">
                      <input class="form-control free-input" type="text" placeholder="email@gmail.com">
                        
                      <img src="https://i.ibb.co/Qn1sxj2/Group-16265.png" class="img-fluid d-block get-flag" alt="">
                     <input class="form-control free-input pdn-00" type="number" placeholder="+58">
                      
                      <input type="checkbox" class=""><span>I accept the terms of the User Agreement and privacy Policy</span>
                     <div class="free-btn">
                      <button type="button">Contact</button>
                     </div>
                  </form>
              </div>
          </div>
          <div class="col-md-8  mt-3 mb-5 card_row">
                    <div class="container">
                        <div class="container mt-3 mb-4">
                            <div class="row card-marg">
                                <div class="col-md-4 ">
                                    <div class="card_box5">
                                        <div class="img_box5">
                                          <img src="{{asset('publice/images/'.$gallary_image[0])}}" alt="">
                                        </div>
                                        <div class="text_box5">
                                            <div class="title_agent">
                                                <span class="no">01</span>
                                                <span>AGENT</span>
                                            </div>
                                           <div class="flags">
                                                <span><img src=".\assets\images-r\ball1.jpeg" alt=""></span>
                                                <span><img src=".\assets\images-r\ball6.jpeg" alt=""></span>
                                                <span class="point"><img src=".\assets\images-r\ball5.jpeg" alt=""></span>
                                           </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card_box5">
                                        <div class="img_box5">
                                          <img src="{{asset('publice/images/'.$gallary_image[0])}}" alt="">
                                        </div>
                                        <div class="text_box5">
                                            <div class="title_agent">
                                                <span class="no">02</span>
                                                <span>AGENT</span>
                                            </div>
                                           <div class="flags">
                                                <span><img src=".\assets\images-r\ball3.jpeg" alt=""></span>
                                                <span><img src=".\assets\images-r\ball1.jpeg" alt=""></span>
                                                <span class="point"><img src=".\assets\images-r\ball4.jpeg" alt=""></span>
                                           </div>  
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4 ">
                                    <div class="card_box5">
                                        <div class="img_box5">
                                          <img src="{{asset('publice/images/'.$gallary_image[0])}}" alt="">
                                        </div>
                                        <div class="text_box5">
                                            <div class="title_agent">
                                                <span class="no">03</span>
                                                <span>AGENT</span>
                                            </div>
                                           <div class="flags">
                                                <span><img src=".\assets\images-r\ball2.jpeg" alt=""></span>
                                                <span><img src=".\assets\images-r\sterling-img\" alt=""></span>
                                                <span class="point"><img src=".\assets\images-r\sterling-img\ball4.jpeg" alt=""></span>
                                           </div>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="nextt-box">
                                        <ul>
                                            <li><a href="#">Next<span class="nextline"></span></a></li>
                                            <li style="padding-right: 123px;"><a href="#">Prev<span class="nextline01"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

       
      </div>
  </div>
</section>
<!-------------------->

<section class="similar-sec">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-12">

    
              <div class="similar-caption">
                <h2 class="similar-title"><span class="vellaysection-side-bdr"></span>Similar Projects<br> or Developers?</h2>
                
              </div>
            </div>

          <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center smlrpdn">    
            <div id="carousel" class="carousel slide pointer-event" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-lg-block">
                    <div class="slide-box">
                      <img src="http://brandsdynamo.agency/assets/images/anwa/Mask group(21).png" alt="First slide">
                      <img src="http://brandsdynamo.agency/assets/images/anwa/Mask group(20).png" alt="First slide">
                      <img src="http://brandsdynamo.agency/assets/images/anwa/Mask group(19).png" alt="First slide">
                    </div>
                  </div>
                  <!-- <div class="d-block d-sm-none">
                    <img class="d-block w-100" src="https://picsum.photos/600/400/?image=0&random" alt="First slide">
                  </div> -->
                </div>
                <div class="carousel-item">
                  <div class="d-lg-block">
                    <div class="slide-box">
                      <img src="http://brandsdynamo.agency/assets/images/anwa/Mask group(21).png" alt="First slide">
                      <img src="http://brandsdynamo.agency/assets/images/anwa/Mask group(20).png" alt="First slide">
                      <img src="http://brandsdynamo.agency/assets/images/anwa/Mask group(19).png" alt="First slide">
                    </div>
                  </div>
                  <!-- <div class="d-block d-sm-none">
                    <img class="d-block w-100" src="https://picsum.photos/600/400/?image=1&random" alt="Second slide">
                  </div> -->
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
      </div>
  </div>
</section>
<!---------===SECTION-09=end===========-->

  <footer id="footer">
    <div class="container p-5">
        <div class="row footer_row mt-3">
            <div class="col-xl-4 col-md-12 col-12">
                <img src="http://brandsdynamo.agency/assets/images/Logo gold 1.png" class="img-fluid footer_logo" alt="">
                <p>We are dedicated to guiding our clients to make the best real estate decisions possible by
                    providing professional knowledge, excellent client service, and a memorable experience.
                </p>
                <div class="footer_social">
                    <ul>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-facebook-square" aria-hidden="true"></i> </li>
                        <li><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li> <i class="fa fa-youtube-play" aria-hidden="true"></i> </li>
                    </ul>
                </div>
            </div>
            <div class="footer_col col-xl-2 col-md-3 col-6">
                <h3>Company</h3>
                <ul>
                    <li> <a href="">Vision</a> </li>
                    <li> <a href="">Mission</a> </li>
                    <li> <a href="">The Team</a> </li>
                    <li> <a href="">Developers</a> </li>
                </ul>
            </div>
            <div class=" footer_col col-xl-2 col-md-3 col-6">
                <h3>Properties</h3>
                <ul>
                    <li> <a href="">Buy</a> </li>
                    <li> <a href="">Sell</a> </li>
                    <li> <a href="">Rent</a> </li>
                    <li> <a href="">Off Plans</a> </li>
                </ul>
            </div>
            <div class=" footer_col col-xl-2 col-md-3 col-6">
                <h3>Our Services</h3>
                <ul>
                    <li> <a href="">Financing</a> </li>
                    <li> <a href="">After Sale</a> </li>
                    <li> <a href="">V Design</a> </li>
                    <li> <a href="">Developers</a> </li>
                </ul>
            </div>
            <div class="footer_col col-xl-2 col-md-3 col-6">
                <h3>Categories</h3>
                <ul>
                    <li> <a href="">Rent</a> </li>
                    <li> <a href="">Sale</a> </li>
                    <li> <a href="">Buy</a> </li>
                    <li> <a href="">Developers</a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

     
<!-- The Modal -->
  <div class="modal broch-box" id="brochuremodal">
    <div class="modal-dialog">
      <div class="modal-content001 modal-content">
      
        <!-- Modal Header -->
        <div class="broch-title">
          <h4>download brochure</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
       <form class="brochform">
       
        <input type="text" id="name" name="name" value="First name"><br>
        
        <input type="text" id="email" name="email" value="email@gmail.com"><br>
        <input type="number" id="number" name="number" value="+58"><br><br>
        <button type="button" value="Submit">Submit</button>
      </form> 
        
      </div>
    </div>
  </div>     


  
 <!-- Vendor JS Files -->
  <script src="http://brandsdynamo.agency/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




  <!-- Template Main JS File -->
  <script src="http://brandsdynamo.agency/assets/js/main.js"></script>
    <script src="http://brandsdynamo.agency/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>
