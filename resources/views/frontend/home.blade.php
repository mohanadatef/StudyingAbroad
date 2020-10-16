@extends('includes.frontend.master_frontend')
@section('title')
    Home
@endsection
@section('content')
    <section id="home-body-section">
        <section id="home-slider-section">
            <div id="demo" class="carousel slide vertical" data-ride="carousel">

                <ul class="carousel-indicators">
                    <?php $i = 0; ?>
                    @foreach($home_slider as $homeslider)
                        <li data-target="#demo" data-slide-to="{{$i++}}"
                            @if($myslider->id == $homeslider->id)class="active"@endif></li>
                    @endforeach
                </ul>
                <div class="carousel-inner">
                    @foreach($home_slider as $homeslider)
                        <div class="carousel-item @if($myslider->id == $homeslider->id)active @endif">
                            <img src="{{url('public/images/home_slider/'.$homeslider->image)}}" alt="Los Angeles"
                                 width="1100" height="500">
                            <div class="carousel-caption">
                                <div style="background-color: rgba(250, 250, 250, 0.4);">
                                <p class="carousel-inner-title">{{language($homeslider->title_ar,$homeslider->title_en)}}</p>
                                <span class="home-carousel-span">{!!  language($homeslider->description_ar,$homeslider->description_en) !!}</span>
                                <div class="slider-btn">
                                    <a href="{{url('/book')}}">
                                        <button type="button"
                                                class="btn btn-primary btn-lg home-book-btn">{{ trans('lang.Book_Now') }}</button>
                                    </a>
                                </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="programs-section">
            <h2 class="home-program-title">{{ trans('lang.Our_Programs') }}</h2>
            <section class="team">
                <div class="grid">
                    @foreach($program as$myprogrm)
                        <figure class="effect-steve">
                            <img src="{{url('public/images/program/'.$myprogrm->image)}}"/>
                            <figcaption>
                                <h2><span>{{language($myprogrm->name_ar,$myprogrm->name_en)}}</span></h2>
                                <p>{!!  language($myprogrm->description_ar,$myprogrm->description_en) !!}</p>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </section>
        </section>

        <section id="Services-Section">
            <div class="home-services-div">
                <div id="triangle-down"></div>

                <section id="home-service-content-section">
                    <h2 class="home-program-title">{{ trans('lang.Our_Services') }}
                        <div style="text-align: center">
                            <hr class="home-service-head-line">
                            <hr class="home-service-head-line-dots">
                        </div>
                    </h2>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators carousel-indicators-services">
                            <?php $i = 0; ?>
                            @foreach($service as $myservice)
                                <li data-target="#carousel-example-generic" data-slide-to="{{$i++}}"
                                    @if($servicemy->id == $myservice->id) class="active" @endif></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($service as $myservice)
                                <div class="carousel-item @if($servicemy->id == $myservice->id) active @endif">
                                    <img class="carousel-inner-service-img"
                                         src="{{url('public/images/service/'.$myservice->log)}}" alt="Los Angeles"
                                         width="1100" height="500">
                                    <div class="carousel-caption carousel-caption-service-text ">
                                        <p class="carousel-inner-title-service">{{language($myservice->name_ar,$myservice->name_en)}}</p>
                                        <span class="home-carousel-span">{!!  language($myservice->description_ar,$myservice->description_en) !!}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </section>

                <div id="triangle-up"></div>
            </div>
        </section>


        <section id="country-info-section">
            <h2 class="home-program-title">{{ trans('lang.Countries') }}</h2>

            @if(count($country)>2)
                <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

                    <!--Controls-->
                    <!-- <div class="controls-top">
                      <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
                          class="fas fa-chevron-left"></i></a>
                      <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
                          class="fas fa-chevron-right"></i></a>
                    </div> -->
                    <!--/.Controls-->

                    <!-- Indicators -->
                    <?php $i = 0; ?>
                    <ol class="carousel-indicators carousel-indicators-multi">
                        @foreach($country as $mycountry)
                            <li data-target="#carousel-example-multi" data-slide-to="{{$i++}}"
                                @if($countrymy->id == $mycountry->id) class="active" @endif></li>
                        @endforeach
                    </ol>
                    <!--/.Indicators-->
                    <div class="carousel-inner v-2" role="listbox">
                        @foreach($country as $mycountry)
                            <div class="carousel-item @if($countrymy->id == $mycountry->id) active @endif">
                                <div class="col-12 col-md-4">
                                    <div class="card mb-2">
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front">
                                                    <div class="card-country-container">
                                                        <!-- Img for country -->
                                                        <a href="{{ url('/country_info/'.$mycountry->slug) }}"><img
                                                                    class="card-img-top"
                                                                    src="{{url('public/images/country/'.$mycountry->image)}}"
                                                                    alt="Nature" style="width:100%;"></a>
                                                        <div class="text-block-slider">
                                                            <!-- Name of country -->
                                                            <h4>{{language($mycountry->name_ar,$mycountry->name_en)}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flip-card-back">
                                                    <!-- Flag of country -->
                                                    <a href="{{ url('/country_info/'.$mycountry->slug) }}"><img
                                                                class="card-img-top"
                                                                src="{{url('public/images/country/'.$mycountry->loge)}}"
                                                                alt="Nature" style="width:100%;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @elseif(count($country)==2)
                <div class="row " style="margin: 0 !important">
                    @foreach($country as $mycountry)
                        <div class="col-md-6 flip-card double-carousel">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="card-country-container">
                                        <!-- Img for country -->
                                        <a href="{{ url('/country_info/'.$mycountry->slug) }}"><img
                                                    class="card-img-top"
                                                    src="{{url('public/images/country/'.$mycountry->image)}}"
                                                    alt="Nature" style="width:100%;"></a>
                                        <div class="text-block-slider">
                                            <!-- Name of country -->
                                            <h4>{{language($mycountry->name_ar,$mycountry->name_en)}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <!-- Flag of country -->
                                    <a href="{{ url('/country_info/'.$mycountry->slug) }}"><img
                                                class="card-img-top"
                                                src="{{url('public/images/country/'.$mycountry->loge)}}"
                                                alt="Nature" style="width:100%;"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @elseif(count($country)==1)
                <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    @foreach($country as $mycountry)
                        <div class="flip-card one-carousel">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="card-country-container">
                                        <!-- Img for country -->
                                        <a href="{{ url('/country_info/'.$mycountry->slug) }}"><img
                                                    class="card-img-top"
                                                    src="{{url('public/images/country/'.$mycountry->image)}}"
                                                    alt="Nature" style="width:100%;"></a>
                                        <div class="text-block-slider">
                                            <!-- Name of country -->
                                            <h4>{{language($mycountry->name_ar,$mycountry->name_en)}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <!-- Flag of country -->
                                    <a href="{{ url('/country_info/'.$mycountry->slug) }}"><img
                                                class="card-img-top"
                                                src="{{url('public/images/country/'.$mycountry->loge)}}"
                                                alt="Nature" style="width:100%;"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </section>
        @endsection
@section('script-1')
            <script>
                selectItem("home");
            </script>
@endsection