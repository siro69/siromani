
@include('jobseeker.metatag')
@include('jobseeker.topnavbar')
@include('jobseeker.header')

    <style>
    .cover *{
    font-family: 'Poppins', sans-serif !important;
    }
    .form-control{
        border:none;
        border-radius: .35rem!important;
        background: transparent!important
    }
    .see-password{
    border-radius: 0 .25rem .25rem 0;
    }
    .input-group{
        background: #fff;
    }
    .gmail{
        background: #C13C2D!important;
        border-color: #C13C2D;
    }
    .linked{
        background: #0073b1!important;
        border-color: #0073b1; 
    }
    .facebook{
        background: #4267b2!important;
        border-color: #4267b2; 
    }
    .cover{
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

    table tr td:nth-child(1){
        color:#444
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
    .exp table td, .edu table td{
        padding: 4px!important
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


            
            <div class="col-md-9">

                <!-- <div class="border bg-white rounded mb-3 p-3 d-flex mb-4 position-relative hide">
                    <span class="position-absolute warning">
                        <p class="ml-4">&times;</p>
                    </span>
                    <p class="text-warning info"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam error
                        asperiores corrupti eos? Incidunt vero . </p>
                    <button class="btn btn-sm btn-light border mr-3"><i class="fa fa-user"></i> Complete
                        Profile</button>
                </div> -->

                <h5 class=" d-flex"> 
                    <span></i>Education </span>    
                </h5>
                <hr>

                <form action="">
                        <div>
                            <label for="">Education Title </label>
                            <div class="input-group border rounded d-flex">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="">School/College </label>
                            <div class="input-group border rounded d-flex">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>

                        <div class="row">
                        <div class="mt-3 col-md-6">
                            <label for="">Start Date </label>
                            <div class="input-group border rounded d-flex">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <input type="date" class="form-control" name="">
                            </div>
                        </div>  
                        <div class="mt-3 col-md-6 enddate">
                            <label for="">End Date </label>
                            <div class="input-group border rounded d-flex">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <input type="date" class="form-control" name="">
                            </div>
                        </div> 
                        </div>
                        <div class="custom-control custom-checkbox my-1 mt-3 mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Still Runnning</label>
                        </div>
                        <div class="mt-3">
                            <label for="">Description </label>
                            <div class="input-group border rounded d-flex">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <textarea type="text" class="form-control" name=""></textarea>
                            </div>
                        </div>
                    
                       

                        <button class="btn btn-primary btn-sm mt-4">Submit</button>
            </div>

        </div>
    </div>
           

         


</section>



@include('jobseeker.footer')
<script>
    $(function(){
        $('.warning').click(function(){
           
            $('.hide').remove()
        })

        $('input[type="checkbox"]').change(function () {
            if ($(this).is(':checked')) {
                $('.enddate').hide()
                $('input[name="end_date"]').val('')
            } else {
                $('.enddate').show()
            }
        })

    })

    
</script>
<script>
      feather.replace()
</script>
