@include('jobseeker.metatag')
@include('jobseeker.topnavbar')
@include('jobseeker.header')

<style>
    .cover * {
        font-family: 'Poppins', sans-serif !important;
    }

    .form-control,
    select {
        padding: 9px 12px !important;
        border: none;
        border-radius: .35rem !important;
        /* background: #f8f9fa!important; */

        font-size: 14px;
        /* background: transparent!important */
    }

    .see-password {
        border-radius: 0 .25rem .25rem 0;
    }

    .input-group {
        background: #fff;
    }

    .gmail {
        background: #C13C2D !important;
        border-color: #C13C2D;
    }

    .linked {
        background: #0073b1 !important;
        border-color: #0073b1;
    }

    .facebook {
        background: #4267b2 !important;
        border-color: #4267b2;
    }

    .cover {
        width: 100%;
        max-width: 570px;
        margin: auto;
    }
</style>
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
        color: #444
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

    .border {
        border: 1px solid rgba(0, 0, 0, .125) !important;
    }

    .form-control:focus {
        border-radius: 0 !important;
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, .25);
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

    .personal-detail label {
        text-align: right
    }
    .per{
        display: flex
    }
    .pass{
        display: flex
    }

    @media screen and (max-width:800px) {
        .side-bar {
            padding-right: 0 !important
        }
    }
    @media only screen and (max-width:768px){
        .social-icons li{
            margin-top:0.25rem;
        }
    }
</style>
<section class="jobseekerdashboard bg-light">


    <div class="container px-1  main-body">

        <div class="row p-0 m-0">


            @include('jobseeker.profilesidebar')



            <div class="col-md-9 p-0 border bg-white">

                <!-- <div class="border bg-white  mb-3 p-3 d-flex mb-4 position-relative hide">
                    <span class="position-absolute warning">
                        <p class="ml-4">&times;</p>
                    </span>
                    <p class="text-warning info"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam error
                        asperiores corrupti eos? Incidunt vero . </p>
                    <button class="btn btn-sm btn-light border mr-3"><i class="fa fa-user"></i> Complete
                        Profile</button>
                </div> -->

                <h6 class="px-3 mb-0 py-2 d-flex">
                    <span> <i data-feather="user-check" class="p-1"></i> Experience </span>
                </h6>
                <hr class="m-0">

                <form action="" class="personal-detail form" >
                    <div style="padding:20px 100px" class="inner-form">
                    <div class="row p-3 border">
                        <div class="col-md-12 d-flex">
                            <label for="" class="col-3 m-auto"> Company* </label>
                            <div class="input-group border  d-flex p-0">
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-12 d-flex my-3">
                            <label for="" class="col-3 m-auto pl-0"> Job Title* </label>
                            <div class="input-group border  d-flex p-0">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto"> Job Level* </label>
                            <div class="input-group border  d-flex p-0">
                            <select class="form-control" name="job_level"> <option value="">Select*</option> <option value="0" selected="">Entry Level</option> <option value="1">Mid Level</option> <option value="2">Senior Level</option> <option value="3">Top Level</option> <option value="4">Mid/Senior Level</option> </select>
                            </div>
                        </div>
     
                        <div class="col-md-12 d-flex ">
                            <label for="" class="col-3 m-auto pl-0"> Running* </label>
                            <div class="input-group border  d-flex px-3 py-2">
                                <div class="custom-control custom-checkbox mr-3 my-auto">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation2" name="running" required>
                                    <label class="custom-control-label" for="customControlValidation2">Running</label>
                                </div> 
                            </div>
                        </div>
                       
                        <div class="col-md-12 mt-3 per">
                            <label for="" class="col-3 m-auto pl-0"> Enrolled Year </label>
                            <div class="input-group border d-flex">            
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 pass" id="pas">
                            <label for="" class="col-3 m-auto pl-0"> Passed Year </label>
                            <div class="input-group border  d-flex">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 pass" id="pas">
                            <label for="" class="col-3 m-auto pl-0"> Description </label>
                            <div class="input-group border d-flex">
                                <textarea type="date" class="form-control"></textarea>
                            </div>
                        </div>
                    
                    </div>
                       

             
             
                </div>
                <hr class="mb-0">
                <div class="text-center">
                <button class="btn border btn-info btn-sm mt-4 mb-4"><i class="fa fa-save"></i> Submit</button>
                <button class="btn border bg-light btn-sm mt-4 mb-4">&times; Cancel</button>
                </div>
                 
                </form>

        
            </div>

        </div>
    </div>





</section>



@include('jobseeker.footer')
<script>
    $(function () {
   
        // $('.warning').click(function () {

        //     $('.hide').remove()
        // })

        $('input[type="checkbox"]').change(function () {
            if ($(this).is(':checked')) {
                $('#per').hide();
                $('#pas').hide();
                
                // $('input[name="end_date"]').val('')
            } else {    
                $('#per').css({'display':'flex'});
                $('#pas').css({'display':'flex'});
            }
        })

    })
</script>
<script>
    feather.replace()
</script>
