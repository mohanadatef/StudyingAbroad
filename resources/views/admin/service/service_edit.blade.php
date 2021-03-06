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
            <div align="center">{{ __('Edit Service') }}</div>
            <form action="{{url('admin/service/edit/'.$service->id)}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : "" }}">
                            name EN : <input type="text" id="name_en" value="{{$service->name_en}}"
                                              class="form-control" name="name_en" placeholder="enter you name_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : "" }}">
                            name AR : <input type="text" id="name_ar" value="{{$service->name_ar}}"
                                              class="form-control" name="name_ar" placeholder="enter you name_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('description_en') ? ' has-error' : "" }}">
                            description En : <textarea type="text" id="description_en" class="form-control"
                                                       name="description_en"
                                                       placeholder="enter you description_en">{{$service->description_en}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('description_ar') ? ' has-error' : "" }}">
                            description AR : <textarea type="text" id="description_ar" class="form-control"
                                                       name="description_ar"
                                                       placeholder="enter you description_ar">{{$service->description_ar}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                   order : <input type="text" id="order" value="{{$service->order}}"
                                      class="form-control" name="order" placeholder="enter you order">
                </div>


                        <img src="{{url('public/images/service').'/'.$service->log}}" style="width:300px;height:300px;">
                        <div class="form-group{{ $errors->has('log') ? ' has-error' : "" }}">
                            <table class="table">
                                <tr>
                                    <td width="40%" align="right"><label>Select File for Upload for log</label></td>
                                    <td width="30"><input type="file" value="{{Request::old('log')}}" name="log" /></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="right"></td>
                                    <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                                </tr>
                            </table>
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