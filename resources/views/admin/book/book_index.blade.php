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
        <div class="page-content">
                <div class="row">
                    <div class="col-md-11">
                        <h1 align="center">Book Reuest</h1>
                    </div>
                </div>
                    @if(count($book) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">name</th>
                                    <th class="center">email</th>
                                    <th class="center">phone</th>
                                    <th class="center">country</th>
                                    <th class="center">program</th>
                                    <th class="center">service</th>
                                    <th class="center">english level</th>
                                    <th class="center">country level</th>
                                    @permission('book-delete')
                                    <th class="center">Control</th>
                                    @endpermission
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($book as $mybook)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $mybook->name }}</td>
                                        <td class="center">{{ $mybook->email }}</td>
                                        <td class="center">{{ $mybook->phone }}</td>
                                        <td class="center">{{ $mybook->country->name_en }}</td>
                                        <td class="center">{{ $mybook->program->name_en }}</td>
                                        <td class="center">
                                            @foreach($mybook->service as $book_service)
                                                [{{ $book_service->name_en }}],
                                            @endforeach
                                        </td>
                                        <td class="center">{{ $mybook->english_level }}</td>
                                        <td class="center">{{ $mybook->country_level }}</td>
                                        @permission('book-delete')
                                        <td class="center">
                                            <a href="{{url('admin/book/delete/'.$mybook->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
                                        </td>
                                        @endpermission
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no request to show</div>
                    @endif
                </div>
    </div>
    @include('includes.admin.footer')
    @include('includes.admin.scripts')
</div>
</body>
</html>