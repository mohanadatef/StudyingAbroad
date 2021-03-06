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
                        <h1 align="center">International Baccalaureate</h1>
                    </div>
                    @permission('international-baccalaureate-create')
                        <div class="col-md-1">
                            <a href="{{  url('/admin/international_baccalaureate/create') }}" class="btn btn-sm btn-primary">Add</a>
                        </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($international_baccalaureate) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">country</th>
                                    <th class="center">description EN</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($international_baccalaureate as $myinternational_baccalaureate)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $myinternational_baccalaureate->country->name_en }}</td>
                                        <td class="center">{!! $myinternational_baccalaureate->description_en !!}</td>
                                        <td class="center">
                                            @permission('international-baccalaureate-edit')
                                            <a href="{{ url('/admin/international_baccalaureate/edit/'.$myinternational_baccalaureate->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                            @permission('international-baccalaureate-delete')
                                            <a href="{{url('admin/international_baccalaureate/delete/'.$myinternational_baccalaureate->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
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