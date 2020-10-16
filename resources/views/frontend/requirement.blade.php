@extends('includes.frontend.master_frontend')
@section('title')
    Requirement
@endsection
@section('content')
    <section id="service-section">

        <section id="service-part2">
            <div class="question-service-div">
                <div class="req-container">
                    <h3 class="Service-block2-title-span">{{ trans('lang.REQUIREMENTS') }}</h3>

                    <section id="requ-questions-part">
                        @foreach($requirement as $myrequirement)
                        <div class="container requ-container">
                            <div class="requ-nonactive-questions-card" id="cardserv{{$myrequirement->id}}" onclick="openRequirementsCard('cardserv{{$myrequirement->id}}')">
                                <div class="requ-nonactive-question-part">
                                    {{  language($myrequirement->title_ar,$myrequirement->title_en) }}
                                </div>
                                <div class="requ-nonactive-answer-part">
                                    {!!  language($myrequirement->description_ar,$myrequirement->description_en) !!}
                                     </div>
                            </div>

                        </div>
                            @endforeach
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
@section('script-1')
    <script>
        selectItem("program");
    </script>
@endsection