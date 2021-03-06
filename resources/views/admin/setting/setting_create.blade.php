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
            <div align="center">{{ __('Add Setting') }}</div>
            <form action="{{url('admin/setting/create')}}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('facebook') ? ' has-error' : "" }}">
                    facebook : <input type="text" value="{{Request::old('facebook')}}" class="form-control"
                                      name="facebook">
                </div>
                <div class="form-group{{ $errors->has('youtube') ? ' has-error' : "" }}">
                    youtube : <input type="text" value="{{Request::old('youtube')}}" class="form-control"
                                     name="youtube">
                </div>
                <div class="form-group{{ $errors->has('twitter') ? ' has-error' : "" }}">
                    twitter : <input type="text" value="{{Request::old('twitter')}}" class="form-control"
                                     name="twitter">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : "" }}">
                            <table class="table">
                                <tr>
                                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                                    <td width="30"><input type="file" value="{{Request::old('image')}}" name="image"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%" align="right"></td>
                                    <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('logo') ? ' has-error' : "" }}">
                            <table class="table">
                                <tr>
                                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                                    <td width="30"><input type="file" value="{{Request::old('logo')}}" name="logo"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%" align="right"></td>
                                    <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                                </tr>
                            </table>
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