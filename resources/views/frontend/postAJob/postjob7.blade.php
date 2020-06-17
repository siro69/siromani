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
                        <div class="get-start">
                            <span>Applicant Qualifications</span>
                        </div>
                        <div class="job-header mt-3">
                            Would you like to ask candidates to respond to any criteria entered below when they apply for your job?
                        </div>
                        <div class="job-content mt-2">
                            Here are a few recommendations to get you started. Edit them, or add more below.

                        </div>

                        <div class="add-box experience-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Minimim of</span>
                                <select id="">
                                    <option value="">1 year</option>
                                    <option value="">2 years</option>
                                    <option value="">3 years</option>
                                    <option value="">4 years</option>
                                    <option value="">5 years</option>
                                    <option value="">6 years</option>
                                    <option value="">7 years</option>
                                    <option value="">8 years</option>
                                    <option value="">9 years</option>
                                    <option value="">10 years</option>
                                    <option value="">10 years +</option>
                                </select>
                                <span class="mx-2">of</span>
                                <input type="text" value="Javascript">
                                <span class="ml-2">experience</span>
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close1"></i>
                            </div>
                        </div>

                        <div class="add-box education-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Minimim level of education:</span>
                                <select id="">
                                    <option value="">High school or equivalent</option>
                                    <option value="">Associate</option>
                                    <option value="">Bachelor's</option>
                                    <option value="">Master's</option>
                                    <option value="">Doctorate</option>
                                </select>
                            
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close2"></i>
                            </div>
                        </div>

                        <div class="add-box location-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Able to work</span>
                                <input type="text" value="">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close3"></i>
                            </div>
                        </div>

                        <div class="add-box license-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Valid</span>
                                <input type="text" value="">
                                <span class="ml-2">license or certification</span>
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close4"></i>
                            </div>
                        </div>

                        <div class="add-box language-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Speaks the following language:</span>
                                <input type="text" value="">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close5"></i>
                            </div>
                        </div>

                        <div class="add-box aurthorization-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Authorized to work in the following country: United States</span>
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close6"></i>
                            </div>
                        </div>

                        <div class="add-box background-check mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Willing to undergo a background check in accordance with local laws and regulations</span>
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close7"></i>
                            </div>
                        </div>

                        <div class="add-box shift-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Available to work the following shifts:</span>
                                <select id="">
                                    <option value="">Select shift:</option>
                                    <option value="">Morning</option>
                                    <option value="">Mid-Day</option>
                                    <option value="">Evening</option>
                                    <option value="">Overnight</option>
                                </select>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close8"></i>
                            </div>
                        </div>

                        <div class="add-box willingness-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Willing to travel up to </span>
                                <select id="">
                                    <option value="">25%</option>
                                    <option value="">50%</option>
                                    <option value="">75%</option>
                                    <option value="">100%</option>
                                </select>
                                <span class="mx-2">of the time</span>
                            </div>
                            <div class="d-flex mt-3">
                                <label class="radio-checkbox">Preferred
                                    <input class="unchecked"type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-checkbox mx-4">Required
                                    <input class="unchecked"type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close9"></i>
                            </div>
                        </div>

                        <div class="add-box workingdays-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Available to work the following days:</span>
                                <select id="">
                                    <option value="">Select working days</option>
                                    <option value="">Sunday</option>
                                    <option value="">Monday</option>
                                    <option value="">Tuesday</option>
                                    <option value="">Wednesday</option>
                                    <option value="">Thursday</option>
                                    <option value="">Friday</option>
                                    <option value="">Saturday</option>
                                </select>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close10"></i>
                            </div>
                        </div>

                        <div class="add-box availability-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Ask jobseeker to list a few times they will be available to interview in the next few weeks</span>
                            </div>  
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close11"></i>
                            </div>
                        </div>

                        <div class="add-box referred-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Ask jobseeker who referred them to the role</span>
                            </div>
                                
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close12"></i>
                            </div>
                        </div>

                        <div class="add-box salary-que mt-4 p-4">
                            <div class="question-content">
                                <span class="mr-2"> Ask jobseeker to share their desired salary range</span>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close13"></i>
                            </div>
                        </div>

                        <div class="add-box custom-que mt-4 p-4">
                            <div class="question-content pr-3">
                                <span class="mr-2 "> Write your own question to ask your applicants. Please write it in the form of a question.
                                     Do not ask questions that are discriminatory or illegal, personally invasive, or otherwise violate the Indeed Site Rules:</span><br>
                                <div class="fill-div mt-3 mb-3">
                                     <input type="text" value="">
                                </div>
                                <span class="ml-2">Maximum Characters : 900</span>
                            </div>
                            <div class="close-btn">
                                <i class="fas fa-times delete-btn"id="close14"></i>
                            </div>
                        </div>
                        
                        <div class="question-content mt-4">
                            <button class="active mx-1 my-2" id="experience"><i class="fas fa-plus mr-1"></i>Experience</button>
                            <button class="active mx-1 my-2" id="education"><i class="fas fa-plus  mr-1"></i> Education</button>
                            <button class="active mx-1 my-2" id="location"><i class="fas fa-plus  mr-1"></i> Location</button>
                            <button class="active mx-1 my-2" id="license"><i class="fas fa-plus  mr-1"></i> License</button>
                            <button class="active mx-1 my-2" id="language"><i class="fas fa-plus mr-1"></i> Language</button>
                            <button class="active mx-1 my-2" id="aurthorize"><i class="fas fa-plus mr-1"></i> Work Aurthorization</button>
                            <button class="active mx-1 my-2" id="back-check"><i class="fas fa-plus mr-1"></i> Background Check</button>
                            <button class="active mx-1 my-2" id="shift"><i class="fas fa-plus mr-1"></i> Shift availability</button>
                            <button class="active mx-1 my-2" id="willing"><i class="fas fa-plus mr-1"></i> Willingness to Travel</button>
                            <button class="active mx-1 my-2" id="work-day"><i class="fas fa-plus mr-1"></i>Working Days</button>
                            <button class="active mx-1 my-2" id="interview"><i class="fas fa-plus mr-1"></i> Interview Availability</button>
                            <button class="active mx-1 my-2" id="referred"><i class="fas fa-plus mr-1"></i>Referred By</button>
                            <button class="active mx-1 my-2" id="salary"><i class="fas fa-plus mr-1"></i> Desired Salary</button>
                            <button class="active mx-1 my-2" id="custom-que"><i class="fas fa-plus mr-1"></i> Create Custom Question</button>
                        </div>
                        <div class="job-header mt-3">
                            Only notify me of candidates who say they meet all my 'Required' criteria above.
                        </div>
                        <div class="d-flex mt-3">
                            <label class="radio-checkbox">Yes
                                <input class="unchecked"type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-checkbox mx-4">No
                                <input class="unchecked"type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="job-content mt-2">
                            Candidates whose answers do not meet your 'Required' criteria will be stored in your account and marked
                            as Rejected. These candidates will not be notified of their application status unless you tell them. You
                            an access their application at any time.
                        </div>
                        <div class="nextpre-btn mt-5">
                            <div class="continue-btn ">
                                <a href="/kumaridesign/frontend/postajob/index8.php">Continue</a>
                            </div>
                            <div class="back-btn">
                                <a href="/kumaridesign/frontend/postajob/index6.php"><i class="fas fa-chevron-left px-2"></i>Back</a>
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
    $("#experience").click(function(){
      $(".experience-que").show();
    });
    $("#close1").click(function(){
      $(".experience-que").hide();
    });

    $("#education").click(function(){
      $(".education-que").show();
    });
    $("#close2").click(function(){
      $(".education-que").hide();
    });

    $("#location").click(function(){
      $(".location-que").show();
    });
    $("#close3").click(function(){
      $(".location-que").hide();
    });

    $("#license").click(function(){
      $(".license-que").show();
    });
    $("#close4").click(function(){
      $(".license-que").hide();
    });
    
    $("#language").click(function(){
      $(".language-que").show();
    });
    $("#close5").click(function(){
      $(".language-que").hide();
    });
    
    $("#aurthorize").click(function(){
      $(".aurthorization-que").show();
      $("#aurthorize").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close6").click(function(){
      $(".aurthorization-que").hide();
    });
    
    $("#back-check").click(function(){
      $(".background-check").show();
      $("#back-check").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close7").click(function(){
      $(".background-check").hide();
    });
    
    $("#shift").click(function(){
      $(".shift-que").show();
      $("#shift").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close8").click(function(){
      $(".shift-que").hide();
    });
    
    $("#willing").click(function(){
      $(".willingness-que").show();
      $("#willing").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close9").click(function(){
      $(".willingness-que").hide();
    });
    
    $("#work-day").click(function(){
      $(".workingdays-que").show();
      $("#work-day").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close10").click(function(){
      $(".workingdays-que").hide();
    });
    
    $("#interview").click(function(){
      $(".availability-que").show();
      $("#interview").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close11").click(function(){
      $(".availability-que").hide();
    });

    $("#referred").click(function(){
      $(".referred-que").show();
      $("#referred").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close12").click(function(){
      $(".referred-que").hide();
    });

    $("#salary").click(function(){
      $(".salary-que").show();
      $("#salary").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close13").click(function(){
      $(".salary-que").hide();
    });

    $("#custom-que").click(function(){
      $(".custom-que").show();
      $("#custom-que").css({"color": "grey","border":"2px solid grey","background-color":"#fff"});
        $('this').removeClass('active');
    });
    $("#close14").click(function(){
      $(".custom-que").hide();
    });
    
  });

</script>