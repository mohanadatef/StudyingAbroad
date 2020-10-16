@extends('includes.frontend.master_frontend')
@section('title')
    Certificates
@endsection
@section('content')
    <section id="program1-body-section" >

        <div class="certificate-body">
            <h2 class="certificate-title">{{ trans('lang.Educational_school_certificates') }}</h2>

            <div class="row row-nav">
                <!-- <div style="margin: auto"> -->
                <div class="col certificate-tab" id="1" onclick="certificateTab(this,'cert-table1');">
                    <div class="certificate-activeTab" >
                        <div>{{ trans('lang.National_Curriculum') }}</div>
                    </div>
                    <div class="certificate-nonactiveTab" style="display: none;">
                        <div class="program1-tab-title">{{ trans('lang.National_Curriculum') }}</div>
                    </div>
                </div>
                <div class="col certificate-tab" id="2" onclick="certificateTab(this,'cert-table2');">
                    <div class="certificate-activeTab" style="display: none;">
                        <div>{{ trans('lang.American_High_School') }}</div>
                    </div>
                    <div class="certificate-nonactiveTab">
                        <div class="program1-tab-title">{{ trans('lang.American_High_School') }}</div>
                    </div>
                </div>
                <div class="col certificate-tab" id="3" onclick="certificateTab(this,'cert-prag1');">
                    <div class="certificate-activeTab" style="display: none;">
                        <div>{{ trans('lang.GCE') }}</div>
                    </div>
                    <div class="certificate-nonactiveTab">
                        <div class="program1-tab-title">{{ trans('lang.GCE') }}</div>
                    </div>
                </div>
                <div class="col certificate-tab" id="4" onclick="certificateTab(this,'cert-prag2');">
                    <div class="certificate-activeTab" style="display: none;">
                        <div>{{ trans('lang.International_Baccalaureate') }}</div>
                    </div>
                    <div class="certificate-nonactiveTab">
                        <div class="program1-tab-title">{{ trans('lang.International_Baccalaureate') }}</div>
                    </div>
                </div>
            </div>

            <div class="row row-table cert-content-div" id="cert-table1">
                <div class="col table-border">
                    <div class="table-header">{{ trans('lang.Country') }}</div>
                    @foreach($national_curriculum as $nationalcurriculum)
                    <div class="item-margin">{{  language($nationalcurriculum->country_name_ar,$nationalcurriculum->country_name_en) }}</div>
                        @endforeach
                </div>
                <div class="col table-border-centered ">
                    <div class="table-header-centered">{{ trans('lang.Overall_High_School_Result') }}</div>
                    @foreach($national_curriculum as $nationalcurriculum)
                        <div class="item-margin">{{ $nationalcurriculum->result }}</div>
                    @endforeach
                </div>
                <div class="col table-border">
                    <div class="table-header">{{ trans('lang.School_Section') }}</div>
                    @foreach($national_curriculum as $nationalcurriculum)
                        <div class="item-margin">{{  language($nationalcurriculum->section_ar,$nationalcurriculum->section_en) }}</div>
                    @endforeach
                </div>
            </div>

            <div class="row row-table cert-content-div" style="display: none"  id="cert-table2">
                <div class="col table-border">
                    <div class="table-header">{{ trans('lang.Subjects') }}</div>
                    @foreach($american_high_school as $americanhighschool)
                        <div class="item-margin">{{  language($americanhighschool->subjects_ar,$americanhighschool->subjects_en) }}</div>
                    @endforeach
                </div>
                <div class="col table-border-centered ">
                    <div class="table-header-centered">{{ trans('lang.Units') }}</div>
                    @foreach($american_high_school as $americanhighschool)
                        <div class="item-margin">{{  language($americanhighschool->units_ar,$americanhighschool->units_en) }}</div>
                    @endforeach
                </div>
                <div class="col table-border">
                    <div class="table-header">{{ trans('lang.Information') }}</div>
                    @foreach($american_high_school as $americanhighschool)
                        <div class="item-margin">{{  language($americanhighschool->information_ar,$americanhighschool->information_en) }}</div>
                    @endforeach
                </div>
            </div>

            <div class="row row-parg cert-content-div"  style="display: none;margin: 0 !important" id="cert-prag1">
                <div class="row-prag-pad" style="margin: 0 !important">
                    <div class="certificate-prag-details">
                        {!! language($gce->description_ar,$gce->description_en) !!}
                    </div>
                </div>
            </div>


            <div class="row row-parg cert-content-div"  style="display: none;margin: 0 !important" id="cert-prag2">
                <div class="row-prag-pad" >
                    <div class="certificate-prag-details">
                        {!!  language($international_baccalaureate->description_ar,$international_baccalaureate->description_en) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-1')
    <script>
        selectItem("program");
    </script>
@endsection