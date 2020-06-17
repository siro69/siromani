@include('jobseeker.metatag')
@include('jobseeker.topnavbar')
@include('jobseeker.header')

<style>
    .skill-inner {
        line-height: 3
    }

    .tab-content {
        background: #fff
    }

    .delete-applied {
        right: 0
    }

    table tr td:nth-child(2) {
        font-size: 13px
    }

    table tr td:nth-child(1) {
        color: #444;
        font-weight: 500;
    }

    .per-det table td {
        padding: 9px 17px !important;
    }

    .rating {
        color: #ec7c03
    }

    .bg-kumari {
        background: #ec7c03 !important
    }

    .text-kumari {
        color: #ec7c03
    }

    .exp table td,
    .edu table td {
        padding: 4px !important
    }

    .info {
        font-size: 13px
    }

    .warning {
        right: 7px;
        top: 0
    }

    body {
        background: #fff !important
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #ccc;
        border-color: #ccc;
    }

    .border-custom {
        width: 90px;
        border-color: #ec7c03 !important;
        border-width: 4px;
    }

    h5 {
        font-family: 'Roboto', sans-serif
    }

    p {
        font-size: 14px;
        font-family: 'Roboto'
    }

    .font-lg {
        font-size: 16px;
        font-family: 'Roboto';
        font-weight: 500 !important
    }

    .font-md {
        font-size: 15px;
        font-family: 'Roboto'
    }

    .font-sm {
        font-size: 14px;
        font-family: 'Roboto'
    }

    .font-b {
        color: #242424 !important;
        font-size: 18px
    }

    * {
        font-family: 'Roboto', sans-serif
    }

    p {
        color: #666 !important;
        font-weight: 400 !important
    }

    #premium-job .title {
        font-size: 16px;
        font-weight: 500
    }

    .bg-info-new {
        background: #23c0e9
    }

    .weight-b {
        font-weight: 500 !important
    }

    .text-inner {
        position: absolute;
        z-index: 99999;
        left: 26px;
        bottom: 10px;
        /* transform: translate(-50%,-50%); */
        z-index: 0;
    }

    .text-inner-right {
        position: absolute;
        z-index: 99999;
        right: 26px;
        bottom: 10px;
        /* transform: translate(-50%,-50%); */
        z-index: 0;
    }

    table * {

        font-size: 14px !important;
        font-weight: 400 !important
    }

    .big-text {
        font-family: 'Lato';
        font-size: 22px;
        font-weight: 700;
    }

    .small-text {
        font-family: 'Lato';
        font-size: 16px;
        font-weight: 700;
    }

    .semi-text {
        font-family: 'Lato';
        font-size: 18px;
        font-weight: 700;
    }

    .tiny-text {
        font-family: 'Lato';
        font-size: 14px;
        font-weight: 500;
    }

    .small-text {
        font-family: 'Lato';
        font-size: 16px;
        font-weight: 700;
    }

    .overlay-new {
        background: rgba(0, 0, 0, 0.3);
        height: 100%;
        position: absolute;
        width: 100%;
    }

    .border {
        border: 1px solid rgba(0, 0, 0, .125) !important
    }
    .career-link a {
        font-size: 14px;
        font-family: 'Roboto';
        font-weight:400
    }
    .border-top,
    .border-left,
    .border-right {
        border-color: rgba(0, 0, 0, .125) !important
    }
  
    @media screen and (max-width:800px) {
        .side-bar {
            padding-right: 0 !important
        }
        #jobmayapply .main-box{
            padding: 0 .50rem!important
        }

    }
    @media (width:320px){
        .small-text{
            font-size:13px!important;
        }
        .search-bar{
            padding:0!important;
        }
    }
    @media only screen and (max-width:768px){
        .social-icons li{
            margin-top:0.25rem;
        }
    }
</style>




