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
            <form action="{{url('admin/country_place/edit/'.$country_place->id)}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                {{csrf_field()}}
                <div class="form-group">
                    country :  <select id="country_id" type="country_id" class="form-control" name="country_id"  >
                        @foreach($country as $key => $mycountry)
                            <option value="{{$key}}"  @if($country_place->country_id == $key)){ selected  } @else{   }@endif  > {{$mycountry}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : "" }}">
                            name EN : <input type="text" id="name_en" value="{{$country_place->name_en}}"
                                              class="form-control" name="name_en" placeholder="enter you name_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : "" }}">
                            name AR : <input type="text" id="name_ar" value="{{$country_place->name_ar}}"
                                              class="form-control" name="name_ar" placeholder="enter you name_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('description_en') ? ' has-error' : "" }}">
                            about country_place EN : <textarea type="text" id="description_en" class="form-control" name="description_en" placeholder="enter you description_en">{{$country_place->description_en}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('description_ar') ? ' has-error' : "" }}">
                            about country_place AR : <textarea type="text" id="description_ar" class="form-control" name="description_ar" placeholder="enter you description">{{$country_place->description_ar}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                   order : <input type="text" id="order" value="{{$country_place->order}}"
                                      class="form-control" name="order" placeholder="enter you order">
                </div>
                <div align="center">
                <img src="{{url('public/images/country').'/'.$country_place->image}}" style="width:300px;height:300px;">
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
                </div>
                <div align="center">
                    <input type="submit" class="btn btn-primary" value="Done">
                </div>
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