@extends('app')

@section('title', 'შესახებ')

@section('content')

        <section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="{{ url ('/') }}">მთავარი</a></li>
                    <li><span class="sep">.</span></li>
                    <li><span class="page-title">შესახებ</span></li>
                </ul><!-- /.thm-breadcrumb -->
                <h2>ჩვენ შესახებ</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="about-style-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-block">
                            <div class="block-title">
                                <div class="dot-line"></div><!-- /.dot-line -->
                                <p>კომპანიის შესახებ</p>
                                <h2>FREE TAXI</h2>
                            </div><!-- /.block-title text-center -->
                            <p>{!! setting('site.About_Us') !!}</p>
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="hvr-float-shadow">
                            <div class="image-block">
                                <img src="images/resources/about-1-1.jpg" alt="About info">
                                <div class="bubble-block">
                                    <div class="inner-block">
                                        <p>Trusted by</p>
                                        <span class="counter">4880</span>
                                    </div><!-- /.inner-block -->
                                </div><!-- /.bubble-block -->
                            </div><!-- /.image-block -->
                        </div><!-- /.hvr-float-shadow -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-style-two -->

        <section class="feature-style-one thm-black-bg">
            <img src="images/background/feature-bg-1-1.png" alt="Awesome Image" class="feature-bg">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p></p>
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

        <section class="offer-style-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <h2>რას გთავაზობთ ჩვენ?</h2>
                </div><!-- /.block-title -->
                <div class="row">
                    @foreach ($Offers as $Offer)
                    <div class="col-lg-4">
                        <div class="single-offer-one hvr-float-shadow">
                            <div class="image-block">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <img src="{{ URL::to('storage/'.$Offer->image) }}"  width="400 px" alt="Awesome Image">
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <h3><a href="#">{{ $Offer->title}}</a></h3>
                                <p>{!! $Offer->body !!} </p>
                                <a href="#" class="more-link">ვრცლად</a>
                            </div><!-- /.text-block -->
                        </div><!-- /.single-offer-one -->
                    </div><!-- /.col-lg-4 -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.offer-style-one -->

    <section class="cta-style-one text-center">
        <div class="container">
            <p>დაგვირეკეთ 24 საათვის განმავლობაში</p>
            <h3>დაგვირეკეთ და დაჯავშნეთ </h3>
            <a href="tel:*4040" class="cta-btn">დაგვირეკეთ</a>
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

@endsection