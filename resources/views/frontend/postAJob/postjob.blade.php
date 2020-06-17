<link rel="stylesheet" href="css/postjob.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="postjob">
    <div class="container main-con">
        <div class="row mt-4">
        
            <div class="col-12">
                <div class="card mb-3 pb-3">
                    <div class="card-header px-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="postjob-header">
                                    <span><i class="fas fa-plus-square"></i>Post Your Jobs</span>
                                </div> 
                            </div>

                            <div class="col-md-6 right-btn">
                                <div class="one-step">
                                    <a href="/kumaridesign/frontend/postajob/onestep-index.php"><i class="far fa-file-alt mr-1"></i> Post In One Step</a>
                                </div>
                            </div>
                      </div>

                    </div>
                    <div class="card-body px-5">
                        <div class="sub-postjob">
                            <span>Welcome to Kumari Job for employers!<span><br>
                            <span class="sub-content">You haven't posted from this account before. Let's get started.</span>
                        </div>
                        <div class="not-post">
                            <div class="not-here py-3 px-3 mt-4"id="not-here"><i class="far fa-question-circle pr-2"></i>Not  Here To Post A Job?<i class="fas fa-chevron-down"></i></div>
                                <div class="dropdown-btn" id="drop">
                                    <ul>
                                        <li class="main-list px-3 pt-3">Job seekers: 
                                            <ul>
                                                <li class="sub-list pt-2"><a href="">Search for a new job</a></li>
                                                <li class="sub-list"><a href="">Upload your resume</a></li>
                                            </ul>
                                        </li>
                                        <li class="main-list py-3 px-3">Employers:
                                        <ul>
                                                <li class="sub-list pt-2"><a href="">Open a previous job post</a></li>
                                                <li class="sub-list"><a href="">Request access to company account</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            
                        </div>
                        <div class="form-title mt-4">
                            <span>Create your job postiing account</span>
                        </div>
                        <div class="fill-form">
                            <form>
                                <div class="fill-div mt-3">
                                    <span> Your Company Name*</span><br>
                                    <input type="text" name="cname">
                                </div>
                                <div class="fill-div mt-3">
                                    <span> Hires Per Year</span><br>
                                    <select id="hires">
                                        <option value="">Expected hires over a year</option>
                                        <option value="">1</option>
                                        <option value="">2-5</option>
                                        <option value="">6-9</option>
                                        <option value="">10+</option>
                                        <option value="">I don't know</option>
                                    </select>
                                </div>
                                <div class="fill-div mt-3">
                                    <span> Your Name*</span><br>
                                    <input type="text" name="cname">
                                </div>
                                <div class="fill-div mt-3">
                                    <span> Phone Number*</span><br>
                                    <input type="text" name="cname">
                                </div>
                                <div class="fill-div my-3">
                                    <span> How did you hear about us?</span><br>
                                    <select id="hires">
                                        <option value="">Secect Option</option>
                                        <option value="">TV</option>
                                        <option value="">Online Video</option>
                                        <option value="">Social Media </option>
                                        <option value="">Newspaper </option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="more-info mt-5 px-3 py-3">
                            <span class="text-danger"><i class="fas fa-exclamation-circle pr-2"></i>We need more information to continue. See above:</span>
                            <ul class="m-0">
                                <li>Company name</li>
                                <li>Your name</li>
                                <li>Phone number</li>
                            </ul>
                        </div>

                        <div class="continue-btn mt-5">
                            <a href="/kumaridesign/frontend/postajob/index2.php">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>

<script>
$(document).ready(function(){
    $("#not-here").click(function(){
      $("#drop").toggle("slow");
    });
  });

</script>