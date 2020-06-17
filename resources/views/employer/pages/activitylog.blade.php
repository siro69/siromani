<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Document</title>
<style>
.card-title{
    border:1px solid lightgrey;
    padding:15px 15px;
    position:relative;
}
.first-header i{
    padding-right:5px;
    opacity:0.5;
    height:3px;
}
.first-header{
    font-size: 14px;
    text-transform: capitalize;
    color: #000;
    font-weight: bold;
}
.second-title{
    position:absolute;
    top:10px;
    right:15px;
    border:1px solid lightgrey;
    padding:4px 10px;
}
.second-title:hover{
    background-color:#F29F05;
}
.second-title:hover.second-title a{
    color:#fff;
}
.second-title a{
    font-size: 12px;
    text-transform: capitalize;
    color: #000;
    font-weight: 400;
    text-decoration:none;
}
.first-content{
    position:relative;
}
.count{
    position:absolute;
    top:0;
    right:15px;
    /* border:1px solid;
    background-color:rgba(0,0,0,0.6);
    padding:0px 8px; */
}
.count span{
    color:#000;
    font-size:0.8125rem;
    font-weight:600;
    letter-spacing:1px;
}
.count span:hover{
    text-decoration:underline;
}
.search{
    position:absolute;
    top:-2px;
    right:15px;
}
.search input{
    padding: 4px 10px;
    font-size: 0.8125rem;
    font-weight: 400;
}
.card-body table{
    width:100%;
}
table tr{
    border-block-end:1px solid lightgrey;
}
table td,th{
    padding:15px;
    text-align:inherit;
    font-size:0.8125rem;
    font-weight:500;
    color:#000;
}
table th{
    font-weight:bold;
}
.fire i{
    color:orangered;
    padding-right:10px;
}
.decorate{
    background-color:#F2F2F2;
}
.highlight{
    color:#C2010E;
    font-weight:800;
}
.dropdown{
    margin:0!important;
}
.dropdown-menu{
    left:-80px!important;
}
.dropdown-item{
    border-block-end: 1px solid lightgrey;
}
.dropdown-item i{
    padding-right:10px;
    opacity:0.8;
}
.btn-secondary{
    color: #00aeda;
    background-color: #fff;
    border-color: #00aeda;
}
.btn-secondary:hover{
    color: #fff;
    background-color: #00aeda;
    border-color: #00aeda;
}
.show>.btn-secondary.dropdown-toggle{
    color: #fff;
    background-color: #00aeda;
    border-color: #00aeda;
}
.btn-secondary:focus{
    box-shadow:0 0 0 0;
    outline:none;
}
.btn{
    font-size:0.8125rem;
}
.expire i{
    color:grey;
    padding-right:10px;
    color:#000;
}
.fire,.expire{
    font-weight:bold;
}
.first-header img{
    padding-right: 5px;
    margin-bottom: 2px;
}
.expire img{
    padding-right:5px;
}
@media only screen and (max-width:990px){
    .search{
        position:relative;
        top:0;
        right:0;
    }
}
</style>
</head>
<body>

