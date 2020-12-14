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
                <h2>ჩვენი ბლოგი</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="blog-style-one blog-page">
            <div class="container">
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
<!--                 <div class="blog-post-pagination text-center">
                    <a class="prev" href="#"><i class="fa fa-arrow-left"></i></a>
                    <a class="active" href="#">01</a>
                    <a href="#">02</a>
                    <a href="#">03</a>
                    <a href="#">04</a>
                    <a href="#">05</a>
                    <a class="next" href="#"><i class="fa fa-arrow-right"></i></a>
                </div> -->
                {!! $Posts->links() !!}
            </div><!-- /.container -->
        </section><!-- /.blog-style-one -->

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
