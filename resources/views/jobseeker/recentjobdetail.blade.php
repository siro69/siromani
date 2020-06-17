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
        font-weight: 500!important
    }

    .font-md {
        font-size: 15px;
        font-family: 'Roboto'
    }

    .font-sm {
        font-size: 14px;
        font-family: 'Roboto'
    }
    .font-b{
        color:#242424!important;
        font-size:18px
    }

    * {
        font-family: 'Roboto', sans-serif
    }
    p{
        color: #666!important;
        font-weight: 400!important
    }

    #premium-job .title {
        font-size: 16px;
        font-weight: 500
    }

    .bg-info-new {
        background: #23c0e9
    }
    .weight-b{
        font-weight: 500!important
    }
    .text-inner{
        position: absolute;
        z-index: 99999;
        left: 26px;
        bottom: 10px;
        /* transform: translate(-50%,-50%); */
        z-index: 0;
    }
    .text-inner-right{
        position: absolute;
        z-index: 99999;
        right: 26px;
        bottom: 10px;
        /* transform: translate(-50%,-50%); */
        z-index: 0;
    }
    table * {

        font-size: 14px!important;
        font-weight: 400!important
    }
    .big-text{
        font-family: 'Lato';
        font-size: 22px;
        font-weight: 700;
    }
    .small-text{
        font-family: 'Lato';
        font-size: 16px;
        font-weight: 700;
    }
    .semi-text{
        font-family: 'Lato';
        font-size: 18px;
        font-weight: 700;
    }
    .tiny-text{
        font-family: 'Lato';
        font-size: 14px;
        font-weight:500;
    }
    .small-text{
        font-family: 'Lato';
        font-size: 16px;
        font-weight: 700;
    }
    .overlay-new{
        background: rgba(0,0,0,0.3);
        height: 100%;
        position: absolute;
        width: 100%;
    }
    .breadcrump p {
        font-weight: 500!important
    }
    .border{
        border:1px solid rgba(0,0,0,.125)!important
    }
    .border-top,.border-left,.border-right{
        border-color:  rgba(0,0,0,.125)!important
    }
    @media screen and (max-width:800px) {
        .side-bar {
            padding-right: 0 !important
        }
        .cover{
            padding: 0 20px!important
        }
    }
    body{
        background: #fcfcfc
    }
    @media only screen and (max-width:768px){
        .social-icons li{
            margin-top:0.25rem;
        }
        .btn{
            margin-top:.25rem;
        }
    }
</style>








