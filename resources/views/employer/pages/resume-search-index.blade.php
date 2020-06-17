<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
.main-form{
    display:flex;
    /* justify-content:center; */
    align-items:center;
}
 .form-input input{
     width:100%;
     padding:10px 15px;
     /* font-weight:300; */
 }
 .search-form{
    position:relative;
    border: 1px solid lightgrey;
    width: 400px;
    margin-right:15px;
 }
 .form-input button{
    position:absolute;
    right:5px;
    top:12px;
    background-color:#fff;
    border:none;
 }
 .form-input button i{
     color:grey;
     font-size:22px;
 }
 .form-input input:hover{
    border: 2px solid #d9d9d9;
    border-top: 2px solid #a0a0a0;
 }
 .sub-btn{
     background-color:#EC7C03;
     border:1px solid #ec7c03;
    padding: 10px 12px;
    font-size: 1rem;
    font-weight: bold;
    color:#fff;
    border-radius:5px;
 }
 .find-can{
     border-bottom:1px solid lightgrey;
 }
 .find-can span{
    font-size: 1.25rem;
    font-weight: bold;
    color: rgba(0,0,0,0.6);
    line-height:1;
 }
 .find-content{
     border:1px solid lightgrey;
     padding:12px;
     border-radius:5px;
     position:relative;
     background-color:#fff;
 }
 .find-content:hover{
     background-color:rgba(0,0,0,0.1);
 }
 .find-content span{
     font-size:0.7825rem;
     font-weight:bold;
     color:#000;
 }
 .find-content i{
     position:absolute;
     right:8px;
     top:13px;
     opacity:0.6;
 }
 .total-result .total{
    border-bottom: 4px solid #EC7C03!important;
    font-size: 17px;
    color: #252A3C;
    font-weight: 600;
 }
 .result-number{
    font-size: 18px;
    padding: 15px 15px 0;
    color: #999;
 }
 .pagination{
     float:right;
     margin:-37px 0 0 0 ;
 }
 .pagination a{
    border: 0;
    font-size: 15px;
    color: #252A3C;
    padding: 4px 12px;
 }
 .dropdown-item{
     width:100%;
     display:none;
     
 }
 .dropdown-item ul{
     border:1px solid lightgrey;
     padding:0 12px;
     background-color:#fff;
 }
 .dropdown-item li{
     list-style:none;
     line-height:1.5;
     border-bottom:1px solid lightgrey;
     padding:8px 0;
     color:#000;
     font-size:0.8757rem;
     font-weight:600;
 }
 .dropdown-item li input{
     margin-right:10px;
 }
 .candidate-details li:nth-child(even){
     background-color:#e7e7e8;
 }
 .candidate-details{
     padding:0;
 }
 .user-name{
     font-size:0.9585rem;
     font-weight:bold;
     color:#000;
 }
 .user-name i{
     padding-right:10px;
     opacity:0.6;
 }
 .candidates,.candidates-ft{
     padding:0 1.25rem;
     color: #000;
     font-weight: 400;
     font-size: 0.8125rem;
 }
 .candidates-ft{
     font-size:0.8585rem;
     font-weight:600;
     padding:13px;
 }
