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
        padding: 0.5rem 1rem;
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
        <div class="col-lg-9 col-md-9 p-0 pl-2">
            <div class="breadcrumb shadow border bg-white">
                <a href="/">  Dashboard </a>
                <p class="mb-0 px-2 mb-0">/</p>
                <p class="mb-0"> Resume Basket</p> 
            </div>
            

            <!-- applied job -->

            <div class="mt-2 border bg-white"> 
                <h6 class="px-3 py-2 mb-0 bg-white d-flex">
                    <i class="fa fa-list my-auto mr-2"></i>  
                    
                    <span class="my-auto small-text text-dark"> All Applicant List</span>  
                    <i class="  ml-auto my-auto fa fa-sort px-2 text-secondary"></i>
                    <select name="" class="form-control rounded col-2 px-2 my-auto" id="">
                        <option value=""> All </option>
                        <option value=""> Approved </option>
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
                                #
                            </th>
                            <th class="text-left text-dark">
                                Job Title
                            </th>
                            <th class="text-left text-dark">
                                Category
                            </th>
                            <th class="tdata-center text-left text-dark">
                                Post Date
                            </th>
                            <th class="tdata-center text-left text-dark">
                                End Date
                            </th>
                            <th class="tdata-center text-left text-dark">
                                View
                            </th>
                            <th class="tdata-center text-left text-dark">
                                Application
                            </th>
                            <th class="tdata-center text-left text-dark">
                                Status
                            </th>
                        </tr>
                        <tr> 
                            <td>1</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Pending
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>2</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Approved
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>3</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Blocked
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>4</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Rejected
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>5</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                               Shortlisted
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>6</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Pending
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>7</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Approved
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>8</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Blocked
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>9</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Rejected
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>10</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Pending
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>11</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Approved
                            </td>
                       
                           
                        </tr>

                        <tr> 
                            <td>12</td> 
                            <td>Web Developer</td>   
                            <td> Client Relation / PR </td>
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td> <button class="bg-info text-white"> <i class="fa fa-eye"></i> 202</button> </td>
                            <td class="tdata-center">
                               <a href="" class="text-info"><strong>[ 6 ]</strong> </a>
                            </td>
                            <td>
                                Approved
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
