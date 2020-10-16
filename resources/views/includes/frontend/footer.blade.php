<section id="footer">
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 footer-img">

        <!-- Footer Links -->
        <div class="container text-center">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4">

                    <!-- Content -->
                    <!-- Links -->
                    <h5 class="text-footer">{{ trans('lang.our_link') }}</h5>

                    <ul class="footer-link-ul">
                        <div class="row">
                            <div class="col-md-6">
                        <li class="footer-link-li">
                            <a href="{{ url('/') }}">{{ trans('lang.Home') }}</a>
                        </li>
                        <li class="footer-link-li">
                            <a href="{{ url('/about_us') }}">{{ trans('lang.About_Us') }}</a>
                        </li>
                        <li class="footer-link-li">
                            <a href="{{ url('/'.'#country-info-section') }}">{{ trans('lang.Country') }}</a>
                        </li>
                            </div>
                            <div class="col-md-6">
                        <li class="footer-link-li">
                            <a href="{{ url('/'.'#programs-section') }}">{{ trans('lang.Programs') }}</a>
                        </li>
                        <li class="footer-link-li">
                            <a href="{{ url('/'.'#Services-Section') }}">{{ trans('lang.Services') }}</a>
                        </li>
                        <li class="footer-link-li">
                            <a href="{{ url('/contact_us') }}">{{ trans('lang.Contact_Us') }}</a>
                        </li>
                            </div>
                        </div>
                    </ul>

                </div>
                <!-- Grid column -->
                <div class="col-md-4">

                    <!-- Content -->
                    <!-- Business Hours -->
                    <h5 class="text-footer">{{ trans('lang.Business_Hours') }}</h5>

                    <p class="footer-time">{{ language($contact_us->time_work_ar,$contact_us->time_work_en)}}</p>

                </div>
                <!-- Grid column -->
                <div class="col-md-4">

                    <!-- Content -->
                    <!-- Social -->
                    <h5 class="text-footer">{{ trans('lang.Follow_Us') }}</h5>

                    <div class="footer-social-icons">
                        <a href="http://{{$setting->facebook}}" style="text-decoration: none;color: inherit;">   <span class="footer-icon"><i class="fab fa-facebook-square"></i></span> </a>
                        <a href="http://{{$setting->twitter}}" style="text-decoration: none;color: inherit;">   <span class="footer-icon"><i class="fab fa-twitter-square"></i></span>  </a>
                        <a href="http://{{$setting->youtube}}" style="text-decoration: none;color: inherit;">   <span class="footer-icon"><i class="fab fa-youtube-square"></i></span> </a>
                    </div>

                </div>


            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">{{ trans('lang.Copyright') }}
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

</section>