.candidate-details i{
    margin-right:8px;
    opacity:0.6;
}
.fill-icon i{
    padding-right:5px;
}
.flex-fill a{
    text-decoration:none;
    color: #17a2b8;
}
.flex-fill a:hover{
    color:#117a8b;
    text-decoration:underline;
}
.body-div{
    padding:5px 10px;
}
.div-ribbon{
    position:relative;
}
.ribbon{
    display: inline-block;
    position: absolute;
    left: 5px;
    top: 27px;
}
.ribbon:after,.ribbon:before{
    content: "";
    display: block;
    position: absolute;
    height: 10px;
    bottom: -8px;
    border: 20px solid #D20000;
}
.ribbon:before{
    border-bottom-color: transparent;
    bottom: -40px;
}
.body-div h3{
    font-size:20px;
    font-weight:bold;
    color:#D20000;
}
.package{
    color: #000;
    font-size: 1rem;
    font-weight: 600;
}
.price{
    font-size:1.75rem;
    color:#D20000;
}
.package-btn a{
    text-decoration:none;
    border:1px solid #D20000;
    border-radius:5px;
    background-color:#D20000;
    color:#fff;
    padding:8px 12px;
    font-size:1rem;
    font-weight:600;
}
.package-btn a:hover{
    opacity:0.8;
}
.unother{
   line-height:2;
   padding:0 17px;
   color:#000;
}
.unother li{
    list-style:none;  
    font-size:0.8725rem;
    font-weight:500;
    padding:7px 10px;
}
.unother i{
    margin-right:10px;
    opacity:0.6;
}
.unother li:nth-child(odd){
     background-color:#e7e7e8;
 }
 .package-order a{
    border:1px solid #D20000;
    border-radius:3px;
    background-color:#D20000;
    color:#fff;
    padding:8px 12px;
    font-size:1rem;
    font-weight:bold;
    text-decoration:none;
 }
 .package-order a:hover{
     background-color:#fff;
     color:#D20000;
 }
 .hov-shadow:hover{
     box-shadow:0px 5px 25px -10px #d20000!important;
 }
 @media only screen and (max-width:768px){
     .pagination{
         float:left;
         margin:5px 0 0 0 ;
     }
     .body-div h3{
         font-size:20px;
         margin-left:27px;
     }
     .unother{
         padding:0;
     }
 }
 @media only screen and (max-width:425px){
     .main-form{
         display:block;
     }
     .search-form{
         width:auto;
         margin-top:6px;
     }
     .submit{
         margin-top:6px;
     }
     .fa-history{
         display:none;
     }
     .col-2,.col-4,.col-6{
         padding:0;
     }
     

 }
