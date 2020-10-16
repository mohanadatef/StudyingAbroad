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
                        <h1 align="center">Description Program</h1>
                    </div>
                    @permission('description-program-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/description_program/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($description_program) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">country</th>
                                    <th class="center">program</th>
                                    <th class="center">title EN</th>
                                    <th class="center">title AR</th>
                                    <th class="center">description EN</th>
                                    <th class="center">description AR</th>
                                    <th class="center">Image</th>
                                    <th class="center">Log</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($description_program as $descriptionprogram)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $descriptionprogram->country->name_en }}</td>
                                        <td class="center">{{ $descriptionprogram->program->name_en }}</td>
                                        <td class="center">{{ $descriptionprogram->title_en }}</td>
                                        <td class="center">{{ $descriptionprogram->title_ar }}</td>
                                        <td class="center">{!! $descriptionprogram->description_en !!}</td>
                                        <td class="center">{!! $descriptionprogram->description_ar !!}</td>
                                        <td class="center"><img src="{{ asset('public/images/description_program/' . $descriptionprogram->image ) }}" style="width:100px;height: 100px"></td>
                                        <td class="center"><img src="{{ asset('public/images/description_program/' . $descriptionprogram->log ) }}" style="width:100px;height: 100px"></td>
                                        <td class="center">
                                            @permission('description-program-edit')
                                            <a href="{{ url('/admin/description_program/edit/'.$descriptionprogram->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                            @permission('description-program-delete')
                                            <a href="{{url('admin/description_program/delete/'.$descriptionprogram->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no Description Program to show</div>
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