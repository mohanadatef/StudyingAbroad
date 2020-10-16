@extends('includes.frontend.master_frontend')
@section('title')
    About us
@endsection
@section('content')
    <section id="about-body-section">
        <section id="about-header-section">
            @if(App::getLocale() == 'en')
                <img src="{{url('public/assets/imgs/aboutImg.png')}}" class="about-head-img"/>
            @else
                <img src="{{url('public/assets/imgs/2019-08-20.png')}}" class="about-head-img"/>
            @endif


        </section>
        <section id="about-content-section">
            <div class="about-content">
                {!!  language($about_us->description_ar,$about_us->description_en) !!}
            </div>
        </section>
    </section>

@endsection
@section('script-1')
    <script>
        selectItem("about_us");
    </script>
@endsection