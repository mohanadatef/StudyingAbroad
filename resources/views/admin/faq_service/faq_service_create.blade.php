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
            <div align="center">{{ __('Add Faq Service') }}</div>
                <form action="{{url('admin/faq_service/create')}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                country : <select id="country_id" name="country_id" type="country_id" class="form-control"  >
                                    <option value="" selected disabled>Select</option>
                                    @foreach($country as $key => $mycountry)
                                        <option value="{{$key}}"> {{$mycountry}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                service : <select id="service_id" name="service_id" type="service_id" class="form-control"  >
                                    <option value="" selected disabled>Select</option>
                                    @foreach($service as $key => $myservice)
                                        <option value="{{$key}}"> {{$myservice}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('question_en') ? ' has-error' : "" }}">
                                Question EN : <input type="text" value="{{Request::old('question_en')}}" class="form-control"
                                                  name="question_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('question_ar') ? ' has-error' : "" }}">
                                Question AR : <input type="text" value="{{Request::old('question_ar')}}" class="form-control"
                                                  name="question_ar">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('answer_en') ? ' has-error' : "" }}">
                                Answer EN : <input type="text" value="{{Request::old('answer_en')}}" class="form-control"
                                                     name="answer_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('answer_ar') ? ' has-error' : "" }}">
                                Answer AR : <input type="text" value="{{Request::old('answer_ar')}}" class="form-control"
                                                     name="answer_ar">
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                        order : <input type="text" value="{{Request::old('order')}}" class="form-control" name="order" placeholder="Enter You order">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Done ">
                </form>
            </div>
    @include('includes.admin.footer')
    @include('includes.admin.scripts')
</div>
</body>
</html>