<style>
        .form-control{
            font-size: .85rem!important;
            border-radius: 0
        }
        .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #ccc;
        border-color: #ccc;
        }
        .pagination *{
            font-size: 12px
        }

        .big-text{
        font-family: 'Lato';
        font-size: 22px;
        font-weight: 700;
    }
    .select2-container--default .select2-selection--multiple{
        border-color: unset;
        border-radius: 0!important;
        line-height: 1.4;
    }
    .select2-container--default .select2-selection--multiple{
        border:1px solid #d1d3e2!important
    }
    .small-text{
        font-family: 'Lato';
        font-size: 16px;
        font-weight: 700;
    }
    .semi-text{
        font-family: 'Lato';
        font-size: 18px;
        font-weight: 700;
    }
    .tiny-text{
        font-family: 'Lato';
        font-size: 14px;
        font-weight:500;
    }
    .small-text{
        font-family: 'Lato';
        font-size: 16px;
        font-weight: 700;
    }
    .weight-b{
        font-weight: 600;
        color: #555
    }
    label{
      
        margin-bottom: 2px!important
    }
    button{
        border:unset
    }
    .select2-container .select2-search--inline .select2-search__field {
        padding: 0 9px;
    }
    .text-dark{
            color:rgba(0,0,0,.9)!important
        }
</style>

<div id="home" class="container p-0 mb-5har">
    <!-- Page Heading
    <div class="text-uppercase align-items-center justify-content-between mt-3 mb-5 py-4">
        <h1 class="h3 text-gray-800 text-center">Welcome to Your Dashboard</h1>
    </div> -->
    <div class="row mt-4">
        <div class="col-md-3">
            @include('employer.pages.employersidebar')

        </div>


      <!-- Job Post -->
     
        <div class="col-md-9">
            <div class="shadow-sm mb-4">
            <div class="py-3 px-4 border-left border-right border-top  bg-white">
                <h4 class="semi-text mb-0 text-dark">Add Job</h4>
            </div>
            <div class="border px-3 py-2">
                <form action="">
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b" >Job Title*</label>
                            <input type="text" class="form-control" placeholder="Job post">
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">No Of Opening*</label>
                            <input type="text" class="form-control" placeholder="No Of Opening">
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Offered Salary*</label>
                            <input type="number" class="form-control" placeholder="Offered Salary">
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Job Category*</label>
                            <select type="text" class="form-control">
                                <option value="" disabled selected>Job Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Job Location*</label>
                            <select type="text" class="form-control">
                                <option value="" disabled selected>Job Location</option>
                            </select>
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Job Type*</label>
                            <select type="text" class="form-control">
                                <option value="" disabled selected>Job Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Job Level*</label>
                            <select type="text" class="form-control">
                                <option value="" disabled selected>Job Location</option>
                            </select>
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Job Post From*</label>
                            <input type="date" name="" class="form-control">
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Job Expire Date*</label>
                            <input type="date" class="form-control" > 
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Education Requirement*</label>
                            <select type="text" class="form-control">
                                <option value="" disabled selected>Job Location</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-12">
                            <label for="" class="weight-b">Skill*</label>
                            <select name="" id="skill-tag" class="col-md-12 px-3" multiple></select>
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <label for="" class="weight-b">Job Description*</label>
                        <div id="toolbar-container"></div>
                        <!-- This container will become the editable. -->
                        <div id="getnew" class="border bg-white" style="height:15vh">

                        </div>
                    </div>
                    <div class="col-md-12 mt-3"> 
                        <label for="" class="weight-b">Job Specification*</label>
                        <div id="toolbar-container0"></div>
                        <!-- This container will become the editable. -->
                        <div id="getnew0" class="border bg-white" style="height:15vh">

                        </div>
                    </div>
                    <div class="col-md-12 mt-3"> 
                        <span class="text-info">Please select your job posting options:</span> 
                        [You may select all, none, or any individual posting option.]
                    </div>
                    <div class="col-md-12 mt-3 px-4"> 
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Apply Online</label>
                        </div>            
                        <div class="py-2">
                            OR
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Direct Email</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3 "> 
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="apply_instruction" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Apply Instruction</label>
                        </div>
                        <div class="apply mt-2">
                            <div id="toolbar-container1"></div>
                            <!-- This container will become the editable. -->
                            <div id="getnew1" class="border bg-white" style="height:15vh">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3"> 
                        <div class="text-info">Please Check the box to provide jobseeker with given restriction while applying for the job.</div>
                        <div class="row m-0 mt-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Apply Instruction</label>
                            </div>
                            <div class="custom-control custom-checkbox ml-4">
                                <input type="checkbox" class="custom-control-input" name="" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Apply Instruction</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3"> 
                        <label for="" class="weight-b">Gender Restriction</label>
                        <div class="row m-0">        
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender_res" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender_res" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="gender_res" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">Both</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 my-3"> 
                        <hr>
                        <button class="btn btn-success w-100 py-1" style="border-radius: 0"><i class="fa fa-plus-circle"></i> Post Job</button>
                    </div>
                </form>
            </div>
            </div>
        </div>


    </div>

    
</div>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    // $('.apply *').hide();
    // $('input[name="apply_instruction"]').change(function () {
    //         if ($(this).is(':checked')) {
    //             $('.apply *').show();
    //             // $('input[name="end_date"]').val('')
    //         } else {    
    //             $('.apply *').css({'display':'none'});
              
    //         }
    //     })
</script>
