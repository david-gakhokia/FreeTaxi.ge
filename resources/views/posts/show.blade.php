@extends('app')

@section('title', 'ბლოგი')

@section('content')        
<section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="{{ url('/') }}">მთავარი</a></li>
                    <li><span class="sep">.</span></li>
                    <li><span class="page-title">ბლოგი</span></li>
                </ul><!-- /.thm-breadcrumb -->

                <h2>{{ $Post->slug}}</h2>

            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="single-blog-details-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-blog-style-one">
                            <div class="image-block">
                                <div class="inner-block">
                                    <img src="{{ URL::to('storage/'.$Post->image) }}" alt="Awesome Image">
                                </div><!-- /.inner-block -->
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <div class="meta-info">
                                    <a href="#" class="date-block">{{ $Post->created_at}}</a>
                                    <a href="#">ავტორი <i class="fa fa-user"></i> &copy;  : {{ $Post->author_id}}
                                    </a>
                                    
                                </div><!-- /.meta-info -->
                                <h3 class="post-title">{{ $Post->title }}</h3>
                                <p>{!! $Post->body !!}</p>
                            </div><!-- /.text-block -->
                        </div><!-- /.single-blog-style-one -->
                        <div class="share-block">
                            <div class="left-block">
                                <p>სოც. ქსელი</p>
                            </div><!-- /.left-block -->
                            <div class="social-block">
                                <div class="fb-like" data-href="https://www.facebook.com/freetaxi.ge/" 
                                    data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true">
                                </div>
                            </div><!-- /.social-block -->
                        </div><!-- /.share-block -->

                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="single-sidebar author-widget">
                                <div class="image-block">
                                <img src="{{ asset ('images/facebook-page-logo.png') }}" width="25%" alt="">
                                    <h3 style="color:#4267B2">Facebook Page</h3>
                                    <div class="fb-page" data-href="https://www.facebook.com/freetaxi.ge" 
                                        data-tabs="timeline" data-width="" data-height="" 
                                        data-small-header="false" data-adapt-container-width="true" 
                                        data-hide-cover="false" data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/freetaxi.ge" class="fb-xfbml-parse-ignore">
                                        <a href="https://www.facebook.com/freetaxi.ge">Fრიი TAXI</a></blockquote>
                                    </div>
                                </div><!-- /.image-block -->
                            </div><!-- /.single-sidebar author-widget -->
                            <div class="single-sidebar tags-widget">
                                <div class="widget-title">
                                    <h3>• Digital Marketing Georgia</h3>
                                </div><!-- /.widget-title -->
                               <a href="{{ setting('banner.Post_Banner1_url') }}" target="_blank">
                               		<img src="{{ Voyager::image (setting('banner.Post_Banner1')) }}" width="100%" >
                               </a>
                            </div><!-- /.single-sidebar -->
                            <div class="single-sidebar latest-post-widget">
                                <div class="widget-title">
                                    <h3>ბოლო პოსტები</h3>
                                </div><!-- /.widget-title -->
                                <div class="post-wrapper">
                                    <div class="single-latest-post">
                                        <div class="image-block">
                                        	<div class="inner-block">
                                            	<img src="{{ URL::to('storage/'.$Post->image) }}" alt="Awesome Image">
                                            </div><!-- /.inner-block -->
                                        </div><!-- /.image-block -->
                                        <div class="text-block">
                                            <span class="date-line">{{ $Post->created_at}}</span>
                                            <h3><a href="#"> {{ $Post->title }}</a></h3>
                                        </div><!-- /.text-block -->
                                    </div><!-- /.single-latest-post -->
                                </div><!-- /.post-wrapper -->
                            </div><!-- /.single-sidebar author-widget -->


                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.single-blog-details-page -->

        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=260161251543580&autoLogAppEvents=1"></script>

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
