<style>
    body{
        font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
        font-size: .8125rem;
        font-weight: 400;
        line-height:1.5;
    }
    .message-header{
        border-bottom:1px solid lightgrey;
        margin:0 -20px;
        padding:10px 25px;
        font-size:0.8925rem;
        font-weight:500;
    }
    .input-prepend span{
        display: flex;
        align-items: center;
        padding: 7px 10px;
        margin-bottom: 0;
        font-size: .8125rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
    }
    .input-prepend{
        position:absolute;
        top:0;
        left:0;
    }
    .input-group{
        margin-top:20px;
    }
    .input-group input{
        width:100%;
        padding:3px 43px;
    }
    .input-prepend i{
        color:grey;
    }
    .text-input{
        width:100%;
        height:120px;
        padding:5px 15px;
    }
    .msg-submit{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .msg-submit button{
        padding:4px 10px;
        width:100%;
        font-size:0.89rem;
        font-weight:500;
        color:#fff;
        background-color:#002a5b;
        border:1px solid #002a5b;
    }
    .address{
        color:#6c757d;
    }
    .next-color{
        color:#002a5b;
    }
    .mapouter{
        position:relative;
        text-align:right;
        height:500px;
        width:100%;
    }
    .gmap_canvas {
        overflow:hidden;
        background:none!important;
        height:500px;
        width:100%!important;
    }
    .jobseeker-footer{
        box-shadow: 0px 10px 13px 2px;
    }
    .search{
        font-size:0.89rem;
        font-weight:500;
        color:#002a5b;
        display:flex;
        justify-content: flex-end;
    }
    .search span{
        font-weight:700
    }
    .res-footer a,.footer-log a{
        background-color:#00aeda;
        border:1px solid #00aeda;
        font-weight: 600;
        font-size: 0.82rem;
        padding: 5px 42px;
        color: #fff;
    }
    .footer-log a{
        background-color:#fff;
        color:#00aeda;
    }
    .footer-log a:hover{
        background-color:#0085a7;
        text-decoration:none;
        color:#fff;
    }
    .res-footer a:hover{
        background-color:#0085a7;
        text-decoration:none;
    }
    .que-footer a{
        color:#002a5b;
    }
    .que-footer a:hover{
        color:#000;
        text-decoration:none;
    }
    @media only screen and (max-width: 1024px) {
        .res-footer a{
            padding: 5px 7px;
        }
        .footer-log a{
            padding: 5px 12px;
        }
    }
    @media only screen and (max-width: 425px) {
        .jobseeker-footer{
            display:none;
        }
    }
</style>
<div class="contact-div">
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kumari%20job&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-body pt-0">
                        <div class="message-header">Leave Your Message</div>

                        <form>
                            <div class="input-group">
                                <div class="input-prepend">
                                    <span>
                                        <i class="fas fa-user-tie"></i>
                                    </span>
                                </div>
                                <input type="text" name="name" placeholder="Full Name">
                            </div>

                            <div class="input-group">
                                <div class="input-prepend">
                                    <span>
                                        <i class="fas fa-phone"></i>
                                    </span>
                                </div>
                                <input type="text" name="number" placeholder="Mobile Number">
                            </div>

                            <div class="input-group">
                                <div class="input-prepend">
                                    <span>
                                        <i class="far fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" placeholder="Email Address">
                            </div>

                            <div class="input-group">
                                <div class="input-prepend">
                                    <span>
                                        <i class="far fa-building"></i>
                                    </span>
                                </div>
                                <input type="password" name="subject" placeholder="Subject">
                            </div>

                            <textarea class="text-input mt-3" placeholder="Your message here "></textarea>
                            <div class="msg-submit mt-4">
                                <button>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body address">
                        <div>Suvidamarg, Tinkune<br> Kathmandu Nepal</div>

                        <div class="mt-3">
                            <span>Email : <span class="next-color">info@kumarijob.com</span></span><br>
                            <span>Phone No. <span class="next-color">+977-1-4255654,4545456,45545454</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jobseeker-footer py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="search">Search, Apply & Get Job:
                    <span class="ml-1">FREE</span>
                </div>
            </div>
            <div class="col-md-2 res-footer">
                <a href=""><i class="fas fa-user-tie mr-1"></i>REGISTER</a>
            </div>
            <div class="col-md-2 footer-log">
                <a href=""><i class="fas fa-lock mr-1"></i>LOG IN</a>
            </div>
            <div class="col-md-3 que-footer">
                <a href=""><i class="far fa-building mr-1"></i>Are you an Employer?</a>
            </div>
        </div>
    </div>
</div>
