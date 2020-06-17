<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Document</title>
    <style>
        .service-header{
            font-size:0.8125rem;
            font-weight:bold;
        }
        .back{
            background-color:#F29F05;
        }
        .plan{
            font-size:0.8125rem;
            font-weight:500;
            display:flex;
            justify-content:center;
            align-items:center;
            color:#fff;
        }
        .plan i{
            padding-right:5px;
        }
        .posting img{
            width:80px;
            border:1px solid lightgrey;
            border-radius:10px;
        }
        .posting{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .posting-content{
            border-top:1px solid lightgrey;
        }
        .top-row .card:hover{
            transform: translateY(-20px);
            box-shadow: 0 0 20px 0 rgba(0,0,0,0.4);
        }
        .mid-card{
            transform: translateY(-20px);
        }
        
        table th, .card-body p{
            font-size:0.8125rem;
            font-weight:400;
        }
        table th{
            line-height:1.8;
        }
        table{
            padding-bottom:5px;
        }
        .main-bigger{
            font-weight:600;
        }
        .card-body p{
            padding-top:10px;
            border-top:1px solid lightgrey;
            margin:0;
        }
        .view a{
            
            color:#F29F05;
            font-size:0.7525rem;
            font-weight:400;
        }
        .sending a{
            text-decoration:none;
            color:#000;
            border:1px solid lightgrey;
            border-radius:20px;
            background-color:#fff;
            padding:5px 10px;
            font-size:0.7525rem;
            font-weight:500;
        }
        .sending a:hover{
            background-color:#F29F05;
            color:#fff;
        }
        .sending{
            display:flex;
            justify-content:center;
            align-items:center;
        }
     @media (width:768px){
         .card-content{
             padding:1.25rem .75rem;
         }
         table th,.card-body p{
             font-size:0.75rem;
         }
         .card-pad,.other-card{
             padding:0rem 0.5rem;
         }
         .back{
             padding:0.75rem;
         }
     }
     @media only screen and (max-width:425px){
         .mid-card{
             transform:translateY(0px);
         }
         .other-card{
             margin-top:25px;
         }
     }

    </style>
</head>
<body>
    <div class="database-service">
        <div class="container p-0">
            <div class="row mt-3">
            <div class="col-md-3">
                @include('employer.pages.employersidebar')

            </div>
                <div class="col-lg-9 col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <span class="service-header">Our Services</span>
                        </div>
                        <div class="card-body">
                            <div class="top-row">
                                <div class="row mt-4">
                                    <div class="col-md-4 card-pad">
                                        <div class="card">
                                            <div class="card-header back">
                                                <span class="plan"><i class="fa fa-id-badge" aria-hidden="true"></i>Job Posting Service</span>
                                            </div>
                                            <div class="card-body card-content">
                                                <div class="posting">
                                                    <img src="./images/kumari-logo.png" alt="this is image">
                                                </div>
                                                <div class="posting-content mt-3">
                                                <table width="100%">
                                                    <tr>
                                                        <th width="40%">Name</th>
                                                        <th width="20%">:</th>
                                                        <th width="40%"><span class="main-bigger">Kumari Job</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Position</th>
                                                        <th>:</th>
                                                        <th>Posting Officer</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact</th>
                                                        <th>:</th>
                                                        <th>89824544564</th>
                                                    </tr>


                                                </table>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-4 other-card">
                                        <div class="card mid-card">
                                            <div class="card-header back">
                                                <span class="plan"><i class="fa fa-id-badge" aria-hidden="true"></i>HR Service</span>
                                            </div>
                                            <div class="card-body card-content">
                                            <div class="posting">
                                                    <img src="./images/kumari-logo.png" alt="this is image">
                                                </div>
                                                <div class="posting-content mt-3">
                                                <table width="100%">
                                                    <tr>
                                                        <th width="40%">Name</th>
                                                        <th width="20%">:</th>
                                                        <th width="40%"><span class="main-bigger">Kumari Job</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Position</th>
                                                        <th>:</th>
                                                        <th>HR Manager</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact</th>
                                                        <th>:</th>
                                                        <th>89824544564</th>
                                                    </tr>


                                                </table>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-md-4 other-card">
                                        <div class="card">
                                            <div class="card-header back">
                                                <span class="plan"><i class="fa fa-id-badge" aria-hidden="true"></i>Customer Service</span>
                                            </div>
                                            <div class="card-body card-content">
                                            <div class="posting">
                                                    <img src="./images/kumari-logo.png" alt="this is image">
                                                </div>
                                                <div class="posting-content mt-3">
                                                <table width="100%">
                                                    <tr>
                                                        <th width="40%">Name</th>
                                                        <th width="20%">:</th>
                                                        <th width="40%"><span class="main-bigger">Kumari Job</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Position</th>
                                                        <th>:</th>
                                                        <th>Supervisor</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact</th>
                                                        <th>:</th>
                                                        <th>89824544564</th>
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
                   
                            
                    <div class="card mt-3">
                        <div class="card-header">
                            <span class="service-header">Our offers & Plans</span>
                        </div>
                        <div class="card-body">
                            <div class="top-row">
                                <div class="row mt-4">
                                    <div class="col-md-4 card-pad">
                                        <div class="card">
                                            <div class="card-header back">
                                                <span class="plan"><i class="fa fa-key"></i>Weekly Plan</span>
                                            </div>
                                            <div class="card-body card-content">
                                                <table width="100%"class="mb-2">
                                                    <tr>
                                                        <th width="30%">Price</th>
                                                        <th width="10%">:</th>
                                                        <th width="60%"><span class="main-bigger">Free</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Resume</th>
                                                        <th>:</th>
                                                        <th>Unlimited</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Days</th>
                                                        <th>:</th>
                                                        <th>7 Days</th>
                                                    </tr>
                                                </table>
                                                <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Recusandae tempore ab reiciendis est suscipit quae nisi similique at, minus
                                                quod animi veniam maiores blanditiis ullam eos natus vero voluptas quam.
                                                <span class="view"><a href="">View More</a>
                                                </p>
                                                
                                                
                                            </div>
                                            <div class="card-footer">
                                                <span class="sending"><a href="">Send Request</a></span>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-md-4 other-card">
                                        <div class="card mid-card">
                                            <div class="card-header back">
                                                <span class="plan"><i class="fa fa-key"></i>15 Days Plan</span>
                                            </div>
                                            <div class="card-body card-content">
                                            <table width="100%"class="mb-2">
                                                    <tr>
                                                        <th width="30%">Price</th>
                                                        <th width="10%">:</th>
                                                        <th width="60%"><span class="main-bigger">Rs.10000/-</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Resume</th>
                                                        <th>:</th>
                                                        <th>300</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Days</th>
                                                        <th>:</th>
                                                        <th>15 Days</th>
                                                    </tr>
                                                </table>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Recusandae tempore ab reiciendis est suscipit quae nisi similique at, minus
                                                quod animi veniam maiores blanditiis ullam eos natus vero voluptas quam.
                                                <span class="view"><a href="">View More</a>
                                                </p>
                                                
                                                
                                            </div>
                                            <div class="card-footer">
                                                <span class="sending"><a href="">Send Request</a></span>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-md-4 other-card">
                                        <div class="card">
                                            <div class="card-header back">
                                                <span class="plan"><i class="fa fa-key"></i>Advance Plan</span>
                                            </div>
                                            <div class="card-body card-content">
                                            <table width="100%"class="mb-2">
                                                    <tr>
                                                        <th width="30%">Price</th>
                                                        <th width="10%">:</th>
                                                        <th width="60%"><span class="main-bigger">Up to Rs.20000/-</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Resume</th>
                                                        <th>:</th>
                                                        <th>Unlimited</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Days</th>
                                                        <th>:</th>
                                                        <th>Unlimited</th>
                                                    </tr>
                                                </table>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Recusandae tempore ab reiciendis est suscipit quae nisi similique at, minus
                                                quod animi veniam maiores blanditiis ullam eos natus vero voluptas quam.
                                                <span class="view"><a href="">View More</a>
                                                </p>
                                                
                                            </div>
                                            <div class="card-footer">
                                                <span class="sending"><a href="">Send Request</a></span>
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
</body>
</html>
