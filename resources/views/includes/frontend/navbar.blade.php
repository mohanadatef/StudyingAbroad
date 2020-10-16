<nav id="navbar" class="navbar navbar-expand-lg navbar-dark nav-style bg-white justify-content-center shadow-sm">
    <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars"
            aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div id="navbarContent" class="collapse navbar-collapse">
        <a href="{{ url('') }}">
            <img class="img-logowhite logo-margin logo-hide" src="{{ asset('public/images/setting/' . $setting->logo ) }}">
        </a>
        <ul id="MainMenu" class="navbar-nav mr-auto nav-margin top">
            <li class="nav-item"><a id="home" onclick="selectItem('home')" href="{{ url('/') }}" class="nav-link unselected-item">{{ trans('lang.Home') }}</a></li>
            <li class="nav-item"><a id="about_us"  onclick="selectItem('about_us')" href="{{ url('/about_us') }}" class="nav-link unselected-item">{{ trans('lang.About_Us') }}</a></li>
            <!-- ---------------------------------------------------------------- -->
            <!-- Level one dropdown -->
            <li class="nav-item dropdown">
                <a id="country_info"   data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false" class="nav-link unselected-item">{{ trans('lang.COUNTRY_INFO') }}</a>
                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow submenu1 sub">
                    @foreach($country as $mycountry)
                        <li><a onclick="selectItem('country_info')" href="{{ url('/country_info/'.$mycountry->slug) }}"  class="dropdown-item">{{ language($mycountry->name_ar,$mycountry->name_en)}}</a></li>
                @endforeach
                <!-- <li class="dropdown-divider"></li> -->
                </ul>
            </li>
            <!-- End Level one -->
            <!-- ---------------------------------------------------------------- -->
            <!-- ---------------------------------------------------------------- -->
            <!-- Level one dropdown -->
            <li class="nav-item dropdown">
                <a id="program"   data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false" class="nav-link unselected-item">{{ trans('lang.Programs') }}</a>
                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu sub border-0 shadow submenu1">
                    <!-- Level two dropdown-->
                    @foreach($program as $myprogram)
                        <li class="dropdown-submenu submenu2">
                            <a id="dropdownMenu2"  role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"
                               class="dropdown-item">{{ language($myprogram->name_ar,$myprogram->name_en)}}
                            @if(App::getLocale() == 'en')
                                <!-- English Arrow -->
                                    <i class="fas fa-caret-right"></i>
                            @else
                                <!-- Arabic Arrow -->
                                    <i class="fas fa-caret-left"></i>
                                @endif
                            </a>
                            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 sub shadow submenu2">
                                @foreach($country as $mycountry)
                                    <li><a onclick="selectItem('program')" tabindex="-1" href="{{ url('/program/'.$myprogram->slug.'/'.$mycountry->slug) }}" class="dropdown-item">{{ language($mycountry->name_ar,$mycountry->name_en)}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                @endforeach
                    <li class="dropdown-submenu submenu2">
                        <a id="dropdownMenu2"  role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"
                           class="dropdown-item">{{ trans('lang.Requirement') }}
                        @if(App::getLocale() == 'en')
                            <!-- English Arrow -->
                                <i class="fas fa-caret-right"></i>
                        @else
                            <!-- Arabic Arrow -->
                                <i class="fas fa-caret-left"></i>
                            @endif
                        </a>
                        <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 sub shadow submenu2">
                            @foreach($country as $mycountry)
                                <li><a tabindex="-1" href="{{ url('/requirement/'.$mycountry->slug) }}" class="dropdown-item">{{ language($mycountry->name_ar,$mycountry->name_en)}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown-submenu submenu2">
                        <a id="dropdownMenu2"  role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"
                           class="dropdown-item">{{ trans('lang.Certificates') }}
                        @if(App::getLocale() == 'en')
                            <!-- English Arrow -->
                                <i class="fas fa-caret-right"></i>
                        @else
                            <!-- Arabic Arrow -->
                                <i class="fas fa-caret-left"></i>
                            @endif
                        </a>
                        <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 sub shadow submenu2">
                            @foreach($country as $mycountry)
                                <li><a tabindex="-1" href="{{ url('/certificates/'.$mycountry->slug) }}" class="dropdown-item">{{ language($mycountry->name_ar,$mycountry->name_en)}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                <!-- End Level two -->
                </ul>
            </li>
            <!-- End Level one -->
            <!-- ---------------------------------------------------------------- -->
            <!-- ---------------------------------------------------------------- -->
            <!-- Level one dropdown -->
            <li class="nav-item dropdown">
                <a id="service"  data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false" class="nav-link unselected-item">{{ trans('lang.Services') }}</a>
                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow submenu1 sub">
                    <!-- Level two dropdown-->
                    @foreach($service as $myservice)
                        <li class="dropdown-submenu submenu2">
                            <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"
                               class="dropdown-item">{{ language($myservice->name_ar,$myservice->name_en)}}
                                @if(App::getLocale() == 'en')
                                    <!-- English Arrow -->
                                    <i class="fas fa-caret-right"></i>
                                @else
                                <!-- Arabic Arrow -->
                                    <i class="fas fa-caret-left"></i>
                                @endif
                            </a>
                            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 sub shadow submenu2">
                                @foreach($country as $mycountry)
                                    <li><a  onclick="selectItem('service')" tabindex="-1" href="{{ url('/service/'.$myservice->slug.'/'.$mycountry->slug) }}" class="dropdown-item">{{ language($mycountry->name_ar,$mycountry->name_en)}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <!-- End Level two -->
                    @endforeach
                </ul>
            </li>
            <!-- End Level one -->
            <!-- ---------------------------------------------------------------- -->
            <li class="nav-item"><a id="contact_us" href="{{ url('/contact_us') }}" onclick="selectItem('contact_us')" class="nav-link unselected-item">{{ trans('lang.Contact_Us') }}</a></li>

            <a href="{{ url('/book') }}"><button type="button" id="book" onclick="selectItem('book')" class="btn btn-primary btn-book">{{ trans('lang.Book') }}</button></a>
        </ul>
    </div>
</nav>
@yield('navbar')
