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
        <br>
        @include('includes.admin.error')
        <div class="page-content">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-11">
                        <h1 align="center">About US</h1>
                    </div>
                    @permission('about-us-create')
                    @if($aboutus->count() == 0)
                        <div class="col-md-1">
                            <a href="{{  url('/admin/about_us/create') }}" class="btn btn-sm btn-primary">Add</a>
                        </div>
                    @endif
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($aboutus) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">description EN</th>
                                    <th class="center">description AR</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($aboutus as $about)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{!! $about->description_en !!}</td>
                                        <td class="center">{!! $about->description_ar !!}</td>
                                        <td class="center">
                                            @permission('about-us-edit')
                                            <a href="{{ url('/admin/about_us/edit/'.$about->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no Data to show</div>
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