<!-- Start footer area -->
<footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
            <div class="footer-top pt-110 pb-80">
                <div class="container">
                    <div class="row">
                        <!-- footer-address -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-1">
                            <div class="footer-widget">
                                <h6 class="footer-titel">GET IN TOUCH</h6>
                                <ul class="footer-address">
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>{{ $settings->address }}</span>
                                            <span>Glasgow, D04 89GR</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/icons/phone-3.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Telephone : {{ $settings->phone1 }}</span>
                                            <span>Telephone : {{ $settings->phone2 }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="images/icons/world.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Email : {{ $settings->email }}</span>
                                            <span>Web :<a href="#" target="_blank"> {{ $settings->web_url }}</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-latest-news -->
                        <div class="col-xl-6 col-lg-5 col-12 order-3 order-lg-2 mt-md-30">
                            <div class="footer-widget middle">
                                <h6 class="footer-titel">LATEST NEWS</h6>
                                <ul class="footer-latest-news">
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="single-blog.html"><img src="images/blog/1.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Beautiful Home</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor
                                                inciidunt ut labore </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="single-blog.html"><img src="images/blog/2.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Beautiful Home</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor
                                                inciidunt ut labore </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="single-blog.html"><img src="images/blog/3.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Beautiful Home</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor
                                                inciidunt ut labore </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-contact -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12 order-2 order-lg-3 mt-sm-30">
                            <div class="footer-widget">
                                <h6 class="footer-titel">QUICK CONTACT</h6>
                                <div class="footer-contact">
                                    <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor</p>
                                    <form id="contact-form-2" action="mail_footer.php" method="post">
                                        <input type="email" name="email2" placeholder="Type your E-mail address...">
                                        <textarea name="message2" placeholder="Write here..."></textarea>
                                        <button type="submit" value="send">Send</button>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy; <script>
                                        document.write(new Date().getFullYear());
                                    </script> <a href="#"><b>Devitems</b></a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->

        <!--style-customizer start -->
        <div class="style-customizer closed">
            <div class="buy-button">
                <a href="index.html" class="customizer-logo"><img src="images/logo/logo.png" alt="Theme Logo"></a>
                <a class="opener" href="#"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></a>
            </div>
            <div class="clearfix content-chooser">
                <h3>Layout Options</h3>
                <p>Which layout option you want to use?</p>
                <ul class="layoutstyle clearfix">
                    <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
                    <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
                </ul>
                <h3>Color Schemes</h3>
                <p>Which theme color you want to use? Select from here.</p>
                <ul class="styleChange clearfix">
                    <li class="skin-default selected" title="skin-default" data-style="skin-default"></li>
                    <li class="skin-amber" title="amber" data-style="skin-amber"></li>
                    <li class="skin-blue-grey" title="blue-grey" data-style="skin-blue-grey"></li>
                    <li class="skin-blue" title="blue" data-style="skin-blue"></li>
                    <li class="skin-cyan" title="cyan" data-style="skin-cyan"></li>
                    <li class="skin-green-dark" title="green-dark" data-style="skin-green-dark"></li>
                    <li class="skin-green" title="green" data-style="skin-green"></li>
                    <li class="skin-maroon" title="maroon" data-style="skin-maroon"></li>
                    <li class="skin-orenge" title="orenge" data-style="skin-orenge"></li>
                    <li class="skin-pink" title="pink" data-style="skin-pink"></li>
                    <li class="skin-purple" title="purple" data-style="skin-purple"></li>
                    <li class="skin-teal" title="teal" data-style="skin-teal"></li>
                </ul>
                <h3>Background Patterns</h3>
                <p>Which background pattern you want to use?</p>
                <ul class="patternChange clearfix">
                    <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
                    <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
                    <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
                    <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
                    <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
                    <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
                    <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
                    <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
                </ul>
                <h3>Background Images</h3>
                <p>Which background image you want to use?</p>
                <ul class="patternChange main-bg-change clearfix">
                    <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="images/customizer/bodybg/01.jpg" alt=""></li>
                    <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="images/customizer/bodybg/02.jpg" alt=""></li>
                    <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="images/customizer/bodybg/03.jpg" alt=""></li>
                    <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="images/customizer/bodybg/04.jpg" alt=""></li>
                    <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="images/customizer/bodybg/05.jpg" alt=""></li>
                    <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="images/customizer/bodybg/06.jpg" alt=""></li>
                    <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="images/customizer/bodybg/07.jpg" alt=""></li>
                    <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="images/customizer/bodybg/08.jpg" alt=""></li>
                </ul>
                <ul class="resetAll">
                    <li><a class="button button-border button-reset" href="#">Reset All</a></li>
                </ul>
            </div>
        </div>
        <!--style-customizer end -->