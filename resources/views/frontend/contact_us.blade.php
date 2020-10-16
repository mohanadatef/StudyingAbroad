@extends('includes.frontend.master_frontend')
@section('title')
    Contact us
@endsection
@section('content')
    <section id="contact-body-section">
        @include('includes.admin.error')
        <section id="contact-info-section">
            <div class="container">

                <div class="row" style="margin: 0 !important">
                    <div class="col-md-4">
                        <h2 class="contact-info-header">{{ trans('lang.Contact_Us') }}</h2>

                        <div class="contact-info-details">
                            <img src="public/assets/imgs/Phone.png" class="info-phone-icon">
                            <div class="info-phone">
                                <h5><a href="tel:{{ language($contact_us->phone_ar,$contact_us->phone_en)}}">{{ language($contact_us->phone_ar,$contact_us->phone_en)}}</a></h5>
                            </div>
                        </div>
                        <div class="contact-info-pad">
                            <img src="public/assets/imgs/Email.png" class="info-phone-icon">
                            <div class="info-phone">
                                <h5><a href="{{ url('/contact_us'.'#test') }}">{{$contact_us->email}}</a></h5>
                            </div>
                        </div>
                        <div class="contact-info-pad">
                            <img src="public/assets/imgs/Location.png" class="info-phone-icon">
                            <div class="info-phone">
                                <h5>{{ language($contact_us->address_ar,$contact_us->address_en)}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="public/assets/imgs/Pic 1.jpg" class="contact-info-img">
                    </div>

                </div>
            </div>
        </section>

        <section id="find-us-section">
            <div class="container">
                <h2 class="find-us-title">{{ trans('lang.Find_Us') }}</h2>
            </div>
            <!-- Map -->

            <section id="test">
                <div class="row" id="contatti" style="margin: 0 !important">
                    <div class="container mt-5">

                        <div class="row" style="margin: 0 !important">
                           @include('includes.frontend.map')
                           @include('frontend.call_us')
                        </div>
                    </div>
                </div>


            </section>

        </section>

    </section>

@endsection
@section('script-2')
    <script>
        selectItem("contact_us");
    </script>
@endsection