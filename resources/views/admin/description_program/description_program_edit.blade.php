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
            <div align="center">{{ __('Edit Description Program') }}</div>
            <form action="{{url('admin/description_program/edit/'.$description_program->id)}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            country :  <select id="country_id" type="country_id" class="form-control" name="country_id"  >
                                @foreach($country as $key => $mycountry)
                                    <option value="{{$key}}"  @if($description_program->country_id == $key)){ selected  } @else{   }@endif  > {{$mycountry}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            program :  <select id="program_id" type="program_id" class="form-control" name="program_id"  >
                                @foreach($program as $key => $myprogram)
                                    <option value="{{$key}}"  @if($description_program->program_id == $key)){ selected  } @else{   }@endif  > {{$myprogram}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('title_en') ? ' has-error' : "" }}">
                            title EN : <input type="text" id="title_en" value="{{$description_program->title_en}}"
                                              class="form-control" name="title_en" placeholder="enter you title_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('title_ar') ? ' has-error' : "" }}">
                            title AR : <input type="text" id="title_ar" value="{{$description_program->title_ar}}"
                                              class="form-control" name="title_ar" placeholder="enter you title_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('description_en') ? ' has-error' : "" }}">
                            description EN : <textarea type="text" id="description_en" class="form-control" name="description_en" placeholder="enter you description_en">{{$description_program->description_en}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('description_ar') ? ' has-error' : "" }}">
                            description AR : <textarea type="text" id="description_ar" class="form-control" name="description_ar" placeholder="enter you description">{{$description_program->description_ar}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                   order : <input type="text" id="order" value="{{$description_program->order}}"
                                      class="form-control" name="order" placeholder="enter you title_ar">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{url('public/images/description_program').'/'.$description_program->image}}" style="width:300px;height:300px;">
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : "" }}">
                            <table class="table">
                                <tr>
                                    <td width="40%" align="right"><label>Select File for Upload for image</label></td>
                                    <td width="30"><input type="file" value="{{Request::old('image')}}" name="image" /></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="right"></td>
                                    <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{url('public/images/description_program').'/'.$description_program->log}}" style="width:300px;height:300px;">
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