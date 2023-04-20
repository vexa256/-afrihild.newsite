@include('c_header.header')
@include('c_body.body')

<!--all code above here is in header--->
@include('c_sidebar.sidebar')
<!--end::Aside-->
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    @include('c_nav.nav')
    <!--end::Header-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->

        @include('c_nav.toolbar')
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-fluid">

                @isset($Page)
                    @include($Page)
                @endisset

            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
    @include('c_footer.footer')
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>


@include('c_scroll.scrolltop')
@include('c_scripts.scripts')
