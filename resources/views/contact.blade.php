@extends('app')

@section('title', 'კონტაქტი')

@section('content')

        <section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="#">მთავარი</a></li>
                    <li><span class="sep">.</span></li>
                    <li><span class="page-title">კონტაქტი</span></li>
                </ul><!-- /.thm-breadcrumb -->
                <h4>საკონტაქტო ინფორმაცია</h4>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
     

        </div><!-- /.contact-page-map-wrapper -->
        <section class="contact-form-style-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>ჩვენ მალე გიპასუხებთ </p>
                    <h2>დაგვიტოვეთ შტყობინება</h2>
                </div><!-- /.block-title -->
                       <!-- Success message -->
                       @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                <form action="" class="contact-form-one row"  method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="col-lg-6">
                        <div class="input-holder">
                            <input class="form-control" name="name" id="name" type="text"  placeholder="სახელი">
                            @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div><!-- /.input-holder -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="input-holder">
                            <input class="form-control" name="email" id="email" type="email"  placeholder="ელ-ფოსტა">
                            @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div><!-- /.input-holder -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="input-holder">
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="ნომერი">
                            @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif                            
                        </div><!-- /.input-holder -->
                    </div><!-- /.col-lg-6 -->


                    <div class="col-lg-6">
                        <div class="input-holder">
                            <input class="form-control"  type="text" name="subject" id="subject" placeholder="სათაური">
                            @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif                            
                        </div><!-- /.input-holder -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-12">
                        <div class="input-holder">
                            <textarea class="form-control" name="message" id="message"  placeholder="შეტყობინება"></textarea>
                            @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif		
                        </div><!-- /.input-holder -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-12">
                        <div class="input-holder text-center">
                            <!-- <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value=""> -->
                            <input type="submit" name="send" value="გაგზავნა" class="btn btn-warning btn-block">

                            <!-- <button class="theme-btn btn-style-two" type="submit" data-loading-text="იგზავნება..."><span>გაგზავნა</span></button> -->
                        </div><!-- /.input-holder -->
                    </div><!-- /.col-lg-6 -->
                </form><!-- /.contact-form-one -->
            </div><!-- /.container -->
        </section><!-- /.contact-form-style-one -->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- <script src="js/gmaps.js"></script> -->
    <script src="js/map-helper.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/theme.js"></script>

@endsection