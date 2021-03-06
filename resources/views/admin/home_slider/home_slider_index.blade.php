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
        <br>
        <div class="page-content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-11">
                        <h1 align="center">Home Slider</h1>
                    </div>
                    @permission('home-slider-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/home_slider/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($homeslider) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">title EN</th>
                                    <th class="center">title AR</th>
                                    <th class="center">description EN</th>
                                    <th class="center">description AR</th>
                                    <th class="center">Image</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($homeslider as $slider)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $slider->title_en }}</td>
                                        <td class="center">{{ $slider->title_ar }}</td>
                                        <td class="center">{!! $slider->description_en !!}</td>
                                        <td class="center">{!! $slider->description_ar !!}</td>
                                        <td class="center"><img src="{{ asset('public/images/home_slider/' . $slider->image ) }}" style="width:100px;height: 100px"></td>
                                        <td class="center">
                                            @permission('home-slider-edit')
                                            <a href="{{ url('/admin/home_slider/edit/'.$slider->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                            @permission('home-slider-delete')
                                            <a href="{{url('admin/home_slider/delete/'.$slider->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no home slider to show</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('includes.admin.footer')
    @include('includes.admin.scripts')
</div>
</body>
</html>