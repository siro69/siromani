
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
    @media (width:320px){
        .input-name{
            flex-wrap:wrap;
        }
        .input-content{
            margin-top:0.25rem;
        }
    }
</style>
<section class="jobseekerdashboard bg-light">


    <div class="container px-1  main-body">

        <div class="row p-0 m-0">


            @include('jobseeker.profilesidebar')
            <div class="col-md-9 p-0 border bg-white">
      
                <h6 class="px-3 mb-0 py-2 d-flex">
                    <span> <i data-feather="file-text" class="p-1"></i> Basic Information </span>
                </h6>
                <hr class="m-0">

                <form action="" class="personal-detail form">
                    <div style="padding:20px 100px" class="inner-form">
                    <div class="row p-3 border">
                        <div class="col-md-12 d-flex">
                            <label for="" class="col-3 m-auto"> Full Name </label>
                            <div class="input-name d-flex">
                                <div class="input-group border  d-flex mr-2 p-0 input-content">

                                    <input type="text" class="form-control" name="" placeholder="First Name*">
                                </div>
                                <div class="input-group border  d-flex mr-2 p-0 input-content">

                                    <input type="text" class="form-control" name="" placeholder="Middle Name">
                                </div>
                                <div class="input-group border  d-flex  p-0 input-content">

                                    <input type="text" class="form-control" name="" placeholder="Last Name*">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex my-3">
                            <label for="" class="col-3 m-auto"> Date Of Birth* </label>
                            <div class="input-group border  d-flex col-md-9 p-0">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto"> Gender* </label>
                            <div class="input-group border  d-flex col-md-9 p-0">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <select type="text" class="form-control" name="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto"> Marital Status* </label>
                            <div class="input-group border  d-flex col-md-9 p-0">
                                <!-- <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div> -->
                                <select type="text" class="form-control" name="">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <!-- <option value="Others">Divorced</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex">
                            <label for="" class="col-3 m-auto pl-0"> Contact Information </label>
                            <div class="input-name d-flex">
                                <div class="input-group border  d-flex mr-2 p-0 input-content">

                                    <input type="number" class="form-control" name="" placeholder="Mobile Number">
                                </div>
                                <div class="input-group border  d-flex p-0 input-content">

                                    <input type="number" class="form-control" name="" placeholder="Telephone Number">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 d-flex my-3">
                            <label for="" class="col-3 m-auto"> Address </label>
                            <div class="input-name d-flex">
                                <div class="input-group border  d-flex mr-2 p-0 input-content">

                                    <input type="text" class="form-control" name="" placeholder="Current Address">
                                </div>
                                <div class="input-group border  d-flex p-0 input-content">

                                    <input type="text" class="form-control" name="" placeholder="Permanent Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto"> Provience </label>
                            <div class="input-group border  d-flex mr-2 p-0">

                                <select type="text" class="form-control" name="" placeholder="Current Address">
                                    <option value="Provience 1">Provience 1</option>
                                    <option value="Provience 2">Provience 2</option>
                                    <option value="Provience 3">Provience 3</option>
                                    <option value="Provience 4">Provience 4</option>
                                    <option value="Provience 5">Provience 5</option>
                                </select>
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
        $('.warning').click(function () {

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
