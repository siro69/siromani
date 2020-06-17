<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/job-details.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Document</title>
<style>
.company-image{
    position:relative;
    margin-bottom:20px;
}
.company-logo img{
    border:1px solid;
    border-radius:100%;
    position:absolute;
    bottom:-20px;
    left:100px;
    background:#fff;
    z-index:1;
    width:120px;
}
.company-title{
    padding:15px 0;
    background: -webkit-linear-gradient(top,transparent,rgba(0,0,0,.88) 97%,rgba(0,0,0,.88));
    background: linear-gradient(180deg,transparent,rgba(0,0,0,.88) 97%,rgba(0,0,0,.88));
    position:absolute;
    bottom:0;
    width:100%;
}
.company-name{
    color:#fff;
    font-size:1.25rem;
    font-weight:bold;

}
.premium{
    position:absolute;
    top:15px;
    right:15px;
    display:flex;
    flex-direction:flex-end;
}
.job-type{
    color:#fff;
    font-size:0.8125rem;
    padding: 5px 6px;
    background-color:#EC7C03;
}
.job-type i{
    padding-right:5px;
}
.left-part .card-header{
    padding: 0.5rem 1.25rem;
}
.left-part .card-header span{
    color:#000;
    font-size:0.85rem;
    font-weight:bold;
}
.left-part .card-body{
    padding-top:0.85rem;
}
.left-part .comp a{
    font-size:1.25rem;
    font-weight:600;
    color:#002a5b;
    text-decoration:none;
}
.left-part p{
    font-size:0.8525rem;
    font-weight:300;
    color:#002a5b;
}
.post-job a,.edit-profile a{
    border:1px solid lightgrey;
    padding:4px 7px;
    color:#002a5b;
    text-decoration:none;
    margin:5px; 
    font-size:0.7822rem;
    font-weight:400;
}
.left-part .card-footer a:hover{
    background-color:#EC7C03;
    border:1px solid #EC7C03;
    color:#fff;
}
.post-job:hover.post-job i{
    opacity:1;
}
.edit-profile:hover.edit-profile i{
    opacity:1;
}
.left-part .card-footer{
    display:flex;
    justify-content:center;
    align-items:center;
}
.left-part .card-footer i{
    padding-right:5px;
    opacity:0.3;
}
.card-title{
    position:relative;
    border:1px solid lightgrey;
    padding:15px;
    
}
.right-title{
    position:absolute;
    top:15px;
    right:15px;
    display:flex;
}
.first-header{
    font-weight:bold;
    font-size:17px;
    color:#000;
}
.second-title,.second-subtitle{
    font-weight:400;
    font-size:0.7525rem;
    color:#000;
    padding:0 7px;
}
.second-title img{
    padding-right:5px;
    opacity:0.5;
    padding-bottom:5px;
}
.second-title{
    color:#020A96;
}
.second-subtitle{
    border-left:2px solid;
    margin-left:2px;
    color:#000;
}
.card-subheader{
    color:#000;
    font-size:0.8325rem;
    font-weight:bold;
}
.card-header{
    position:relative;
}
.right-subheader{
    position:absolute;
    top:11px;
    right:15px;
    text-transform:capitalize;
    font-size:0.7878rem;
    font-weight:400;
    border:1px solid lightgrey;
    padding:4px 8px;
}
.right-subheader a{
    text-decoration:none;
    color:#000;
}
.right-subheader i{
    padding-right:5px;
}
.right-subheader:hover{
    background-color:#F29F05;
}
.right-subheader:hover.right-subheader a{
    color:#fff;
}
.card-body table{
    width:100%;
}
.card-body{
    padding:0 30px 0 30px;

}
table tr{
    border-top:1px solid lightgrey;
}
table td{
    padding:12px 0;
    font-size:0.7878rem;
    font-weight:400;
    text-transform:capitalize;
    color:#000;
}
td span{
    color: #002a5b;
}
.skill{
    border:1px solid #3264A6;
    background-color:#3264A6;
    color:#fff;
    padding:0px 2px;
    margin:4px;
    font-size:0.7125rem;
    font-weight:bold;
}
.specify{
    border-block-end:1px solid lightgrey;
    padding: 0.25rem;
    margin: 5px 0px;
}
.specify span{
    color:#000;
    font-size:0.8125rem;
    font-weight:bold;
    text-transform:capitalize;
}
.specify-content li{
    font-size:0.7878rem;
    font-weight:500;
    color:#000;
    line-height:2;
}  
.specify-content ul{
    padding:0 35px;
} 
.specify-content p{
    font-size:0.7878rem;
    font-weight:500;
    color:#000;
    padding:0 15px;
}
.specify-content a{
    color:#002a5b;
    font-weight:bold;
    font-size:13px;
}
.specify-content a:hover{
    color:#000;
}
.specify-content .big{
    padding-top:5px;
    color:#000;
    font-size:0.7678rem;
    font-weight:bold;
    display:flex;
    justify-content:center;
    align-items:center;
}
.apply-btn{
    border-top:1px solid lightgrey;
    padding:1.755rem 1.25rem;
    display:flex;
    flex-direction: column;
    justify-content:center;
    align-items:center;
}
.apply-btn a{
    color:#000;
    text-decoration:none;
}
.apply-btn i{
    padding-right:5px;
    opacity:0.6;
    font-size:16px;
}
.apply-btn button{
    text-transform:capitalize;
    font-size:0.8125rem;
    font-weight:bold;
    padding:5px 10px;
    background-color:#adc22a;
    border:1px solid #adc22a;
    /* opacity:0.5; */
}

