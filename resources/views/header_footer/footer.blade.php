
<footer id="wrap-footer" class="bg-gray-1 color-inher">
        <div class="block-fv">
                <div class="container">
                    <div class="procs bg-gray-1">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="th-bar-item">
                                    <i class="fa fa-truck"></i>Free DELIVERY in JOS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="th-bar-item">
                                    <i class="fa fa-money"></i>SAFE & SECURE PAYMENTS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="th-bar-item">
                                    <i class="fa fa-retweet"></i>30 day easy return
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Footer top -->
    <div class="footer-top">
        <div class="container">
            <div class="bg-gray-1 p-l-r">
                <div class="row">
                    <!-- Company info -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="heading-1">
                            <h3>Company Info</h3>
                        </div>
                        <p>Affordable, Available and Durable</p>
                        <ul class="list-default">
                            <li><i class="fa fa-signal"></i>{{ $settings->address }}</li>
                            <li><i class="fa fa-phone"></i>{{ $settings->phone1 }}</li>
                            <li><i class="fa fa-envelope-o"></i>{{ $settings->email }}</li>
                            <li><i class="fa fa-globe"></i>{{ $settings->web_url }}</li>
                        </ul>
                    </div>
                    <!-- Newsletter -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="newsletter text-left">
                            <div class="heading-1">
                                <h3>Newsletter</h3>
                            </div>
                            <p>To receive notification, lessons and announcements to your mail  sign up below</p>
                            <form action="{{ route('subscription.store') }}" method="POST" enctype="application/x-www-form-urlencoded">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-item" id="Email1" placeholder="Email" name="email">
                                </div>
                                <button type="submit" class="ht-btn ht-btn-default">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <!-- Quick link -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="heading-1">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="list-default">
                            <li><a href="{{ route('policy') }}"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Community</a></li>
                            <li><a href="{{ route('lesson') }}"><i class="fa fa-angle-right"></i>Tyre Lessons</a></li>
                            <li><a href="{{ route('terms') }}"><i class="fa fa-angle-right"></i>Terms of use</a></li>
                            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i>Our Servces</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer bottom -->
    <div class="footer-bt color-inher">
        <div class="container">
            <div class="bg-gray-0c p-l-r">
                <div class="row">
                    <div class="col-md-6">
                        <p>Developed by <a href="https://gnorizonconsults.com">Gnorizon</a></p>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-icon list-inline pull-right">
                            <li><a href="{{ 'https://'.$settings->facebook_url}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ 'mailto:'.$settings->email}}" target="_blank"><i class="fa fa-google"></i></a></li>
                            <li><a href="{{ 'https://'.$settings->youtube_url}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{ 'https://'.$settings->instagram_url}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ 'https://'.$settings->twitter_url}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
