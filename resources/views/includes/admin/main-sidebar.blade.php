<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Left side column. contains the logo and sidebar -->
        <ul class="sidebar-menu" data-widget="tree">
            @permission('dashboard-show')
            <li><a href="{{ url('/admin') }}"><i class="fa fa-th"></i> <span>Dashboard</span></a></li>
            @endpermission
            @permission('setting-list')
            <li class="treeview">
                <a href="#"><i class="fa fa-dashboard"></i> <span>setting</span><span class="pull-right-container"><i class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('about-us-show')
                    <li><a href="{{ url('/admin/about_us') }}"><i class="fa fa-id-badge"></i><span>About US</span></a></li>
                    @endpermission
                    @permission('setting-show')
                    <li><a href="{{ url('/admin/setting') }}"><i class="fa fa-cogs"></i><span>Setting</span></a></li>
                    @endpermission
                    @permission('contact-us-show')
                    <li><a href="{{ url('/admin/contact_us') }}"><i class="fa fa-phone"></i><span>Contact Us</span></a></li>
                    @endpermission
                </ul>
            </li>
            @endpermission
            @permission('home-slider-list')
            <li class="treeview">
                <a href="#"><i class="fa fa-dashboard"></i> <span>Home slider</span><span class="pull-right-container"><i class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('home-slider-show')
                    <li><a href="{{ url('/admin/home_slider') }}"><i class="fa fa-sliders"></i><span>Home Slider</span></a></li>
                    @endpermission
                    @permission('home-slider-create')
                    <li><a href="{{ url('/admin/home_slider/create') }}"><i class="fa fa-sliders"></i><span>Add Home Slider</span></a></li>
                    @endpermission
                </ul>
            </li>
            @endpermission
            @permission('country-list')
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>Country</span><span class="pull-right-container"><i
                                class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
            @permission('country-show')
            <li class="treeview">
                <a href="#"><i class="fa fa-dashboard"></i> <span>Country</span><span class="pull-right-container"><i class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('country-show')
                    <li><a href="{{ url('/admin/country') }}"><i class="fa fa-car"></i><span>country</span></a></li>
                    @endpermission
                    @permission('country-create')
                    <li><a href="{{ url('/admin/country/create') }}"><i class="fa fa-car"></i><span>Add country</span></a></li>
                    @endpermission
                </ul>
            </li>
            @endpermission
            @permission('country-place-show')
            <li class="treeview">
                <a href="#"><i class="fa fa-dashboard"></i> <span>Country Place</span><span class="pull-right-container"><i class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('country-place-show')
                    <li><a href="{{ url('/admin/country_place') }}"><i class="fa fa-car"></i><span>country place</span></a></li>
                    @endpermission
                    @permission('country-place-create')
                    <li><a href="{{ url('/admin/country_place/create') }}"><i class="fa fa-car"></i><span>Add country place</span></a></li>
                    @endpermission
                </ul>
            </li>
            @endpermission
                </ul>
            </li>
            @endpermission
            @permission('service-list')
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>Service</span><span class="pull-right-container"><i
                                class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('service-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Service</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('service-show')
                            <li><a href="{{ url('/admin/service') }}"><i class="fa fa-group"></i><span>all service</span></a>
                            </li>
                            @endpermission
                            @permission('service-create')
                            <li><a href="{{ url('/admin/service/create') }}"><i
                                            class="fa fa-group"></i><span>Add service</span></a></li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    @permission('faq-service-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>faq service</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('faq-service-show')
                            <li><a href="{{ url('/admin/faq_service') }}"><i class="fa fa-at"></i><span>all faq service</span></a>
                            </li>
                            @endpermission
                            @permission('faq-service-create')
                            <li><a href="{{ url('/admin/faq_service/create') }}"><i class="fa fa-at"></i><span>Add faq service</span></a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    @permission('description-service-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>description service</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('description-service-show')
                            <li><a href="{{ url('/admin/description_service') }}"><i class="fa fa-at"></i><span>all description service</span></a>
                            </li>
                            @endpermission
                            @permission('description-service-create')
                            <li><a href="{{ url('/admin/description_service/create') }}"><i class="fa fa-at"></i><span>Add description service</span></a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission
            @permission('program-list')
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>Program</span><span class="pull-right-container"><i
                                class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('program-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Program</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('program-show')
                            <li><a href="{{ url('/admin/program') }}"><i class="fa fa-group"></i><span>all program</span></a>
                            </li>
                            @endpermission
                            @permission('program-create')
                            <li><a href="{{ url('/admin/program/create') }}"><i
                                            class="fa fa-group"></i><span>Add program</span></a></li>
                            @endpermission
                        </ul>
                    </li>
                    @permission('description-program-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>description program</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('description-program-show')
                            <li><a href="{{ url('/admin/description_program') }}"><i class="fa fa-at"></i><span>all description program</span></a>
                            </li>
                            @endpermission
                            @permission('description-program-create')
                            <li><a href="{{ url('/admin/description_program/create') }}"><i class="fa fa-at"></i><span>Add description program</span></a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    @endpermission
                </ul>
            </li>
            @endpermission
            @permission('requirement-certificates-list')
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>requirement & certificates</span><span class="pull-right-container"><i
                                class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('requirement-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>requirement</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('requirement-show')
                            <li><a href="{{ url('/admin/requirement') }}"><i class="fa fa-group"></i><span>all requirement</span></a>
                            </li>
                            @endpermission
                            @permission('requirement-create')
                            <li><a href="{{ url('/admin/requirement/create') }}"><i
                                            class="fa fa-group"></i><span>Add requirement</span></a></li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    @permission('certificates-list')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>certificates</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('national-curriculum-show')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> <span>national curriculum</span>
                                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                                </a>
                                <ul class="treeview-menu">
                                    @permission('national-curriculum-show')
                                    <li><a href="{{ url('/admin/national_curriculum') }}"><i class="fa fa-group"></i><span>all national curriculum</span></a>
                                    </li>
                                    @endpermission
                                    @permission('national-curriculum-create')
                                    <li><a href="{{ url('/admin/national_curriculum/create') }}"><i
                                                    class="fa fa-group"></i><span>Add national curriculum</span></a></li>
                                    @endpermission
                                </ul>
                            </li>
                            @endpermission
                            @permission('american-high-school-show')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> <span>American High School</span>
                                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                                </a>
                                <ul class="treeview-menu">
                                    @permission('american-high-school-show')
                                    <li><a href="{{ url('/admin/american_high_school') }}"><i class="fa fa-group"></i><span>all American High School</span></a>
                                    </li>
                                    @endpermission
                                    @permission('american-high-school-create')
                                    <li><a href="{{ url('/admin/american_high_school/create') }}"><i
                                                    class="fa fa-group"></i><span>Add American High School</span></a></li>
                                    @endpermission
                                </ul>
                            </li>
                            @endpermission
                            @permission('gce-show')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> <span>Gce</span>
                                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                                </a>
                                <ul class="treeview-menu">
                                    @permission('gce-show')
                                    <li><a href="{{ url('/admin/gce') }}"><i class="fa fa-group"></i><span>all Gce</span></a>
                                    </li>
                                    @endpermission
                                    @permission('gce-create')
                                    <li><a href="{{ url('/admin/gce/create') }}"><i
                                                    class="fa fa-group"></i><span>Add Gce</span></a></li>
                                    @endpermission
                                </ul>
                            </li>
                            @endpermission
                            @permission('international-baccalaureate-show')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> <span>International Baccalaureate</span>
                                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                                </a>
                                <ul class="treeview-menu">
                                    @permission('international-baccalaureate-show')
                                    <li><a href="{{ url('/admin/international_baccalaureate') }}"><i class="fa fa-group"></i><span>all International Baccalaureate</span></a>
                                    </li>
                                    @endpermission
                                    @permission('international-baccalaureate-create')
                                    <li><a href="{{ url('/admin/international_baccalaureate/create') }}"><i
                                                    class="fa fa-group"></i><span>Add International Baccalaureate</span></a></li>
                                    @endpermission
                                </ul>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission
            @permission('user-list')
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>User</span><span class="pull-right-container"><i
                                class="fa fa-angle-right pull-left"></i></span></a>
                <ul class="treeview-menu">
                    @permission('user-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>User</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('user-show')
                            <li><a href="{{ url('/admin/user') }}"><i class="fa fa-group"></i><span>all User</span></a>
                            </li>
                            @endpermission
                            @permission('user-create')
                            <li><a href="{{ url('/admin/user/create') }}"><i
                                            class="fa fa-group"></i><span>Add User</span></a></li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    @permission('role-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Role</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('role-show')
                            <li><a href="{{ url('/admin/role') }}"><i class="fa fa-at"></i><span>all Role</span></a>
                            </li>
                            @endpermission
                            @permission('role-create')
                            <li><a href="{{ url('/admin/role/create') }}"><i class="fa fa-at"></i><span>Add Role</span></a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    @permission('permission-show')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Permission</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('permission-show')
                            <li><a href="{{ url('/admin/permission') }}"><i class="fa fa-group"></i><span>all Permission</span></a>
                            </li>
                            @endpermission
                            @permission('permission-create')
                            <li><a href="{{ url('/admin/permission/create') }}"><i
                                            class="fa fa-group"></i><span>Add Permission</span></a></li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission
            @permission('book-show')
            <li><a href="{{ url('/admin/book') }}"><i class="fa fa-paper-plane"></i> <span>book Request</span></a></li>
            @endpermission
            @permission('call-us-show')
            <li><a href="{{ url('/admin/call_us') }}"><i class="fa fa-phone"></i> <span>call Request</span></a></li>
            @endpermission
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@yield('main-sidebar')