.direct:hover{
    text-decoration:underline;
}
.apply-btn span{
    font-size:0.7585rem;
    font-weight:500;
    color:#000;
    padding-top:3px;
}
.share ul{
    display:flex;
    justify-content:flex-end;
    align-items:center;
    border-top:1px solid lightgrey;
    padding-top:10px;
}
.share li{
    list-style:none;
    padding:0 5px;
    position: relative;
    top: 0;
    transition: top ease 0.3s;
}
.share li:hover{
    top:-5px;
}
.share a{
    text-decoration:none;
    font-size:1.5rem;
}
@media only screen and (max-width:990px){
    .right-title{
        position:relative;
        top:0;
        right:0;
    }
}  
</style>
</head>
<body>
   
    <div class="container">
        <div class="company-image">
            <img src="images/premium-banner.jpg" width="100%">
            <span class="company-logo"><img src="images/infotech.png"></span>
            <div class="company-title">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                        <span class="company-name">Infotech Services Pvt. Ltd. </span>
                    </div>
                </div>
            </div>
            <div class="premium">
                        <span class="job-type"><i class="fas fa-fire-alt"></i>Hot Job</span>
            </div>
        </div>
       
    </div>
<div class="jobview">
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-4 col-md-4 right-side-related left-part">
                 <div class="card">
                     <div class="card-header">
                         <span>Job Action</span>
                    </div>
                     <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/kumari-logo.png" width="90px">
                            </div>
                            <div class="col-md-8">
                                <span class="comp"><a href="">Kumari Job</a></span>
                                <p>Lorem ipsum dolor sit amet consectetur,</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                            <span class="post-job"><a href=""><i class="fas fa-plus-circle"></i>Post Jobs</a></span>
                            <span class="edit-profile"><a href=""><i class="far fa-file-alt"></i>Edit Profile</a></span>
                        </div>
                </div>
                    <!-- <div class="jobalert-card mb-3 mt-3">
                        <img src="images/job-alert.png" class="responsive w-100">
                    </div> -->
                    <h5 class="text-center related-h5 p-2">Related Jobs</h5>
                    <div class="bg-white shadow mb-2">
                        <div class="row detail-margin py-3">
                            <div class="col-md-3 pl-4 pr-0">
                                <div class="related-img">
                                    <img src="https://www.kumarijob.com/assets/uploads/profilepics/Untitled-136.jpg" class="responsive">
                                </div>
                            </div>
                            <div class="col-md-9 top-details pl-2">
                                <div class="related-header">
                                    <a href="#." class="related-title">Account Assistant</a><br>
                                    <a href="#." class="c-name">Annapurna Aroma Company Pvt. Ltd</a>
                                </div>
                                <div class="seperator seperator2 justify-content-center "></div>
                                <div class="related-action">
                                    <span class="space pl-0 text-danger"><i class="fas fa-history"></i> 4 days left</span>
                                    <span class="space"><a href="#."><i class="far fa-save"></i> Save</a></span>
                                    <span><a href="#."><i class="far fa-hand-point-right"></i> Apply</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second jobs -->
                    <div class="bg-white shadow mb-2">
                        <div class="row detail-margin py-3">
                            <div class="col-md-3 pl-4 pr-0">
                                <div class="related-img">
                                    <img src="https://www.kumarijob.com/assets/uploads/profilepics/oilogo.jpg" class="responsive">
                                </div>
                            </div>
                            <div class="col-md-9 top-details pl-2">
                                <div class="related-header">
                                    <a href="#." class="related-title">Human Resource Manager</a><br>
                                    <a href="#." class="c-name">Orbit International</a>
                                </div>
                                <div class="seperator seperator2 justify-content-center "></div>
                                <div class="related-action">
                                    <span class="space pl-0 text-danger"><i class="fas fa-history"></i> 3 days left</span>
                                    <span class="space"><a href="#."><i class="far fa-save"></i> Save</a></span>
                                    <span><a href="#."><i class="far fa-hand-point-right"></i> Apply</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- third jobs -->
                    <div class="bg-white shadow mb-2">
                        <div class="row detail-margin py-3">
                            <div class="col-md-3 pl-4 pr-0">
                                <div class="related-img">
                                    <img src="https://www.kumarijob.com/assets/uploads/profilepics/INFO_tech.PNG" class="responsive">
                                </div>
                            </div>
                            <div class="col-md-9 top-details pl-2">
                                <div class="related-header">
                                    <a href="#." class="related-title">Receptionist (Kumaripati)</a><br>
                                    <a href="#." class="c-name">Infotech Services Pvt. Ltd.</a>
                                </div>
                                <div class="seperator seperator2 justify-content-center "></div>
                                <div class="related-action">
                                    <span class="space pl-0 text-danger"><i class="fas fa-history"></i> 2 days left</span>
                                    <span class="space"><a href="#."><i class="far fa-save"></i> Save</a></span>
                                    <span><a href="#."><i class="far fa-hand-point-right"></i> Apply</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fourth job -->
                    <div class="bg-white shadow">
                        <div class="row detail-margin py-3">
                            <div class="col-md-3 pl-4 pr-0">
                                <div class="related-img">
                                    <img src="https://www.kumarijob.com/assets/uploads/profilepics/ajeet_logo_jpg1.jpg" class="responsive">
                                </div>
                            </div>
                            <div class="col-md-9 top-details pl-2">
                                <div class="related-header">
                                    <a href="#." class="related-title">Account Assistant</a><br>
                                    <a href="#." class="c-name">Annapurna Aroma Company Pvt. Ltd</a>
                                </div>
                                <div class="seperator seperator2 justify-content-center "></div>
                                <div class="related-action">
                                    <span class="space pl-0 text-danger"><i class="fas fa-history"></i> 4 days left</span>
                                    <span class="space"><a href="#."><i class="far fa-save"></i> Save</a></span>
                                    <span><a href="#."><i class="far fa-hand-point-right"></i> Apply</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="container p-0">
                    <div class="card-title">
                        <div class="first-title"><span class="first-header">Back-End Web Developer</span>
                            <div class="right-title">
                                <span class="second-title"><img src="../images/view-icon.png"width="20px">Views:105</span>
                                <span class="second-subtitle">Apply Before: 36 days from now</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                            <div class="card-header">
                                <span class="card-subheader">Basic Job Information</span>
                                <span class="right-subheader"><a href="jobpost.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>edit job info</a></span>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td width="30%">job category</td>
                                        <td width="3%">:</td>
                                        <td width="67%"><span>IT & Telecommunication</span></td>
                                    </tr>
                                    <tr>
                                        <td>job level</td>
                                        <td>:</td>
                                        <td><span>mid level</span></td>
                                    </tr>
                                    <tr>
                                        <td>no. of vacancy</td>
                                        <td>:</td>
                                        <td><span>[1]</span></td>
                                    </tr>
                                    <tr>
                                        <td>gender</td>
                                        <td>:</td>
                                        <td><span>male</span></td>
                                    </tr>
                                    <tr>
                                        <td>job type</td>
                                        <td>:</td>
                                        <td><span>full-time</span></td>
                                    </tr>
                                    <tr>
                                        <td>job location</td>
                                        <td>:</td>
                                        <td><span>Tinkune, Kathmandu, Central Development Region, Nepal</span></td>
                                    </tr>
                                    <tr>
                                        <td>offered salary</td>
                                        <td>:</td>
                                        <td><span>negotiable</span></td>
                                    </tr>
                                    <tr>
                                        <td>apply before</td>
                                        <td>:</td>
                                        <td><span>apr 20, 2020</span></td>
                                    </tr>
                                </table>
                            </div>
                   
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td width="30%">education level</td>
                                        <td width="3%">:</td>
                                        <td width="67%"><span>bachelor</span></td>
                                    </tr>
                                    <tr>
                                        <td>required experience</td>
                                        <td>:</td>
                                        <td><span>more than 2 years</span></td>
                                    </tr>
                                    <tr>
                                        <td>professional skill required</td>
                                        <td>:</td>
                                        <td><span class="skill">laravel</span>
                                            <span class="skill">php</span>
                                            <span class="skill">phython</span>
                                            <span class="skill">jquery</span>
                                        </td>
                                    </tr>
                                </table>
                            
                                <div class="specify mb-4">
                                    <span> job specification</span>
                                </div>
                                <div class="specify-content">
                                    <ul>
                                        <li>Bachelor’s in Computer Science/ Engineering</li>
                                        <li>More than or equal to 2 years of work experience in building applications</li>
                                        <li>Excellent knowledge of PHP, MySQL, HTML, JQuery, JavaScript, XML, Ajax</li>
                                        <li>In-depth understanding of Advanced PHP, MVC Frameworks (Preferably Laravel)</li>
                                    </ul>
                                </div>
                                <div class="specify mb-4">
                                    <span>Job Description </span>
                                </div>
                                <div class="specify-content">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic voluptatibus
                                        assumenda fugit earum harum modi at, blanditiis, eum odio culpa iure perferendis perspiciatis 
                                        veniam. Rerum possimus inventore fuga ipsa!<br><br>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit quos repudiandae maiores, 
                                        reiciendis saepe, id repellendus tenetur quas soluta hic pariatur.
                                    </p>

                                    <div class="specify mb-4">
                                        <span>Role and Responsibilities: </span>
                                    </div>
                                    <ul>
                                        <li>Build server-side applications with the latest technologies for delivering the best experience for users</li>
                                        <li>Build platforms, frameworks, APIs, libraries & automated tools</li>
                                        <li>Keeping up-to-date with technology</li>
                                        <li>Mentoring and assigning tasks to junior web developers</li>
                                    </ul>
                                </div>
                                <div class="specify mb-4">
                                        <span>Apply Instruction </span>
                                </div>
                                <div class="specify-content">
                                    <p>Analogue Inc is equal opportunity provider and we welcome people from all walks
                                     of life to join our ever growing team of versatile professionals, applicant who meet
                                      the mentioned criteria are encouraged to apply at <span><a href="">kumarijob@gmail.com</a></span>, OR kindly
                                       visit <span><a href="">http://kumarijob.com</a></span></p>
                                       <span class="big">OR,</span>
                                </div>
                                <div class="apply-btn">
                                    <button type="button" disabled><i class="fa fa-plus-circle" aria-hidden="true"></i>apply now</button>
                                    <span>**Most be a Jobseeker to apply for this job**</span>
                                
                                </div>
                                <div class="share">
                                    <ul>
                                        <li><a href=""style="color:#4e73df;"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href=""style="color:#4e73df;"><i class="fab fa-facebook-messenger"></i></a></li>
                                        <li><a href="" style="color:#4e73df;"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="" style="color:#BF0615;"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href=""style="color:#BF0615;"><i class="fas fa-plus-square"></i></a></li>
                                    </ul>
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