<section id="premium-job">
    <div class="cover container p-0 d-flex mt-3 ">
    
            <div class="d-flex my-auto breadcrump">
                    <a href="/" ><p class="text-info">Home</p></a>
                    <p class="px-2"><i class="fa fa-arrow-right text-dark"></i></p>
                    <p  class="text-dark">Job Name</p>
            </div>
            <div class="ml-auto">
                <div class="d-flex text-white bg-info p-2">
                    <i class="fa fa-indent my-auto pr-1"></i> <p class="text-white text-md"> Recent Job </p> 
                </div>
            </div>
    </div>
    
    <div class="container p-0">
    
        <div class="row mt-3 mb-5 m-0 p-0">
        <div class="col-md-4 p-0">
                <div class="">
                    <!-- <div class="header bg-danger p-3" style="border-radius: 9px 9px 0px 0px;">
                        <p class="text-white mb-0 font-md" style="font-weight: 500">Job Overview</p>
                    </div> -->
                    <div class="">
                        <div class="w-15 text-center ">
          
                            <div class="jobname border bg-white p-3 mb-3">

                                <p class="semi-text text-dark text-left px-2" style="font-weight: 600!important"> Company Name</p>
                                <p class="text-left px-2"><i class="fa fa-map-marker-alt text-info"></i> Tinkune , Kathmandu</p>

                                <div class="d-flex flex-wrap mt-3">
                                    <div class="d-flex px-2 flex-wrap flex-fill">
                                        <a href="" class="flex-fill">
                                        <button class="btn bg-light border w-100 mr-1 ml-auto flex-fill"><i class="fa fa-share text-info"></i> Share
                                            It</button>
                                        </a>
                                        <a href="" class="px-1">
                                        <button class="btn bg-light border"><i class="fa fa-eye text-info"></i> 128</button>
                                        </a>
                                        <a href="" class="flex-fill">
                                        <button class="btn bg-light border mr-auto w-100"><i class="fa fa-plus-circle text-info"></i>
                                            Apply Now</button>
                                        </a>
                                    </div>
                                    <a href="" class="flex-fill px-2"><button class="btn bg-light border w-100 mt-1"><i
                                            class="fa fa-building text-info"></i> View Company Profile</button>
                                    </a> 
                                </div>
                            </div>
                            <img src="./images/aat.png" class="img-fluid"  alt="">

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8 pr-0">
                <div class=" border bg-white p-3">
                <div class="header py-1 px-4 mt-3">
                    <h5 class="mb-0 my-auto big-text">Digital Marketing Intern</h5>
                    <div class="d-flex">
                        <p class=" my-auto"> <span class="weight-b"> Posted On </span> :2020-2-20</p>
                        <p class="pl-3"><span class="weight-b"> Days Left  </span> : 7 days</p>
                    </div>
                </div>
                <div class=" bg-white px-4 py-1">
                    <h5 class="semi-text border-top mb-0 py-3"> Basic Job Information</h5>
              
                    <table class="table table-hover table-no-border border-bottom m-0">
                        <tbody>
                            <tr>
                                <td width="33%">Job Category</td>
                                <td width="3%">:</td>
                                <td width="64%">
                                    <a href=""> Sales/Business Development</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Experience</td>
                                <td>:</td>
                                <td>Experience preferred in related field</td>
                            </tr>
                            <tr>
                                <td>Education</td>
                                <td>:</td>
                                <td>BBA, BIT</td>
                            </tr>
                            <tr>
                                <td>Job Level</td>
                                <td>:</td>
                                <td><a href="">
                                        Mid Level
                                    </a></td>
                            </tr>
                            <tr>
                                <td>No. of Vacancy/s</td>
                                <td>:</td>
                                <td><strong>1</strong> </td>
                            </tr>
                            <tr>
                                <td>Employment Type</td>
                                <td>:</td>
                                <td>
                                    Full Time
                                </td>
                            </tr>
                            <tr>
                                <td>Job Location</td>
                                <td>:</td>
                                <td>
                                    <span>Thapathali, Kathmandu</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Offered Salary</td>
                                <td>:</td>
                                <td>
                                    Negotiable
                                </td>
                            </tr>
                            <tr>
                                <td>Expiry date<span class="mx-2">(Deadline)</span></td>
                                <td>:</td>
                                <td>
                                    Feb. 12, 2020
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="semi-text mt-4"> Description</h5>
                    <hr class="my-1">
                   <p class="pt-2 text-dark">
                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul>
                    </p>



                    <h5 class="semi-text mt-4 text-dark"> Specification</h5>
                    <hr class="my-1">
                    <p class="pt-2 text-dark">
                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul>
                    </p>
                    <h5 class="semi-text mt-4"> Apply Instruction</h5>
                    <hr class="my-1">
                    <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ipsum et placeat
                        error cupiditate nostrum, exercitationem perspiciatis saepe repellendus. Omnis eligendi dolore
                        quam pariatur illum, tempora incidunt? Minus, nulla consequatur.</p>
                
                
                    <hr>
                    <a href=""><button class="px-2 py-1 bg-light border"><i class="fa fa-plus-circle text-info"></i> Apply</button></a> 
                    <hr class="mt-4">
                </div>
              
                <div class=" py-3 px-4">
                    <a href=""><i class="far fa-star"></i> Save</a>
                    <a href="" class="px-2"><i class="fa fa-print"></i> Print</a>
                    <a href=""><i class="fa fa-share"></i> Share</a>
                </div>
            </div>
        </div>
        </div>
    </div>

</section>



@include('jobseeker.footer')
<script>
    $(function () {
        $('.warning').click(function () {

            $('.hide').remove()
        })
    })
</script>