<div class="container p-0 my-4" id="jobmayapply">

    <div class="row m-0 p-0">
        <div class="col-md-8 main-box pl-0">
            <div class="search-job">
                <div class="search-bar border shadow-sm p-3 mb-4 bg-light">
                    <h5 class="text-left px-3 big-text">SEARCH YOUR DREAM JOB</h5>
                    <form novalidate="novalidate"> <input class="csrf-form-new" type="hidden" name="csrf_test_name"
                            value="">
                        <div class="row m-0">
                            <div class="col-9 col-lg-9 col-md-8 form-group mb-2 ">
                                <i class="fas fa-search pl-3"></i>
                                <input type="text" class="search-slt border-top px-5 text-md" placeholder="Start Your Job Search">
                            </div>
                            <div class="col-3 col-lg-3 col-md-4 form-group mb-2 pl-0">
                                <button type="submit" class="text-white btn wrn-btn w-100 small-text">Search</button> </div>
                        </div>
                        <span class="eg px-3 tiny-text">Eg. Location, Job Title, Education</span>
                    </form>
                </div>
            </div>

            <!-- breadcrumb -->
            <div class="mb-3">
                <div class="d-flex my-auto breadcrump mb-4">
                    <a href="/" ><p class="text-info">Home</p></a>
                    <p class="px-2"><i class="fa fa-arrow-right text-dark"></i></p>
                    <a href="/" ><p class="text-info">Jobseeker</p></a>
                    <p class="px-2"><i class="fa fa-arrow-right text-dark"></i></p>
                    <p  class="text-dark">Job A May Apply</p>
                </div>
            </div>


            <div class="d-flex">
                <div class="semi-text">18 Job Matched</div>
                <div class="small-text ml-auto">Showing 1 To 10 Of 0 Entries</div>
            </div>
            <hr>

            <!-- job card -->
            <div class="shadow-sm border p-3 px-4 my-4">
                <div class="d-flex">
                    <div class="w-25 m-auto">
                        <img src="./images/gadgets.jpeg" alt="" class="border img-fluid">
                    </div>
                    <div class="flex-fill">
                        <div class="big-text px-3">Digital Marketing</div>

                        <div class="d-flex flex-wrap px-3">
                            <hr class="w-100 my-2">
                            <div><i class="fa fa-building"></i> Stonestep</div>
                            <div class="px-3"><i class="fa fa-map-marker-alt"></i> tinkune, Kathmandu</div>
                            <div><i class="fas fa-user-graduate"></i> Education </div>

                        </div>
                        <div class="px-3 mt-2 d-flex">
                            <div class=""><i class="fa fa-eye"></i>128</div>
                            <div class="pl-3"><i class="fas fa-history"></i> 3 days Left</div>
                        </div>
                        <div class="px-3 mt-2">
                            <hr class="w-100 my-2 text-center">
                            <button class="border text-white bg-info mt-1">View Job</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- job card -->
            <div class=" shadow-sm border p-3 px-4 my-4">
                <div class="d-flex">
                    <div class="w-25 m-auto">
                        <img src="./images/gadgets.jpeg" alt="" class="border img-fluid">
                    </div>
                    <div class="flex-fill">
                        <div class="big-text px-3">Digital Marketing</div>

                        <div class="d-flex flex-wrap px-3">
                            <hr class="w-100 my-2">
                            <div><i class="fa fa-building"></i> Stonestep</div>
                            <div class="px-3"><i class="fa fa-map-marker-alt"></i> tinkune, Kathmandu</div>
                            <div><i class="fas fa-user-graduate"></i> Education </div>

                        </div>
                        <div class="px-3 mt-2 d-flex">
                            <div class=""><i class="fa fa-eye"></i>128</div>
                            <div class="pl-3"><i class="fas fa-history"></i> 3 days Left</div>
                        </div>
                        <div class="px-3 mt-2">
                            <hr class="w-100 my-2 text-center">
                            <button class="border text-white bg-info mt-1">View Job</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 col-md-4 col-sm-12 right-part mb-sm-2 mb-md-5 px-2">
            <div class="row justify-content-center border shadow-sm m-0">
                <div class="col-md-12 py-3">
                    <div>
                        <h6 class="text-center semi-text mb-0">TOP HIRING COMPANIES</h6>
                    </div>
                    <hr>
                    <div class="scroller mx-2">
                        <marquee behavior="alternate" direction="right" scrollamount="3" onmouseover="this.stop();"
                            onmouseout="this.start();"> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/oilogo.jpg"
                                    class="scroll"></a> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/loooo.jpg"
                                    class="scroll"></a> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/27657541_1030486543767305_265227403516205169_n.png"
                                    class="scroll"></a> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/INFO_tech.PNG"
                                    class="scroll"></a> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/17951925_1457145724357128_241859840737427748_n.jpg"
                                    class="scroll"></a> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/38933005_10155989080238843_2174098967627825152_n.jpg"
                                    class="scroll"></a> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/cmsgroup1.jpg"
                                    class="scroll"></a> <a href="#." class="column" id="grayscale"><img
                                    src="https://www.kumarijob.com/assets/uploads/profilepics/UNDPlogopremium.png"
                                    class="scroll"></a> </marquee>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-4 col-md-12 d-block d-sm-none d-md-block pt-3 py-sm-3">
                    <div id="slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                            <li data-target="#slider" data-slide-to="1" class=""></li>
                            <li data-target="#slider" data-slide-to="2" class=""></li>
                            <li data-target="#slider" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img class="d-block w-100 responsive"
                                    src="https://www.kumarijob.com/assets/training/images/dmt.jpg"> </div>
                            <div class="carousel-item"> <img class="d-block w-100 responsive"
                                    src="https://www.kumarijob.com/assets/training/images/aet.jpg"> </div>
                            <div class="carousel-item"> <img class="d-block w-100 responsive"
                                    src="https://www.kumarijob.com/assets/training/images/aat.jpg"> </div>
                            <div class="carousel-item"> <img class="d-block w-100 responsive"
                                    src="https://www.kumarijob.com/assets/training/images/joat.jpg"> </div>
                        </div>
                    </div>
                </div> <!-- career tips -->
                <div
                    class="col-xl-12 col-lg-4 col-md-12  border-left-0 border-right-0 my-3 my-md-0 bg-light d-block d-sm-none d-md-block">
                    <div class="career-div py-1">
                        <div class="career-text text-center">
                            <h6 class="mb-0 pt-3 small-text"> <i class="far fa-lightbulb"></i> CAREER TIPS</h6>
                        </div>
                        <div class="seperator justify-content-center"></div>
                        <div class="career-link text-left px-2"> 
                            <a href="#"><i class="fas fa-angle-right"></i> How
                                to make yourself the most </a><br> <a href="#"><i class="fas fa-angle-right"></i>
                                How to handle Emotions at work</a><br> <a href="#"><i
                                    class="fas fa-angle-right"></i> Basic DO'S AND DON'TS of Business
                                etiquette</a><br> <a href="#"><i class="fas fa-angle-right"></i> How to make
                                yourself the most </a><br> <a href="#"><i class="fas fa-angle-right"></i> 8 Signs of
                                a Positive Company Culture</a><br> <a href="#"><i class="fas fa-angle-right"></i>
                                How to make yourself the most </a> </div>
                        <div class="career-more text-right py-2 pr-3"> <a href="#" class="text-info">View More &gt;&gt;</a> </div>
                    </div>
                </div> <!-- Top Hirings -->
                <div class="col-xl-12 col-md-12 top-hiring border-bottom">
                    <div class="text-center hiring-text">
                        <h6 class="mb-0 pt-3 small-text"><i class="fas fa-user-tie"></i> TOP HIRINGS </h6>
                    </div>
                    <div class="seperator justify-content-center"></div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-4 col-md-12 col-sm-6 detail-div mb-3">
                            <div class="border bg-white p-2">
                                <div class="row">
                                    <div class="col-12 col-md-12 d-text px-4 pt-2"> 
                                      
                                        <h6 class="mb-1 small-text" style="font-weight: 500">
                                        <a href="#.">Marketing Sales Head</a>
                                       
                                        </h6> 
                                        <a
                                            href="#." class="d-job"><i class="fa fa-building"></i> Golchha
                                            Organisation</a><br>
                                        <div class="row">
                                            <div class="col-6 col-md-6 col-sm-6"> <a class="h-loc d-icon d-job"><i
                                                        class="fas fa-map-marker-alt"></i> Kathmandu</a> </div>
                                            <div class="col-6 col-md-6 col-sm-6"> 
                                                <a class=" d-icon"><i
                                                class="fas fa-history"></i> 7 days left</a> 
                                            </div>
                                         
                                        </div>
                                        <hr class="my-1">
                                           <div class=" p-0"> <a href="#."
                                                    class=""> >> View</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                     
                    </div>
                    <div class="career-more text-right pb-2 pr-3"> <a href="#" class="text-info">View More &gt;&gt;</a> </div>
                </div>
            </div>
        </div>
        
    </div>

</div>


@include('jobseeker.footer')
