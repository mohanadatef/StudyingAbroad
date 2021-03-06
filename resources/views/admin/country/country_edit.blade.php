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
            <div align="center">{{ __('country') }}</div>
            <form action="{{url('admin/country/edit/'.$country->id)}}" enctype="multipart/form-data" method="POST" style="width: 1000px;margin-left: 50px">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : "" }}">
                            name EN : <input type="text" id="name_en" value="{{$country->name_en}}"
                                              class="form-control" name="name_en" placeholder="enter you name_en">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : "" }}">
                            name AR : <input type="text" id="name_ar" value="{{$country->name_ar}}"
                                              class="form-control" name="name_ar" placeholder="enter you name_ar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('about_country_en') ? ' has-error' : "" }}">
                            about country EN : <textarea type="text" id="about_country_en" class="form-control" name="about_country_en" placeholder="enter you about_country_en">{{$country->about_country_en}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('about_country_ar') ? ' has-error' : "" }}">
                            about country AR : <textarea type="text" id="about_country_ar" class="form-control" name="about_country_ar" placeholder="enter you about_country">{{$country->about_country_ar}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('residence_country') ? ' has-error' : "" }}">
                            residence country : <input type="text" id="residence_country" value="{{$country->residence_country}}"
                                             class="form-control" name="residence_country" placeholder="enter you residence_country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('residence_usd') ? ' has-error' : "" }}">
                            residence usd : <input type="text" id="residence_usd" value="{{$country->residence_usd}}"
                                             class="form-control" name="residence_usd" placeholder="enter you residence_usd">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('transportation_country') ? ' has-error' : "" }}">
                            transportation country : <input type="text" id="transportation_country" value="{{$country->transportation_country}}"
                                                       class="form-control" name="transportation_country" placeholder="enter you transportation_country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('transportation_usd') ? ' has-error' : "" }}">
                            transportation usd : <input type="text" id="transportation_usd" value="{{$country->transportation_usd}}"
                                                   class="form-control" name="transportation_usd" placeholder="enter you transportation_usd">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('food_country') ? ' has-error' : "" }}">
                            food country : <input type="text" id="food_country" value="{{$country->food_country}}"
                                                            class="form-control" name="food_country" placeholder="enter you food_country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('food_usd') ? ' has-error' : "" }}">
                            food usd : <input type="text" id="food_usd" value="{{$country->food_usd}}"
                                                        class="form-control" name="food_usd" placeholder="enter you food_usd">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('cinema_country') ? ' has-error' : "" }}">
                            cinema country : <input type="text" id="cinema_country" value="{{$country->cinema_country}}"
                                                  class="form-control" name="cinema_country" placeholder="enter you cinema_country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('cinema_usd') ? ' has-error' : "" }}">
                            cinema usd : <input type="text" id="cinema_usd" value="{{$country->cinema_usd}}"
                                              class="form-control" name="cinema_usd" placeholder="enter you cinema_usd">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('net_country') ? ' has-error' : "" }}">
                            net country : <input type="text" id="net_country" value="{{$country->net_country}}"
                                                    class="form-control" name="net_country" placeholder="enter you net_country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('net_usd') ? ' has-error' : "" }}">
                            net usd : <input type="text" id="net_usd" value="{{$country->net_usd}}"
                                                class="form-control" name="net_usd" placeholder="enter you net_usd">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('	clothing_country') ? ' has-error' : "" }}">
                            	clothing country : <input type="text" id="	clothing_country" value="{{$country->	clothing_country}}"
                                                 class="form-control" name="clothing_country" placeholder="enter you 	clothing_country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('	clothing_usd') ? ' has-error' : "" }}">
                            	clothing usd : <input type="text" id="	clothing_usd" value="{{$country->	clothing_usd}}"
                                             class="form-control" name="clothing_usd" placeholder="enter you 	clothing_usd">
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('order') ? ' has-error' : "" }}">
                   order : <input type="text" id="order" value="{{$country->order}}"
                                      class="form-control" name="order" placeholder="enter you order">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        image
                        <img src="{{url('public/images/country').'/'.$country->image}}" style="width:300px;height:300px;">
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
                    <div class="col-md-6">
                        loge
                        <img src="{{url('public/images/country').'/'.$country->loge}}" style="width:300px;height:300px;">
                        <div class="form-group{{ $errors->has('loge') ? ' has-error' : "" }}">
                            <table class="table">
                                <tr>
                                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                                    <td width="30"><input type="file" value="{{Request::old('loge')}}" name="loge" /></td>
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
        CKEDITOR.replace( 'about_country_en');
    </script>
    <script>
        CKEDITOR.replace( 'about_country_ar');
    </script>
</div>
</body>
</html>