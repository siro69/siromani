<link rel="stylesheet" href="css/onestep-post.css">
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
                                    <span><i class="far fa-file-alt"></i>Post Your Jobs in One Step</span>
                                </div> 
                            </div>

                            <div class="col-md-6 right-btn">
                                <div class="one-step">
                                    <a href="/kumaridesign/frontend/postajob/index.php"><i class="fas fa-plus-square mr-1"></i> Post your jobs</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="card-body px-5">
                        <div class="text-content">
                            <div class="text-header mb-3">Write a description about related jobs:</div>
                            <textarea class="text-write ckeditor" name="editor"></textarea>
                        </div>
                        <div class="upload-content">
                            <div class="text-header my-2">OR,</div>
                            
                            <div class="upload-btn">
                                <input type="button" value="Choose File">
                                <span>No choosen file</span>
                            </div>

                            <div class="choose-content mt-2">
                                <span>Choose your file related with your jobs (.pdf or .docx)</span>
                            </div>
                        </div>

                        <div class="continue-btn mt-5">
                            <a href="">Post</a>
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