@extends('includes.frontend.master_frontend')
@section('title')
    Program
@endsection
@section('content')
    <section id="program1-body-section">
        <h2 class="program1-title">{{ language($programmy->name_ar,$programmy->name_en) }} {{ trans('lang.in') }} {{ language($countrymy->name_ar,$countrymy->name_en) }}</h2>
        <div class="row row-img">
            <!-- <div style="margin: auto"> -->
            <?php $x = 1; ?>
            @foreach($description_program as $descriptionprogram)
                <div class="col program-tab" id="{{$x++}}" onclick="programTab(this);">
                    <div class="activeTab"
                         @if($mydescription->id != $descriptionprogram->id) style="display: none;" @endif>
                        <img src="{{url('public/images/description_program/'.$descriptionprogram->log)}}">
                        <div>{{ language($descriptionprogram->title_ar,$descriptionprogram->title_en) }}</div>
                    </div>
                    <div class="nonactiveTab"
                         @if($mydescription->id == $descriptionprogram->id) style="display: none;" @endif>
                        <img src="{{url('public/images/description_program/'.$descriptionprogram->image)}}">
                        <div class="program1-tab-title">{{ language($descriptionprogram->title_ar,$descriptionprogram->title_en) }}</div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- </div> -->
        <div class="program1-body-content">
            <div class="program1-content">
                <div class="program1-card">
                    <?php $x = 1; ?>
                    @foreach($description_program as $descriptionprogram)
                        @if($x%2==0)
                            <div class="card mb-3 service-block1" id="s{{$x++}}" @if($mydescription->id != $descriptionprogram->id) style="display: none;" @endif>
                                <div class="row no-gutters"
                                     style="margin: 0 !important">
                                    <div class="col-md-6">
                                        <img src="{{url('public/assets/imgs/shutterstock-140079079.png')}}"
                                             class="card-img service-block1-img" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h2 class="card-title service-block1-title">{{  language($descriptionprogram->title_ar,$descriptionprogram->title_en) }}</h2>
                                            <div class="card-text service-block1-prag">
                                                {!!  language($descriptionprogram->description_ar,$descriptionprogram->description_en) !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="card mb-3 service-block1" id="s{{$x++}}" @if($mydescription->id != $descriptionprogram->id) style="display: none;" @endif>
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h2 class="card-title service-block1-title">{{  language($descriptionprogram->title_ar,$descriptionprogram->title_en) }}</h2>
                                            <div class="card-text service-block1-prag">
                                                {!!  language($descriptionprogram->description_ar,$descriptionprogram->description_en) !!}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('public/assets/imgs/shutterstock-140079079.png')}}"
                                             class="card-img service-block1-img" alt="...">
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-1')
    <script>
        selectItem("program");
    </script>
@endsection