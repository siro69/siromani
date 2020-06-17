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
        font-size:0.72rem;
        font-weight:500;
        color:#002a5b;
    }
    .delete-applied:hover{
        text-decoration: underline;
        color:#002a5b;
    }

    table tr td:nth-child(2) {
        font-size: 13px
    }

    table tr td:nth-child(1) {
        color: #444;
        font-weight: 500;
    }

    .per-det table td{
        padding: 9px 17px!important;
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
    .size{
        font-size:0.95rem;    
    }
    .describe{
        font-size: 0.82rem;
        font-weight:500;
    }
    @media (width:768px){
        
        table td,table tr td:nth-child(2){
            font-size:11px;
        }
        .extra-padding{
            padding:0.5rem!important;
        }
        .delete-applied{
            right:-5px;
        }
    }
    @media only screen and (max-width:420px){
        .btn{
            font-size:11px;
        }
    }
    @media only screen and (max-width:768px){
        .social-icons li{
            margin-top:0.25rem;
        }
    }

    @media screen and (max-width:800px) {
        .side-bar {
            padding-right: 0 !important
        }
    }
</style>
<section class="jobseekerdashboard bg-light">


        <div class="container px-1  main-body">
          <!-- prieview profile -->
            @include('jobseeker.preview-profile')

        <div class="row p-0 m-0 mt-3">


            @include('jobseeker.profilesidebar')

            <div class="col-md-9 p-0">
<!-- 
                <div class="border bg-white mb-3 p-3 d-flex position-relative hide">
                    <span class="position-absolute warning">
                        <p class="ml-4">&times;</p>
                    </span>
                    <p class="text-warning info"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam error
                        asperiores corrupti eos? Incidunt vero . </p>
                    <button class="btn btn-sm btn-light border mr-3"><i class="fa fa-user"></i> Complete
                        Profile</button>
                </div> -->


                @include('jobseeker.profile.training')


                <div class="row p-0 m-0 mt-3 border p-3">


                </div>


            </div>

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
