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
            <div align="center">{{ __('Edit National Curriculum') }}</div>
            <form action="{{url('admin/national_curriculum/edit/'.$national_curriculum->id)}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                {{csrf_field()}}
                    <div class="form-group">
                        country :  <select id="country_id" type="country_id" class="form-control" name="country_id"  >
                            @foreach($country as $key => $mycountry)
                                <option value="{{$key}}"  @if($national_curriculum->country_id == $key)){ selected  } @else{   }@endif  > {{$mycountry}}</option>

                            @endforeach
                        </select>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('country_name_en') ? ' has-error' : "" }}">
                            Country Name  EN : <input type="text" id="country_name_en" value="{{$national_curriculum->country_name_en}}"
                                              class="form-control" name="country_name_en" placeholder="enter you country_name_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('country_name_ar') ? ' has-error' : "" }}">
                            Country Nam AR : <input type="text" id="country_name_ar" value="{{$national_curriculum->country_name_ar}}"
                                              class="form-control" name="country_name_ar" placeholder="enter you country_name_ar">
                        </div>
                    </div>
                </div>
                    <div class="form-group{{ $errors->has('result') ? ' has-error' : "" }}">
                        Result : <input type="text" id="result" value="{{$national_curriculum->result}}"
                                         class="form-control" name="result" placeholder="enter you result">
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('section_en') ? ' has-error' : "" }}">
                            Section EN : <input type="text" id="section_en" value="{{$national_curriculum->section_en}}"
                                               class="form-control" name="section_en" placeholder="enter you section_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('section_ar') ? ' has-error' : "" }}">
                            Section AR : <input type="text" id="section_ar" value="{{$national_curriculum->section_ar}}"
                                               class="form-control" name="section_ar" placeholder="enter you section_ar">
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                   order : <input type="text" id="order" value="{{$national_curriculum->order}}"
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