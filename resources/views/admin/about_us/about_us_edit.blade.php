<!DOCTYPE html>
<html>
<head>
    @include('includes.admin.header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
@include('includes.admin.main-header')
@include('includes.admin.main-sidebar')
<div class="wrapper">
    <div class="content-wrapper">
        @include('includes.admin.error')
        <br>
        <h1 align="center">{{ __('About US') }}</h1>
        <form action="{{url('admin/about_us/edit/'.$aboutus->id)}}" enctype="multipart/form-data" method="POST"  style="width: 1000px;margin-left: 50px">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('description_en') ? ' has-error' : "" }}">
                description En : <textarea type="text" id="description_en" class="form-control"
                                           name="description_en"
                                           placeholder="enter you description_en">{{$aboutus->description_en}}</textarea>
            </div>
            <div class="form-group{{ $errors->has('description_ar') ? ' has-error' : "" }}">
                description AR : <textarea type="text" id="description_ar" class="form-control"
                                           name="description_ar"
                                           placeholder="enter you description_ar">{{$aboutus->description_ar}}</textarea>
            </div>
            <div align="center">
                <input type="submit" class="btn btn-primary" value="Done">
            </div>
            <br>
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