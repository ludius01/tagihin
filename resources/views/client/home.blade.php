<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * License: http://graphberry.com/pages/license
 * Editing By : Ahmad Firmanda Himawan
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PositifKreatif.id | Insert Your Tagline</title>
        <!-- Load Roboto font -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,500;0,700;1,500&display=swap');
        </style>
        <!-- Load css styles -->
        <link rel="stylesheet" href="{{ asset("assets_public/css/bootstrap.css")}}" />
        <link rel="stylesheet" href="{{ asset("assets_public/css/bootstrap-responsive.css")}}" />
        <link rel="stylesheet" href="{{ asset("assets_public/css/style.css")}}" />
        <link rel="stylesheet" href="{{ asset("assets_public/css/pluton.css")}}" />
        <link rel="stylesheet" href="{{ asset("assets_public/chat.css")}}" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{ asset("assets_public/css/jquery.cslider.css")}}" />
         <link rel="stylesheet" type="text/css" href="{{ asset("assets_public/css/sidebar-update.css")}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset("assets_public/css/jquery.bxslider.css")}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset("assets_public/css/animate.css")}}" />
        <link href="{{ asset("assets_public/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
        <link href="{{ asset("assets_public/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
        <link href="{{ asset("assets_public/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset("assets_public/images/ico/apple-touch-icon-144.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset("assets_public/images/ico/apple-touch-icon-114.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset("assets_public/images/apple-touch-icon-72.png")}}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset("assets_public/images/ico/apple-touch-icon-57.png")}}">
        <link rel="shortcut icon" href="{{ asset("assets_public/images/ico/favicon.ico")}}">
    </head>
    
    <body>





 <!-- NAVIGATION -->
    <!-- NAVIGATION -->
<!-- <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar first"></span>
    <span class="icon-bar second"></span>
    <span class="icon-bar third"></span>
</button>
<div style="border-color: black; border-size:" class="collapse navbar-collapse" id="myNavbar">
    <div class="backdrop-test"></div>
    <div class="logique-nav logique-nav--update logique-nav--update">
        <div class="margin-for-nav">
            <div class="text-center active">
                <a href="https://www.logique.co.id/">
                    <div class="img-home"></div>
                    Beranda
                </a>
            </div>
            <div class="text-center ">
                <a href="">
                    <div class="img-about"></div>
                    Tentang Kami
                </a>
            </div>
           
            <div class="text-center ">
                <a href="https://www.logique.co.id/hubungi-kami.php">
                    <div class="img-contact"></div>
                    Hubungi Kami
                </a>
            </div>
            <div class="text-center">
                <a href="https://www.logique.co.id/blog/" target="_blank" rel="noreferrer">
                    <div class="img-blog"></div>
                    Blog
                </a>
            </div>
        </div>
    </div>
