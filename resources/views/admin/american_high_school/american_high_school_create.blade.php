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
            <div align="center">{{ __('Add American High School') }}</div>
                <form action="{{url('admin/american_high_school/create')}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                    {{csrf_field()}}
                            <div class="form-group">
                                country : <select id="country_id" name="country_id" type="country_id" class="form-control"  >
                                    <option value="" selected disabled>Select</option>
                                    @foreach($country as $key => $mycountry)
                                        <option value="{{$key}}"> {{$mycountry}}</option>
                                    @endforeach
                                </select>
                            </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('subjects_en') ? ' has-error' : "" }}">
                                subjects EN : <input type="text" value="{{Request::old('subjects_en')}}" class="form-control"
                                                  name="subjects_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('subjects_ar') ? ' has-error' : "" }}">
                                subjects AR : <input type="text" value="{{Request::old('subjects_ar')}}" class="form-control"
                                                  name="subjects_ar">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('units_en') ? ' has-error' : "" }}">
                                units EN : <input type="text" value="{{Request::old('units_en')}}" class="form-control"
                                                     name="units_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('units_ar') ? ' has-error' : "" }}">
                                units AR : <input type="text" value="{{Request::old('units_ar')}}" class="form-control"
                                                     name="units_ar">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('information_en') ? ' has-error' : "" }}">
                                information EN : <input type="text" value="{{Request::old('information_en')}}" class="form-control"
                                                   name="information_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('information_ar') ? ' has-error' : "" }}">
                                information AR : <input type="text" value="{{Request::old('information_ar')}}" class="form-control"
                                                   name="information_ar">
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