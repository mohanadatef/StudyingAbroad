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
                        <h1 align="center">National Curriculum</h1>
                    </div>
                    @permission('national-curriculum-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/national_curriculum/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($national_curriculum) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">country</th>
                                    <th class="center">country name</th>
                                    <th class="center">result</th>
                                    <th class="center">section EN</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($national_curriculum as $nationalcurriculum)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $nationalcurriculum->country->name_en }}</td>
                                        <td class="center">{{ $nationalcurriculum->country_name_en }}</td>
                                        <td class="center">{{ $nationalcurriculum->result }}</td>
                                        <td class="center">{{ $nationalcurriculum->section_en }}</td>
                                        <td class="center">
                                            @permission('national-curriculum-edit')
                                            <a href="{{ url('/admin/national_curriculum/edit/'.$nationalcurriculum->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                            @permission('national-curriculum-delete')
                                            <a href="{{url('admin/national_curriculum/delete/'.$nationalcurriculum->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no National Curriculum to show</div>
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