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
                        <h1 align="center">Requirement</h1>
                    </div>
                    @permission('requirement-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/requirement/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($requirement) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">country</th>
                                    <th class="center">title EN</th>
                                    <th class="center">title AR</th>
                                    <th class="center">description EN</th>
                                    <th class="center">description AR</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($requirement as $myrequirement)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $myrequirement->country->name_en }}</td>
                                        <td class="center">{{ $myrequirement->title_en }}</td>
                                        <td class="center">{{ $myrequirement->title_ar }}</td>
                                        <td class="center">{!! $myrequirement->description_en !!}</td>
                                        <td class="center">{!! $myrequirement->description_ar !!}</td>
                                        <td class="center">
                                            @permission('requirement-edit')
                                            <a href="{{ url('/admin/requirement/edit/'.$myrequirement->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                            @permission('requirement-delete')
                                            <a href="{{url('admin/requirement/delete/'.$myrequirement->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no Requirement to show</div>
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