<div class="activity-log">
    <div class="container p-0">
        <div class="row mt-2">
            <div class="col-md-3">
                @include('employer.pages.employersidebar')

            </div>
            <div class="col-lg-9 col-md-9">
                <div class="container p-0 mb-2">
                
                    <div class="card-title">
                        <div class="first-title"><span class="first-header"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>activity log</span>
                        <span class="second-title"><a href="jobpost.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>post a job</a></span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header"><i class="fa fa-sliders" aria-hidden="true"></i>drafted jobs</span>
                                <div class="count">
                                    <span>View all [2]</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header">Below list contains your jobs on demand list.</span>
                                <div class="search">
                                    <span><input type="text" placeholder="Search..."></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table>
                                    <tr class="decorate">
                                        <th>Job Position</th>
                                        <th class="text-center">No. of Req.</th>
                                        <th class="text-center">Job Type</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center"><i class="fa fa-sliders" aria-hidden="true"></i></th>
                                    </tr>
                                    <tr>
                                        <td class="fire"><i class="fa fa-fire" aria-hidden="true"></i>Assistant Marketing</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Hot Job</td>
                                        <td class="highlight text-center">Unpublished</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fire"><i class="fa fa-fire" aria-hidden="true"></i>Graphic Designer</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Hot Job</td>
                                        <td class="highlight text-center">Unpublished</td>
                                        <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header"><i class="fa fa-globe" aria-hidden="true"></i>all jobs</span>
                                <div class="count">
                                    <span>View all [4]</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header">Below list contains your All jobs to manage.</span>
                                <div class="search">
                                    <span><input type="text" placeholder="Search..."></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table>
                                    <tr class="decorate">
                                        <th>Title</th>
                                        <th class="text-center">Posted date</th>
                                        <th class="text-center">Expires On</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center"><i class="fa fa-sliders" aria-hidden="true"></i></th>
                                    </tr>
                                    <tr>
                                        <td class="fire"><i class="fa fa-fire" aria-hidden="true"></i>Assistant Marketing</td>
                                        <td class="text-center">* Not published yet.</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Draft</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fire"><i class="fa fa-fire" aria-hidden="true"></i>Graphic Designer</td>
                                        <td class="text-center">* Not published yet.</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Draft</td>
                                        <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="expire"><img src="../images/exclamation-circle1.png" width="18px">Graphic Designer</td>
                                        <td class="text-center">* Not published yet.</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Expired</td>
                                        <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="expire"><img src="../images/exclamation-circle1.png" width="18px">Receptionist</td>
                                        <td class="text-center">* Not published yet.</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Expired</td>
                                        <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header"><img src="../images/three-dots.png"width="18px">pending jobs</span>
                                <div class="count">
                                    <span>View all [2]</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header">Below list contains your Pending jobs to manage.</span>
                                <div class="search">
                                    <span><input type="text" placeholder="Search..."></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div  class="table-responsive">
                                <table>
                                    <tr class="decorate">
                                        <th>Title</th>
                                        <th class="text-center">Posted date</th>
                                        <th class="text-center">Expires On</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center"><i class="fa fa-sliders" aria-hidden="true"></i></th>
                                    </tr>
                                    <tr>
                                        <td class="expire"><img src="../images/three-dots.png"width="18px">Assistant Marketing</td>
                                        <td class="text-center">Feb 17, 2020</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Pending</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="expire"><img src="../images/three-dots.png"width="18px">Graphic Designer</td>
                                        <td class="text-center">Feb 17, 2020</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Pending</td>
                                        <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header"><img src="../images/tick-circle.png" width="18px">active jobs</span>
                                <div class="count">
                                    <span>View all [2]</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="first-content">
                                <span class="first-header">Below list contains your Published jobs to manage</span>
                                <div class="search">
                                    <span><input type="text" placeholder="Search..."></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div  class="table-responsive">
                                <table>
                                    <tr class="decorate">
                                        <th>Title</th>
                                        <th class="text-center">Posted date</th>
                                        <th class="text-center">Expires On</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center"><i class="fa fa-sliders" aria-hidden="true"></i></th>
                                    </tr>
                                    <tr>
                                        <td class="fire"><i class="fa fa-fire" aria-hidden="true"></i>Assistant Marketing</td>
                                        <td class="text-center">Feb 17, 2020</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Active</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fire"><i class="fa fa-fire" aria-hidden="true"></i>Graphic Designer</td>
                                        <td class="text-center">Feb 17, 2020</td>
                                        <td class="text-center">Apr 17, 2020</td>
                                        <td class=" text-center">Active</td>
                                        <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="first-content">
                                    <span class="first-header"><img src="../images/cross-circle1.webp" width="18px">denied</span>
                                    <div class="count">
                                        <span>View all [2]</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <div class="first-content">
                                    <span class="first-header">Below list contains your Denied jobs to manage.</span>
                                    <div class="search">
                                        <span><input type="text" placeholder="Search..."></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div  class="table-responsive">
                                    <table>
                                        <tr class="decorate">
                                            <th>Title</th>
                                            <th class="text-center">Posted date</th>
                                            <th class="text-center">Expires On</th>
                                            <th class="text-center">NO. of Denied</th>
                                            <th class="text-center"><i class="fa fa-sliders" aria-hidden="true"></i></th>
                                        </tr>
                                        <tr>
                                            <td class="expire"><img src="../images/cross-circle1.webp" width="18px">Assistant Marketing</td>
                                            <td class="text-center">Feb 17, 2020</td>
                                            <td class="text-center">Apr 17, 2020</td>
                                            <td class=" text-center">2</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="expire"><img src="../images/cross-circle1.webp" width="18px">Graphic Designer</td>
                                            <td class="text-center">Feb 17, 2020</td>
                                            <td class="text-center">Apr 17, 2020</td>
                                            <td class=" text-center">5</td>
                                            <td class="text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="first-content">
                                    <span class="first-header"><img src="../images/exclamation-circle1.png" width="18px">expired</span>
                                    <div class="count">
                                        <span>View all [4]</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <div class="first-content">
                                    <span class="first-header">Below list contains your Expired jobs to manage.</span>
                                    <div class="search">
                                        <span><input type="text" placeholder="Search..."></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div  class="table-responsive">
                                    <table>
                                        <tr class="decorate">
                                            <th>Title</th>
                                            <th class="text-center">Posted date</th>
                                            <th class="text-center">Expires On</th>
                                            <th class="text-center">Expired Days</th>
                                            <th class="text-center"><i class="fa fa-sliders" aria-hidden="true"></i></th>
                                        </tr>
                                        <tr>
                                            <td class="expire"><img src="../images/exclamation-circle1.png" width="18px">Assistant Marketing</td>
                                            <td class="text-center">Feb 17, 2020</td>
                                            <td class="text-center">Apr 17, 2020</td>
                                            <td class=" text-center">10</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="expire"><img src="../images/exclamation-circle1.png" width="18px">Graphic Designer</td>
                                            <td class="text-center">Feb 17, 2020</td>
                                            <td class="text-center">Apr 17, 2020</td>
                                            <td class=" text-center">15</td>
                                            <td class="text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="expire"><img src="../images/exclamation-circle1.png" width="18px">Graphic Designer</td>
                                            <td class="text-center">Feb 17, 2020</td>
                                            <td class="text-center">Apr 17, 2020</td>
                                            <td class=" text-center">15</td>
                                            <td class="text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="expire"><img src="../images/exclamation-circle1.png" width="18px">Graphic Designer</td>
                                            <td class="text-center">Feb 17, 2020</td>
                                            <td class="text-center">Apr 17, 2020</td>
                                            <td class=" text-center">15</td>
                                            <td class="text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Edit Detail</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-search" aria-hidden="true"></i>Preview Job</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-clone" aria-hidden="true"></i>Copy Job</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
