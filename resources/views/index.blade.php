<!DOCTYPE html>
<html lang="en">

    <!-- start Head Area -->
    @include('layout.head')
    <!-- End Head Area -->
<body>
    <div class="preloader"></div><!-- /.preloader -->
    <div class="page-wrapper">
        <!-- start Header Area -->
        @include('layout.header')
        <!-- End Header Area -->

        <div class="main-banner-wrapper">
            <section class="banner-style-one owl-theme owl-carousel no-dots">
                <div class="slide slide-one" style="background-image: url({{ Voyager::image(setting('slider.image1')) }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3 class="banner-title" style="color: #46A049"; >{{ setting('slider.title1') }}</h3>
                                    <h5>{{ setting('slider.text1') }}</h5>
                                <div class="btn-block">
                                    <a href="{{ url('about') }}" class="banner-btn">ვრცლად</a>
                                </div><!-- /.btn-block -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide -->
                <div class="slide slide-two" style="background-image: url({{ Voyager::image(setting('slider.img2')) }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3 class="banner-title" style="color: #46A049";>{{ setting('slider.title2') }}</h3>
                                <p>{{ setting('slider.text2') }}</p>
                                <div class="btn-block">
                                    <a href="#" class="banner-btn">ვრცლად</a>
                                </div><!-- /.btn-block -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide -->
            </section><!-- /.banner-style-one -->
            <div class="carousel-btn-block banner-carousel-btn">
                <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
                <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
            </div><!-- /.carousel-btn-block banner-carousel-btn -->
        </div><!-- /.main-banner-wrapper -->

        <section class="about-style-one ">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <h2>Fრიი TAXI</h2>
                </div><!-- /.block-title -->
                <div class="row high-gutter">
                    <div class="col-lg-6">
                        <div class="about-image-block">
                            <img src="images/resources/choise-1-1.png" alt="Awesome Image" />
                            <p>{!! setting('site.About_Us') !!}</p>
                        </div><!-- /.image-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="text-block">
                            <div class="video-block-one">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <img src="images/resources/video-1-1.png" alt="Awesome Image" />
                                        <a href="https://youtu.be/y2kpKXNvqjA" class="video-popup"><i class="fa fa-play"></i></a>
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
                                        <i class="conexi-icon-phone-call"></i>
                                    </div><!-- /.icon-block -->
                                    <div class="content-block">
                                        <p>დაგვიკავშირდით </p>
                                    </div><!-- /.content-block -->
                                </div><!-- /.left-block -->
                                <div class="right-block">
                                    <a class="phone-number" href="callto:{{setting('contact.phone')}}">{{setting('contact.phone')}}</a>
                                </div><!-- /.right-block -->
                            </div><!-- /.call-block -->
                        </div><!-- /.text-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-style-one -->

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
                        @foreach ($Taxis as $Taxi)
                    <div role="tabpanel" class="tab-pane show active  animated fadeInUp" id="{{$Taxi->taxi_type}}">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{ URL::to('storage/'.$Taxi->image) }}" width="100%" alt="{{$Taxi->model}}">
                                        <div class="icon-block">
                                            <i class="conexi-icon-bmw"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>{{$Taxi->brand}} {{$Taxi->model}}</h3>
                                        <ul class="feature-list">
                                            <li>
                                                <span class="name-line">საწყისი ფასი:</span>
                                                <span class="price-line">{{$Taxi->base_rate}} ₾ -დან</span>
                                            </li>
                                            <li>
                                                <span class="name-line">1/კმ:</span>
                                                <span class="price-line">{{$Taxi->per_mile}} ₾</span>
                                            </li>
                                            <li>
                                                <span class="name-line">მგზავრი:</span>
                                                <span class="price-line">{{$Taxi->passengers}}</span>
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

        <hr class="style-one">

        <section class="feature-style-one thm-black-bg">
            <img src="images/background/feature-bg-1-1.png" alt="Awesome Image" class="feature-bg" />
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <h2 class="light">რატომ გვირჩევთ ჩვენ?</h2>
                </div><!-- /.block-title text-center -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-insurance"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">უსაფთხოების გარანტი</a></h3>
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-seatbelt"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">თავაზიანი მომსახურება</a></h3>
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-consent"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">მაღალი ხარისხი</a></h3>
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
                    <h2 class="light">შეფასებები & კომენტარები</h2>
                </div><!-- /.block-title -->
                <ul class="slider testimonials-slider-one">
                    @foreach ($Clients as $Client)
                    <li class="slide-item">
                        <div  class="single-testimonial-one">
                            <div class="testimonials-one-pager"> 
                                <img class="pager-item active" src="{{ URL::to('storage/'.$Client->image) }}" alt="Client"></a>
                            </div>
                            <p>{!! ($Client->text) !!}</p>
                            <h3>{{ ($Client->name) }}</h3>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div><!-- /.container -->            
            <div class="testimonials-one-slider-btn">
                <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
                <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
            </div><!-- /.carousel-btn-block banner-carousel-btn -->
        </section><!-- /.testimonials-style-one -->


        <section class="blog-style-one blog-page">
            <div class="container">
            <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>ბოლო სიახლეები</p>
                    <h2>სიახლეები</h2>
                </div><!-- /.block-title -->
                <div class="row">
                @foreach ($Posts as $Post)
                    <div class="col-xl-6 col-lg-12">
                        <div class="single-blog-style-one">
                            <div class="image-block">
                                <div class="inner-block">
                                    <a href="{{ url('posts',$Post->id) }}"><i class="fa fa-link"></i></a>
                                    <img src="{{ URL::to('storage/'.$Post->image) }}" alt="Post image">
                                </div><!-- /.inner-block -->
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <div class="meta-info">
                                    <a href="#" class="date-block">{{ $Post->created_at}}</a>
                                    <a href="#"><i class="fa fa-user"></i>  {{ $Post->author_id}}</a>
                                    <span class="sep">.</span>
                                 
                                </div><!-- /.meta-info -->
                                <h3><a href="{{ url('posts',$Post->id) }}">{{ $Post->title }}</a></h3>
                            </div><!-- /.text-block -->
                        </div><!-- /.single-blog-style-one -->
                    </div><!-- /.col-xl-6 col-lg-12 -->
                @endforeach
                </div><!-- /.row -->

            </div><!-- /.container -->
        </section><!-- /.blog-style-one -->


        <section class="cta-style-one text-center">
            <div class="container">
                <p>დაგვირეკეთ 24 საათვის განმავლობაში</p>
                <h3>დაგვირეკეთ და დაჯავშნეთ <br> </h3>
                <a href="{{ url ('/taxi') }}" class="cta-btn">ავტომობილის შერჩევა</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->
        
        <!-- start Footer Area -->
        @include('layout.footer')
        <!-- End Footer Area -->
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
        <!-- start js Area -->
        @include('layout.js')
        <!-- End js Area -->
</body>

</html>