</style>
<!-- Resume search -->
<div id="menu5" class="resume-search">
    <div class="resume-bg">
        <div class="container-fluid">
            <div class="search-box">
                <div class="card mt-3">
                    <div class="card-header main-form">
                        <div class="search-form">
                            <form class="form-input">
                                <input type="text" placeholder="Job Title, Keyword or Company" name="keyword" autocomplete="off">
                                <button classs="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="search-form">
                            <form class="form-input">
                                <input type="text" placeholder="Location, City" name="keyword" autocomplete="off">
                                <button><i class="fa fa-map-marker-alt"></i></button>
                            </form>
                        </div>
                        <div class="submit ">
                            <input class="sub-btn" type="submit" value="Find Resume">
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-12">
                                
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="total-result">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-items">
                                                        <a class="nav-link active total">TOTAL RESULT</a>
                                                    </li>
                                                    <li class="nav-item result-number">
                                                        Showing 1 to 10 of 0 entries
                                                    </li>
                                                </ul>

                                                <ul class="pagination pg-blue">
                                                    <li class="page-item">
                                                        <a class="page-link" aria-label="previous">
                                                        <span aria-hidden="true">«</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">6</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" aria-label="next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="find-can mb-2">
                                                    <span>Find Candidates<br> Based On</span>
                                                </div>
                                                <div class="find-content mt-3"id="flip">
                                                    <span>QUALIFICATIONS<i class="fas fa-chevron-down"></i></span>
                                                    
                                                </div>
                                                <div class="dropdown-item" id="panel">
                                                    <ul>
                                                        <li><input type="checkbox">Master's</li>
                                                        <li><input type="checkbox">Bachelor</li>
                                                        <li><input type="checkbox">Intermediate</li>
                                                        <li><input type="checkbox">S.L.C</li>
                                                    </ul>
                                                </div>
                                                <div class="find-content mt-2" id="flip1">
                                                    <span>EXPECTED SALARY<i class="fas fa-chevron-down"></i></span>
                                                    
                                                </div>
                                                    <div class="dropdown-item" id="panel1">
                                                        <ul>
                                                            <li><input type="checkbox">Above 10,000</li>
                                                            <li><input type="checkbox">Above 20,000</li>
                                                            <li><input type="checkbox">Above 30,000</li>
                                                            <li><input type="checkbox">Above 40,000</li>
                                                            <li><input type="checkbox">Above 50,000</li>
                                                        </ul>
                                                    </div>
                                                <div class="find-content mt-2" id="flip2">
                                                    <span>LOCATION<i class="fas fa-chevron-down"></i></span>
                                                    
                                                </div>
                                                    <div class="dropdown-item"id="panel2">
                                                        <ul>
                                                            <li><input type="checkbox">Kathmandu</li>
                                                            <li><input type="checkbox">Bhaktapur</li>
                                                            <li><input type="checkbox">Lalitpur</li>
                                                            <li><input type="checkbox">Nepalgunj</li>
                                                            <li><input type="checkbox">Birgunj</li>
                                                        </ul>
                                                    </div>
                                                <div class="find-content mt-2" id="flip3">
                                                    <span>JOB PREFERENCE<i class="fas fa-chevron-down"></i></span>
                                                    
                                                </div>
                                                    <div class="dropdown-item"id="panel3">
                                                        <ul>
                                                            <li><input type="checkbox">Accountant</li>
                                                            <li><input type="checkbox">Web Developer</li>
                                                            <li><input type="checkbox">Doctor</li>
                                                            <li><input type="checkbox">Teacher</li>
                                                            <li><input type="checkbox">Sale Manager</li>
                                                        </ul>
                                                    </div>
                                                <div class="find-content mt-2" id="flip4">
                                                    <span>JOB LEVEL<i class="fas fa-chevron-down"></i></span>
                                                    
                                                </div>
                                                    <div class="dropdown-item"id="panel4">
                                                        <ul>
                                                            <li><input type="checkbox">Entry Level</li>
                                                            <li><input type="checkbox">Junior Level</li>
                                                            <li><input type="checkbox">Mid Level</li>
                                                            <li><input type="checkbox">Senior Level</li>
                                                        </ul>
                                                    </div>
                                                <div class="find-content mt-2" id="flip5">
                                                    <span>GENDER<i class="fas fa-chevron-down"></i></span>
                                                    
                                                </div>
                                                    <div class="dropdown-item"id="panel5">
                                                        <ul>
                                                            <li><input type="checkbox">Male</li>
                                                            <li><input type="checkbox">Female</li>
                                                            <li><input type="checkbox">Other</li>
                                                        </ul>
                                                    </div>
                                                <div class="find-content mt-2" id="flip6">
                                                    <span>MARITAL STATUS<i class="fas fa-chevron-down"></i></span>
                                                    
                                                </div>
                                                    <div class="dropdown-item"id="panel6">
                                                        <ul>
                                                            <li><input type="checkbox">Married</li>
                                                            <li><input type="checkbox">Unmarried</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Diana Pradhan</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Master's</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>+13 years</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Human Resource / Org.Development</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Dhobighat Ring Road, Lalitpur - 3</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Female</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>112 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Surendra Bohara</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Bachelors</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>Fresher</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Casino</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Kailali, Dododhara-7</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Male</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>50 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Mansi Goenka</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Bachelors</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>Fresher</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Marketing / Advertising / Customer</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span></span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Female</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>112 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Krishna Prasad Neupane</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Masters</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>Fresher</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Human Resource / Org.Development</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Kalanki, Kathmandu-14</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Male</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>112 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Madan Gaire</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Bachelors in BCIS</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>Fresher</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Marketing / Advertising / Customer</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Kalanki, Kathmandu</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Male</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>112 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Slade Parks</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Below SLC/SEE</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>Fresher</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Trading Company</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Dhobighat Ring Road, Lalitpur</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Male</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>112 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Ashmita Shrestha</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Bachelors In BBA</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>+6 Years</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Adviser / Counseling</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Chamatiphant-15, Kathmandu</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Female</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>112 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Paul Limbu</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Intermediate</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>Fresher</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Gaming</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Gongabu, Kathmandu</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Male</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>112 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Anmol Bajracharya</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Bachelors</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>+9 Years</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Media / News / Publishing</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Kathmandu</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Male</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>200 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <span class="user-name"><i class="fas fa-user-alt"></i>Arjun Bahadur Thapa</span>
                                            </div>
                                            <div class="card-body candidates">
                                                <ul class="candidate-details">
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-graduation-cap col-1 p-0"></i>Education
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Masters</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-briefcase col-1 p-0"></i>Experience
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>

                                                        <div class="col-6">
                                                            <span>Fresher</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-pencil-alt col-1 p-0"></i>Preference
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Hydropower</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-map-marker-alt col-1 p-0"></i>Address
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Nagarjun-4 Sitapaila, Kathmandu</span>
                                                        </div>
                                                    </li>
                                                    <li class="row py-2">
                                                        <div class="col-4">
                                                        <i class="fa fa-user col-1 p-0"></i>Gender
                                                        </div>
                                                        <div class="col-2">
                                                        <span>:</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span>Male</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer candidates-ft">
                                                <div class="d-flex">
                                                    <div class="flex-fill">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon"><i class="fas fa-eye"></i>258 Views</span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span><i class="fa fa-history"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fill-icon">
                                                            <a href=""><i class="fas fa-user-alt"></i>View Candidate</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="card shadow hov-shadow">
                                    <div class="card-body body-div ">
                                        <div class="div-ribbon">
                                            <span class="ribbon"><span>
                                        </div>
                                        <h3 class="text-center mt-2">SPECIAL PACKAGE</h3>
                                        <div class="package text-center mt-4">
                                            <span>Only <span class="price">$199</span></span><br>
                                            <span>or as low as $14/month with Affirm</span>
                                        </div>
                                        <div class=" package-btn text-center mt-4 mb-4">
                                            <a href="">Get Starter</a>
                                        </div>
                                        <ul class="unother">
                                            <li><i class="fas fa-award"></i>Professionally Written</li>
                                            <li><i class="far fa-grin-beam"></i>Formatted for Success</li>
                                            <li><i class="fas fa-seedling"></i>Keyword Optimized</li>
                                        </ul>
                                        <div class="package-order text-center mt-4 mb-3">
                                            <span><a href="">Order Package</a></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-3 shadow hov-shadow">
                                    <div class="card-body body-div ">
                                        <div class="div-ribbon">
                                            <span class="ribbon"><span>
                                        </div>
                                        <h3 class="text-center mt-2">SPECIAL PACKAGE</h3>
                                        <div class="package text-center mt-4">
                                            <span>Only <span class="price">$199</span></span><br>
                                            <span>or as low as $14/month with Affirm</span>
                                        </div>
                                        <div class=" package-btn text-center mt-4 mb-4">
                                            <a href="">Get Starter</a>
                                        </div>
                                        <ul class="unother">
                                            <li><i class="fas fa-award"></i>Professionally Written</li>
                                            <li><i class="far fa-grin-beam"></i>Formatted for Success</li>
                                            <li><i class="fas fa-seedling"></i>Keyword Optimized</li>
                                        </ul>
                                        <div class="package-order text-center mt-4 mb-3">
                                            <span><a href="">Order Package</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
    $("#panel1").slideUp();
    $("#panel2").slideUp();
    $("#panel3").slideUp();
    $("#panel4").slideUp();
    $("#panel5").slideUp();
    $("#panel6").slideUp();
  });
});
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
    $("#panel").slideUp();
    $("#panel2").slideUp();
    $("#panel3").slideUp();
    $("#panel4").slideUp();
    $("#panel5").slideUp();
    $("#panel6").slideUp();
  });
});
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
    $("#panel1").slideUp();
    $("#panel").slideUp();
    $("#panel3").slideUp();
    $("#panel4").slideUp();
    $("#panel5").slideUp();
    $("#panel6").slideUp();
  });
});
$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
    $("#panel1").slideUp();
    $("#panel2").slideUp();
    $("#panel").slideUp();
    $("#panel4").slideUp();
    $("#panel5").slideUp();
    $("#panel6").slideUp();
  });
});
$(document).ready(function(){
  $("#flip4").click(function(){
    $("#panel4").slideToggle("slow");
    $("#panel1").slideUp();
    $("#panel2").slideUp();
    $("#panel3").slideUp();
    $("#panel").slideUp();
    $("#panel5").slideUp();
    $("#panel6").slideUp();
  });
});
$(document).ready(function(){
  $("#flip5").click(function(){
    $("#panel5").slideToggle("slow");
    $("#panel1").slideUp();
    $("#panel2").slideUp();
    $("#panel3").slideUp();
    $("#panel4").slideUp();
    $("#panel").slideUp();
    $("#panel6").slideUp();
  });
});
$(document).ready(function(){
  $("#flip6").click(function(){
    $("#panel6").slideToggle("slow");
    $("#panel1").slideUp();
    $("#panel2").slideUp();
    $("#panel3").slideUp();
    $("#panel4").slideUp();
    $("#panel5").slideUp();
    $("#panel").slideUp();
  });
});
</script>