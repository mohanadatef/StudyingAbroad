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
            <div align="center">{{ __('Add National Curriculum') }}</div>
                <form action="{{url('admin/national_curriculum/create')}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
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
                            <div class="form-group{{ $errors->has('country_name_en') ? ' has-error' : "" }}">
                                country EN : <input type="text" value="{{Request::old('country_name_en')}}" class="form-control"
                                                  name="country_name_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('country_name_ar') ? ' has-error' : "" }}">
                                country AR : <input type="text" value="{{Request::old('country_name_ar')}}" class="form-control"
                                                  name="country_name_ar">
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('result') ? ' has-error' : "" }}">
                        Result : <input type="text" value="{{Request::old('result')}}" class="form-control"
                                             name="result">
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('section_en') ? ' has-error' : "" }}">
                                section EN : <input type="text" value="{{Request::old('section_en')}}" class="form-control"
                                                   name="section_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('section_ar') ? ' has-error' : "" }}">
                                section AR : <input type="text" value="{{Request::old('section_ar')}}" class="form-control"
                                                   name="section_ar">
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