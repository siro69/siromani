<link rel="stylesheet" href="css/postjob.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>

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
                            <span> Job Description</span>
                        </div>
                        <div class="">
                                <div class="reason-header mt-4">
                                    Web Developer
                                </div>
                                <div class="save-content mt-2">
                                Kumari Job - Kathmandu
                                </div>
                                <div class="save-content mt-2">
                                    Rs.20000 Per Month
                                </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="reason-header">
                                            SAVE TIME
                                        </div>
                                        <div class="savetime mt-2">
                                            Use our job description template for:
                                        </div>
                                        <div class="save-content mt-2">
                                                Web Developer
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button class="templete-btn"id="show-templete">Show templete preview<i class="fas fa-angle-right ml-2"></i></button>
                                        <button class="templete-btn"id="hide-templete">Hide templete preview<i class="fas fa-angle-down ml-2"></i></button>
                                    </div>
                                </div>
                                <div id="templete-preview">
                                    <div class="templete-item mt-4">
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
                                    <div class="use-temp mt-3">
                                        <button id="">Use Templete</button>
                                    </div>
                                    <div class="footer-paragraph mt-3">
                                        Kumari Job provides this information as a courtesy to users of this site. Please note that we are not your recruiting or legal advisor,
                                        we are not responsible for the content of your job descriptions, and none of the information provided herein guarantees performance.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sub-content2 mt-4">
                            Describe the responsibilities of this job, required work experience, skills, or education.*
                        </div>
                        <div class="upload-doc text-primary mt-2" data-toggle="modal" data-target="#myModal">
                            Upload a .pdf or .docx
                        </div>

                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                    <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        
                                        <h4 class="modal-title">Upload job description</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body border-body mx-4">
                                        <div class="upload my-4">
                                            <div class="upload-icon">
                                                <i class="fas fa-upload fa-3x text-primary"></i>
                                            </div>
                                            <div class="upload-content ml-3">
                                                <div class="upload-drop">
                                                    Drag and drop your files here
                                                </div>
                                                <div class="upload-file">
                                                    Acceptable files: pdf, docx
                                                </div>
                                                <div class="upload-btn mt-1">
                                                    <input type="button" value="Choose File">
                                                    <span>No choosen file</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default upload-default" data-dismiss="modal">Upload</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="textarea-content mt-3">
                            <textarea class="text-write ckeditor" name="editor"></textarea>
                        </div>

                        <div class="nextpre-btn mt-5">
                            <div class="continue-btn ">
                                <div class="preview-btn mr-4" data-toggle="modal" data-target="#myModal1">
                                    <a href="#"> View Preview</a>
                                </div>
                                <a href="/kumaridesign/frontend/postajob/index6.php">Continue</a>
                                
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
                                <a href="/kumaridesign/frontend/postajob/index4.php"><i class="fas fa-chevron-left px-2"></i>Back</a>
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
    
    $("#show-templete").click(function(){
        $("#templete-preview").show();
        $("#hide-templete").show();
        $("#show-templete").hide();
    });
    $("#hide-templete").click(function(){
        $("#templete-preview").hide();
        $("#hide-templete").hide();
        $("#show-templete").show();
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

  CKEDITOR.replace( 'editor' );
</script>