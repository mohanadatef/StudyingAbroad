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
            <div align="center">{{ __('Edit American High School') }}</div>
            <form action="{{url('admin/american_high_school/edit/'.$american_high_school->id)}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                {{csrf_field()}}
                    <div class="form-group">
                        country :  <select id="country_id" type="country_id" class="form-control" name="country_id"  >
                            @foreach($country as $key => $mycountry)
                                <option value="{{$key}}"  @if($american_high_school->country_id == $key)){ selected  } @else{   }@endif  > {{$mycountry}}</option>

                            @endforeach
                        </select>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('subjects_en') ? ' has-error' : "" }}">
                            subjects  EN : <input type="text" id="subjects_en" value="{{$american_high_school->subjects_en}}"
                                              class="form-control" name="subjects_en" placeholder="enter you subjects_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('subjects_ar') ? ' has-error' : "" }}">
                            subjects AR : <input type="text" id="subjects_ar" value="{{$american_high_school->subjects_ar}}"
                                              class="form-control" name="subjects_ar" placeholder="enter you subjects_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('units_en') ? ' has-error' : "" }}">
                            units EN : <input type="text" id="units_en" value="{{$american_high_school->units_en}}"
                                                class="form-control" name="units_en" placeholder="enter you units_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('units_ar') ? ' has-error' : "" }}">
                            units AR : <input type="text" id="units_ar" value="{{$american_high_school->units_ar}}"
                                                class="form-control" name="units_ar" placeholder="enter you units_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('information_en') ? ' has-error' : "" }}">
                            information EN : <input type="text" id="information_en" value="{{$american_high_school->information_en}}"
                                               class="form-control" name="information_en" placeholder="enter you information_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('information_ar') ? ' has-error' : "" }}">
                            information AR : <input type="text" id="information_ar" value="{{$american_high_school->information_ar}}"
                                               class="form-control" name="information_ar" placeholder="enter you information_ar">
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                   order : <input type="text" id="order" value="{{$american_high_school->order}}"
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