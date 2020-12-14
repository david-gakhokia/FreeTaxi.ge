@extends('app')

@section('title', 'მთავარი')

@section('content')
            <!-- Load Facebook SDK for JavaScript -->
            <div  style="float: left;" id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div style="float: left;" class="fb-customerchat"
        attribution=setup_tool
        page_id="103710371249010"
  theme_color="#FFC000"
  logged_in_greeting="მოგესალმებით ! ტაქსის გამოსაძახებლად დაგვირეკეთ ნომერზე: ( 577 417-415 )"
  logged_out_greeting="მოგესალმებით ! ტაქსის გამოსაძახებლად დაგვირეკეთ ნომერზე: ( 577 417-415 )">
      </div>
    <!--// Load Facebook SDK for JavaScript -->
        <div class="main-banner-wrapper">
            <section class="banner-style-one owl-theme owl-carousel no-dots owl-loaded">
                <!-- /.slide -->
                <!-- /.slide -->
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-4047px, 0px, 0px); transition: all 0s ease 0s; width: 8094px;">

                            <div class="owl-item cloned" style="width: 1349px; margin-right: 0px;">
                                <div class="slide slide-two" style="background-image: url(images/slider/slider-1-2.jpg);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h3 class="banner-title" style="color: #46A049"; >იაფი &amp; კომფრტული <br> Taxi Company</h3>
                                                <p>Enjoy your comfortable trip with <br> იაფიი company taxi</p>
                                                <div class="btn-block">
                                                    <a href="#" class="banner-btn">FreeTaxi</a>
                                                </div><!-- /.btn-block -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>

                            <div class="owl-item cloned" style="width: 1349px; margin-right: 0px;">
                                <div class="slide slide-two" style="background-image: url(images/slider/slider-1-1.jpg);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h3 class="banner-title" style="color: #6FB315">იაფი &amp; კომფორტული <br> მგზავრობა</h3>
                                                <p>ისიამოვნეთ  <br> ჩვენი სერვისით</p>
                                                <div class="btn-block">
                                                    <a href="#" class="banner-btn">FreeTaxi</a>
                                                </div><!-- /.btn-block -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>

                            <div class="owl-item " style="width: 1349px; margin-right: 0px;">
                                <div class="slide slide-two" style="background-image: url(images/slider/slider-1-2.jpg);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h3 class="banner-title">1 &amp; Trusted <br> Taxi Company</h3>
                                                <p>Enjoy your comfortable trip with <br> conexi company taxi</p>
                                                <div class="btn-block">
                                                    <a href="#" class="banner-btn">FreeTaxi</a>
                                                </div><!-- /.btn-block -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>
                    <!-- მუშა -->
                            <div class="owl-item active" style="width: 1349px; margin-right: 0px;">
                                <div class="slide slide-two" style="background-image: url(images/slider/slider-1-1.jpg);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h3 class="banner-title" style="color: #6FB315">იაფი &amp; კომფორტული <br> მგზავრობა</h3>
                                                <p>ისიამოვნეთ  <br> ჩვენი სერვისით</p>
                                                <div class="btn-block">
                                                    <a href="#" class="banner-btn">FreeTaxi</a>
                                                </div><!-- /.btn-block -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>
                    <!--// მუშა -->

                            <div class="owl-item cloned" style="width: 1349px; margin-right: 0px;">
                                <div class="slide slide-two" style="background-image: url(images/slider/slider-1-2.jpg);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                {{-- <h3 class="banner-title">Cheap &amp; Trusted <br> Taxi Company</h3> --}}
                                                {{-- <p>Enjoy your comfortable trip with <br> conexi company taxi</p> --}}
                                                <div class="btn-block">
                                                    <a href="#" class="banner-btn">Learn More</a>
                                                </div><!-- /.btn-block -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>

                            <div class="owl-item cloned" style="width: 1349px; margin-right: 0px;">
                                <div class="slide slide-two" style="background-image: url(images/slider/slider-1-1.jpg);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h3 class="banner-title" style="color: #6FB315">იაფი &amp; კომფორტული <br> მგზავრობა</h3>
                                                <p>ისიამოვნეთ  <br> ჩვენი სერვისით</p>
                                                <div class="btn-block">
                                                    <a href="#" class="banner-btn">FreeTaxi</a>
                                                </div><!-- /.btn-block -->
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="owl-controls">
                        <div class="owl-nav">
                            <div class="owl-prev" style="display: none;">prev
                            </div>
                            <div class="owl-next" style="display: none;">next
                            </div>
                        </div>
                        <div class="owl-dots" style="display: block;">
                            <div class="owl-dot"><span></span>
                            </div>
                            <div class="owl-dot active"><span></span>
                            </div>
                        </div>
                    </div>
            </section><!-- /.banner-style-one -->



            <div class="carousel-btn-block banner-carousel-btn">
                <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
                <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
            </div><!-- /.carousel-btn-block banner-carousel-btn -->

        </div><!-- /.main-banner-wrapper -->
        
        <section class="book-ride-one">
            <img src="images/background/booking-bg-1-1.png" class="footer-bg" alt="Awesome Image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="content-block">
                            <div class="block-title mb-0">
                                <div class="dot-line"></div><!-- /.dot-line -->
                                <p class="light">ეძებ ტაქსს?</p>
                                <h2 class="light">დაჯავშნე ჩვენთან <br> </h2>
                            </div><!-- /.block-title -->
                            <p>ტაქსის გამოძახების სერვისი.</p>
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <form action="#" class="booking-form-one">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="სახელი">
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="ელ-ფოსტა">
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="მგზავრთა რაოდ.">
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="მისამართი">
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="მისვლის მისამართი">
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="დრო">
                                        <i class="conexi-icon-small-calendar"></i>
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                    
                                        <div class="dropdown bootstrap-select">
                                            <select class="selectpicker" tabindex="-98">
                                                <option>Select Time</option>
                                                <option>10AM-10.59AM</option>
                                                <option>12PM-12.59PM</option>
                                                <option>1PM-1.59PM</option>
                                                <option>2PM-2.59PM</option>
                                            </select>
                                        </div>
                                        
                                  
                                        <div class="dropdown-menu " role="combobox">
                                            <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner show"></ul>
                                            </div>
                                        </div>
                                        <i class="conexi-icon-clock"></i>
                                    </div><!-- /.input-holder -->

                                </div><!-- /.col-lg-6 -->

                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <button type="submit">დაჯავშნა</button>
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->

                            </div><!-- /.row -->
                        </form><!-- /.booking-form-one -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.book-ride-one -->
        <section class="about-style-one ">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Welcome to FREE TAXI</p>
                </div><!-- /.block-title -->
                <div class="row high-gutter">
                    <div class="col-lg-6">
                        <div class="about-image-block">
                            <img src="images/resources/choise-1-1.png" alt="Awesome Image">
                            <p></p>
                        </div><!-- /.image-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="text-block">
                            <div class="video-block-one">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <img src="images/resources/video-1-1.png" alt="Awesome Image">
                                        <a href="https://www.youtube.com/watch?v=hsb-fA6ApiE" class="video-popup"><i class="fa fa-play"></i></a>
                                    </div><!-- /.inner-block -->
                                </div><!-- /.image-block -->
                                <div class="content-block">
                                    <h3>ჩვენ ვუზრუნველყოფთ თქვენს კომფორტულ მგზავრობას</h3>
                                </div><!-- /.content-block -->
                            </div><!-- /.video-block-one -->
                            <p>{!! setting('site.About_Us') !!}</p>
                            <hr class="style-one">
                            <div class="call-block">
                                <div class="left-block">
                                    <div class="icon-block">
                                        <a href="tel:+995 577 417 415">
                                            <i class="conexi-icon-phone-call"></i>
                                        </a> 
                                    </div><!-- /.icon-block -->
                                    <div class="content-block">
                                    <a class="phone-number" href="tel:+995 577 417 415">(+995) 577 417-415</a>
                                    </div><!-- /.content-block -->
                                </div><!-- /.left-block -->
                            </div><!-- /.call-block -->
                        </div><!-- /.text-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-style-one -->

        <section class="taxi-style-one taxi-page">
            <div class="container">
                <ul class="nav nav-tabs tab-title" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hybrid" role="tab" data-toggle="tab">კომფორტ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#suv" role="tab" data-toggle="tab">კომფორტ +</a>
                    </li>
                </ul>
                <div class="tab-content">

                    <!-- ბაზიდან გამოტანა  -->
                        @foreach ($taxis as $taxi)
                    <div role="tabpanel" class="tab-pane show active  animated fadeInUp" id="{{$taxi->taxi_type}}">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{ URL::to('storage/'.$taxi->image) }}" width="100%" alt="{{$taxi->model}}">
                                        <div class="icon-block">
                                            <i class="conexi-icon-bmw"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>{{$taxi->brand}} {{$taxi->model}}</h3>
                                        <ul class="feature-list">
                                            <li>
                                                <span class="name-line">საწყისი ფასი:</span>
                                                <span class="price-line">{{$taxi->base_rate}} ₾ -დან</span>
                                            </li>
                                            <li>
                                                <span class="name-line">1/კმ:</span>
                                                <span class="price-line">{{$taxi->per_mile}} ₾</span>
                                            </li>
                                            <li>
                                                <span class="name-line">მგზავრი:</span>
                                                <span class="price-line">{{$taxi->passengers}}</span>
                                            </li>
                                        </ul><!-- /.feature-list -->
                                        <a href="#" class="book-taxi-btn">
                                        დათვალიერება</a>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.single-taxi-one -->
                            </div><!-- /.col-lg-4 -->

                        </div><!-- /.row -->
                    </div>
                        @endforeach
                    <!-- // ბაზიდან გამოტანა  -->
                </div><!-- /.tab-content -->
            </div><!-- /.container -->
        </section><!-- /.taxi-style-one -->

        <section class="cta-style-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto image-block-wrapper text-center">
                            <div class="image-block">
                                <img src="images/resources/cta-moc-1-1.png" alt="Awesome Image">
                            </div><!-- /.image-block -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="content-block">
                            <div class="block-title">
                                <div class="dot-line"></div><!-- /.dot-line -->
                                <h2>გადმოიწერეთ მობილური <br> აპლიკაცია</h2>
                            </div><!-- /.block-title -->
                            <p style="color:#6CAE16" >აპლიკაცია ხელმისაწვდომია სმარტფონებისათვის, როგორც <b> Android </b> ასევე  <b> IOS </b>სისტემებისათვის.</p>
                            <div class="button-block">
                                <a href="https://apps.apple.com/ru/app/free-taxi-order-a-taxi/id1516302079?l=en" target="_blank" class="app-btn apple-btn">
                                    <i class="fa fa-apple icon"></i>
                                    <span class="text-block">
                                        <span class="tag-line">ხელმისაწვდომია</span>
                                        <span class="store-name">Apple Store-ზე</span>
                                    </span>
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.free4040.android" target="_blank" class="app-btn google-btn">
                                    <i class="fa fa-android icon"></i>
                                    <span class="text-block">
                                        <span class="tag-line">ხელმისაწვდომია</span>
                                        <span class="store-name">Goolge Play-ზე</span>
                                    </span>
                                </a>
                            </div><!-- /.button-block -->
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-style-three -->
        <hr class="style-one">


        <section class="feature-style-one thm-black-bg">
            <img src="images/background/feature-bg-1-1.png" alt="Awesome Image" class="feature-bg">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <!-- <p>Conexi benefit list</p> -->
                    <h2 class="light">რატომ გვირჩევთ ჩვენ?</h2>
                </div><!-- /.block-title text-center -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-insurance"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">უსაფთხოების გარანტი</a></h3>
                            <!-- <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p> -->
                            <!-- <a href="#" class="more-link">Read More</a> -->
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-seatbelt"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">თავაზიანი მომსახურება</a></h3>
                            <!-- <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p> -->
                            <!-- <a href="#" class="more-link">Read More</a> -->
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-consent"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">მაღალი ხარისხი</a></h3>
                            <!-- <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p> -->
                            <!-- <a href="#" class="more-link">Read More</a> -->
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.feature-style-one -->
        <section class="taxi-fare-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <h2>მომსახურების ფასები</h2>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
                            <div class="top-block">
                                <div class="icon-block">
                                    <i class="conexi-icon-taxi"></i>
                                </div><!-- /.icon-block -->
                                <div class="text-block">
                                    <h3>კომფორტ პაკეტი</h3>
                                    <p>მომსახურების ამ პაკეტში შედის.</p>
                                </div><!-- /.text-block -->
                            </div><!-- /.top-block -->
                            <ul class="features-list">
                                <li>
                                    <div class="name-line">გამოძახების ღირებულება  :</div><!-- /.name-line -->
                                    <div class="price-line">1,5 ₾</div><!-- /.price-line -->
                                </li>
                                <li>
                                    <div class="name-line">უფასო ლოდისნის დრო:</div><!-- /.name-line -->
                                    <div class="price-line">5:00 წთ</div><!-- /.price-line -->
                                </li>
                                <li>
                                    <div class="name-line">ჩანთის რაოდენობა:</div><!-- /.name-line -->
                                    <div class="price-line">3 </div><!-- /.price-line -->
                                </li>
                            </ul><!-- /.features-list -->
                            <div class="button-block">
                                <a href="#" class="fare-btn">გამოძახება</a>
                            </div><!-- /.button-block -->
                        </div><!-- /.single-taxi-fare-one -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
                            <div class="top-block">
                                <div class="icon-block">
                                    <i class="conexi-icon-taxi"></i>
                                </div><!-- /.icon-block -->
                                <div class="text-block">
                                    <h3>კომფორტ + პაკეტი</h3>
                                    <p>მომსახურების ამ პაკეტში შედის.</p>
                                </div><!-- /.text-block -->
                            </div><!-- /.top-block -->
                            <ul class="features-list">
                                <li>
                                    <div class="name-line">გამოძახების ღირებულება  :</div><!-- /.name-line -->
                                    <div class="price-line">2 ₾</div><!-- /.price-line -->
                                </li>
                                <li>
                                    <div class="name-line">უფასო ლოდისნის დრო:</div><!-- /.name-line -->
                                    <div class="price-line">5:00 წთ</div><!-- /.price-line -->
                                </li>
                                <li>
                                    <div class="name-line">ჩანთის რაოდენობა:</div><!-- /.name-line -->
                                    <div class="price-line">3 </div><!-- /.price-line -->
                                </li>
                            </ul><!-- /.features-list -->
                            <div class="button-block">
                                <a href="#" class="fare-btn">გამოძახება</a>
                            </div><!-- /.button-block -->
                        </div><!-- /.single-taxi-fare-one -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="block-text text-center">
                    
                </div><!-- /.block-text -->
            </div><!-- /.container -->
        </section><!-- /.taxi-fare-one -->
        <section class="testimonials-style-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p class="light">მომხმარებელთა შეფასებები</p>
                    <h2 class="light" style="color: green";>შეფასებები &amp; კომენტარები</h2>
                </div><!-- /.block-title -->
                <div class="testimonials-one-pager">                    
                    <a href="#" class="pager-item active" data-slide-index="1"><img src="{{ asset('images/clients/sandro.jpg') }}" alt="Awesome Image"></a>
                    <a href="#" class="pager-item" data-slide-index="2"><img src="{{ asset('images/clients/gigla.jpg') }}" alt="Awesome Image"></a>
                    <a href="#" class="pager-item" data-slide-index="3"><img src="{{ asset('images/clients/sopho.jpg') }}" alt="sopho"></a>
                    <a href="#" class="pager-item" data-slide-index="4"><img src="{{ asset('images/clients/lado.jpg') }}" alt="sopho"></a>
                    
                </div><!-- /.testimonials-one-pager -->
                <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 209px;"><ul class="slider testimonials-slider-one" style="width: 3215%; position: relative; transition-duration: 0s; transform: translate3d(-1010px, 0px, 0px);"><li class="slide-item bx-clone" style="float: left; list-style: none; position: relative; width: 970px;" aria-hidden="true">
                        <div class="single-testimonial-one">
                            <p>მოხერხებული, კონფრტული და რაც მთავარია უსაფრთხო გადაადგილება.</p>
                            <h3>სანდრო</h3>
                        </div><!-- /.single-testimonial-one -->
                    </li>
                    <li class="slide-item" style="float: left; list-style: none; position: relative; width: 970px;" aria-hidden="false">
                        <div class="single-testimonial-one">
                            <p>კარგი ავტომობილები, მოწესრიგებული და სუფთა, მგზავრობის ფასიც მისაღებია</p>
                            <h3>გიგლა</h3>
                        </div><!-- /.single-testimonial-one -->
                    </li>
                    <li class="slide-item" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 970px;">
                        <div class="single-testimonial-one">
                            <p>სწრაფი, კომფორტული და მოსახერხებელი მგზავრობა, მისაღები ფასი </p>
                            <h3>სოფო</h3>
                        </div><!-- /.single-testimonial-one -->
                    </li>
                    <li class="slide-item" aria-hidden="true" style="float: left; list-style: none; position: relative; width: 970px;">
                        <div class="single-testimonial-one">
                            <p>კომფორტული ჰიგიენური ავტომობილები, მისაღები სერვისით და ფასით </p>
                            <h3>ლადო</h3>
                        </div><!-- /.single-testimonial-one -->
                    </li>
                </ul>
            </div>
            <div class="bx-controls"></div>
        </div>
            </div><!-- /.container -->            
            <div class="testimonials-one-slider-btn">
                <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
                <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
            </div><!-- /.carousel-btn-block banner-carousel-btn -->
        </section><!-- /.testimonials-style-one -->


        <section class="cta-style-one text-center">
            <div class="container">
                <p>დაგვირეკეთ 24 საათვის განმავლობაში</p>
                <h3>დაგვირეკეთ და დაჯავშნეთ <br> </h3>
                <a href="{{ url ('/taxi') }}" class="cta-btn">ავტომობილის შერჩევა</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/theme.js"></script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    {{-- <script>
    
        setTimeout(function () { 
        swal({
            title: "მიმდინარეობს განახება!",
            text: "ბოდის გიხდით შეფერხებისთვის !",
            type: "warning",
            confirmButtonText: "OK"
        },
        function(isConfirm){
          if (isConfirm) {
            window.location.href = "https://www.facebook.com/freetaxi.ge/";
          }
        }); }, 500);
    
    </script> --}}
    @endsection
