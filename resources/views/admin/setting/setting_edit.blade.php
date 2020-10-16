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
        <div align="center">{{ __('Setting') }}</div>
        <form action="{{url('admin/setting/edit/'.$setting->id)}}" enctype="multipart/form-data" method="POST"
              style="width: 1000px;margin-left: 50px">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('facebook') ? ' has-error' : "" }}">
                facebook : <input type="text" value="{{$setting->facebook}}" class="form-control" name="facebook"
                                  placeholder="enter you facebook">
            </div>
            <div class="form-group{{ $errors->has('youtube') ? ' has-error' : "" }}">
                youtube : <input type="text" value="{{$setting->youtube}}" class="form-control" name="youtube"
                                 placeholder="enter you youtube">
            </div>
            <div class="form-group{{ $errors->has('twitter') ? ' has-error' : "" }}">
                twitter : <input type="text" value="{{$setting->twitter}}" class="form-control" name="twitter"
                                 placeholder="enter you twitter">
            </div>
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : "" }}">
                        <table class="table">
                            <tr>
                                <td><img src="{{url('public/images/setting').'/'.$setting->image}}"
                                         style="width:300px;height:300px;margin-left:400px "></td>
                            </tr>
                            <tr>
                                <td width="40%" align="center"><label>Select File for Upload</label></td>
                                <td width="30" align="center"><input type="file" value="{{Request::old('image')}}"
                                                                     name="image"/></td>
                            </tr>
                            <tr>
                                <td width="40%" align="center"></td>
                                <td width="30" align="center"><span class="text-muted">jpg, png, gif</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="form-group{{ $errors->has('logo') ? ' has-error' : "" }}">
                        <table class="table">
                            <tr>
                                <td><img src="{{url('public/images/setting').'/'.$setting->logo}}"
                                         style="width:300px;height:300px;margin-left:400px "></td>
                            </tr>
                            <tr>
                                <td width="40%" align="center"><label>Select File for Upload</label></td>
                                <td width="30" align="center"><input type="file" value="{{Request::old('logo')}}"
                                                                     name="logo"/></td>
                            </tr>
                            <tr>
                                <td width="40%" align="center"></td>
                                <td width="30" align="center"><span class="text-muted">jpg, png, gif</span></td>
                            </tr>
                        </table>
                    </div>
            <div align="center">
                <input type="submit" class="btn btn-primary" value="Done">
            </div>
            <br>
        </form>
    </div>
    @include('includes.admin.footer')
    @include('includes.admin.scripts')
</div>
</body>
</html>