<style>
    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #ccc;
        border-color: #ccc;
        }
    .pagination *{
            font-size: 12px
        }
    table td,table th{
        color:#262525!important
    }
    .big-text{
        font-family: 'Lato';
        font-size: 22px;
        font-weight: 700;
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
    button{
        border:unset
    }
    .border{
        border:1px solid rgba(0,0,0,.125)!important
    }
    .border-top{
        border-top:1px solid rgba(0,0,0,.125)!important
    }
    .border-left{
        border-left:1px solid rgba(0,0,0,.125)!important
    }
    .border-right{
        border-right:1px solid rgba(0,0,0,.125)!important 
    }
    .border-bottom-new{
        border-bottom:3px solid #777!important 
    }
    @media only screen and (max-width:420px){
        .job-type,.search-candi{
            flex-wrap:wrap;
        }
        .col-auto{
            margin-top:-6%!important;
        }
        
    }
</style>

<div id="home" class="container p-0 mb-5har">
    <!-- Page Heading
    <div class="text-uppercase align-items-center justify-content-between mt-3 mb-5 py-4">
        <h1 class="h3 text-gray-800 text-center">Welcome to Your Dashboard</h1>
    </div> -->
    <div class="row mt-5">
        <div class="col-md-3">
            @include('employer.pages.employersidebar')

        </div>
    <!-- Job details -->
    <div class="col-md-9">
    <div class="first-cards">
        <div class="row">
            <div class="col-xl-3 col-md-3 primary">
                <div class="card border-top-primary shadow-sm h-100 py-2">
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                    <div class="card-body py-2 px-2">
                        <div class="col p-0 mr-2 text-center">
                            <div class="text-md font-weight-bold text-primary text-uppercase">Posted Jobs
                            </div>
                            <div class="h5 mb-0 mt-1 font-weight-bold text-gray-800">20
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  (views)  -->
            <div class="col-xl-3 col-md-3 danger">
                <div class="card border-top-danger shadow-sm h-100 py-2">
                    <div class="col-auto">
                        <i class="fas fa-eye fa-2x text-gray-300"></i>
                    </div>
                    <div class="card-body py-2 px-2">
                        <div class="col p-0 mr-2 text-center">
                            <div class="text-md text-center font-weight-bold text-danger text-uppercase">Total views
                            </div>
                            <div class="h5 mb-0 mt-1 font-weight-bold text-gray-800">4567
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- applicant -->
            <div class="col-xl-3 col-md-3 success">
                <div class="card border-top-success shadow-sm h-100 py-2">
                    <div class="col-auto applicants">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                    <div class="card-body py-2 px-2">
                        <div class="col p-0 mr-2 text-center">
                            <div class="text-md text-center font-weight-bold text-success text-uppercase">Total Applicants
                            </div>
                            <div class="h5 mb-0 mt-1 font-weight-bold text-gray-800">30
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-3 warning">
                <div class="card border-top-warning shadow-sm h-100 py-2">
                    <div class="col-auto resume-sts">
                        <i class="far fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                    <div class="card-body py-2 px-2">
                        <div class="col p-0 mr-2 text-center">
                            <div class="text-md font-weight-bold text-warning text-uppercase">Resume Status
                            </div>
                            <div class="row">
                                <div class="col-md-6 p-0">
                                    <span><i class="fa fa-check text-success"></i></span>
                                    <span class="font-weight-bold text-gray-800">10</span>
                                </div>
                                <div class="col-md-6 p-0">
                                    <span><i class="fa fa-times text-danger"></i> </span>
                                    <span class="font-weight-bold text-gray-800">15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service post a job -->

    <div class="mt-4 border bg-white p-3">
        <div class="text-center">
           <h5 class="big-text semi-text text-dark">Post A Job</h5>
        </div>
        <div class="d-flex job-type mt-3">
            <a href="" class="flex-fill "><button class="bg-white shadow w-100 py-3"><i class="fa fa-gem text-warning"></i>  Premium Jobs Service</button></a>
           <a href="" class="flex-fill "> <button class="bg-white shadow w-100 py-3"><i class="fa fa-fire text-danger"></i> Hot Jobs Service</button></a>
           <a href="" class="flex-fill "> <button class="bg-white shadow w-100 py-3"><i class="fa fa-bell text-info"></i> Feature Jobs Service</button></a>
        </div>
    </div>

    <!-- search by -->
    <div class="bg-white border p-3 mt-4">
        <p class="text-center semi-text text-dark">Search Candidate</p>
        <div class="d-flex search-candi justify-content-center">
            <div class="flex-fill form-group has-search position-relative">
                <span class="fas fa-briefcase form-control-feedback text-dark"></span>
                <input type="text" class="form-control bg-light" placeholder="Skill, Candidate name, Designation">
            </div>
            <div class="mx-3 flex-fill form-group has-search position-relative">
                <span class="fas fa-location-arrow form-control-feedback text-dark"></span>
                <input type="text" class="form-control bg-light" placeholder="Location">
            </div>
            <div class=" form-group">
                <input type="submit" class="btn btn-find btn-info text-dark" value="Find Resume">
            </div>
        </div>
    </div>


      <!-- Active job -->
      <div class="mt-4 border bg-white "> 
                <h6 class="p-3 mb-0 bg-white d-flex">
                    <i class="fa fa-check-circle my-auto mr-1"></i>  
                    
                    <span class="mt-auto small-text text-dark"> Active Jobs</span>  
                   <a href="" class=" ml-auto"><span class="text-dark">View all(10)</span></a> 
                </h6>

                <div class="row p-0 m-0 bg-white border-bottom">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover table-striped recommend px-2"> 
                        <tr>
                            <th class="text-left text-dark">
                                Title
                            </th>
                            <th class="text-left text-dark">
                                Created At
                            </th>
                            <th class="text-left text-dark">
                                Deadline
                            </th>
                            <th class="text-left text-dark">
                                Status
                            </th>
                            <th class="text-left text-dark">
                                <i class="fa fa-sliders-h"></i>
                            </th>
                        </tr>
                        <tr> 
                            <td>Web Developer </td>   
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td>Pending</td>
                            <td class="px-2">
                                
                            <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle bg-light border text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">View Job</a>
                                <a class="dropdown-item" href="#">Edit Job</a>
                            </div>
                            </div>
                            </td>
                        </tr>
                      
                    
                       
                      
                    </table>
                </div>
                </div>
                <div class="px-3 mt-2">
                    <nav aria-label="...">
                    <ul class="pagination mb-2">
                        <li class="page-item disabled">
                        <span class="page-link"><</span>
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
                        <a class="page-link" href="#">></a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>

                 <!-- end active job -->
      <!-- Active job -->
      <div class="mt-4 border bg-white "> 
                <h6 class="p-3 mb-0 bg-white border-bottom d-flex">
                    <i class="fa fa-check-circle my-auto mr-1"></i>  
                    
                    <span class="mt-auto small-text text-dark"> Active Jobs</span>  
                   <a href="" class=" ml-auto"><span class="text-dark">View all(10)</span></a> 
                </h6>

          @include('employer.pages.warningpostjob')

                
                <div class="px-3 mt-2">
                    <nav aria-label="...">
                    <ul class="pagination mb-2">
                        <li class="page-item disabled">
                        <span class="page-link"><</span>
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
                        <a class="page-link" href="#">></a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>

                 <!-- end active job -->
      <!-- Draft job -->
      <div class="mt-4 border bg-white"> 
                <h6 class="p-3 mb-0 bg-white d-flex">
                    <i class="fa fa-sliders-h my-auto mr-1"></i>  
                    
                    <span class="mt-auto small-text text-dark"> Draft Jobs</span>  
                   <a href="" class=" ml-auto"><span class="text-dark">View all(10)</span></a> 
                </h6>

                <div class="row p-0 m-0 bg-white border-bottom">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover table-striped recommend px-2"> 
                        <tr>
                            <th class="text-left text-dark">
                                Title
                            </th>
                            <th class="text-left text-dark">
                                Created At
                            </th>
                            <th class="text-left text-dark">
                                Deadline
                            </th>
                            <th class="text-left text-dark">
                                Status
                            </th>
                            <th class="text-left text-dark">
                                <i class="fa fa-sliders-h"></i>
                            </th>
                        </tr>
                        <tr> 
                            <td>Web Developer </td>   
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td>Pending</td>
                            <td class="px-2">
                                
                            <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle bg-light border text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">View Job</a>
                                <a class="dropdown-item" href="#">Edit Job</a>
                            </div>
                            </div>
                            </td>
                        </tr>
                      
                    
                       
                      
                    </table>
                </div>
                </div>
                <div class="px-3 mt-2">
                    <nav aria-label="...">
                    <ul class="pagination mb-2">
                        <li class="page-item disabled">
                        <span class="page-link"><</span>
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
                        <a class="page-link" href="#">></a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>

                 <!-- end active job -->

      <!-- Expired job -->
      <div class="my-4 border bg-white"> 
                <h6 class="p-3 mb-0 bg-white d-flex">
                    <i class="fa fa-exclamation-circle my-auto mr-1"></i>  
                    
                    <span class="mt-auto small-text text-dark"> Expired Jobs</span>  
                   <a href="" class=" ml-auto"><span class="text-dark">View all(10)</span></a> 
                </h6>

                <div class="row p-0 m-0 bg-white border-bottom">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover table-striped recommend px-2"> 
                        <tr>
                            <th class="text-left text-dark">
                                Title
                            </th>
                            <th class="text-left text-dark">
                                Created At
                            </th>
                            <th class="text-left text-dark">
                                Deadline
                            </th>
                            <th class="text-left text-dark">
                                Status
                            </th>
                            <th class="text-left text-dark">
                                <i class="fa fa-sliders-h"></i>
                            </th>
                        </tr>
                        <tr> 
                            <td>Web Developer </td>   
                            <td>3/6/2020</td>
                            <td>3/6/2020</td>
                            <td>Pending</td>
                            <td class="px-2">
                                
                            <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle bg-light border text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">View Job</a>
                                <a class="dropdown-item" href="#">Edit Job</a>
                            </div>
                            </div>
                            </td>
                        </tr>
                      
                    
                       
                      
                    </table>
                </div>
                </div>
                <div class="px-3 mt-2">
                    <nav aria-label="...">
                    <ul class="pagination mb-2">
                        <li class="page-item disabled">
                        <span class="page-link"><</span>
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
                        <a class="page-link" href="#">></a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>

                 <!-- end active job -->
                  
                <!-- client support -->
             


            </div>
        </div>           
               

    

    </div>

    
    </div>
</div>
