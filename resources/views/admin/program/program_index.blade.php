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
                        <h1 align="center">Program</h1>
                    </div>
                    @permission('program-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/program/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($program) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">name EN</th>
                                    <th class="center">name AR</th>
                                    <th class="center">Image</th>

                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($program as $muprogram)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $muprogram->name_en }}</td>
                                        <td class="center">{{ $muprogram->name_ar }}</td>
                                        <td class="center"><img src="{{ asset('public/images/program/' . $muprogram->image ) }}" style="width:100px;height: 100px"></td>
                                        <td class="center">
                                            @permission('program-edit')
                                            <a href="{{ url('/admin/program/edit/'.$muprogram->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no Program to show</div>
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