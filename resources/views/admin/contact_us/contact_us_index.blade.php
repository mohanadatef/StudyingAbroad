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
                        <h1 align="center">Contact US</h1>
                    </div>
                    @permission('contact-us-create')
                    @if($contactus->count() == 0)
                        <div class="col-md-1">
                            <a href="{{  url('/admin/contact_us/create') }}" class="btn btn-sm btn-primary">Add</a>
                        </div>
                    @endif
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($contactus) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">Email</th>
                                    <th class="center">address EN</th>
                                    <th class="center">address AR</th>
                                    <th class="center">time work EN</th>
                                    <th class="center">time work AR</th>
                                    <th class="center">phone EN</th>
                                    <th class="center">phone AR</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($contactus as $contact)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $contact->email }}</td>
                                        <td class="center">{{ $contact->address_en }}</td>
                                        <td class="center">{{ $contact->address_ar }}</td>
                                        <td class="center">{{ $contact->time_work_en }}</td>
                                        <td class="center">{{ $contact->time_work_ar }}</td>
                                        <td class="center">{{ $contact->phone_en }}</td>
                                        <td class="center">{{ $contact->phone_ar }}</td>
                                        <td class="center">
                                            @permission('contact-us-edit')
                                            <a href="{{ url('/admin/contact_us/edit/'.$contact->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
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