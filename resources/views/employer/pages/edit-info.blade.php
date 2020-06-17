<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  
<style>
/* basic info css starts */
.card-header{
    position:relative;
}
.first-content{
    text-transform:capitalize;
    font-size:14px;
    font-weight:bold;
    color:#000;
}
.second-content{
    position:absolute;
    top:9px;
    right:15px;
    border:1px solid;
    padding:3px 9px;
}
.second-content:hover{
    background-color:#F29F05;
    color:#fff;
}
.second-content:hover.second-content a{
    color:#fff;
}
.second-content i{
    padding:0 5px;
    /* color:grey; */
}
.second-content a{
    text-transform:capitalize;
    font-size: .71094rem;
    font-weight:300;
    color:#000;
    text-decoration:none;
}
.card-content{
    border:1px solid lightgrey;
    padding:25px 75px;
}
form{
    width:100%;
}
.label{
    width:30%;
    text-transform:capitalize;
    font-size:14px;
    font-weight:400;
    color:#000;
    display: flex;
    /* align-items: center; */
    /* justify-content: center; */
}
.fordisplay{
    display:flex;
    padding-bottom:20px;
}
.write-name{
    display:block;
    width:100%;
    position:relative;
}
.write-name .icon-img{
    position:absolute;
    top:6px;
    right:12px;
}
.textdiv{
    width:100%;
    height:30px;
    padding: 4px 12px;
    font-size: 13px;
    font-weight:400;
    /* text-transform:capitalize; */
}
.placeholder{
    text-transform: capitalize;
    font-size: 12px;
    font-weight: 400;
    color: #000;
}
#choose, .nofile{
    text-transform: capitalize;
    font-size: 13px;
    font-weight: 400;
    color:#000;
}
.text-write{
   /* width:100%;
    height:200px;*/
    padding:15px;
    font-weight:400;
    font-size:13px;
}
/* basic info css ends */

/* edit contact css starts */
.write-nameshort{
    display:flex;
    width:100%;
}
.textdivshort{
    width:100%;
    height: 30px;
    padding: 4px 15px;
    font-size: 13px;
    font-weight: 400;
    text-transform: capitalize;
}
.another{
    display:flex;
    justify-content:center;
    align-items:center;
}
.another a{
    text-transform:capitalize;
    font-size:14px;
    font-weight:400px;
    text-decoration:none;
    color:#18298C;
}
.another a:hover{
    color:#000;
}
.another i{
    padding:5px;
    opacity:0.5;
}
.forborder{
    border-top:none
}
/* edit contact css ends */
/* save button css starts */
.submit-btn{
    border:1px solid #ededed;
    background-color:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    border-top:none;
}
.sub-btn{
    text-transform:capitalize;
    font-size:13px;
    font-weight:400;
    padding:5px 15px;
    margin:10px 0;
    outline:none;
}
.save-item{
    margin-right:5px;
    background-color:#0C154A;
    color:#fff;
    border:1px solid #0C154A;
}
.save-item:hover{
    background-color:#080E33;
}
.cancel-item{
    color:#0597F2;
    border:1px solid #0597f2;
}
.cancel-item:hover{
    background-color:#0597f2; 
    color:#fff;
}

