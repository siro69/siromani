<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<style>
.form-edit{
    /* font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif; */
}
/* card-header css starts */
.card-header{
    position:relative;
}
.first-header{
    text-transform:capitalize;
    font-size:15px;
    font-weight:bold;
    color:#000;
}
.second-header{
    position:absolute;
    top:9px;
    right:15px;
    border:1px solid;
    padding:3px 9px;
}
.second-header:hover{
    background-color:#F29F05;
    color:#fff;
}
.second-header:hover.second-header a{
    color:#fff;
}
.second-header i{
    padding:0 5px;
    /* color:grey; */
}
.second-header a{
    text-transform:capitalize;
    font-size: .71094rem;
    font-weight:300;
    color:#000;
    text-decoration:none;
}
/* card-header css ends */

/* form css starts */
table{
    width:100%;
    margin-bottom:1rem;
}
table td{
    text-transform:capitalize;
    font-size:14px;
    font-weight:400;
    color:#000;
    padding:0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
tbody tr:nth-of-type(odd){
    background-color: rgba(0,0,0,.05);
}
table td i{
    padding-right:5px;
    opacity:0.3;
}
/* form css ends */

/* contact person css starts */
.org-head{
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-block-end:1px solid lightgrey;

}
.addorg-head a{
    text-transform:capitalize;
    font-size:14px;
    font-weight:400;
    color:#18298C;
    text-decoration:none;
}
.addorg-head i{
    padding-right:5px;
    opacity:0.5;
}
.contact-person{
    position:relative;
    padding:10px 0;
}
.second-subheader{
    position:absolute;
    top:9px;
    right:15px;
    padding:3px 9px; 
}
.second-subheader i{
    padding:0 5px;
    /* color:grey; */
}
.second-subheader a{
    text-transform:capitalize;
    font-size: 14px;
    font-weight:300;
    color:#18298C;
    text-decoration:none;
}
/* contact person css ends */
/* service css starts */
.no-service{
    text-transform:capitalize;
    font-size: 20px;
    font-weight:400;
    color:#18298C;
    padding:20px 0 0px 0;
}
/* service css ends */
</style>
</head>
<body>
<div class="mainprofile-div">
    <div class="container p-0">
    <div class="row mt-2">
        <div class="col-md-3">
            @include('employer.pages.employersidebar')

        </div>
        <div class="col-lg-9 col-md-9 form-edit">
        <div class="container p-0 mb-2">
        
                <div class="card">
                    <div class="card-header"><span class="first-header">basic information</span>
                    <span class="second-header"><a href="edit-info.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit basic info</a></span>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-reponsive">
                            <table>
                                <tr>
                                <td width="25%">organization name</td>
                                <td>:</td>
                                <td>kumari jobs</td>
                                </tr>

                                <tr>
                                <td>industry</td>
                                <td>:</td>
                                <td>kumari jobs</td>
                                </tr>

                                <tr>
                                <td>display picture</td>
                                <td>:</td>
                                <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i>change your display picture</td>
                                </tr>

                                <tr>
                                <td>ownership</td>
                                <td>:</td>
                                <td><i class="fa fa-plus-circle" aria-hidden="true"></i>add  ownership</td>
                                </tr>

                                <tr>
                                <td>organization size</td>
                                <td>:</td>
                                <td><i class="fa fa-plus-circle" aria-hidden="true"></i>add size of organization</td>
                                </tr>

                                <tr>
                                <td>summary</td>
                                <td>:</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quod, nobis facilis iste perspiciatis, explicabo, corrupti minus itaque magni saepe optio id tempora. Ducimus excepturi, debitis magni quam dolorum quidem!<br><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sint porro aspernatur cum! Quod similique voluptates, enim ex voluptatum sapiente voluptate eligendi soluta praesentium eum nulla non magnam deserunt in.</td>
                                </tr>

                                <tr>
                                <td>website</td>
                                <td>:</td>
                                <td><i class="fa fa-plus-circle" aria-hidden="true"></i>add website</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- contact details starts -->
                    <div class="card">
                        <div class="card-header">
                            <span class="first-header">contact detail</span>
                            <span class="second-header"><a href="http://localhost/kumaridesign/empdashboard/edit-info.php#edit-contact"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit contact detail</a></span>
                        </div>

                        <div class="card-body">
                            <!-- <div class="row">
                                <div class="col-md-12"> -->
                                    <div class="table-reponsive">
                                        <table>
                                            <tr>
                                            <td width="25%" >address</td>
                                            <td>:</td>
                                            <td>tinkune, kathmandu, Central Development Region, Nepal</td>
                                            </tr>

                                            <tr>
                                            <td>contact no.</td>
                                            <td>:</td>
                                            <td>+97798610000000</td>
                                            </tr>
                                        </table>
                                    </div>
                                <!-- </div>
                            </div> -->
                        </div> 
                    </div>
                    <!-- contact details ends -->

                    <!-- contact person starts -->
                    <div class="card">
                    <div class="card-header">
                            <span class="first-header">contact person</span>
                            <span class="second-header"><a href="http://localhost/kumaridesign/empdashboard/edit-info.php#add-contact"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>add contact person</a></span>
                        </div>

                        <div class="card-body">
                            <div class="org-head pb-2">
                                <img src="../images/contact.png" alt="this is image">
                                <span class="addorg-head"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>add organization head</a><span>
                            </div>
                            <div class="contact-person">
                            <span class="first-header">contact person-1</span>
                            <span class="second-subheader"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit</a></span>
                            </div>
                            <div class="table-reponsive">
                                <table>
                                    <tr>
                                        <td width="25%">name</td>
                                        <td>:</td>
                                        <td>kumari job</td>
                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td>:</td>
                                        <td>kumarijob@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>designation</td>
                                        <td>:</td>
                                        <td>web developer</td>
                                    </tr>
                                    <tr>
                                        <td>mobile number</td>
                                        <td>:</td>
                                        <td>+977123454689</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- contact persons ends -->

                    <!-- service starts -->

                    <div class="card">
                        <div class="card-header">
                            <span class="first-header">service</span>
                            <span class="second-header"><a href="http://localhost/kumaridesign/empdashboard/edit-info.php#add-service"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>add service</a></span>
                        </div>

                        <div class="card-body">
                        <div class="org-head pb-2">
                                <img src="../images/no-service2.png"width="120px" alt="this is image">
                                <span class="no-service">no service found</span>
                                <span class="addorg-head"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>add service</a><span>
                            </div> 
                        </div>
                    </div>
                    <!-- service ends -->

                    <!-- social account starts -->
                    <div class="card">
                       <div class="card-header">
                            <span class="first-header">social account</span>
                            <span class="second-header"><a href="http://localhost/kumaridesign/empdashboard/edit-info.php#add-socialaccount"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>add social account</a></span>
                        </div>

                        <div class="card-body">
                        <div class="org-head pb-2">
                                <img src="../images/social-accountS.png" alt="this is image">
                                <span class="no-service">no social accounts found</span>
                                <span class="addorg-head"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>add social accounts</a><span>
                            </div> 
                        </div>
                    </div>
                    <!-- social account ends -->
                    <!-- <div class="card-footer">Footer</div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

    
</body>
</html>
