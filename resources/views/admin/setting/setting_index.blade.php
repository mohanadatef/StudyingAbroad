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
                        <h1 align="center">Setting</h1>
                    </div>
                    @permission('setting-create')
                    @if($setting->count() == 0)
                        <div class="col-md-1">
                            <a href="{{  url('/admin/setting/create') }}" class="btn btn-sm btn-primary">Add</a>
                        </div>
                    @endif
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($setting) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">facebook</th>
                                    <th class="center">youtube</th>
                                    <th class="center">twitter</th>
                                    <th class="center">image</th>
                                    <th class="center">logo</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($setting as $sett)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $sett->facebook }}</td>
                                        <td class="center">{{ $sett->youtube }}</td>
                                        <td class="center">{{ $sett->twitter }}</td>
                                        <td class="center"><img src="{{ asset('public/images/setting/' . $sett->image ) }}" style="width:100px;height: 100px"></td>
                                        <td class="center"><img src="{{ asset('public/images/setting/' . $sett->logo ) }}" style="width:100px;height: 100px"></td>
                                        <td class="center">
                                            @permission('setting-edit')
                                            <a href="{{ url('/admin/setting/edit/'.$sett->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
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