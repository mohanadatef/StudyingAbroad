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
        <div class="col-md-12">
            <div align="center">{{ __('Add Contact Us') }}</div>
            <form action="{{url('admin/contact_us/create')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : "" }}">
                    Email : <input type="text" value="{{Request::old('email')}}" class="form-control"
                                        name="email" placeholder="Enter You email">
                </div>
                <div class="form-group{{ $errors->has('address_en') ? ' has-error' : "" }}">
                    address EN : <input type="text" value="{{Request::old('address_en')}}" class="form-control"
                                        name="address_en" placeholder="Enter You address_en">
                </div>
                <div class="form-group{{ $errors->has('address_ar') ? ' has-error' : "" }}">
                    address AR : <input type="text" value="{{Request::old('address_ar')}}" class="form-control"
                                        name="address_ar" placeholder="Enter You address_ar">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('time_work_en') ? ' has-error' : "" }}">
                            time work EN : <input type="text" value="{{Request::old('time_work_en')}}"
                                                  class="form-control" name="time_work_en"
                                                  placeholder="Enter You time_work_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('time_work_ar') ? ' has-error' : "" }}">
                            time work AR : <input type="text" value="{{Request::old('time_work_ar')}}"
                                                  class="form-control" name="time_work_ar"
                                                  placeholder="Enter You time_work_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('phone_en') ? ' has-error' : "" }}">
                            phone EN : <input type="text" value="{{Request::old('phone_en')}}" class="form-control"
                                              name="phone_en" placeholder="Enter You phone_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('phone_ar') ? ' has-error' : "" }}">
                            phone AR : <input type="text" value="{{Request::old('phone_ar')}}" class="form-control"
                                              name="phone_ar" placeholder="Enter You phone_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('latitude') ? ' has-error' : "" }}">
                            latitude : <input type="text" value="{{Request::old('latitude')}}" class="form-control"
                                              name="latitude" placeholder="Enter You latitude">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('longitude') ? ' has-error' : "" }}">
                            longitude : <input type="text" value="{{Request::old('longitude')}}" class="form-control"
                                               name="longitude" placeholder="Enter You longitude">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Done ">
            </form>
        </div>
    </div>
    @include('includes.admin.footer')
    @include('includes.admin.scripts')
</div>
</body>
</html>