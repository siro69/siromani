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
        background: #f8f9fa !important
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
        font-family: 'Lato';
        font-weight: 500!important
    }

    .font-md {
        font-size: 15px;
        font-family: 'Lato';
        font-weight:500!important
    }

    .font-sm {
        font-size: 15px;
        font-family: 'Lato';
        font-weight:600!important
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
    .overlay-new{
        background: rgba(0,0,0,0.3);
        height: 100%;
        position: absolute;
        width: 100%;
    }
    .border{
        border:1px solid rgba(0,0,0,.125)!important
    }
    .border-top,.border-left,.border-right{
        border-color:  rgba(0,0,0,.125)!important
    }
    @media screen and (max-width:800px) {
        .side-bar {
            padding: 0 !important;
            margin-top:10px!important
        }
        
    }
    @media only screen and (max-width:768px){
        .btnss{
            margin-top:0.25rem;
        }
    }
    @media only screen and (max-width:768px){
        .social-icons li{
            margin-top:0.25rem;
        }
    }
</style>








<section id="premium-job">
    <div class="cover container p-0">
        <div class="position-relative">
            <div class="overlay-new"></div>
            <div class="text-inner">
                <div class="d-flex">
                    <a href="/" ><p class="text-white">Home</p></a>
                    <p class="px-2"><i class="fa fa-arrow-right text-white"></i></p>
                    <p  class="text-white">Job Name</p>
                </div>
            </div>
            <div class="text-inner-right">
                <div class="d-flex text-white bg-warning p-2">
                    <i class="far fa-gem my-auto pr-1"></i> <p class="text-white text-md"> Premium Job </p> 
                </div>
            </div>
            <img src="./images/banner.jpg" alt="" class="w-100 border">
        </div>
        <div class="py-3 px-4 border-bottom border-left border-right bg-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem magni maxime est architecto, consequatur sint illo alias eius pariatur molestias harum laborum inventore eos dolor earum, sed natus quaerat dolorem.
        </div>
    </div>
    <div class="container p-0">
        <div class="row mt-4 mb-5 m-0 p-0">
            <div class="col-md-8 p-0">
                <div class="header border-top d-flex border-left bg-white border-right py-3 px-4">
                    <h5 class="mb-0 my-auto font-b">Job Name</h5>
                    <p class="ml-auto my-auto"> <span class="weight-b"> Posted On </span> :2020-2-20</p>
                    <p class="pl-3"><span class="weight-b"> Days Left  </span> : 7 days</p>
                </div>
                <div class="border bg-white p-4">
                    <h5 class="font-sm border-bottom mb-0 pb-3"> Basic Job Information</h5>
              
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

                    <h5 class="font-sm mt-4 text-dark"> Description</h5>
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



                    <h5 class="font-sm mt-4 text-dark"> Specification</h5>
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

                    <h5 class="font-sm mt-3"> Apply Instruction</h5>

                    <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ipsum et placeat
                        error cupiditate nostrum, exercitationem perspiciatis saepe repellendus. Omnis eligendi dolore
                        quam pariatur illum, tempora incidunt? Minus, nulla consequatur.</p>
                
                
                    <hr>
                    <a href=""><button class="px-2 py-1 bg-light border"><i class="fa fa-plus-circle text-info"></i> Apply</button></a> 
                </div>
             
                <div class="border-bottom border-left bg-white border-right py-3 px-4">
                    <a href=""><i class="far fa-star"></i> Save</a>
                    <a href="" class="px-2"><i class="fa fa-print"></i> Print</a>
                    <a href=""><i class="fa fa-share"></i> Share</a>
                </div>
            </div>
            <div class="col-md-4 pr-0 pl-4 side-bar">
                <div class="">
                    <div class="header bg-warning p-3" style="border-radius: 9px 9px 0px 0px;">
                        <p class="text-dark mb-0 font-md" style="font-weight: 500">Job Overview</p>
                    </div>
                    <div class="border-left border-right border-bottom bg-white">
                        <div class="w-15 p-3 px-4 text-center py-4">
                            <img src="./images/aat.png" class="img-responsive rounded-circle" width="90px" alt="">

                            <div class="jobname pt-3">

                                <p class="font-lg text-dark"> Company Name</p>
                                <p><i class="fa fa-map-marker-alt text-info"></i> Tinkune , Kathmandu</p>

                                <div class="d-flex flex-wrap mt-3">
                                    <div class="d-flex flex-wrap px-2 flex-fill">
                                        <a href="" class="flex-fill">
                                        <button class="btn bg-light border w-100 mr-1 ml-auto flex-fill"><i class="fa fa-share text-info"></i> Share
                                            It</button>
                                        </a>
                                        <a href="" class="px-1">
                                        <button class="btn bg-light border"><i class="fa fa-eye text-info"></i> 128</button>
                                        </a>
                                        <a href="" class="flex-fill">
                                        <button class="btn bg-light border mr-auto w-100 btnss"><i class="fa fa-plus-circle text-info"></i>
                                            Apply Now</button>
                                        </a>
                                    </div>
                                    <a href="" class="flex-fill px-2"><button class="btn bg-light border w-100 mt-1"><i
                                            class="fa fa-building text-info"></i> View Company Profile</button>
                                    </a> 
                                </div>
                            </div>

                        </div>

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
