@extends('includes.frontend.master_frontend')
@section('title')
    Country Info
@endsection
@section('content')
    <section id="bodySecId">
    <section id="country-body-section">
        <div class="row" style="margin: 0 !important">
            <div class="col-md-2  info-tabs-display" style="padding: 0 !important">
                <!-- Tabs -->
                <div class="country-tab-div" onclick="goToByScroll('country-body-section')"><i
                            class="fas fa-info"></i><span class="country-tab-title">{{ trans('lang.INFO') }}</span>
                </div>
                <div class="country-tab-div" onclick="goToByScroll('country-famous-places')"><i
                            class="fas fa-archway"></i><span class="country-tab-title">{{ trans('lang.Famous') }}</span>
                </div>
                <div class="country-tab-div" onclick="goToByScroll('country-price-table')"><i
                            class="fas fa-dollar-sign"></i><span
                            class="country-tab-title">{{ trans('lang.PRICE') }}</span></div>
            </div>

            <div class="col-md-10 country-body-info">
                <section id="country-body-section">
                    <section id="about-header-section">
                        <div class="country-info-container">
                            <img src="{{url('public/images/country/'.$country_info->image)}}"
                                 class="country-body-info-img"/>
                            <div class="country-body-info-title">{{  language($country_info->name_ar,$country_info->name_en) }}</div>
                        </div>
                    </section>
                    <section id="about-content-section">
                        <div class="country-body-info-content">
                            {!!  language($country_info->about_country_ar,$country_info->about_country_en) !!}
                        </div>
                    </section>
                </section>

            </div>

        </div>


        <section id="country-famous-places">
            <div class="country-famous-places-div">

                <div class="row country-famous-places-div" style="margin: 0 !important">
                    <div id="country-famId" class="col-md-2 sub-tabs">
                        <!-- Tabs -->
                        <div class="country-tab-div" onclick="goToByScroll('country-body-section')"><i
                                    class="fas fa-info"></i><span class="country-tab-title">{{ trans('lang.INFO') }}</span>
                        </div>
                        <div class="country-tab-div" onclick="goToByScroll('country-famous-places')"><i
                                    class="fas fa-archway"></i><span class="country-tab-title">{{ trans('lang.Famous') }}</span>
                        </div>
                        <div class="country-tab-div" onclick="goToByScroll('country-price-table')"><i
                                    class="fas fa-dollar-sign"></i><span
                                    class="country-tab-title">{{ trans('lang.PRICE') }}</span></div>
                    </div>
                    <div class="col-md-10">
                        <h2 class="country-program-title"> {{ trans('lang.Famous') }}</h2>
                        <div class="country-cards-famous-places">
                            <!-- Card place -->
                            @foreach($country_place as $place)
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="{{url('public/images/country/'.$place->image)}}" class="card-img"
                                                 alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{  language($place->name_ar,$place->name_en) }}</h5>
                                                <div class="card-text">
                                                    {!!  language($place->description_ar,$place->description_en) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="country-price-table">
            <p class="fix-nav-issue">tmam</p>
            <div class="row" style="margin: 0 !important">
                <div id="country-priceId" class="col-md-2" style="padding: 0 !important;visibility: hidden;">
                    <!-- Tabs -->
                    <div class="country-tab-div" onclick="goToByScroll('country-body-section')"><i
                                class="fas fa-info"></i><span class="country-tab-title">{{ trans('lang.INFO') }}</span>
                    </div>
                    <div class="country-tab-div" onclick="goToByScroll('country-famous-places')"><i
                                class="fas fa-archway"></i><span class="country-tab-title">{{ trans('lang.Famous') }}</span>
                    </div>
                    <div class="country-tab-div" onclick="goToByScroll('country-price-table')"><i
                                class="fas fa-dollar-sign"></i><span
                                class="country-tab-title">{{ trans('lang.PRICE') }}</span></div>
                </div>
                <div class="col-md-10" style="padding: 0 !important;">
                    <h2 class="country-program-title">{{ trans('lang.cost_head') }} {{  language($country_info->name_ar,$country_info->name_en) }}</h2>

                    <div class="price-table-wrapper">
                        <div class="pricing-table head-table">
                            <div class="pricing-table__header">
                                <div class="circle-text">
                                    &nbsp; <i class="far fa-edit"></i>
                                    <br>

                                    {{ trans('lang.description') }}
                                </div>


                            </div>
                            <ul class="pricing-table__list">
                                <li>{{ trans('lang.Living') }}</li>
                                <li>{{ trans('lang.Transportation') }}</li>
                                <li>{{ trans('lang.The_Food') }}</li>
                                <li>{{ trans('lang.Cinema_Ticket') }}</li>
                                <li>{{ trans('lang.Internet') }}</li>
                                <li>{{ trans('lang.Clothes') }}</li>

                            </ul>
                        </div>
                        <div class="pricing-table ">
                            <div class="pricing-table__header">
                                <div class="circle-text">
                                    &nbsp; <i class="fas fa-dollar-sign"></i>
                                    <br>
                                    {{ trans('lang.Cost_Dollar') }}
                                </div>


                            </div>
                            <ul class="pricing-table__list">
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Living') }}/ </span>{{$country_info->residence_usd}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Transportation') }}/ </span>{{$country_info->transportation_usd}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.The_Food') }}/ </span>{{$country_info->food_usd}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Cinema_Ticket') }}/ </span>{{$country_info->cinema_usd}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Internet') }}/ </span>{{$country_info->net_usd}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Clothes') }}/ </span>{{$country_info->clothing_usd}}
                                </li>

                            </ul>
                        </div>
                        <div class="pricing-table ">
                            <div class="pricing-table__header">
                                <div class="circle-text">
                                    &nbsp;<i class="fas fa-euro-sign"></i>
                                    <br>
                                    {{ trans('lang.Cost_Country') }}
                                </div>


                            </div>
                            <ul class="pricing-table__list">
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Living') }}/ </span>{{$country_info->residence_country}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Transportation') }}/ </span>{{$country_info->transportation_country}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.The_Food') }}/ </span>{{$country_info->food_country}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Cinema_Ticket') }}/ </span>{{$country_info->cinema_country}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Internet') }}/ </span>{{$country_info->net_country}}
                                </li>
                                <li>
                                    <span class="price-desc-title">{{ trans('lang.Clothes') }}/ </span>{{$country_info->clothing_country}}
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </section>
    </section>
@endsection
@section('script-1')
    <script>
        selectItem("country_info");
    </script>
@endsection