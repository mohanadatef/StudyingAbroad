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
                        <h1 align="center">User</h1>
                    </div>
                    @permission('user-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/user/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($users) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">Name</th>
                                    <th class="center">Role</th>
                                    <th class="center">Email</th>
                                    @permission('bage-statues')
                                    <th class="center">statues</th>
                                    @endpermission
                                    <th class="center">Control</th>
                                    @permission('user-password')
                                    <th class="center">reset password</th>
                                    @endpermission
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $user->name }}</td>
                                        <td class="center">
                                        @foreach($user->role as $user_role)
                                        [{{ $user_role->name }}],
                                            @endforeach
                                        </td>
                                        <td class="center">{{ $user->email }}</td>
                                        @permission('user-statues')
                                        <td class="center">
                                            @if($user_role->name == 'owner' && Auth::user()->role->first()->name !='owner')
                                                on permission to do this
                                            @elseif(Auth::user()->id != $user->id && Auth::user()->role->first()->name =='owner')
                                            @if($user->statues ==1)
                                                <h7>Active</h7><a href="{{ url('/admin/user/statues/'.$user->id)}}"><i
                                                            class="ace-icon fa fa-close"></i></a>
                                            @elseif($user->statues ==0)
                                                    <h7>Dactive</h7><a href="{{ url('/admin/user/statues/'.$user->id)}}"><i
                                                                class="ace-icon fa fa-check-circle"></i></a>
                                            @endif
                                            @elseif(Auth::user()->id != $user->id)
                                                @if($user->statues ==1)
                                                    <h7>Active</h7><a href="{{ url('/admin/user/statues/'.$user->id)}}"><i
                                                                class="ace-icon fa fa-close"></i></a>
                                                @elseif($user->statues ==0)
                                                    <h7>Dactive</h7><a href="{{ url('/admin/user/statues/'.$user->id)}}"><i
                                                                class="ace-icon fa fa-check-circle"></i></a>
                                                @endif
                                                @endif
                                        </td>
                                        @endpermission
                                        <td class="center">
                                            @if($user_role->name == 'owner' && Auth::user()->role->first()->name !='owner')
                                                on permission to do this
                                            @elseif(Auth::user()->id != $user->id && Auth::user()->role->first()->name =='owner')
                                                @permission('user-edit')
                                                <a href="{{ url('/admin/user/edit/'.$user->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id="">edit</i></a>
                                                @endpermission
                                                @permission('user-delete')
                                                <a href="{{url('admin/user/delete/'.$user->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 " style="color: red">delete</i></a>
                                                @endpermission
                                            @elseif(Auth::user()->id != $user->id)
                                                @permission('user-edit')
                                                <a href="{{ url('/admin/user/edit/'.$user->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id="">edit</i></a>
                                                @endpermission
                                                @permission('user-delete')
                                                <a href="{{url('admin/user/delete/'.$user->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 " style="color: red">delete</i></a>
                                                @endpermission
                                            @endif
                                        </td>
                                        @permission('user-password')
                                        <td>
                                            @if($user_role->name == 'owner' && Auth::user()->role->first()->name !='owner')
                                                on permission to do this
                                            @elseif(Auth::user()->id != $user->id && Auth::user()->role->first()->name =='owner')
                                            <a href="{{url('admin/user/reset/'.$user->id)}}" class="btn btn-success">reset password</a>
                                            @elseif(Auth::user()->id != $user->id)
                                                <a href="{{url('admin/user/reset/'.$user->id)}}" class="btn btn-success">reset password</a>
                                            @endif
                                        </td>
                                        @endpermission
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty">There is no User to show</div>
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