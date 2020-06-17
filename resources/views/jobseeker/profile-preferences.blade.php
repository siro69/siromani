@include('jobseeker.metatag')
@include('jobseeker.topnavbar')
@include('jobseeker.header')
<style>
    .skill-inner {
        line-height: 3
    }

    .tab-content {
        background: #fff
    }

    .delete-applied {
        right: 0
    }

    table tr td:nth-child(2) {
        font-size: 13px
    }

    table tr td:nth-child(1) {
        color: #444;
        font-weight: 500;
    }

    .per-det table td{
        padding: 12px 17px!important;
    }
     .rating {
        color: #ec7c03
    }

    .bg-kumari {
        background: #ec7c03 !important
    }

    .text-kumari {
        color: #ec7c03
    }

    .exp table td,
    .edu table td {
        padding: 4px !important
    }

    .info {
        font-size: 13px
    }

    .warning {
        right: 7px;
        top: 0
    }

    body {
        background: #f8f9fa !important
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #ccc;
        border-color: #ccc;
    }
    .table-left{
        width:200px;
        padding:0 15px!important;
    }

    @media screen and (max-width:800px) {
        .side-bar {
            padding-right: 0 !important
        }

    }
    @media only screen and (max-width:420px){
        .btn{
            font-size:11px;
        }
        .table-left{
            width:120px;
        }
    }
    @media only screen and (max-width:768px){
        .social-icons li{
            margin-top:0.25rem;
        }
    }
</style>
<section class="jobseekerdashboard bg-light" id="profile-preference">


        <div class="container px-1  main-body">
   
        <!-- prieview profile -->
            @include('jobseeker.preview-profile')

        <div class="row p-0 m-0 mt-3">

            <!-- profile sidebar -->
            @include('jobseeker.profilesidebar')


            <div class="col-md-9 p-0">
                <!-- warning page -->
        @include('jobseeker.profileCompleteWarning')

<!-- jobseeker preferences table -->
                @include('jobseeker.profile.jobpreferences')

</div>
</div>
</section>



@include('jobseeker.footer')
<script>
$(function () {
$('.warning').click(function () {

$('.hide').remove()
})
})
</script>
