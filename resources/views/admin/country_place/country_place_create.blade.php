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
            <div align="center">{{ __('Country Place') }}</div>
                <form action="{{url('admin/country_place/create')}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
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
                            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : "" }}">
                                name EN : <input type="text" value="{{Request::old('name_en')}}" class="form-control"
                                                  name="name_en">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : "" }}">
                                name AR : <input type="text" value="{{Request::old('name_ar')}}" class="form-control"
                                                  name="name_ar">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group{{ $errors->has('description_en') ? ' has-error' : "" }}">
                            about country En : <textarea type="text" value="{{Request::old('description_en')}}" class="form-control" name="description_en"></textarea>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('description_ar') ? ' has-error' : "" }}">
                                about country AR : <textarea type="text" value="{{Request::old('description_ar')}}" class="form-control" name="description_ar"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                        order : <input type="text" value="{{Request::old('order')}}" class="form-control" name="order" placeholder="Enter You order">
                    </div>
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : "" }}">
                        <table class="table">
                            <tr>
                                <td width="40%" align="right"><label>Select File for Upload</label></td>
                                <td width="30"><input type="file" value="{{Request::old('image')}}" name="image" /></td>
                            </tr>
                            <tr>
                                <td width="40%" align="right"></td>
                                <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                            </tr>
                        </table>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Done ">
                </form>
            </div>
    @include('includes.admin.footer')
    @include('includes.admin.scripts')
    <script>
        CKEDITOR.replace( 'description_en');
    </script>
    <script>
        CKEDITOR.replace( 'description_ar');
    </script>
</div>
</body>
</html>