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
                }
                @media only screen and (max-width:768px){
                    .social-icons li{
                        margin-top:0.25rem;
                    }
                }
                @media only screen and (max-width:420px){
                    .btn{
                        font-size:11px;
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




                 @include('jobseeker.profile.experience')


         


                <!-- recommendate job -->
                <!-- <h5 class=" mt-3"> Recommended Job</h5>
                <hr>


                <div class="row p-0 m-0">
                    <div class="col-md-6 px-1 my-1">
                        <div class="border p-3 bg-white rounded ">
                            <div class=" d-flex">
                                <div class="logo">
                                    <img src="./images/kumarijob.png" width="90" alt="">
                                </div>
                                <div class="pl-3">
                                    <div style="line-height: 1">
                                        <h6 class="mb-0"><strong>Job title</strong> </h6>
                                        <i class="mt-0" style="line-height: 1;font-size:13px">Company Name</i>
                                    </div>
                                    <p class="mt-0 mt-2" style="line-height: 1;font-size:12px">Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Placeat facilis natus numquam, error eius
                                        sequi qui possimus </p>
                                    <div class="mt-2" style="line-height: 1;font-size:12px"> Deadline: 2019-2-21</div>
                                    <button class="btn btn-light border btn-sm mt-2"><i class="fa fa-envelope"></i>
                                        Apply</button>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 px-1 my-1">
                        <div class="border p-3 bg-white rounded">
                            <div class=" d-flex">
                                <div class="logo">
                                    <img src="./images/kumarijob.png" width="90" alt="">
                                </div>
                                <div class="pl-3">
                                    <div style="line-height: 1">
                                        <h6 class="mb-0"><strong>Job title</strong> </h6>
                                        <i class="mt-0" style="line-height: 1;font-size:13px">Company Name</i>
                                    </div>
                                    <p class="mt-0 mt-2" style="line-height: 1;font-size:12px">Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Placeat facilis natus numquam, error eius
                                        sequi qui possimus </p>
                                    <div class="mt-2" style="line-height: 1;font-size:12px"> Deadline: 2019-2-21</div>
                                    <button class="btn btn-light border btn-sm mt-2"><i class="fa fa-envelope"></i>
                                        Apply</button>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="mt-3">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> -->
                <!-- end recommendate job -->

         
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
