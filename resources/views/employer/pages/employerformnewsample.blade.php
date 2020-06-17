<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
    body{
        color:#000;
    }
    /* left side starts */
    .form-first h4{
        font-size:18px;
        font-weight:bold;
        text-transform:capitalize;
        margin:0;
    }
    .form-first{
        border:1px solid lightgrey;
    }
    .main-div{
        padding:0 12px;
    }
    .content-left{
        border:1px solid lightgrey;
    }
    .content-left ul{
        margin:0;
        padding:0px;
    }
    .content-left li{
        list-style:none;
        padding: 8px 25px;
        border-block-end: 1px solid lightgrey;
        position:relative;
    }
    .content-left li:hover{
        background:rgba(0,0,0,0.1)
    }
    .content-left a{
        text-decoration:none;
        color:#000;
        text-transform:capitalize;
        font-size:14px;
        font-weight:300;
    }
    .content-left .icon1{
        color:grey;
        padding:0px 10px;
    }
    .content-left .icon2{
        color:grey;
        position: absolute;
        right: 20px;
        top: 15px; 
        opacity:0.7; 
    }
    /* left side ends */
    /* right side start> */
    .content-right{
        padding:0 100px;
        border:1px solid lightgrey;
    }
    .content-right h3{
        text-transform:capitalize;
        border-block-end:1px solid lightgrey;
        font-size:16px;
        font-weight:400;
        padding-top:10px;
    }
    /* right side css end */
    /* form css starts */
    .bothdiv{
        width:100%;
        margin:20px 0 0 0;
    }
    .bothdiv h5{
        margin: 0;
        font-size: 12px;
        color: grey;
    }
    .long{
        width:100%;
        margin:20px 0 0 0;
        height:30px;
        font-size: 14px;
        font-weight: 300;
        text-transform: capitalize;
        padding:0px 10px;
    }
    .form-flex1{
        display:flex;
        /* justify-content:center; */
        align-items:center;
        position:relative;
    }
    .short{
        width:100%;
        margin:20px 0 0 0;
        height:30px;
        font-size: 14px;
        font-weight: 300;
        text-transform: capitalize;
        padding:0px 10px;
    }
    .long-label{
        width:150px;
        font-size: 14px;
        font-weight: 300;
        text-transform: capitalize;
    }
    .short-label,.short-label2{
        width:427px;
        font-size: 14px;
        font-weight: 300;
        text-transform: capitalize;
    }
    .short-label2{
        margin-left: 18px;
        display: flex;
        justify-content: center;
    }
    .short-label3{
        width:395px;
        font-size: 14px;
        font-weight: 300;
        text-transform: capitalize;
    }
    .short2{
        width: 114px;
        height:30px;
        font-size: 14px;
        font-weight: 300;
        text-transform: capitalize;
        padding:0px 10px;
        margin:20px 25px 20px 0;
    }
    form{
        border-block-end:1px solid lightgrey;
        
    }
    /* input dropdown css starts */

    /* input dropdown css starts */
    .form-flex1 button{
        position:absolute;
        top: 22px;
        right: 10px;
        border: none;
        background-color: #fff;
        outline:none;
    }
    .avail{
        width:100%;
        position:relative;
    }
    .offered{
        position:relative;
    }
    .offered button{
        position:absolute;
        top:22px;
        right:32px;
    }
    .form-flex1 ul{
        position:absolute;
        top:0px;
        right:0;
        border: 1px solid;
        height: 200px;
        width:550px;
        overflow: hidden;

    }
    .form-flex1 li{
        list-style:none;
    }

    /* input dropdown css ends */

    /* upload image css starts */
    .company-logo{
        margin:5px 0 0px 0;
        border-block-end:1px solid lightgrey;
        padding:0px 16px;
    }
    .company-logo h4{
        text-transform:capitalize;
        font-size:14px;
        font-weight:300;
    }
    .choose-btn{
        height:30px;
        font-size: 14px;
        font-weight: 300;
        text-transform: capitalize;
    }
    .no-div{
        font-size:14px;
        font-weight:400;
        text-transform:capitalize;
    }
    .uploadto{
        font-size:12px;
        font-weight:300;
        color:grey;
    }
    .last-btn{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .submitbtn{
        width: 90px;
        height: 38px;
        text-transform: capitalize;
        font-size: 16px;
        font-weight: 400;
        background-color:#F29F05;
        display: flex;
        justify-content: center;
        align-items: center;
    }

       /* upload image css ends */
    

   
    </style>
</head>
<body>
<!-- left side -->
<div class="form-header">
    <div class="container mt-1 form-first p-3">
    <h4>Front-Web Developer</h4>
    </div>
    </div>

    <div class="container main-div">
    <div class="form-content">
    <div class="row">
    <div class="col-lg-3 col-md-4 p-0">
    <div class="content-left">
        <ul>
        <li><a href=""><i class="fa fa-id-card-o icon1" aria-hidden="true"></i>job information<i class="fa fa-arrow-circle-o-right icon2" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-file-text-o icon1" aria-hidden="true"></i>job description<i class="fa fa-arrow-circle-o-right icon2" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-cogs icon1" aria-hidden="true"></i>vacancy setting<i class="fa fa-arrow-circle-o-right icon2" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-check-circle-o icon1" aria-hidden="true"></i>publish job<i class="fa fa-arrow-circle-o-right icon2" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    </div>
    <!-- left side ends -->
<!-- right side starts -->
    <div class="col-lg-9 col-md-8 p-0">
    <div class="content-right mb-2">
    <h3>basic information</h3>
    <!-- right side ends -->
<!-- form starts -->
    <form class=" mb-3">
    <div class="form-flex1">
    <span class="long-label">job title:</span><br>
    <div class="bothdiv">
    <input type="text" class="long m-0" name="title" ></input><br>
    <h5>Name of the job position that represents the core function.</h5>
    </div>
    </div>
    
    <div class="form-flex1">
    <span class="long-label">job category:</span><br>
    <input type="text" class="long" name="title"placeholder="Select Job Category" ><br>
    <button><i class="fa fa-caret-down down-arrow" aria-hidden="true"></i></button>
    </div>
    <div class="form-flex1">
    <span class="long-label">sub category:</span><br>
    <input type="text" class="long" name="title"placeholder="Select Sub Category" ><br>
    <button><i class="fa fa-caret-down down-arrow" aria-hidden="true"></i></button>
    <!-- <ul>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    <li>Accounting / Finance</li>
    </ul> -->
    </div>
    <div class="form-flex1">
    <span class="short-label">no. of vacancy:</span><br>
    <div class="bothdiv">
    <input type="text" class="short m-0" name="title" ><br>
    <h5>Required number of employee</h5>
    </div>
    
    <span class="short-label2">job level:</span><br>
    <button><i class="fa fa-caret-down down-arrow" aria-hidden="true"></i></button>
    
    <div class="bothdiv m-0">
    <input type="text" class="short" name="title" ><br>
    <h5>level of this job position.</h5>
    </div>
    </div>
    <div class="form-flex1">
    <span class="short-label">available for:</span><br>
    <div class="avail">
    <input type="text" class="short" name="title" ><br>
    <button><i class="fa fa-caret-down down-arrow" aria-hidden="true"></i></button>
    </div>
    <span class="short-label2">deadline:</span><br>
    <div class="avail">
    <input type="text" class="short" name="title" ><br>
    </div>
    </div>
    <div class="form-flex1">
    <span class="long-label">job location:</span><br>
    <div class="bothdiv m-0">
    <input type="text" class="long" name="title" ><br>
    <h5>Mention your company or provided job location</h5>
    </div>
    </div>
    <div class="form-flex1">
    <span class="short-label3">offered salary:</span><br>
    <div class="offered">
    <input type="text" class="short2" name="title" ><br>
    <button><i class="fa fa-caret-down down-arrow" aria-hidden="true"></i></button>
    </div>

    <input type="text"class="short2"placeholder="Minimum" name="title" ><br>
    <input type="text"class="short2"placeholder="Maximum" name="title" ><br>
    <div class="offered2">
    <input type="text"class="short2 mr-0" name="title" ><br>
    <button><i class="fa fa-caret-down down-arrow" aria-hidden="true"></i></button>
    </div>
    </div>
    </form>
    <!-- form ends -->

    <!--upload image starts-->

    <div class="company-images">
    <div class="company-logo">
    <div class="row">
    <div class="col-lg-2 col-md-2 p-0">
    <h4>company logo</h4>
    </div>
    <div class="col-lg-10 col-md-10 ">
    <button class="choose-btn">choose file</button><span class="no-div"> no choosen file</span><br>
    <span class="uploadto">Upload if you want to show alternate company logo.</span>
    </div>
    </div>

    <div class="row mt-3">
    <div class="col-lg-2 col-md-2 p-0">
    <h4>job banner</h4>
    </div>
    <div class="col-lg-10 col-md-10 mb-2 ">
    <button class="choose-btn">choose file</button><span class="no-div"> no choosen file</span><br>
    <span  class="uploadto">Upload if you want to set job banner, else default banner will show</span>
    </div>
    </div>
    </div>
    </div>
        <div class="last-btn p-4">
        <button class="submitbtn">next<img src="../images/slidearrow.png"alt="this is icon"class="p-1"width="20px"></button>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>


    <div class="vacancy-setting">
    <div class="container">

    
    
    </div>
    </div>
</body>
</html>