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
        <h1 align="center">{{ __('Add Gce') }}</h1>
        <form action="{{url('admin/gce/create')}}" enctype="multipart/form-data" method="POST"
              style="width: 1000px;margin-left: 50px">
            {{csrf_field()}}
            <div class="form-group">
                country : <select id="country_id" name="country_id" type="country_id" class="form-control"  >
                    <option value="" selected disabled>Select</option>
                    @foreach($country as $key => $mycountry)
                        <option value="{{$key}}"> {{$mycountry}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group{{ $errors->has('description_en') ? ' has-error' : "" }}">
                description EN : <textarea type="text" value="{{Request::old('description_en')}}"
                                           class="form-control" name="description_en"></textarea>
            </div>
            <div class="form-group{{ $errors->has('description_ar') ? ' has-error' : "" }}">
                description AR : <textarea type="text" value="{{Request::old('description_ar')}}"
                                           class="form-control" name="description_ar"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Done" style="margin-left:450px">
        </form>
        <br>
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