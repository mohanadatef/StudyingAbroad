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
                        <h1 align="center">Faq Service</h1>
                    </div>
                    @permission('faq-service-create')
                    <div class="col-md-1">
                        <a href="{{  url('/admin/faq_service/create') }}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    @endpermission
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($faq_service) > 0)
                        <div align="center" class="col-md-12 table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="center">country</th>
                                    <th class="center">service</th>
                                    <th class="center">question EN</th>
                                    <th class="center">question AR</th>
                                    <th class="center">answer EN</th>
                                    <th class="center">answer AR</th>
                                    <th class="center">Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count=1; ?>
                                @foreach($faq_service as $muservice)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td class="center">{{ $muservice->country->name_en }}</td>
                                        <td class="center">{{ $muservice->service->name_en }}</td>
                                        <td class="center">{{ $muservice->question_en }}</td>
                                        <td class="center">{{ $muservice->question_ar }}</td>
                                        <td class="center">{{ $muservice->answer_en }}</td>
                                        <td class="center">{{ $muservice->answer_ar }}</td>
                                        <td class="center">
                                            @permission('faq-service-edit')
                                            <a href="{{ url('/admin/faq_service/edit/'.$muservice->id)}}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                            @endpermission
                                            @permission('faq-service-delete')
                                            <a href="{{url('admin/faq_service/delete/'.$muservice->id)}}" onclick="return confirm('Are you sure?')"> <i class="ace-icon fa fa-trash bigger-120 "></i></a>
                                            @endpermission
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty" align="center">There is no Faq Service to show</div>
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