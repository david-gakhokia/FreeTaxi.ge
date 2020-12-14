@extends('app')

@section('title', 'ტაქსები')

@section('content')
        <section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="{{ url ('/')  }}">მთავარი</a></li>
                    <li><span class="sep">.</span></li>
                    <li><span class="page-title">ჩვენი ტაქსები</span></li>
                </ul><!-- /.thm-breadcrumb -->
                <h2>ჩვენი ავტომობილები</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
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
                                        <a href="{{ url('taxi',$Taxi->id) }}" class="book-taxi-btn">
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



        <section class="cta-style-one text-center">
            <div class="container">
                <p>დაგვირეკეთ 24 საათვის განმავლობაში</p>
                <h3>დაგვირეკეთ და დაჯავშნეთ </h3>
                <a href="tel:*4040" class="cta-btn">დაგვირეკეთ</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->



    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>
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
