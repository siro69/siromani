<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Document</title>
<body>

<div class="jobview">
    <div class="container p-0">
        <div class="row mt-2">
            <div class="col-md-3">
                @include('employer.pages.employersidebar')

            </div>
            <div class="col-lg-9 col-md-9">
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
                                <span class="right-subheader"><a href="postajob.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>edit job info</a></span>
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
                   
                    
                            <!-- <div class="card-header">
                                <span class="card-subheader">Job Specification</span>
                            </div> -->
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
                                        <li>Proficient understanding of code versioning tools, such as Git</li>
                                        <li>Ability to quickly grasp new tools and technology</li>
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
                                        reiciendis saepe, id repellendus tenetur quas soluta hic pariatur. Enim, distinctio. Inventore 
                                        cumque fuga repudiandae iste recusandae voluptatum!
                                    </p>

                                    <div class="specify mb-4">
                                        <span>Role and Responsibilities: </span>
                                    </div>
                                    <ul>
                                        <li>Build server-side applications with the latest technologies for delivering the best experience for users</li>
                                        <li>Build platforms, frameworks, APIs, libraries & automated tools</li>
                                        <li>Keeping up-to-date with technology</li>
                                        <li>Mentoring and assigning tasks to junior web developers</li>
                                        <li>Client Communication</li>
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
                                       <!-- <span class="big">OR,</span> -->
                                </div>
                                <div class="apply-btn">
                                    <button class="disable"><a href="/kumaridesign/empdashboard/postajob.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add another job</a></button>
                                    <button class="disable"><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i>Edit job info</a></button>
                                
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