</div> -->
<!-- END NAVIGATION -->

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="logo">
                        <img src="{{ asset("assets_public/images/logo.png")}}" width="100" height="100" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div style="font-family: ubuntu;" class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                           
                            <li class="active"><a href="">Beranda</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#layanan">Layanan</a></li>
                            <li><a href="#portfolio">Portofolio</a></li>
                            <li><a href="#clients">Client</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a style="background: #143672;" href=""> <img width="25px;" width="25px;" src="{{ asset("assets_public/images/in.png")}}" title="Indonesian"></a></li>
                            <li><a href=""> <img width="25px;" src="{{ asset("assets_public/images/en.png")}}" title="English"></a></li>
                              <br>
                        </ul>
                        
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>

       
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
               <!--   <section class="banner-section relative section-gap-full" id="banner-section"> -->
                <div class="mask overlay overlay-bg"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide" style="font-family: ubuntu;">
                        <h2 class="">Selamat Datang di PositifKreatif.Id</h2>
                        <h4>Your Digital Partner</h4>
                        <p>PositifKreatif.id, membantu anda dalam pengelolaan media sosial, pembuatan website ataupun aplikasi mobile, branding produk, pembuatan video animasi, konsultasi manajemen, dan kebutuhan digital lainnya.</p>
                        <a style="font-family: ubuntu;" href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="{{ asset("assets_public/images/logo.png")}}" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Professional Team Management</h2>
                        <h4>Professional Team Work</h4>
                        <p>Profesionalitas tim dan manajemen kerja yang baik akan menghasilkan karya-karya terbaik. PositifKreatif.Id dikelola secara professional dengan manajemen kerja yang SANS (Semangat, Asik, Nyaman dan Seru).</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="{{ asset("assets_public/images/slider01.gif")}}" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Friendly</h2>
                        <h4>Ramah, Mudah Bergaul</h4>
                        <p>Pertemanan yang kuat akan menghasilkan Kerjasama besar yang terus menerus. Begitulah kami di PositifKreatif.Id akan terus menjaga kepercayaan anda dalam menggunakan jasa / produk dari PositifKreatif.Id.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="{{ asset("assets_public/images/content.gif")}}" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
   <!--  </section> -->
        <!-- End home section -->
        <!-- Service section start -->



        <!-- About us section start -->
        <div class="section primary-section1" id="about">
            <div class="container">

                <div class="about-text centered">
                    <h1>Tentang Kami</h1>
                    <p>{{$about_us->description ?? ""}}</p>
                </div>
                <div class="row-fluid">
                    <div class="span6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4><a href="">Professional Team Management</a></h4>
              <p class="description">Profesionalitas tim dan manajemen kerja yang baik akan menghasilkan karya-karya terbaik. PositifKreatif.Id dikelola secara professional dengan manajemen kerja yang SANS (Semangat, Asik, Nyaman dan Seru).</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4><a href="">User Experience</a></h4>
              <p class="description">Client dapat memantau detail pengerjaan yang dilakukan oleh tim PositifKreatif.Id secara langsung pada portal. Sehingga, anda dapat memantau pengerjaan yang dilakukan oleh tim dan langsung berkomunikasi dengan tim kami.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 style=""><a href="">Friendly</a></h4>
              <p class="description">Pertemanan yang kuat akan menghasilkan Kerjasama besar yang terus menerus. Begitulah kami di PositifKreatif.Id akan terus menjaga kepercayaan anda dalam menggunakan jasa / produk dari PositifKreatif.Id.</p>
            </div>
    <br><br>
                    </div>
                    <div class="span6">
                        <div class="highlighted-box center">
                    <img width="100%" src="{{ asset("assets_public/images/about-extra-1.svg")}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section secondary-section" id="team">
                <br>
                <div style="font-family: poppins; text-align:center; ">
                    <h1>Team Kami</h1>
                </div>

                <div class="row-fluid team">

                      @foreach ($teams as $item)
                    <div class="span4" id="first-person">

                        <div class="thumbnail">
                            <img src="{{ asset("storage/$item->image")}}" alt="team 1">
                            <h3>{{$item->name}}</h3>
                            <ul class="social">
                                <li>
                                    <a href="{{$item->fb}}">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$item->tweet}}">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>{{$item->possiton}}</h2>
                                <p>{{$item->jargon}}</p>
                            </div>
                        </div>
                    </div>

                  @endforeach
                </div>
                </div>
                
        </div>

        <!-- About us section end -->
        <!-- Service section start -->

                       
        <div class="section primary-section" id="layanan">
            <div class="container">
                <!-- Start title section -->
                <div class="judul">
                    <h1>Layanan Kami</h1>
                    <!-- Section's title goes here -->
                    <!--Simple description for section goes here. -->
                </div>


                <div class="row-fluid">
                    @foreach ($services as $item)
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img style="background:#fece1a;" class="img-circle" src="{{ asset("storage/$item->image")}}" alt="service 3">
                            </div>
                            <h3>{{$item->title}}</h3>
                           <p>
                            <?php echo "$item->subtitle"; ?>
                            
                             </p> 
                        </div>
                    </div>
                    @endforeach
                   
                    



                </div>
                <br> <br>
            </div>
        </div>
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div  style="font-family: poppins; " class="container">
                <div style="font-family: poppins; text-align: center;">
                    <h1>Portofolio Project Kami</h1>
                </div>
                <ul class="nav nav-pills">
                    <li class="filter" data-filter="all">
                        <a href="#noAction">All</a>
                    </li>
                    <li class="filter" data-filter="web">
                        <a href="#noAction">Web</a>
                    </li>
                    <li class="filter" data-filter="photo">
                        <a href="#noAction">Graphic Design</a>
                    </li>
                    <li class="filter" data-filter="identity">
                        <a href="#noAction">Video</a>
                    </li>
                    <li class="filter" data-filter="apps">
                        <a href="#noAction">Android Apps</a>
                    </li>
                </ul>
                <!-- Start details for portfolio project 1 -->
                
                <div id="single-project">
                     @foreach ($portofolio as $item)
                    <div id="slidingDiv{{$item->id}}" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="{{ asset("storage/$item->image")}}"  alt="project {{$item->id}}" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>{{$item->title}}</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Client</span>{{$item->client}}</div>
                                    <div>
                                        <span>Date</span>{{$item->date}}</div>
                                    <div>
                                        <span>Skills</span>{{$item->skills}}</div>
                                    <div>
                                        <span>Link</span>{{$item->link}}</div>
                                </div>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End details for portfolio project 1 -->
                    </div>
                    <!-- End details for portfolio project 9 -->
              
                    <ul id="portfolio-grid" class="thumbnails row">
                              @foreach ($portofolio as $item)
                        <li class="span4 mix {{$item->category}}">
                            <div class="thumbnail">
                                <img src="{{ asset("storage/$item->image")}}"alt="project {{$item->id}}">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv{{$item->id}}">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>{{$item->title}}</h3>
                                <p>{{$item->skills}}</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                           @endforeach
                       
                    </ul>
                   
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
        
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">Untuk Informasi Dan Pemesanan Silahkan Hubungi Kami.</p>
                <a href="#" class="button">Hubungi Kami</a>
            </div>
        </div>
        <!-- Client section start -->
        <!-- Client section start -->
        <div id="clients">
            <div class="section primary-section">
                <div class="triangle"></div>
                <div class="container">
                    <div style="font-family: poppins; text-align:center; ">
                        <h1>Yang Client Katakan</h1>
                        <p>Berikut Beberapa Ucapan Yang Kami Kutip Dari Client.</p>
                    </div>
                    <div class="row">
                           @foreach ($testimonial as $item)
                        <div class="span4">
                            <div class="testimonial">
                                <p>{{$item->pesan}}</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="{{ asset("storage/$item->image")}}" class="centered" alt="client 1">
                                    <strong>{{$item->name}}
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <p class="testimonial-text">
                        "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"
                    </p>
                </div>
            </div>
        </div>
        <div class="section third-section">
            <div class="container centered">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Clients Kami</h3>
                        </div>
                        <ul class="client-nav pull-right">
                            <li id="client-prev"></li>
                            <li id="client-next"></li>
                        </ul>
                    </div>
                    <ul class="row client-slider" id="clint-slider">
                        @foreach ($clients as $item)
                        <li>
                            <a href="">
                                <img src="{{ asset("storage/$item->image")}}" alt="client logo 1">
                            </a>
                        </li>
                         @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- Price section start -->
        <!-- <div style="font-family: poppins;" id="price" class="section secondary-section">
            <div class="container">
                <div style="font-family: poppins; text-align:center; ">
                    <h1>Product</h1>
                    <p style="color: black;">Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                </div>
                <div class="price-table row-fluid">
                    <div class="span4 price-column">
                        <h3>Basic</h3>
                        <ul class="list">
                            <li class="price">$19,99</li>
                            <li><strong>Free</strong> Setup</li>
                            <li><strong>24/7</strong> Support</li>
                            <li><strong>5 GB</strong> File Storage</li>
                        </ul>
                        <a href="#" class="button button-ps">BUY</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Pro</h3>
                        <ul class="list">
                            <li class="price">$39,99</li>
                            <li><strong>Free</strong> Setup</li>
                            <li><strong>24/7</strong> Support</li>
                            <li><strong>25 GB</strong> File Storage</li>
                        </ul>
                        <a href="#" class="button button-ps">BUY</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Premium</h3>
                        <ul class="list">
                            <li class="price">$79,99</li>
                            <li><strong>Free</strong> Setup</li>
                            <li><strong>24/7</strong> Support</li>
                            <li><strong>50 GB</strong> File Storage</li>
                        </ul>
                        <a href="#" class="button button-ps">BUY</a>
                    </div>
                </div>
                <div class="centered">
                    <p class="price-text">We Offer Custom Plans. Contact Us For More Info.</p>
                    <a href="#contact" class="button">Contact Us</a>
                </div>
            </div>
        </div> -->
        <!-- Price section end -->
        <!-- Newsletter section start -->
        <div class="section third-section">
            <div class="container newsletter">
                <div class="sub-section">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h3>Berlangganan</h3>
                        </div>
                    </div>
                </div>
                <div id="success-subscribe" class="alert alert-success invisible">
                    <strong>Berhasil!</strong>Anda Telah Sukses Berlangganan.</div>
                <div class="row-fluid">
                    <div class="span5">
                        <p>Untuk mendapatkan update terbaru dari kami silahkan berlangganan.</p>
                    </div>
                    <div class="span7">
                        <form class="inline-form" method="POST" action="{{ route("subscriber-post") }}">
                            <input type="email" name="email" class="span8" placeholder="Enter your email" required />
                            <button type="submit" class="button button-sp">Berlangganan</button>
                            @csrf
                        </form>
                        <div id="err-subscribe" class="error centered">Masukkan Email Yang Valid.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div style="font-family: poppins; text-align:center; ">
                        <h1>Hubungi Kami</h1>
                        <p style="color: black;">Apabila anda memiliki pertanyaan silahkan bisa menghubungi kami via whatsapp atau kirim pesan anda ke form di bawah ini.</p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas">Loading map...</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Silahkan Tulis Pesan Anda</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Well done!</strong>Your message has been sent.</div>
                                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                <form id="contact-form" action="{{ route("message-post") }}" method="POST">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Nama Kamu..." />
                                            <div class="error left-align" id="err-name">Masukkan Nama Kamu.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Email Kamu..." />
                                            <div class="error left-align" id="err-email">Masuukan Alamat Email Yang Valid.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                            <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            @csrf
                                            <button type="submit" class="message-btn">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="footer">
                  <a href="#" class="brand">
                        {{-- <img src="{{ asset("assets_public/images/$logo->value")}}" width="15%" alt="Logo" /> --}}
                        <!-- This is website logo -->
                    </a>
                    <h4 style="color: white;" >{{ $address->value ?? "" }}</h4>
                    <h5 style="color: white;">Telp :{{ $phone->value ?? "" }} <br>
                    Email : {{ $email->value ?? "" }}</h5>
                    
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer"> 
            <p>&copy; Designed by <a href="https://positifkreatif.id/">PositifKreatif.Id </a>| Powered By <strong>PT Media Nusantara Konsultindo</strong></p> </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>

        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="{{ asset("assets_public/js/jquery.js")}}"></script>
        <script type="text/javascript" src="{{ asset("assets_public/js/jquery.mixitup.js")}}"></script>
        <script type="text/javascript" src="{{ asset("assets_public/js/bootstrap.js")}}"></script>
        <script type="text/javascript" src="{{ asset("assets_public/js/modernizr.custom.js")}}"></script>
        <script type="text/javascript" src="{{ asset("assets_public/js/jquery.bxslider.js")}}"></script>
        <script type="text/javascript" src="{{ asset("assets_public/js/jquery.cslider.js")}}"></script>
        <script type="text/javascript" src="{{ asset("assets_public/js/jquery.placeholder.js")}}"></script>
        <script type="text/javascript" src="{{ asset("assets_public/js/jquery.inview.js")}}"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="{{ asset("assets_public/js/app.js")}}"></script>
    </body>

     <section class="section_chat">
            <a href="#" id="button_chat" class="chat-btn"> 
            <img title="Chat Via Whatsapp" src="{{ asset("assets_public/images/wa.png")}}"class="material-icons"> </i>
        </a>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
    <script src="main.js"></script>
</html>




