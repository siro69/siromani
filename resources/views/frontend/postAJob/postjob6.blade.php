<link rel="stylesheet" href="css/postjob.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

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
                        <div class="get-start">
                            <span>Application Setting</span>
                        </div>
                        <div class="reason-header mt-4">
                            How do you want to receive applications?
                        </div>
                        <div class="btn-group mt-2">
                            <button class="btn-1 button1">Email</button>
                            <button class="btn-2 button2">Phone</button>
                            <button class="btn-3 button3">In-Person</button>
                        </div>
                        <span><i class="far fa-question-circle  question-icon text-primary"></i></span>

                        <div class="email-content">
                            <div class="reason-header mt-4">
                                Do you want applicants to submit a resume?
                            </div>
                            <div class="btn-group mt-2">
                                <button class="btn-1">Yes</button>
                                <button class="btn-2">No</button>
                                <button class="btn-3">Optional</button>
                            
                            </div>
                            <div class="communication mt-4 pt-2">
                                <div class="get-start">
                                    <span>Communication Settings</span>
                                </div>
                                <form>
                                    <div class="fill-div">
                                        <span>Daily updates about this job and candidates will be sent to:</span>
                                        <input type="text"placeholder="Enter Your Email">
                                        <div class="input-icon add-input">
                                            <input type="text"placeholder="Enter Your other Email"class="mt-3"id=""><i class="fas fa-times cross-icon"></i>
                                        </div>
                                        <div class="additional mt-2">
                                            <span class="btn-container text-primary"><i class="fas fa-plus-circle mx-1"></i>Add additional email</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label class="container mark-label">Also send an individual email update every time a new candidate applies
                                                <input type="checkbox">
                                                <span class="checkmarked"></span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                </form>

                            </div>
                            <div class="employer-assist mt-2">
                                <div class="row mt-3">
                                    <div class="col-md-9">
                                        <div class="get-start ">
                                            <span>Employer Assist</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <label class="checkbox-inline mb-0"id="assist-toggle">
                                        <input type="checkbox"  checked data-toggle="toggle"data-size="sm">
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mark-label mt-2">
                                Kumari Job cuts out work for you by removing candidates when you're not interested.
                            </div>
                            <div class="assist mt-4">
                                <div class="mark-bold text-center">
                                    <span>It's easy to keep a candidate in your queue by showing interest on Indeed:</span>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mark-label"><i class="fas fa-check mx-1"></i>Mark them as "yes" or "maybe"</div>
                                    <div class="col-md-6 mark-label"><i class="fas fa-check mx-1"></i>Schedule an interview on Indeed</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mark-label"><i class="fas fa-check mx-1"></i>Send them a message on Indeed</div>
                                    <div class="col-md-6 mark-label"><i class="fas fa-check mx-1"></i>Call them and submit a post-call survey</div>
                                </div>

                            </div>
                        </div>


                        <div class="phone-content mt-4">
                            <div class="get-start">
                                <span>Streamline your screening process</span>
                            </div>
                            <div class="fill-div mt-1">
                                <span>Set the day and time you prefer job seekers to call you, and we’ll work to connect you directly.</span>
                            </div>
                            <div class="call-detail">
                                <div class="form-title">
                                    <span>Phone call details</span>
                                </div>
                                <div class="fill-div">
                                    <div class="pre-time mt-1">Preferred Time</div>
                                    <div class="pre-content">Provide the date(s) and time frame(s) you want to receive phone calls.</div>
                                    <textarea  class="area-text mt-2"placeholder="Ex.Every Monday and Tuesday,9:00 AM - 3:00 PM or April 2-10, 9:00 AM - 3:00 PM "></textarea>
                                </div>
                                <div class="fill-div mt-3 mb-3">
                                    <div class="pre-time">Phone Number</div>
                                    <p class="pre-content">By providing your phone number, you confirm that you are the primary user and subscriber 
                                        to the telephone number entered, and you agree that Job Seekers (or anyone else viewing
                                        your job) may call you at that number, either directly or through Indeed’s autodialed relay 
                                        system, including if this is a wireless (mobile) number. Agreement to the above is not a 
                                        condition of purchase of any Indeed product.
                                    </p>
                                    <input type="number">
                                </div>
                            </div>
                            <div class="screen-que">
                                <div class="form-title">
                                    <span>Screening questions (optional, max 3)</span>
                                </div>
                                <p class="pre-content">Candidates whose answers do not meet your criteria will not be permitted to call you. Do not
                                ask questions that are discriminatory or illegal, personally invasive, or otherwise violate the Indeed Site.
                                </p>
                                
                                <div class="fill-div screening-que">
                                    <div class="input-icon">
                                        <input type="text"class="mt-3"id=""><i class="fas fa-times cross-icon"></i>
                                    </div>
                                    <div class="remote mt-4">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <span>Reject if candidate's answer is</span>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="container mark-label mb-0 mt-2">Yes
                                                    <input type="checkbox">
                                                    <span class="checkmarked"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="container mark-label mb-0 mt-2">No
                                                    <input type="checkbox">
                                                    <span class="checkmarked"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-3"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="additional mt-2">
                                    <span class="btn-container btn-ctn text-primary"><i class="fas fa-plus-circle mx-1"></i>Add custom screening question</span>
                                </div>
                            </div>
                            <div class="fill-div mt-3">
                                <div class="pre-time">Hiring manager's name (optional)</div>
                                <div class="pre-content mb-3">
                                    Let candidates know who they'll be speaking to
                                </div>
                                <input type="text">
                            </div>
                            <div class="fill-div mt-3">
                                <div class="pre-time">Hiring manager's email address</div>
                                <div class="pre-content mb-3">
                                    We'll follow up with you to see how hiring is going
                                </div>
                                <input type="text">
                            </div>
                            <div class="fill-div mt-3">
                                <div class="form-title mb-3">
                                    <span>Additional Instruction</span>
                                </div>
                                <textarea class="area-text"></textarea>
                            </div>
                        </div>


                        <div class="person-content mt-4">
                            <div class="get-start">
                                <span>Streamline your in-person applications</span>
                            </div>
                            <div class="fill-div mt-1">
                                <div class="para-item">Set the day and time you want job seekers to come in. We will send you daily emails with RSVP counts and remind job seekers to attend.</div>
                            </div>
                            <div class="pre-time mt-3">Starts</div>
                            <div class="pre-content">Choose the day that a hiring manager will be available to review applicants</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fill-div mt-3">
                                        <input type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <div class="pre-time mt-3">Start time</div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <div class="pre-time mt-3">End time</div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="fill-div mt-3">
                                        <input type="text" >
                                    </div>
                                </div>
                                <div class="col-md-2 mt-4 form-title text-center">
                                    <span>to</span>
                                </div>

                                <div class="col-md-3">
                                    <div class="fill-div mt-3">
                                        <input type="text" >
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        

                            <div class="reason-header mt-4">
                                Suggested attire
                            </div>
                            <div class="remote">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                    <label class="container">Business (business suit, tie)
                                        <input type="checkbox">
                                        <span class="checkmarked"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Business casual (dress pants/skirt, button down/blouse, optional tie)
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Casual (come as you are, but please be presentable)
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Other
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="fill-div ">
                                <input type="text" >
                            </div>

                            <div class="reason-header mt-4">
                                Additional documents or articles candidate should bring
                            </div>
                            <div class="remote">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                    <label class="container">Resume
                                        <input type="checkbox">
                                        <span class="checkmarked"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Other
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="fill-div ">
                                <input type="text" >
                            </div>

                            <div class="reason-header mt-4">
                                Will jobs be offered on the spot at this event?
                            </div>
                            <div class="remote">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                    <label class="container">Yes
                                        <input type="checkbox">
                                        <span class="checkmarked"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">No
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="screen-que">
                                    <div class="form-title">
                                        <span>Screening questions (optional, max 3)</span>
                                    </div>
                                    <p class="pre-content">Candidates whose answers do not meet your criteria will not be permitted to call you. Do not
                                    ask questions that are discriminatory or illegal, personally invasive, or otherwise violate the Indeed Site.
                                    </p>
                                    
                                    <div class="fill-div screening-que">
                                        <div class="input-icon">
                                            <input type="text"class="mt-3"id=""><i class="fas fa-times cross-icon"></i>
                                        </div>
                                        <div class="remote mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span>Reject if candidate's answer is</span>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="container mark-label mb-0 mt-2">Yes
                                                        <input type="checkbox">
                                                        <span class="checkmarked"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="container mark-label mb-0 mt-2">No
                                                        <input type="checkbox">
                                                        <span class="checkmarked"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-3"></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="additional mt-2">
                                        <span class="btn-container btn-ctn text-primary"><i class="fas fa-plus-circle mx-1"></i>Add custom screening question</span>
                                    </div>
                                </div>

                                <div class="fill-div mt-3">
                                    <div class="pre-time">Hiring manager's name</div>
                                    <input type="text">
                                </div>
                                <div class="fill-div mt-3">
                                    <div class="pre-time">RSVPs for this job will be sent to the following email address</div>
                                    <input type="text">
                                </div>
                                
                                <div class="fill-div mt-3">
                                    <div class="form-title mb-3">
                                        <span>Additional Instruction</span>
                                    </div>
                                    <textarea class="area-text"></textarea>
                                </div>

                            </div>
                        </div>
                        
                        <div class="nextpre-btn mt-5">
                            <div class="continue-btn ">
                                    <div class="preview-btn mr-4" data-toggle="modal" data-target="#myModal1">
                                        <a href="#"> View Preview</a>
                                    </div>
                                    <a href="/kumaridesign/frontend/postajob/index7.php">Continue</a>
                                    
                                </div>
                                <div id="myModal1" class="modal fade" role="dialog">
                                <div class="modal-dialog main-modal">

                                        <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header px-4 pt-1 pb-1">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body body-border mx-4 px-4 py-3">
                                            <div class="">
                                                <div class="reason-header">
                                                    Web Developer
                                                </div>
                                                <div class="save-content">
                                                Kumari Job - Kathmandu
                                                </div>
                                                <div class="save-content text-success">
                                                    Rs.20000 Per Month
                                                </div>
                                            </div>
                                            <div class="preview-button mt-3 mb-3">
                                                <a href="">Apply Now</a>
                                                <span class="ml-2"><i class="far fa-heart"></i></span>
                                            </div>
                                            <div class="templete-main">
                                                <div class="templete-preview mt-4">
                                                    <p>
                                                        We are looking for an outstanding Web Developer to be responsible for the coding, innovative design and layout of our 
                                                        website. Web developer responsibilities include building our website from concept 
                                                        all the way to completion from the bottom up, fashioning everything from the home page to site layout and function.
                                                    </p>
                                                    <h5>Responsibilities</h5>
                                                    <ul>
                                                        <li>Write well designed, testable, efficient code by using best software development practices</li>
                                                        <li>Create website layout/user interface by using standard HTML/CSS practices</li>
                                                        <li>Integrate data from various back-end services and databases</li>
                                                        <li>Gather and refine specifications and requirements based on technical needs</li>
                                                        <li>Create and maintain software documentation</li>
                                                        <li>Be responsibile for maintaining, expanding, and scaling our site</li>
                                                        <li>Stay plugged into emerging technologies/industry trends and apply them into operations and activities</li>
                                                        <li>Cooperate with web designers to match visual design intent</li>
                                                    </ul>
                                                    <h5>Skills</h5>
                                                    <ul>
                                                        <li>Proven working experience in web programming</li>
                                                        <li>Top-notch programming skills and in-depth knowledge of modern HTML/CSS</li>
                                                        <li>Familiarity with at least one of the following programming languages: PHP, ASP.NET, Javascript or Ruby on Rails</li>
                                                        <li>A solid understanding of how web applications work including security, session management, and best development practices</li>
                                                        <li>Adequate knowledge of relational database systems, Object Oriented Programming and web application development</li>
                                                        <li>Hands-on experience with network diagnostics, network analytics tools</li>
                                                        <li>Basic knowledge of Search Engine Optimization process</li>
                                                        <li>Aggressive problem diagnosis and creative problem solving skills</li>
                                                        <li>Strong organizational skills to juggle multiple tasks within the constraints of  timelines and budgets with business acumen</li>
                                                        <li>Ability to work and thrive in a fast-paced environment, learn rapidly and master diverse web technologies and techniques.</li>
                                                        <li>BS in computer science or a related field</li>
                                                    </ul>
                                                </div>
                                                <div class="option-preview">Work Remotely:
                                                    <ul>
                                                        <li>No</li>
                                                    </ul>
                                                </div>
                                                <div class="option-preview">Schedule:
                                                    <ul>
                                                        <li>Other</li>
                                                    </ul>
                                                </div>
                                                <div class="option-preview">Benefits:
                                                    <ul>
                                                        <li>None</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer close-pre">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close preview</button>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                            <div class="back-btn">
                                <a href="/kumaridesign/frontend/postajob/index5.php"><i class="fas fa-chevron-left px-2"></i>Back</a>
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
    
    $(".btn-container").click(function(){
        $(".add-input").show();
    });
    $(".cross-icon").click(function(){
        $(".add-input").hide();
    });
    $("#assist-toggle").click(function(){
        $(".assist").toggle();
    });
    $(".btn-ctn").click(function(){
        $(".screening-que").show();
    });
    $(".cross-icon").click(function(){
        $(".screening-que").hide();
    });
    $(".button1").click(function(){
        $(".phone-content").hide();
        $(".email-content").show();
        $(".person-content").hide();
    });
    $(".button2").click(function(){
        $(".phone-content").show();
        $(".email-content").hide();
        $(".person-content").hide();
    });
    $(".button3").click(function(){
        $(".person-content").show();
        $(".phone-content").hide();
        $(".email-content").hide();
    });
    $(".btn-1").click(function(){
        $(".btn-1").css({"z-index": "1"});
        $(".btn-2").css({"z-index": "0"});
        $(".btn-3").css({"z-index": "0"});
    });
    $(".btn-2").click(function(){
        $(".btn-2").css({"z-index": "1"});
        $(".btn-3").css({"z-index": "0"});
        $(".btn-1").css({"z-index": "0"});
    });
    $(".btn-3").click(function(){
        $(".btn-3").css({"z-index": "1"});
        $(".btn-2").css({"z-index": "0"});
        $(".btn-1").css({"z-index": "0"});
    });
    
  });

</script>