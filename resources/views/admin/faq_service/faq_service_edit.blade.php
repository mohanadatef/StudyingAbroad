<!DOCTYPE html>
<html>
<head>
    @include('includes.admin.header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('includes.admin.main-header')
    @include('includes.admin.main-sidebar')
    <div class="content-wrapper">
        @include('includes.admin.error')
            <div align="center">{{ __('Edit Faq Service') }}</div>
            <form action="{{url('admin/faq_service/edit/'.$faq_service->id)}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            country :  <select id="country_id" type="country_id" class="form-control" name="country_id"  >
                                @foreach($country as $key => $mycountry)
                                    <option value="{{$key}}"  @if($faq_service->country_id == $key)){ selected  } @else{   }@endif  > {{$mycountry}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            service :  <select id="service_id" type="service_id" class="form-control" name="service_id"  >
                                @foreach($service as $key => $myservice)
                                    <option value="{{$key}}"  @if($faq_service->service_id == $key)){ selected  } @else{   }@endif  > {{$myservice}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('question_en') ? ' has-error' : "" }}">
                            Question EN : <input type="text" id="question_en" value="{{$faq_service->question_en}}"
                                              class="form-control" name="question_en" placeholder="enter you question_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('question_ar') ? ' has-error' : "" }}">
                            Question AR : <input type="text" id="question_ar" value="{{$faq_service->question_ar}}"
                                              class="form-control" name="question_ar" placeholder="enter you question_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('answer_en') ? ' has-error' : "" }}">
                            Answer EN : <input type="text" id="answer_en" value="{{$faq_service->answer_en}}"
                                             class="form-control" name="answer_en" placeholder="enter you answer_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('answer_ar') ? ' has-error' : "" }}">
                            Answer AR : <input type="text" id="answer_ar" value="{{$faq_service->answer_ar}}"
                                             class="form-control" name="answer_ar" placeholder="enter you answer_ar">
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                   order : <input type="text" id="order" value="{{$faq_service->order}}"
                                      class="form-control" name="order" placeholder="enter you order">
                </div>
                <div align="center">
                    <input type="submit" class="btn btn-primary" value="Done">
                </div>
            </form>
    </div>
    @include('includes.admin.footer')
    @include('includes.admin.scripts')
</div>
</body>
</html>