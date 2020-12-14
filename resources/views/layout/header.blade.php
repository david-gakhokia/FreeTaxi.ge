<header class="site-header header-one">
    <div class="top-bar">
        <div class="container">
            <div class="left-block">
                <a href="tel:{{setting('contact.phone')}}"><i class="fa fa-phone"></i> {{setting('contact.phone')}}</a>
                <a href="mailto:{{setting('contact.email')}}"><i class="fa fa-envelope"></i> {{setting('contact.email')}}</a>
            </div><!-- /.left-block -->
            <div class="logo-block">
            <a href="{{ url('/') }}"><img src="{{ Voyager::image(setting('site.logo')) }}" width="80%" alt="Free TAXI" /></a>
            </div><!-- /.logo-block -->
            <div class="social-block">
                <a href="{{ setting('footer.facebook') }}" target="_blank" ><i class="fa fa-facebook-f"></i></a>
                <a href="{{ setting('footer.instagram') }}" target="_blank" ><i class="fa fa-instagram"></i></a>
                <a href="{{ setting('footer.linkedin') }}" target="_blank" ><i class="fa fa-linkedin"></i></a>
            </div><!-- /.social-block -->
        </div><!-- /.container -->
    </div><!-- /.top-bar -->
    <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix">
                <button class="menu-toggler" data-target="#main-nav-bar">
                    <span class="fa fa-bars"></span>
                </button>
            </div><!-- /.logo-box -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-navigation" id="main-nav-bar">
                <ul class="navigation-box">
                    <li><a href="{{ url ('/') }}">მთავარი</a></li>
                    <li><a href="{{ url ('/about') }}">შესახებ</a></li>
                    <li><a href="{{ url ('/taxi') }}">ტაქსები</a></li>
                    <li><a href="{{ url ('/posts') }}">ბლოგი</a></li>
                    <li><a href="{{ url ('/contact') }}">კონტაქტი</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <a href="callto:{{setting('contact.phone')}}" class="contact-btn-block">
                    <span class="icon-block">
                        <i class="conexi-icon-phone-call"></i>
                    </span>
                    <span class="text-block">
                        {{setting('contact.phone')}}
                        <span class="tag-line">დაგვირეკეთ</span>
                    </span>
                </a>
            </div><!-- /.right-side-box -->
        </div>
        <!-- /.container -->
    </nav>
</header><!-- /.site-header header-one -->