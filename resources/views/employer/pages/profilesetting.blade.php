<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="ckeditor/ckeditor.js"></script>

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap-switch.css" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="bootstrap-switch.js"></script>
   <title>Document</title>
<style>

.card-title{
    border:1px solid lightgrey;
    padding:15px 15px;
    position:relative;
}
.card-title i{
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

table{
    width:100%;
}
.card-body tr{
    border-top:1px solid lightgrey;
}
.card-body td{
    padding:16px 0;
    font-size: 0.8125rem;
    font-weight: 400;
    color: #000;
    text-transform: capitalize;
}
.company{
    font-weight:600;
}
.address{
    font-size: 0.7599rem;
}
.tdata{
    color:grey;
}
.last-row{
    border-block-end:1px solid lightgrey;
}

.paragraph{
    background-color:lightblue;
}
.paragraph p{
    font-size:0.8125rem;
    font-weight:400;
    padding:15px;
    color:#000;
}
.content{
    text-transform:capitalize;
    font-size:14px;
    font-weight:400;
    color:#000;
    display:flex;
    justify-content:flex-end;
    align-items:center;
}
.customize{
    border-top:1px solid lightgrey;
}
.text-write{
    width:100%;
    height:200px;
}
.customize-header{
    padding:15px 0;
    border-bottom:1px solid lightgrey;
}
.customize-content{
    text-transform:capitalize;
    font-size:14px;
    font-weight:bold;
    color:#000;
}
.main-item{
    border-block-end:1px solid lightgrey;
    padding:15px 0;
    position:relative;
}
.item{
    text-transform: capitalize;
    color: #000;
    font-size: 0.8125rem;
    font-weight: 400;
}
.float-item{
    position:absolute;
    top:13px;
    right:15px;
    text-transform:capitalize;
    font-size:0.8125rem;
    font-weight:400;
    padding:4px 8px;
    background-color:#F29F05;
    border:none;
}
.submit{
    display:flex;
    justify-content:flex-end;
}
.submit button{
    background-color:#F29F05;
    border:none;
    text-transform:capitalize;
    font-size:14px;
    font-weight:400;
    padding:4px 10px;
}
.dropdown-content{
    display:none;
    border-block-end:1px solid lightgrey;
    padding:15px 20px;
}
.top-email{
    padding:20px 20px;
    border-top:1px solid lightgrey;
    border-block-end:1px solid lightgrey;
}
.request,.mail{
    font-size:13px;
    font-weight:400;
    color:#000;
}
.request{
    font-weight:bold;
}
.mail i{
    padding-right:5px;
    /* opacity:0.5; */
}
.very,.prime{
    font-size:0.7125rem;
    font-weight:700;
    border:1px solid lightgrey;
    padding:2px 5px;
    color:#000;
}
.very i{
    padding-right:5px;
}
.very{
    background-color:#adc22a;
}
.prime{
    background-color:blue;
    color:#fff;
}
.primary-btn{
    padding:15px 0;
    /* border-block-end:1px solid lightgrey; */
    display:flex;
    justify-content:center;
    align-items:center;
}
.primary-btn button{
    font-size:0.7525rem;
    font-weight:400;
    border:1px solid #00aeda;
    margin:5px;
    color:#00aeda;
    background-color:#fff;
    padding:2px 5px;
}
.primary-btn button:hover{
    background-color:#00aeda;
    color:#fff;
}
.header-mail{
    border-block-end:1px solid lightgrey;
    padding:15px 0;
}
.header-mail span{
    font-size:0.8552rem;
    font-weight:600;
    color:#000;
    padding:0 20px;
}
.form-mail{
    padding:20px;
    border-block-end:1px solid lightgrey;
}
.form-mail span{
    font-size:0.8125rem;
    font-weight:400;
    color:#000;
}
.form-mail input{
    font-size:0.8125rem;
    font-weight:400;
    width:100%;
    height:35px;
    color:#000;
    padding:0 15px;
}
.nbox{
    border:1px solid lightgrey;
}
.add-btn{
    display:flex;
    justify-content:center;
    align-items:center;
    padding:15px 0;
}
.add-btn button{
    font-size:0.8125rem;
    font-weight:500;
    margin:5px;
    padding:5px 10px;
}
.add-btn .btn1{
    background-color:#000140;
    color:#fff;
    border:1px solid #001835;
}
.add-btn .btn2{
    background-color:#fff;
    color:#00aeda;
    border:1px solid #00aeda;
}
.add-btn .btn1:hover{
    background-color:#001835;
}
.add-btn .btn2:hover{
    background-color:#00aeda;
    color:#fff;
}

.carddiv{
    border-block-end:1px solid lightgrey;
    padding:0 15px 25px 15px;
}
.formdiv{
    padding:15px 10px;
}
.formdiv span{
    width: 100%;
    height: 35px;
    font-size: 0.8125rem;
    font-weight: 400;
    color:#000;   
}
.formdiv input{
    width: 100%;
    height: 35px;
    padding: 5px 10px;
    font-size: 0.8125rem;
    font-weight: 400;
    color:#000;
}
.cardspan1{
    font-size: 14px;
    font-weight: bold;
    color:#000;
}
.cardspan2{
    font-size: 0.7525rem;
    font-weight: 400;
}
.toggle.btn-xs {
    min-width: 3.19rem!important;
}
@media only screen and (max-width:425px){
    .content{
        display:block;
    }
}

</style>
</head>
<body>
    <div class="setting">
        <div class="container p-0">
            <div class="row mt-2">
                <div class="col-md-3">
                    @include('employer.pages.employersidebar')

                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="container p-0 mb-2">
            
                        <div class="card-title">
                            <div class="first-title"><span class="first-header"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>account setting</span>
                            <span class="second-title"><a href="editprofile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>preview profile</a></span>
                             </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="first-content">
                                <span class="first-header">company page setting</span>
                                <!-- <span class="second-content">choose your public profile preferences</span> -->
                                </div>
                            </div>
                        
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td width="45%">Do you want to make your profile public.</td>
                                        <td width="45%"><span class="company tdata">kumari job</span></td>
                                        <td width="10%"><input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs"></td>
                                    </tr>

                                    <tr>
                                        <td>Display the Organization Summary</td>
                                        <td><span class="tdata">Kumari Job Is One Of The ..</span></td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs"></td>
                                    </tr>

                                    <tr>
                                        <td>Display Organization Address</td>
                                        <td><span class="address tdata">Tinkune, Kathmandu, Central Development Region, Nepal</span></td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs"></td>
                                    </tr>

                                    <tr class="last-row">
                                        <td>Display Social Accounts</td>
                                        <td></td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>




                        <div class="card">
                            <div class="card-header">
                                <div class="first-content">
                                <span class="first-header">auto responder</span>
                                <!-- <span class="second-content">choose your public profile preferences</span> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="paragraph">
                                    <p>This is automatic response message, the message in the box is automatically sent to the online applicants who have applied for the job that you have posted. You can also change the message in anyway you like.<br><br>
                                    Note that the items in parentheses put variables in your message to make it more personal (for instance, if the job title is "General Manager", then "application for the post of {{ Job_Title }}" in the message will become "application for the post of General Manager").<br><br>
                                    Please feel free to edit or add to your message. The default for your company is to send out this message. If you would prefer not to send a message, click the "DISABLE" button above (of course we encourage you to keep the message enabled, as it keeps you in touch with the applicant.)
                                    </p>
                                </div>

                                <div class="row pt-4 pb-3">
                                    <div class="col-md-4">
                                        <span class="content">Enable/Disable default autoreponse</span>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <span class="content">message</span>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="text-write ckeditor" name="editor"></textarea>
                                    </div>
                                </div>
                                <div class="customize">
                                    <div class="customize-header">
                                        <span class="customize-content">customize job autoresponse</span>
                                    </div>
                                    <div class="main-item"> 
                                        <span class="item">marketing executive</span>
                                        <button class="float-item"id="float">view</button>
                                    </div>
                                    <div class="dropdown-content" id="drop">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Assistant Marketing Manager</span>
                                        <button class="float-item"id="float1">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop1">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Marketing Executive</span>
                                        <button class="float-item"id="float2">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop2">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Graphic Designer</span>
                                        <button class="float-item"id="float3">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop3">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Marketing Manager Cum Officer</span>
                                        <button class="float-item"id="float4">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop4">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Marketing Executive</span>
                                        <button class="float-item"id="float5">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop5">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Receptionist</span>
                                        <button class="float-item"id="float6">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop6">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Media Trainee Reporter</span>
                                        <button class="float-item"id="float7">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop7">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="main-item"> 
                                        <span class="item">Graphic Designer/ Video Editor</span>
                                        <button class="float-item"id="float8">view</button>
                                    </div>
                                    <div class="dropdown-content"id="drop8">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <span class="content">Enable/Disable default autoreponse</span>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary"data-on="Yes"data-off="No"data-offstyle="secondary"data-size="xs">
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <span class="content">message</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="text-write"></textarea>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button>save</button>
                                        </div>
                                    </div>

                                    <div class="add-btn p-0 pt-4">
                                        <button class="btn1">Save</button>
                                        <button class="btn2">Cancel</button>
                                    </div>


                                </div>
                            
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-header">
                                    <div class="first-content">
                                    <span class="first-header">change email</span>
                                    <!-- <span class="second-content">choose your public profile preferences</span> -->
                                    </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="top-email">
                                    <span class="request">Please Fill up the form to change your email address</span>
                                    <div class="flex">
                                        <span class="mail"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>kumarijob@gmail.com</span>
                                        <span class="very"><i class="fa fa-check-square-o" aria-hidden="true"></i>Verified</span>
                                        <span class="prime">Primary</span>
                                    </div>
                                </div>
                                <div class="primary-btn">
                                    <button>Make Primary</button>
                                    <button>Remove</button>
                                </div>
                                <div class="nbox">
                                    <div class="header-mail">
                                        <span>Add Email Address</span>
                                    </div>
                                    <form class="form-mail">
                                        <span>E-mail*</span><br>
                                        <input type="email" placeholder="E-mail address">
                                    </form>
                                    <div class="add-btn">
                                        <button class="btn1">Add Email</button>
                                        <button class="btn2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                    <div class="first-content">
                                    <span class="first-header">change password</span>
                                    <!-- <span class="second-content">choose your public profile preferences</span> -->
                                    </div>
                            </div>
                            <div class="card-body">
                                <form class="carddiv">
                                    <div class="formdiv">
                                        <span>Current Password*</span><br>
                                        <input type="text"placeholder="Current Password">
                                    </div>
                                    <div class="formdiv">
                                        <span>New Password*</span><br>
                                        <input type="text"placeholder="New Password">
                                    </div>
                                    <div class="formdiv">
                                        <span>Re-Enter New Password*</span><br>
                                        <input type="text"placeholder="Re-Enter New Password">
                                    </div>
                                </form>

                                <div class="add-btn">
                                        <button class="btn1">Change Password</button>
                                        <button class="btn2">Cancel</button>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                    <div class="first-content">
                                    <span class="first-header">deactivate account</span>
                                    <!-- <span class="second-content">choose your public profile preferences</span> -->
                                    </div>
                            </div>
                            <div class="card-body">
                                <span class="cardspan1">Fill your password to deactivate your account.</span><br>
                                <span class="cardspan2">Note: This action cannot be reverted.</span>

                                <form class="carddiv">
                                    <div class="formdiv">
                                        <span>Password*</span><br>
                                        <input type="text">
                                    </div>
                                </form>
                                <div class="add-btn p-0 pt-4">
                                        <button class="btn1">Deactivate</button>
                                        <button class="btn2">Cancel</button>
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
            $( "#float" ).click(function() {
            $( "#drop" ).slideToggle();
            });

            $( "#float1" ).click(function() {
            $( "#drop1" ).slideToggle();
            });

            $( "#float2" ).click(function() {
            $( "#drop2" ).slideToggle();
            });

            $( "#float3" ).click(function() {
            $( "#drop3" ).slideToggle();
            });

            $( "#float4" ).click(function() {
            $( "#drop4" ).slideToggle();
            });

            $( "#float5" ).click(function() {
            $( "#drop5" ).slideToggle();
            });

            $( "#float6" ).click(function() {
            $( "#drop6" ).slideToggle();
            });

            $( "#float7" ).click(function() {
            $( "#drop7" ).slideToggle();
            });

            $( "#float8" ).click(function() {
            $( "#drop8" ).slideToggle();
            });

            $( "#float9" ).click(function() {
            $( "#drop9" ).slideToggle();
            });

            $( "#float10" ).click(function() {
            $( "#drop10" ).slideToggle();
            });

            $("[name='my-checkbox']").bootstrapSwitch();
            
        });
    </script>
</body>
</html>
