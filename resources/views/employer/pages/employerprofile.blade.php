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
    .dropzone .dz-button{
        width:100%;
        height: 40px
    }
    .border,.border-top,.border-left,.border-right{
        border:1px solid rgba(0,0,0,.125)!important
    }
</style>

<div id="home" class="container p-0 mb-5har">
    <!-- Page Heading
    <div class="text-uppercase align-items-center justify-content-between mt-3 mb-5 py-4">
        <h1 class="h3 text-gray-800 text-center">Welcome to Your Dashboard</h1>
    </div> -->
    <div class="row mt-4">
        <div class="col-md-">
            @include('employer.pages.employersidebar')

        </div>


      <!-- Job Post -->
     
        <div class="col-md-9">
            <div class="shadow mb-4">
            <div class="py-3 px-4 border-left border-right border-top  bg-white">
                <h4 class="semi-text mb-0">Update Profile Detail</h4>
            </div>
            <div class="border px-3 py-2">
                <form action="">
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b" >Company Name*</label>
                            <input type="text" class="form-control" placeholder="">
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Company Nature*</label>
                            <select name="" class="form-control" id=""></select>
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Company Address*</label>
                            <input type="text" class="form-control" placeholder="">
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Contact Person Name*</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Office Contact*</label>
                            <input type="number" class="form-control" placeholder="">
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Mobile Number*</label>
                            <input type="number" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Company Type*</label>
                            <select type="text" class="form-control">
                                <option value="" disabled selected>Job Location</option>
                            </select>
                         
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Total Employee*</label>
                            <select type="text" class="form-control">
                                <option value="" disabled selected>Job Location</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-0 mb-3">
                        <div class="col-md-6">
                            <label for="" class="weight-b">Website*</label>
                            <input type="text" placeholder="www.domain.com" class="form-control" > 
                        </div>
                        <div class="col-md-6">
                            <label for="" class="weight-b">Fax Number*</label>
                            <input type="number" class="form-control"> 
                        </div>
                    </div>

                    <div class="col-md-12"> 
                        <label for="" class="weight-b">Description</label>
                        <div id="toolbar-container"></div>
                        <!-- This container will become the editable. -->
                        <div id="getnew" class="border bg-white" style="height:40vh">

                        </div>
                    </div>

                    <div class="col-md-12 mt-3"> 
                        <div action="/upload-target" class="dropzone"></div>
                    </div>
                  
                
                    
                    <div class="col-md-12 my-3"> 
                        <hr>
                        <button class="btn btn-success w-100 py-1" style="border-radius: 0"><i class="fa fa-plus-circle"></i> Update Profile</button>
                    </div>
                    
                </form>
            </div>
            </div>
        </div>


    </div>

    
</div>
<!-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> -->
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
    $('.dz-button').text('Upload Your Logo')
</script>
