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
                        <h1 align="center">American High School</h1>
                    </div>
                    @permission('american-high-school-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/american_high_school/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($american_high_school) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">country</th>
                                    <th class="center">subjects name</th>
                                    <th class="center">units EN</th>
                                    <th class="center">information EN</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($american_high_school as $americanhighschool)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $americanhighschool->country->name_en }}</td>
                                        <td class="center">{{ $americanhighschool->subjects_en }}</td>
                                        <td class="center">{{ $americanhighschool->units_en }}</td>
                                        <td class="center">{{ $americanhighschool->information_en }}</td>
                                        <td class="center">
                                            @permission('american-high-school-edit')
                                            <a href="{{ url('/admin/american_high_school/edit/'.$americanhighschool->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                            @permission('american-high-school-delete')
                                            <a href="{{url('admin/american_high_school/delete/'.$americanhighschool->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no American High School to show</div>
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