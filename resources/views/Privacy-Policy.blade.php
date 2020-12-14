@extends('app')

@section('title', 'სამომხმარებლო შეტანხმება')

@section('content')
<section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="{{ url ('/') }}">მთავარი</a></li>
                    <li><span class="sep">.</span></li>
                    <li><span class="page-title">წესები  &amp; პირობები</span></li>
                </ul><!-- /.thm-breadcrumb -->
                <h2>წესები  &amp; პირობები</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="single-taxi-faq-one thm-white-bg">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
       
                    <h2>სარგებლობის წესები   &amp; პირობები</h2>
                </div><!-- /.block-title -->
                <div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>მონაცემთა კონფიდენციალობის შესახებ განცხადება </h4>
                        </div>
                        <div class="accrodion-content" style="display: block;">
                            <div class="inner">
                                <p>{!! setting('site.privacy_policy') !!}</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.single-taxi-faq-one -->

        <section class="cta-style-one text-center">
            <div class="container">
                <p>დაგვირეკეთ 24 საათვის განმავლობაში</p>
                <h3>დაგვირეკეთ და დაჯავშნეთ </h3>
                <a href="tel:+995 577 417 415" class="cta-btn">დაგვირეკეთ</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->


    <script src="js/jquery_002.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/jquery_004.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery_003.js"></script>
    <script src="js/theme.js"></script>

@endsection
