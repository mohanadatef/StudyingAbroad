@extends('includes.frontend.master_frontend')
@section('title')
    Service
@endsection
@section('content')
    <section id="service-section">
        <section id="service-part1">
            <h2 class="country-program-title">{{  language($servicemy->name_ar,$servicemy->name_en) }}</h2>
            <div class="container">
                <!-- Card place -->
                <?php $x = count($description_service); ?>
                @foreach($description_service as $descriptionservice)
                    @if($x%2==0)
                        <div class="card mb-3 service-block1">
                            <div class="row no-gutters"
                                 style="margin: 0 !important">
                                <div class="col-md-6">
                                    <img src="{{url('public/images/description_service/'.$descriptionservice->image)}}"
                                         class="card-img service-block1-img" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h2 class="card-title service-block1-title">{{  language($descriptionservice->title_ar,$descriptionservice->title_en) }}</h2>
                                        <div class="card-text service-block1-prag">
                                            {!!  language($descriptionservice->description_ar,$descriptionservice->description_en) !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card mb-3 service-block1">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h2 class="card-title service-block1-title">{{  language($descriptionservice->title_ar,$descriptionservice->title_en) }}</h2>
                                        <div class="card-text service-block1-prag">
                                            {!!  language($descriptionservice->description_ar,$descriptionservice->description_en) !!}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('public/images/description_service/'.$descriptionservice->image)}}"
                                         class="card-img service-block1-img" alt="...">
                                </div>
                            </div>
                        </div>
                    @endif
                    <?php $x = $x - 1; ?>
                @endforeach
            </div>
        </section>
        @if(count($faq_service)>0)
            <section id="service-part2">
                <div class="question-service-div">
                    <div>
                        <div class="container">
                            <h2 class="Service-block2-title">{{ trans('lang.FAQ') }}</h2>
                            <h3 class="Service-block2-title-span">{{  language($servicemy->name_ar,$servicemy->name_en) }}</h3>

                                    <section id="service-questions-part">
                                        <div class="container service-container">

                                            @foreach($faq_service as $faqservice)
                                                <div class="service-nonactive-questions-card"
                                                     id="cardserv{{$faqservice->id}}"
                                                     onclick="openQuestionCard('cardserv{{$faqservice->id}}')">
                                                    <div class="service-nonactive-question-part">
                                                        {{  language($faqservice->question_ar,$faqservice->question_en) }}
                                                        <span class="service-arrow-icon service-nonactive-arrow"><i
                                                                    class="fas fa-sort-up"></i></span>
                                                        <span class="service-nonactive-arrow-icon service-active-arrow"><i
                                                                    class="fas fa-sort-down"></i></span>
                                                    </div>
                                                    <div class="service-nonactive-answer-part">
                                                        {{  language($faqservice->answer_ar,$faqservice->answer_en) }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </section>
                                </div>

                    </div>
                </div>
            </section>
        @endif
    </section>
@endsection
@section('script-1')
    <script>
        selectItem("service");
    </script>
@endsection