/* save button css ends */
@media only screen and (max-width:1040px){
    .card-content{
        padding:0 5px;
    }
}
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
                <div class="container p-0"> 
                <!-- basic info starts -->
                    <div class="card">
                        <div class="card-header">
                            <span class="first-content">edit basic information</span>
                            <span class="second-content"><a href="editprofile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>preview profile</a></span>
                        </div>
                        <div class="card-body">
                            <div class="card-content">
                                <form action="/action_page.php" method="" autocomplete="off">
                                    <div class="fordisplay">
                                        <span class="label">name*</span><br>
                                        <div class="write-name">
                                            <input type="text" class="textdiv"name="name"><br>
                                            <span class="placeholder">name of the related company</span>
                                        </div>
                                    </div>

                                    <div class="fordisplay">
                                        <span class="label">industry*</span><br>
                                        <div class="write-name">
                                            <input type="text" class="textdiv"name="name"><br>
                                            <img class="icon-img"src="../images/dropdown-arrow.webp"alt="icon"width="20px">
                                            <!-- <span class="placeholder">name of the related company</span> -->
                                        </div>
                                    </div>

                                    <div class="fordisplay">
                                        <span class="label">client logo*</span><br>
                                        <div class="write-name">
                                            <a href="#"><img src="../images/image.jpg" width="28px" height="24px"alt="this is choosen file"></a>
                                            <button id ="choose">choose file</button>
                                            <span class="nofile">no file choosen</span><br>

                                        </div>
                                    </div>

                                    <div class="fordisplay">
                                        <span class="label">ownership</span><br>
                                        <div class="write-name">
                                            <select type="text" class="textdiv"name="name">
                                            <option value="empty">---</option>
                                                <option value="private">Private</option>
                                                <option value="government">Government</option>
                                                <option value="public">Public</option>
                                                <option value="non-profit">Non-Profit</option>
                                            </select><br>
                                            <!-- <img class="icon-img"src="../images/dropdown-arrow.webp"alt="icon"width="20px"> -->
                                            <!-- <span class="placeholder">name of the related company</span> -->
                                        </div>
                                    </div>
                                    <div class="fordisplay">
                                        <span class="label">size of organization</span><br>
                                        <div class="write-name">
                                            <select type="text" class="textdiv"name="name">
                                                <option value="empty">---</option>
                                                <option value="1">1-10 employees</option>
                                                <option value="10">10-50 employees</option>
                                                <option value="50">50-100 employees</option>
                                                <option value="100">100-200 employees</option>
                                                <option value="200">200-500 employees</option>
                                                <option value="500">500-1000 employees</option>
                                                <option value="1000">1000+ employees</option>
                                                <option value="confidential">confidential</option>
                                                
                                            </select><br>
                                            <!-- <img class="icon-img"src="../images/dropdown-arrow.webp"alt="icon"width="20px"> -->
                                            <!-- <span class="placeholder">name of the related company</span> -->
                                        </div>
                                    </div>
                                    <div class="fordisplay">
                                        <span class="label">website</span><br>
                                        <div class="write-name">
                                            <input type="text" class="textdiv"name="name"><br>
                                            <!-- <span class="placeholder">name of the related company</span> -->
                                        </div>
                                    </div>
                                    <div class="fordisplay">
                                        <span class="label">about*</span><br>
                                        <div class="write-name">
                                            <textarea class="text-write ckeditor" name="editor">Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing Elit. Alias Quod, Nobis Facilis Iste Perspiciatis, Explicabo, Corrupti Minus Itaque Magni Saepe Optio Id Tempora. Ducimus Excepturi, Debitis Magni Quam Dolorum Quidem!

Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Repudiandae Sint Porro Aspernatur Cum! Quod Similique Voluptates, Enim Ex Voluptatum Sapiente Voluptate Eligendi Soluta Praesentium Eum Nulla Non Magnam Deserunt In.</textarea><br>
                                            <!-- <span class="placeholder">name of the related company</span> -->
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div> 
                    </div>
                <!-- basic info ends -->
                <!-- edit contact starts -->
                    <div class="card" id="edit-contact">
                        <div class="card-header">
                                <span class="first-content">edit contact detail</span>
                                <!-- <span class="second-content"><a href="editprofile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>preview profile</a></span> -->
                        </div>
                        <div class="card-body">
                            <div class="card-content pt-4 pb-2">
                                <form>
                                    <div class="fordisplay">
                                                    <span class="label">address*</span><br>
                                                    <div class="write-name">
                                                        <input type="text" class="textdiv"name="name"><br>
                                                        <!-- <span class="placeholder">name of the related company</span> -->
                                                    </div>
                                    </div> 

                                    <div class="fordisplay">
                                                <span class="label">contact number*</span><br>
                                                <div class="write-nameshort">
                                                        <select type="text" class="textdivshort mr-5"name="name">
                                                            <option value="work">Work</option>
                                                            <option value="mobile">Mobile</option>
                                                            <option value="home">Home</option>
                                                        </select><br>
                                                    <input type="text" class="textdivshort"name="phone"><br>
                                                    <!-- <span class="placeholder">name of the related company</span> -->
                                                </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-content pt-3 pb-3 forborder">
                            <span class="another"><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i>add another contact number</a></span>
                            </div>
                        </div>
                    </div>

                    <!--edit contact ends  -->
                    <!-- contact person starts -->
                    <div class="card" id="add-contact">
                        <div class="card-header">
                        <span class="first-content">add contact person</span>
                            <!-- <span class="second-content"><a href="editprofile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>preview profile</a></span> -->
                        </div>
                        <div class="card-body">
                        <div class="card-content pt-4 pb-2">
                                    <form>
                                        <div class="fordisplay">
                                                        <span class="label">name*</span><br>
                                                        <div class="write-name">
                                                            <input type="text" class="textdiv"name="name"><br>
                                                            <!-- <span class="placeholder">name of the related company</span> -->
                                                        </div>
                                        </div> 

                                        <div class="fordisplay">
                                                        <span class="label">designation*</span><br>
                                                        <div class="write-name">
                                                            <input type="text" class="textdiv"name="name"><br>
                                                            <!-- <span class="placeholder">name of the related company</span> -->
                                                        </div>
                                        </div> 

                                        <div class="fordisplay">
                                                        <span class="label">email*</span><br>
                                                        <div class="write-name">
                                                            <input type="text" class="textdiv"name="name"><br>
                                                            <!-- <span class="placeholder">name of the related company</span> -->
                                                        </div>
                                        </div> 

                                        <div class="fordisplay">
                                                    <span class="label">contact number*</span><br>
                                                    <div class="write-nameshort">
                                                            <select type="text" class="textdivshort mr-5"name="name">
                                                                <option value="work">Work</option>
                                                                <option value="mobile">Mobile</option>
                                                                <option value="home">Home</option>
                                                            </select><br>
                                                        <input type="text" class="textdivshort"name="phone"><br>
                                                        <!-- <span class="placeholder">name of the related company</span> -->
                                                    </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-content pt-3 pb-3 forborder">
                                <span class="another"><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i>add another contact number</a></span>
                                </div>
                        </div> 
                    </div>
                    <!-- contact person ends -->

                    <div class="card"id="add-service">
                        <div class="card-header">
                        <span class="first-content">edit service</span>
                            <!-- <span class="second-content"><a href="editprofile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>preview profile</a></span> -->
                        </div>
                        <div class="card-body">
                        <div class="card-content pt-4 pb-2">
                                    <form>
                                        <div class="fordisplay">
                                                        <span class="label">name*</span><br>
                                                        <div class="write-name">
                                                            <input type="text" class="textdiv"name="name"><br>
                                                            <!-- <span class="placeholder">name of the related company</span> -->
                                                        </div>
                                        </div> 

                                        <div class="fordisplay">
                                        <span class="label">description*</span><br>
                                        <div class="write-name">
                                            <textarea class="text-write ckeditor" name="editor"></textarea><br>
                                            <!-- <span class="placeholder">name of the related company</span> -->
                                        </div>
                                    </div>


                                        
                                    </form>
                                </div>
                                <div class="card-content pt-3 pb-3 forborder">
                                <span class="another"><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i>add another contact number</a></span>
                                </div>
                    </div>
                    </div>

                    <div class="card"id="add-socialaccount">
                        <div class="card-header">
                        <span class="first-content">edit social account</span>
                            <!-- <span class="second-content"><a href="editprofile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>preview profile</a></span> -->
                        </div>
                        <div class="card-body">
                        <div class="card-content pt-4 pb-2">
                                    <form>
                                        <div class="fordisplay">
                                                        <span class="label">account name*</span><br>
                                                        <div class="write-name">
                                                            <input type="text" class="textdiv"name="name"placeholder="eg.Facebook"><br>
                                                            <!-- <span class="placeholder">name of the related company</span> -->
                                                        </div>
                                        </div> 

                                        <div class="fordisplay">
                                                        <span class="label">link address/url*</span><br>
                                                        <div class="write-name">
                                                            <input type="text" class="textdiv"name="name"placeholder="eg.https://facebook.com/user"><br>
                                                            <!-- <span class="placeholder">name of the related company</span> -->
                                                        </div>
                                        </div> 

                                        
                                    </form>
                                </div>
                                <div class="card-content pt-3 pb-3 forborder">
                                <span class="another"><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i>add another social account</a></span>
                                </div>
                    </div>
                    </div>
                <!-- save button  -->
                <div class="submit-btn mb-2">
                <button class="save-item sub-btn">save</button>
                <button class="cancel-item sub-btn">cancel</button>
                </div>
                <!-- save button end -->
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
