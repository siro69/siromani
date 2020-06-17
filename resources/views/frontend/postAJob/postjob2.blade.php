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
                            <span>Getting Stared</span>
                        </div>
                        <div class="co-name my-3">
                            <span>Country : Nepal<i class="fas fa-pen pl-2 text-info"id="change-country"></i></span>
                        </div>
                        <div class="language" id="country-content">
                            <select class="mt-3"id="">
                                <option value="">Nepal</option>
                                <option value="">India</option>
                                <option value="">China</option>
                                <option value="">Japan</option>
                            </select>
                        </div>

                        <div class="co-name my-3">
                            <span>Job posting will be displayed in : English<i class="fas fa-pen pl-2 text-info"id="change-language"></i></span>
                        </div>
                        <div class="language" id="language-content">
                            <div class="reason-header">
                                What language will your job posting be displayed in?*

                            </div>
                            <select class="mt-3"id="">
                                <option value="">English</option>
                                <option value="">--</option>
                                <option value="">--</option>
                                <option value="">--</option>
                            </select>
                        </div>

                        <div class="co-name my-3">
                            <span>Company Name : Kumari Job<i class="fas fa-pen pl-2 text-info"id="edit-icon"></i></span>
                        </div>
                        <div class="reason"id="reason">
                            <div  class="reason-header">Reason for company name change*</div>
                            <div class="reason-content">We use this information to tailor your experience</div>
                            <ul class="mt-3 mb-0 p-0">
                                <li>
                                    <label class="radio-checkbox">Company name is incorrect or misspelled
                                        <input class="unchecked"type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox">Posting on behalf of another company
                                        <input class="unchecked"type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox">Own multiple businesses
                                        <input class="unchecked"type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-checkbox"> I need to post confidentially
                                        <input class="unchecked"type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                               </li>
                                <li>
                                    <label class="radio-checkbox"id="radio-checked"> Other, please describe
                                        <input id="checked"type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <input type="text" class="other mt-3" id="other">
                                </li>
                                
                            </ul>
                            <div class="change-name">
                                <div class="fill-div">
                                    <span>Company name for this job*</span>
                                </div>
                                <input type="text">
                            </div>
                        </div>
                        
                        <div class="">
                            <form>
                                <div class="fill-div mt-3">
                                    <span>Job Title*</span>
                                    <input type="text">
                                </div>
                            </form>
                            <div class="commute mt-5 mb-5 py-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="images/location.png" width="100%">
                                    </div>
                                    <div class="col-md-9 mt-3">
                                        <div class="commute-header">
                                            Commute is the #2 reason candidates withdraw

                                        </div>
                                        <div class="commute-content mt-2">
                                            Save time in the interview stage by providing location information.

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reason">
                                <div class="reason-header">
                                    Where will an employee report to work?*

                                </div>
                                <ul class="mt-3 mb-0 p-0">
                                    <li>
                                        <label class="radio-checkbox">Employees will report to a specific address
                                            <input id="report-content"type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio-checkbox">Employees will not report to a specific address
                                            <input id="notreport-content"type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="remote not-rep"id="show-notreport">
                                <div class="reason-header">
                                    Will this job primarily be performed:
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label class="radio-checkbox">Multiple locations
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="radio-checkbox">Fully Remote
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="radio-checkbox">On the road
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="not-rep"id="show-notreport2">
                                <div class="reason-header mt-3">
                                    Where would you like to advertise this job?*
                                </div>
                                <div class="address-content mt-2">
                                    Enter a city and zone
                                </div>
                                <div class="fill-div mt-3">
                                    <input type="text">
                                </div>
                            </div>
                            
                            <div class="address mt-4" id="hide-address">
                                <div class="reason-header">
                                    Enter a street address*
                                </div>
                                <div class="address-content mt-2 mb-3">
                                    We won't share your street address. We use your location to find candidates in your area.

                                </div>
                                <div class="change-name">
                                    <input type="text">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="address-item mb-2">
                                            City*
                                        </div>
                                        <input type="text">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="address-item mb-2">
                                            Zone*
                                        </div>
                                        <select id="">
                                            <option value="">---</option>
                                            <option value="Mechi">Mechi</option>
                                            <option value="Koshi">Koshi</option>
                                            <option value="Sagarmatha">Sagarmatha</option>
                                            <option value="Janakpur">Janakpur</option>
                                            <option value="Bagmati">Bagmati</option>
                                            <option value="Narayani">Narayani</option>
                                            <option value="Gandaki">Gandaki</option>
                                            <option value="Lumbini">Lumbini</option>
                                            <option value="Dhawalagiri">Dhawalagiri</option>
                                            <option value="Rapti">Rapti</option>
                                            <option value="Karnali">Karnali</option>
                                            <option value="Bheri">Bheri</option>
                                            <option value="Seti">Seti</option>
                                            <option value="	Mahakali">	Mahakali</option>

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="address-item mb-2">
                                            Zip code*

                                        </div>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="reason-header mt-4">
                                        Can this job be performed remotely, meaning primarily from home? 
                                        If so, we’ll add a “Remote” tag to your post.
                                    </div>
                                    <div class="remote">
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label class="container">Yes
                                                    <input type="checkbox">
                                                    <span class="checkmarked"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="container">Temporarily due
                                                    <input type="checkbox">
                                                    <span class="checkmarked"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="container">No
                                                    <input type="checkbox">
                                                    <span class="checkmarked"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info mt-3 px-3 py-3">
                            <span class="text-danger"><i class="fas fa-exclamation-circle pr-2"></i>We need more information to continue. See above:</span>
                            <ul class="m-0">
                                <li>Job Title</li>
                                <li>Location</li>
                            </ul>
                        </div>
                        <div class="nextpre-btn mt-5">
                            <div class="continue-btn ">
                                <a href="/kumaridesign/frontend/postajob/index3.php">Continue</a>
                            </div>
                            <div class="back-btn">
                                <a href="/kumaridesign/frontend/postajob/index.php"><i class="fas fa-chevron-left px-2"></i>Back</a>
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
    $("#edit-icon").click(function(){
      $("#reason").toggle("slow");
    });
    $("#change-country").click(function(){
      $("#country-content").toggle("slow");
    });
    $("#change-language").click(function(){
      $("#language-content").toggle("slow");
    });
    $("#notreport-content").click(function(){
    $("#show-notreport").show();
    $("#show-notreport2").show();
    $("#hide-address").hide();
    });
    $("#report-content").click(function(){
    $("#show-notreport").hide();
    $("#show-notreport2").hide();
    $("#hide-address").show();
    });
  });

</script>