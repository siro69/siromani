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
                            <span>Job Details</span>
                        </div>
                        <div class="job-header mt-3">
                            Choose the category that best describes Web Developer to unlock additional job posting guidance*
                        </div>
                        <div class="job-content mt-2">
                            Job seekers will not see your selection and this will not impact who sees your job in search results.

                        </div>
                        <div class="reason">
                            <ul class="mt-4 mb-0 p-0">
                                <li>
                                    <label class="radio-checkbox">Web Developer
                                        <input class="unchecked"type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox">Web Developer
                                        <input class="unchecked"type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox">Web Developer
                                        <input class="unchecked"type="radio"  name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox">Web Developer
                                        <input class="unchecked"type="radio"  name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox">Web Developer
                                        <input class="unchecked"type="radio"  name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox">None of the above, please describe
                                        <input id="checked"type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <input type="text" class="other mt-3" id="other">
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <div class="reason-header mt-4">
                                What type of job is it?*
                            </div>
                            <div class="remote">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                    <label class="container">Full-time
                                        <input type="checkbox">
                                        <span class="checkmarked"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Part-time
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Temporary
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Contract
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Internship
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label class="container">Commission only
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="commute mt-4 mb-4 py-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <i class="fas fa-hand-holding-usd pay fa-5x text-primary"></i>
                                    </div>
                                    <div class="col-md-9 mt-3">
                                        <div class="commute-header">
                                            What's the pay?

                                        </div>
                                        <div class="commute-content mt-2">
                                            Tell job seekers the pay and receive up to two times more applications

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="address mt-3" id="hide-address">
                                <div class="reason-header">
                                    What is the pay for this job?
                                </div>
                                <div class="address-content mt-2 mb-3">
                                     Review the pay estimates we've pre-filled to ensure it aligns with your job.infoCircle

                                </div>
                            </div>
                            <div class="row salary-range">
                                <div class="col-md-4 d-flex">
                                    <span class="select-content mr-2">Rs.</span>
                                    <select class="seclect-tag "id="">
                                        <option value="">10000</option>
                                        <option value="">15000</option>
                                        <option value="">20000</option>
                                        <option value="">25000</option>
                                        <option value="">30000</option>
                                        <option value="">35000</option>
                                        <option value="">40000</option>
                                        <option value="">45000</option>
                                        <option value="">50000</option>
                                    </select>
                                </div>
                                    
                                <div class="col-md-4 d-flex">
                                    <span class="select-content mr-2">to</span>
                                    <select class="seclect-tag ">
                                        <<option value="">10000</option>
                                        <option value="">15000</option>
                                        <option value="">20000</option>
                                        <option value="">25000</option>
                                        <option value="">30000</option>
                                        <option value="">35000</option>
                                        <option value="">40000</option>
                                        <option value="">45000</option>
                                        <option value="">50000</option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-flex">
                                    
                                    <select class="seclect-tag"id="">
                                        <option value="">Per Hour</option>
                                        <option value="">Per Day</option>
                                        <option value="">Per Week</option>
                                        <option value="">Per Month</option>
                                        <option value="">Per Year</option>
                                    </select>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="one-salary">
                                <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <span class="select-content mr-2">Rs.</span>
                                            <select class="seclect-tag "id="">
                                                <option value="">10000</option>
                                                <option value="">15000</option>
                                                <option value="">20000</option>
                                                <option value="">25000</option>
                                                <option value="">30000</option>
                                                <option value="">35000</option>
                                                <option value="">40000</option>
                                                <option value="">45000</option>
                                                <option value="">50000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 d-flex">
                                        
                                            <select class="seclect-tag"id="">
                                                <option value="">Per Hour</option>
                                                <option value="">Per Day</option>
                                                <option value="">Per Week</option>
                                                <option value="">Per Month</option>
                                                <option value="">Per Year</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5"></div>
                                </div>
                            </div>
                            
                            <div class="salary-btn mt-2">
                                <button class="text-primary" id="range-salary">Back to one salary</button>
                                <button class="text-primary" id="add-salary">Add salary range</button>
                            </div>
                        </div> 
                        <div class="">
                            <div class="reason-header mt-4">
                                Are there any additional forms of compensation offered?
                            </div>
                            <div class="remote">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="container">Tips
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Commission
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Bonuses
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Store Discounts
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Other forms
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="reason-header mt-4">
                                Are any of the following benefits offered?*
                            </div>
                            <div class="job-content mt-2">
                            We'll save this information to make posting faster in the future.
                            </div>
                            <div class="remote">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="container">Health insurance
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Work from home
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Flexible schedule
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Professional development assistance
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Paid time off
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Retirement plan
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Vision insurance
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Parental leave
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Other
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">None
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="reason-header mt-4">
                                Conditions for benefits eligibility:
                            </div>
                            <div class="remote">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="container">Waiting period may apply
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="container">Only full-time employees eligible
                                            <input type="checkbox">
                                            <span class="checkmarked"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reason-header mt-3">
                            How many hires do you want to make for this position?*
                        </div>
                        <div class="address-content mt-2 mb-3">
                            More hires will require more candidates.

                        </div>
                        <select class="seclect-tag"id="">
                            <option value=""></option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">10+ hire</option>
                            <option value="">I have an ongoing need to fill this role</option>
                        </select>

                        <div class="reason-header mt-4">
                            How urgently do you need to make a hire?*
                        </div>
                        <div class="address-content mt-2 mb-3">
                            Help us help you hit your deadline.
                        </div>
                        <select class="seclect-tag"id="">
                            <option value=""></option>
                            <option value="">1 to 3 days</option>
                            <option value="">3 to 7 days</option>
                            <option value="">1 to 2 weeks</option>
                            <option value="">2 to 4 weeks</option>
                            <option value="">More than 4 weeks</option>
                        </select>
                        
                        <div class=""></div>
                        <div class="more-info mt-5 px-3 py-3">
                            <span class="text-danger"><i class="fas fa-exclamation-circle pr-2"></i>We need more information to continue. See above:</span>
                            <ul class="m-0">
                                <li>Benefits</li>
                                <li>Expected hire date</li>
                                <li>Hires needed</li>
                            </ul>
                        </div>
                        <div class="nextpre-btn mt-5">
                            <div class="continue-btn ">
                                <a href="/kumaridesign/frontend/postajob/index4.php">Continue</a>
                            </div>
                            <div class="back-btn">
                                <a href="/kumaridesign/frontend/postajob/index2.php"><i class="fas fa-chevron-left px-2"></i>Back</a>
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
    
    $("#checked").click(function(){
        $("#other").show();
    });
    $(".unchecked").click(function(){
        $("#other").hide();
    });
    $("#range-salary").click(function(){
        $(".salary-range").hide();
        $(".one-salary").show();
        $("#range-salary").hide();
        $("#add-salary").show();
    });
    $("#add-salary").click(function(){
        $(".salary-range").show();
        $(".one-salary").hide();
        $("#add-salary").hide();
        $("#range-salary").show();

    });
    // $("#change-country").click(function(){
    //   $("#country-content").toggle("slow");
    // });
    // $("#change-language").click(function(){
    //   $("#language-content").toggle("slow");
    // });
    // $("#notreport-content").click(function(){
    // $("#show-notreport").show();
    // $("#show-notreport2").show();
    // $("#hide-address").hide();
    // });
    // $("#report-content").click(function(){
    // $("#show-notreport").hide();
    // $("#show-notreport2").hide();
    // $("#hide-address").show();
    // });
  });

</script>