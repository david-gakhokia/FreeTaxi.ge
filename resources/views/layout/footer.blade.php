<footer class="site-footer">
    <img src="images/background/footer-bg-1-1.png" class="footer-bg" alt="Awesome Image" />
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>ჩვენ შესახებ</h3>
                        </div><!-- /.widget-title -->
                        <p>{{setting('footer.about')}}</p>

                    </div><!-- /.footer-widget about-widget -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h3>გვერდები</h3>
                        </div><!-- /.widget-title -->
                        <ul class="link-lists">
                            <li><a href="{{ url ('/') }}">მთავარი</a></li>
                            <li><a href="{{ url ('/about') }}">შესახებ</a></li>
                            <li><a href="{{ url ('/taxi') }}">ტაქსები</a></li>
                            <li><a href="{{ url ('/posts') }}">ბლოგი</a></li>
                            <li><a href="{{ url ('/contact') }}">კონტაქტი</a></li>
                        </ul>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-2 -->
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h3>კონტაქტი</h3>
                        </div><!-- /.widget-title -->
                        <p>{{setting('footer.address')}}</p>
                        <ul class="contact-infos">
                            <li>
                                <a href="mailto:{{setting('footer.email')}}"><i class="fa fa-envelope"></i></a>
                                 {{setting('footer.email')}}
                            </li>
                            <li>
                                <a href="tel:{{setting('footer.phone')}}"><i class="fa fa-phone-square"></i></a>
                                    {{setting('footer.phone')}}
                            </li>
                            <li>
                                <a href="tel:{{setting('footer.address')}}"><i class="fa fa-map-marker"></i></a>
                                    {{setting('footer.address')}}
                            </li>
                            <div class="social-block">
                                <a href="{{setting('footer.facebook')}}" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                <a href="{{setting('footer.instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="{{setting('footer.linkedin')}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div><!-- /.social-block -->
                        </ul><!-- /.contact-infos -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->

                <div class="col-lg-4">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h3>აპლიკაცია</h3>
                        </div><!-- /.widget-title -->
                        <p>ტაქსის გამოძახება ძალზე მარტივია <br>აპლიკაცია ხელმისაწვდომია სმარტფონებისათვის, როგორც <b> Android </b> ასევე  <b> IOS </b>სისტემებისათვის.</p>
                         <a href="https://apps.apple.com/ru/app/free-taxi-order-a-taxi/id1516302079?l=en" target="_blank"><img src="{{ asset('images/apple.png') }}" width="50%" alt=""></a><br>
                         <a href="https://play.google.com/store/apps/details?id=com.free4040.android" target="_blank" ><img src="{{ asset('images/android.png') }}" width="50%" alt=""></a><br>

                    </div><!-- /.footer-widget -->
                    
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.upper-footer -->
    <div class="bottom-footer">
        <div class="container">
            <div class="inner-container">
                <div class="left-block">
                    <a href="index.html" class="footer-logo"><img src="{{ Voyager::image(setting('footer.image')) }}" alt="FreeTaxi" /></a>
                    <span>© <?php $currentDateTime = date('Y'); echo $currentDateTime;?> 
                        Created By | <a href="https://diem.ge" target="_blank">DMG</a>
                    </span>
                </div><!-- /.left-block -->
                <div class="right-block">
                    <ul class="link-lists">
                        <li><a href="{{ url('/Privacy-Policy') }}">მონაცემთა უსაფრთხოება</a></li>
                        <!-- TOP.GE ASYNC COUNTER CODE -->
                        <div id="top-ge-counter-container" data-site-id="113820"></div>
                        <script async src="//counter.top.ge/counter.js"></script>
                        <!-- / END OF TOP.GE COUNTER CODE -->
                    </ul>
                </div><!-- /.right-block -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </div><!-- /.bottom-footer -->
</footer><!-- /.site-footer -->