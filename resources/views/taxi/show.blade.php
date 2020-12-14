@extends('app')

@section('title', 'ტაქსები')

@section('content')
        <section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="{{ url('/') }}">მთავარი</a></li>
                    <li><span class="sep">.</span></li>
                    <li><a href="{{ url('/taxi') }}">ტაქსები</a></li>
                </ul><!-- /.thm-breadcrumb -->
                <h2>{{$Taxi->brand}} {{$Taxi->model}}</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="single-taxi-details-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-block">
                            <img src="{{ URL::to('storage/'.$Taxi->image) }}" width="100%"" alt="Awesome Image"/>
                        </div><!-- /.image-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="content-block">
                            <div class="block-title">
                                <div class="dot-line"></div>
                                <h2>{{$Taxi->brand}} {{$Taxi->model}}</h2>
                            </div><!-- /.block-title -->
                            <hr class="style-one" />
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="features-list">
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
                                    </ul>
                                </div>
                            </div>
                            <a href="tel:{{ setting('contact.phone') }}" class="book-btn">გამოძახება</a>
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.single-taxi-details-one -->

        <section class="cta-style-one text-center">
            <div class="container">
                <p>დაგვირეკეთ 24 საათვის განმავლობაში</p>
                <h3>დაგვირეკეთ და დაჯავშნეთ </h3>
                <a href="tel:*4040" class="cta-btn">დაგვირეკეთ</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->

    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>


@endsection
