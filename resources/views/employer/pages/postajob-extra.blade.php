<!-- Post a job tab -->
<div id="menu1" class="container-fluid tab-pane">
  <!-- MultiStep Form -->
  <div class="row justify-content-center">
    <div class="col-md-6 col-md-offset-3">
      <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Job Details</li>
          <li>Job Descriptions</li>
          <li>Job Post Type</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">Job Details</h2>
          <h3 class="fs-subtitle">Tell us general details about your job</h3>
          <input type="text" name="jtitle" placeholder="What is the Job Title?"/>
          <input type="text" name="jopening" placeholder="What is the number of openings for this job?"/>
          <div class="job-type">
            <select class="w-100">
              <option value="0">What type of job is it ?</option>
              <option value="1">Full Time/Part Time/Contract/Full Time/ Part Time</option>
              <option value="2">Full Time/Part Time/Contract</option>
              <option value="3">Full Time Morning Shift</option>
              <option value="4">Full Time Evening Shift</option>
            </select>
          </div>
          <div class="job-category">
            <select class="w-100">
              <option value="0">What is the job categories for this position?</option>
              <option value="1">Accounting/Finance</option>
              <option value="2">Administration</option>
              <option value="3">Advisor/Counseling</option>
              <option value="4">Admin/Legal Works</option>
            </select>
          </div>
          <div class="job-level">
            <select class="w-100">
              <option value="0">What is the required job level of candidate?</option>
              <option value="1">Entry Level</option>
              <option value="2">Mid Level</option>
              <option value="3">Senior Level</option>
              <option value="4">Top Level</option>
              <option value="5">Mid/Senior Level</option>
            </select>
          </div>
          <div class="job-salary">
            <select class="w-100">
              <option value="0">How much salary will be offered to the candidate?</option>
              <option value="1">6,000-10,000</option>
              <option value="2">11,000-15,000</option>
              <option value="3">16,000-20,000</option>
              <option value="4">21,000-30,000</option>
              <option value="5">30,000 or above</option>
              <option value="6">Negotiable</option>
            </select>
          </div>
          <div class="job-education">
            <select class="w-100">
              <option value="0">What is the required educational qualification?</option>
              <option value="1">SLC/SEE</option>
              <option value="2">+2/Intermediate</option>
              <option value="3">BBA</option>
              <option value="4">BSC</option>
              <option value="5">MBA/MSC/Masters</option>
              <option value="6"></option>
            </select>
          </div>
          <input type="text" name="jedu-yrs" placeholder="How much experience is required to apply for this job?"/>
          <div class="gender text-left">
            <p>Any Specific Gender Restriction?</p>
            <label class="container">Male
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
            </label>
            <label class="container">Female
              <input type="radio" name="radio">
              <span class="checkmark"></span>
            </label>
            <label class="container">Both
              <input type="radio" name="radio">
              <span class="checkmark"></span>
            </label>
          </div>
          <!-- Next Button -->
          <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>
        <fieldset>
          <div class="jdesc">
            <h2 class="fs-title">Job Descriptions</h2>
            <h3 class="fs-subtitle">Tell us something more about your job</h3>
            <textarea name="editor1">
            </textarea>
          </div>
          <hr>
          <div class="jspec mb-5">
            <h2 class="fs-title">Job Specification</h2>
            <textarea name="editor2">
            </textarea>
          </div>
          <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
          <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>
        <fieldset>
          <h2 class="fs-title mb-4">Choose one of the Job Posting Type</h2>
          <div class="posttype-div">
            <div class="job-type">
              <div class="row">
                <div class="col-md-6">
                  <span class="type-head">Premium Job Posting</span>
                  <h2 class="price-detail text-center mt-4">Rs.8,000/</h2><small>7 days</small>
                  <a href="" class="button btn selectjob-btn mt-4">Select</a>
                </div>
                <div class="offset-1 mx-3 divright-border"></div>
                <div class="col-md-5 premium-right text-left">
                  <span>Features:</span>
                  <p><i class="far fa-bell"></i> Priority placement</p>
                  <p><i class="far fa-bell"></i> Quality CV's</p>
                  <p><i class="far fa-bell"></i> Brand Exposure</p>
                  <p><i class="far fa-bell"></i> Feature Jobs on Apps</p>
                  <p><i class="far fa-bell"></i> Dashboard features</p>
                  <p><i class="far fa-bell"></i> Social Media Posting</p>
                </div>
              </div>
            </div>
            <!-- Hot -->
            <div class="job-type my-3">
              <div class="row">
                <div class="col-md-6">
                  <span class="type-head">Hot Job Posting</span>
                  <h2 class="price-detail text-center mt-4">Rs.7,000/</h2><small>7 days</small>
                  <a href="" class="button btn selectjob-btn mt-4">Select</a>
                </div>
                <div class="offset-1 mx-3 divright-border"></div>
                <div class="col-md-5 premium-right text-left">
                  <span>Features:</span>
                  <p><i class="far fa-bell"></i> Budget friendly</p>
                  <p><i class="far fa-bell"></i> Quality CV's</p>
                  <p><i class="far fa-bell"></i> Feature Jobs on Apps</p>
                  <p><i class="far fa-bell"></i> Dashboard features</p>
                  <p><i class="far fa-bell"></i> Social Media Posting</p>
                </div>
              </div>
            </div>
            <!-- Recent -->
            <div class="job-type my-3">
              <div class="row">
                <div class="col-md-6">
                  <span class="type-head">Recent Job Posting</span>
                  <h2 class="price-detail text-center mt-4">Rs.3,000/</h2><small>7 days</small>
                  <a href="" class="button btn selectjob-btn mt-4">Select</a>
                </div>
                <div class="offset-1 mx-3 divright-border"></div>
                <div class="col-md-5 premium-right text-left">
                  <span>Features:</span>
                  <p><i class="far fa-bell"></i> Low-cost posting</p>
                  <p><i class="far fa-bell"></i> Company profile section</p>
                  <p><i class="far fa-bell"></i> Get visible</p>
                  <p><i class="far fa-bell"></i> Jobs featured on Kumari Job App</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Previous/submit button -->
          <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
          <input type="submit" name="submit" class="submit action-button" value="Submit"/>
        </fieldset>
      </form>
    </div>
  </div>
</div>