@include('jobseeker.metatag')
@include('jobseeker.topnavbar')
@include('jobseeker.header')

<style>
 @media only screen and (max-width: 768px) {
    .profile-name{
        text-align: center
    }
 
 }
 @media (width:768px){
     table td,.btn{
         font-size:11px;
     }
     table tr td:nth-child(2){
         font-size:11px;
     }
     .box-content{
         padding:1rem 0.25rem!important;
     }
     .btn{
         padding:.25rem .2rem!important;
     }
 }
 @media only screen and (max-width:420px){
     .complete{
         display:block!important;
     }
     .complete button{
         margin-top:10px;
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

                <div class="border bg-white mb-3 p-3 d-flex position-relative hide complete">
                    <span class="position-absolute warning">
                        <p class="ml-4">&times;</p>
                    </span>
                    
                    <p class="text-warning info"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam error
                        asperiores corrupti eos? Incidunt vero . </p>
                    <button class="btn btn-sm btn-light border mr-3"><i class="fa fa-user"></i> Complete
                        Now</button>
                </div>
                
                <div class="bg-white border">
                <!-- recommendate job -->
                <h6 class="p-3 mb-0 d-flex">
                <i class="fa fa-briefcase my-auto mr-1"></i>  
                
                <span class="mt-auto"> Recommended Jobs</span>  
                <span class=" ml-auto">View All(10)</span>
                </h6>
            
                <!-- <div class="row py-1 m-0 px-1">
                    <div class="col-md-12 p-0">
                        <p class="alert alert-danger w-100"> Please fill your Preference </p>
                    </div>
                </div> -->

                <div class="row p-0 m-0 bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped recommend"> 
                    
                            <tr> 
                                <td><i class="fa fa-star"></i></td>   
                                <td>Web Developer</td>
                            
                                <td><img src="./images/kumarijob.png" width="40" alt=""> Kumarijob Pvt Ltd</td>
                                <td>3 days left</td>
                                <td class="text-right px-2"><button class="btn btn-sm btn-info"> View Detail</button></td>
                            </tr>
                            <tr> 
                                <td><i class="fa fa-star"></i></td>   
                                <td>Web Developer</td>
                            
                                <td><img src="./images/kumarijob.png" width="40" alt=""> Kumarijob Pvt Ltd</td>
                                <td>3 days left</td>
                                <td class="text-right px-2"><button class="btn btn-sm btn-info"> View Detail</button></td>
                            </tr>
                            <tr> 
                                <td><i class="fa fa-star"></i></td>   
                                <td>Web Developer</td>
                            
                                <td><img src="./images/kumarijob.png" width="40" alt=""> Kumarijob Pvt Ltd</td>
                                <td>3 days left</td>
                                <td class="text-right px-2"><button class="btn  btn-sm btn-info"> View Detail</button></td>
                            </tr>
                        
                        
                        
                        </table>
                    </div>
                    <!-- <div class="col-md-4 px-1 my-1">
                        <div class="border p-3 bg-white ">
                            <div class=" d-flex">
                                <div class="logo">
                                    <img src="./images/kumarijob.png" width="50" alt="">
                                </div>
                                <div class="pl-3">
                                    <div style="line-height: 1">
                                        <h6 class="mb-0">Job title</h6>
                                        <i class="mt-0" style="line-height: 1;font-size:13px">Company Name</i>
                                    </div>
                                 
                                    <div class="mt-2" style="line-height: 1;font-size:12px"> Deadline: 2019-2-21</div>
                                </div>
                            </div>

                        </div>

                    </div> -->
                </div>
                <div class="px-3">
                    <nav aria-label="...">
                    <ul class="pagination">
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
                <!-- end recommendate job -->


                <!-- Applied Job -->
                <div class="border bg-white mt-3">
                <h6 class="p-3 mb-0"> <i class="fa fa-check-square"></i> Applied Jobs</h6>
                <hr class="my-0">

                <div class="row m-0 p-0 bg-light">
                  
                 
                    <!-- applied job card -->
                    <div class="col-md-4 px-3 my-3">
                        <div class="border p-3 bg-white box-content">
                            <h6 class="text-dark text-center d-flex position-relative mt-1">
                                <span class="mx-auto">Job Title </span>
                                <a href="" data-toggle="tooltip" data-placement="top" title="Delete"><span
                                        class="text-danger ml-auto position-absolute delete-applied">&times;</span></a>
                                </h6>
                                <table class="table mt-3 mb-0">
                                    <tr class="col">
                                        <td>Company  </td>
                                        <td>kumarijob pvt ltd </td>
                                    </tr>
                                    <tr class="col">
                                        <td>Applied Date: </td>
                                        <td>2019,2,2</td>
                                    </tr>
                                    <tr class="col">
                                        <td>Deadline: </td>
                                        <td>2 days Left </td>
                                    </tr>

                                </table>

                                <div class="text-center">
                                    <button class="btn border btn-sm mt-2 bg-light text-center"><i class="fa fa-clock text-warning"></i> Status: Pending</button>
                                </div>

                        </div>
                    </div>
                 
                    <!-- applied job card -->
                    <div class="col-md-4 px-3 my-3">
                        <div class="border p-3 bg-white box-content">
                            <h6 class="text-dark text-center d-flex position-relative mt-1">
                                <span class="mx-auto">Job Title </span>
                                <a href="" data-toggle="tooltip" data-placement="top" title="Delete"><span
                                        class="text-danger ml-auto position-absolute delete-applied">&times;</span></a>
                                </h4>
                                <table class="table mt-3 mb-0">
                                    <tr class="col">
                                        <td>Company  </td>
                                        <td>kumarijob pvt ltd </td>
                                    </tr>
                                    <tr class="col">
                                        <td>Applied Date: </td>
                                        <td>2019,2,2</td>
                                    </tr>
                                    <tr class="col">
                                        <td>Deadline: </td>
                                        <td>2 days Left </td>
                                    </tr>

                                </table>

                                <div class="text-center">
                                    <button class="btn border btn-sm mt-2 bg-light text-center "><i class="fa fa-list text-success"></i> Status: Shortlisted</button>
                                </div>

                        </div>
                    </div>
                 
                    <!-- applied job card -->
                    <div class="col-md-4 px-3 my-3 ">
                        <div class="border p-3 bg-white box-content">
                            <h6 class="text-dark text-center d-flex position-relative mt-1">
                                <span class="mx-auto">Job Title </span>
                                <a href="" data-toggle="tooltip" data-placement="top" title="Delete"><span
                                        class="text-danger ml-auto position-absolute delete-applied">&times;</span></a>
                                </h4>
                                <table class="table mt-3 mb-0">
                                    <tr class="col">
                                        <td>Company  </td>
                                        <td>kumarijob pvt ltd </td>
                                    </tr>
                                    <tr class="col">
                                        <td>Applied Date: </td>
                                        <td>2019,2,2</td>
                                    </tr>
                                    <tr class="col">
                                        <td>Deadline: </td>
                                        <td>2 days Left </td>
                                    </tr>

                                </table>

                                <div class="text-center">
                                    <button class="btn border btn-sm mt-2 bg-light text-center"><i class="fa fa-check text-info"></i> Status: Viewed</button>
                                </div>

                        </div>
                    </div>



                </div>

                <div class="mt-3 px-3">
                <nav aria-label="...">
                <ul class="pagination">
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
    })
</script>
