@include('jobseeker.metatag')
@include('jobseeker.topnavbar')
@include('jobseeker.header')

<style>
    .cover * {
        font-family: 'Poppins', sans-serif !important;
    }

    .form-control,
    select {
        padding: 9px 20px !important;
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
    .inner-form{
        padding:20px 100px;
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
        .inner-form{
            padding:20px 30px;
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
                    <span> <i data-feather="database" class="p-1"></i> Training </span>
                </h6>
                <hr class="m-0">

                <form action="" class="personal-detail" >
                    <div class="inner-form">
                    <div class="row p-3 border">
                        <div class="col-md-12 d-flex">
                            <label for="" class="col-md-3 m-auto"> Training Name* </label>
                            <div class="input-group border  d-flex p-0">

                            <input type="text" class="form-control" placeholder="Eg: Computer Science">
                            </div>

                        </div>
                        <div class="col-md-12 d-flex my-3">
                            <label for="" class="col-md-3 m-auto pl-0"> Provider Agency* </label>
                            <div class="input-group border  d-flex p-0">
                            <input type="text" class="form-control" placeholder="Institute/Company">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-md-3 m-auto"> Date Attended* </label>
                            <div class="input-group border  d-flex p-0">
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex">
                            <label for="" class="col-md-3 m-auto pl-0"> Duration* </label>
                            <div class="input-group border  d-flex p-0">
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-12 mt-3 pass" id="pas">
                            <label for="" class="col-md-3 m-auto pl-0"> Description* </label>
                            <div class="input-group border  d-flex">
                                <textarea type="text" class="form-control"></textarea>
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
