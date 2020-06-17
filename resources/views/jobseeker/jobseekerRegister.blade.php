

<?php
 @include ('jobseeker.metatag')
?>  
<style>
    .cover *{
    font-family: 'Poppins', sans-serif !important;
    }
    .form-control{
        border:none;
        border-radius: .35rem!important;
        background: transparent!important
    }
    .see-password{
    border-radius: 0 .25rem .25rem 0;
    }
    .input-group{
        background: #F8FAFC;
    }
    .gmail{
        background: #C13C2D!important;
        border-color: #C13C2D;
    }
    .linked{
        background: #0073b1!important;
        border-color: #0073b1; 
    }
    .facebook{
        background: #4267b2!important;
        border-color: #4267b2; 
    }
    .cover{
        width: 100%;
        max-width: 570px;
        margin: auto;
    }
    body{
        background: #fff!important
    }
</style>
<section id="jobseeker-register">
    <div class="cover">
        <div class="container my-5">
            <div class="logo d-flex">
                <img src="./images/kumarijob.png" width="180" class="m-auto p-2 bg-light" alt="">
            </div>
            

            <h2 class="text-center mt-3">Welcome Back</h2>
            <p class="text-center">Kumari Job is one of the leading legally certified Human Resource consulting firm operating since 2014. Kumari Job offers multiple solutions in the field of HR,</p>
            
            <div class="form mt-4">
                <form action="">
                    <div class="row">
                        <div class="col-6">
                            <label for="">First Name</label>
                            <div class="input-group border rounded d-flex">
                                <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div>
                                <input type="text" class="form-control" name="first_name">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="">Last Name</label>
                            <div class="input-group border rounded d-flex">
                                <div class="p-1 m-auto">
                                    <i data-feather="user" class="m-auto p-1"></i>
                                </div>
                                <input type="text" class="form-control" name="last_name">
                            </div>
                        </div>    
                        <div class="col-12 mt-3">
                            <label for="">Email</label>
                            <div class="input-group border rounded d-flex">
                                <div class="p-1 m-auto">
                                    <i data-feather="at-sign" class="m-auto p-1"></i>
                                </div>
                                <input type="text" class="form-control" name="last_name">
                            </div>
                        </div>    
                        <div class="col-12 mt-3">
                            <label for="">Password</label>
                            <div class="input-group border rounded d-flex">
                                <div class="p-1 m-auto">
                                    <i data-feather="lock" class="m-auto p-1"></i>
                                </div>
                                <input type="text" class="form-control" name="last_name">
                                <div class="p-2 m-auto bg-light see-password">
                                    <i data-feather="eye" class="m-auto p-1"></i>
                                </div>
                            </div>
                        </div>    
                        <div class="col-12 mt-3">
                            <label for="">Phone Number</label>
                            <div class="input-group border rounded d-flex">
                                <div class="p-1 m-auto">
                                    <i data-feather="phone" class="m-auto p-1"></i>
                                </div>
                                <input type="text" class="form-control" name="last_name">
                         
                            </div>
                        </div>    
                    </div>

                    <p class="pt-3">I agree to the Kumari Job <a href="">Terms & Services</a>  and <a href="">Privacy Policy</a> </p>
                
                    <button class="w-100 btn btn-primary mt-3"> Agree & Join</button>
                    
                    <p class="pt-3 text-center">Or Sign in With</p>

                    <div class="row">
                        <div class="col-4">
                        <button class="w-100 btn btn-primary mt-3 facebook"> Facebook</button>  
                        </div>
                        <div class="col-4">
                        <button class="w-100 btn btn-primary mt-3 linked"> Linkedin</button>
                        </div>
                        <div class="col-4">
                        <button class="w-100 btn btn-primary mt-3 gmail"> Gmail</button>
                        </div>
                        
                    </div>

                    <hr>

                    <p class="text-right">Already on Kumarijob? <a href="">Sign in</a> </p>
                
                </form>
            </div>
        </div>
    </div>
</section>



<script>
      feather.replace()
</script>
