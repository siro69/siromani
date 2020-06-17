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
        .table td, .table th {
            padding: 0.5rem 0.8rem;
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
            <div class="col-md-9 p-0 pl-2">
                <div class="breadcrumb  bg-light mb-0">
                    <a href="">  Dashboard </a>
                    <p class="mb-0 px-2 mb-0">/</p>
                    <p class="mb-0"> Applied-Job</p> 
                    <p class="mb-0 px-2 mb-0">/</p>
                    <p class="mb-0"> Job Title</p> 
                </div>
                <hr class="my-0">

                <!-- applied job -->
                <div class="pt-2 mt-2">
                    <h6 class="bg-white small-text border-top border-right border-left px-3 mb-0 py-2"><i class="fa fa-search"></i><span class="px-1 text-dark">Search For Candidate</span> </h6>
                    <div class="border bg-light d-flex p-3 mt-0">
                        <input type="text" class="form-control col-4">
                        <input type="text" class="form-control col-4 mx-3">
                        <button class="bg-info mr-auto text-white px-3"> <i class="fa fa-search text-white"></i>    Search</button>
                    </div>
                </div>
                <div class="mt-2 border bg-white"> 
                    <h6 class="px-3 py-2 mb-0 bg-white d-flex">
                        <i class="fa fa-check-circle my-auto mr-1"></i>  
                        
                        <span class="my-auto small-text text-dark"> Applied Jobs</span>  
                        <i class="  ml-auto my-auto fa fa-sort px-2 text-secondary"></i>
                        <select name="" class="form-control rounded col-2 px-2 my-auto" id="">
                            <option value=""> All </option>
                            <option value=""> Pending </option>
                            <option value=""> Rejected </option>
                            <option value=""> Shortlisted </option>
                            <option value=""> Blocked </option>
                        </select>
                    </h6>

                    <div class="row p-0 m-0 bg-white border-bottom">
                        <div class="table-responsive">
                            <table class="table mb-0  table-hover table-striped recommend px-2"> 
                                <tr>
                                    <th class="text-left text-dark">
                                        Name
                                    </th>
                                    <th class="text-left text-dark">
                                        Resume
                                    </th>
                                    <th class="text-left text-dark">
                                        Expected Salary
                                    </th>
                                    <th class="text-left text-dark">
                                        Applied Date
                                    </th>
                                    <th class="text-left text-dark">
                                        Type
                                    </th>
                                    <th class="text-left text-dark">
                                        Comment
                                    </th>
                                    <th class="text-left text-dark">
                                        Action
                                    </th>
                                    <th class="text-left text-dark">
                                    Status
                                    </th>
                                </tr>
                                <tr> 
                                    <td>Web Developer</td>   
                                    <td>   <a href="" class="text-info">[ <i class="fa fa-file-word"> <i class="fa fa-download"></i></i> ] </a> 
                                    <a href="" class="text-info">[ <i class="fa fa-file-word"> <i class="fa fa-eye"></i></i> ] </a>  
                                    </td>
                                    <td>Below 10,000</td>
                                    <td>3/6/2020</td>
                                    <td> Full Time</td>
                                    <td>
                                        <a href="" class="text-info"><i class="fa fa-comment-dots"></i></a>  </td>
                                    <td> <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle bg-light border text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px">
                                        Action
                                    </button>
                                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item px-2" href="#">Pending</a>
                                        <a class="dropdown-item px-2" href="#">Shortlisted</a>
                                        <a class="dropdown-item px-2" href="#">Rejected</a>
                                        <a class="dropdown-item px-2" href="#">Blocked</a>
                                    </div>
                                    </div></td>
                                    <td class="px-2">
                                        <button class="bg-warning rounded text-white">pending</button> 
                                    </td>
                                </tr>
                            
                            
                            
                            
                            </table>
                        </div>
                    </div>
            
                    </div>

                    <!-- end active job -->
            
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
