@extends('dash.base')

@section('content')



<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
        <!--begin::Page title-->
        <div class="flex-grow-1 flex-shrink-0 me-5">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Foneping</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-3"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo6/dist/index.html" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Page title-->
        <!--begin::Action group-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin::Wrapper-->
            <div class="flex-shrink-0 me-2">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-bold fs-7 px-4 me-1"
                            data-bs-toggle="tab" href="#">Day</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4 me-1"
                            data-bs-toggle="tab" href="">Week</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4"
                            data-bs-toggle="tab" href="#">Year</a>
                    </li>
                </ul>
            </div>
            <!--end::Wrapper-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Daterangepicker-->
                <a href="#" class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2"
                    id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click"
                    data-bs-trigger="hover" title="Select dashboard daterange">
                    <span class="fw-bold me-1" id="kt_dashboard_daterangepicker_title">Range:</span>
                    <span class="fw-bolder" id="kt_dashboard_daterangepicker_date">January 12</span>
                </a>
                <!--end::Daterangepicker-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center">
                    <button type="button"
                        class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary"
                        data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                        <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z"
                                    fill="black" />
                                <rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)"
                                    fill="black" />
                                <rect x="7" y="13" width="10" height="2" rx="1" fill="black" />
                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Action group-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->







<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Sitemap-->
            <!--begin::Body-->

                <!--begin::Heading-->

                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row g-10 mb-15">
                    <!--begin::Col-->
                    <div class="col-sm-4">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-12">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                            fill="black" />
                                        <path
                                            d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5">$ 22</div>
                                <div class="fw-bold text-white">Balance left in your account</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widget 5-->




                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-sm-4">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-info hoverable card-xl-stretch mb-xl-12">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5">$ 22</div>
                                <div class="fw-bold text-white">Is used as of today</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widg -->



                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-sm-4">

                        <div class="card bg-white hoverable card-xl-stretch mb-xl-12">
                            <div class="card-body p-9">
                                <div class="fs-4 fw-bold text-gray-400 mb-7">Prefix & IP</div>
                                <div class="fs-6 d-flex justify-content-between mb-4">
                                    <div class="fw-bold">IP</div>
                                    <div class="d-flex fw-bolder">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr007.svg-->

                                        </span>
                                        <!--end::Svg Icon-->173.214.175.59
                                    </div>
                                </div>
                                <div class="separator separator-dashed"></div>
                                <div class="fs-6 d-flex justify-content-between my-4">
                                    <div class="fw-bold">Prefix</div>
                                    <div class="d-flex fw-bolder">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr006.svg-->

                                        <!--end::Svg Icon-->9891 (USA)
                                    </div>
                                </div>
                                <div class="separator separator-dashed"></div>
                                <div class="fs-6 d-flex justify-content-between mt-4">
                                    <div class="fw-bold">Your Default Prefix</div>
                                    <div class="d-flex fw-bolder">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr007.svg-->

                                        <!--end::Svg Icon-->$920
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->



            <!--end::Body-->

        <!--end::Sitemap-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->


@endsection
