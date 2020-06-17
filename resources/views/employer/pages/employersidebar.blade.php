<style>
     .btn-info
        {
            background-color: transparent!important;
            border-width: 2px;
            color:#000;
            font-weight: 600;
            font-size: 15px;
            border: 2px solid #36b9cc;
        }
        .btn-info:hover {
            color: #000;
            background-color: rgba(0,0,0,0.1)!important;
            /* border-color: #2a96a5; */
        }
        .banner{
            height: 88px
        }
        .profile{
            height: 80px;
            width: 80px;
            text-align: center;
            margin-top: 42px!important;
        }
        .text-dark{
            color:rgba(0,0,0,.9)!important
        }

        .custom-border {
            border-left: 1px solid #999;
            border-right: 1px solid #999;
            border-top: 1px solid #999;
        }
        .fa-skype{
            padding: 7px;
            transition: 0.3s linear
        }
        .fa-mail-bulk{
            padding: 7px;
            transition: .3s linear
        }
        .fa-skype:hover{
            background: #00aff0
        }
        .fa-viber{
            padding: 7px;
            transition: .3s linear
        }
        .fa-whatsapp{
            padding: 7px;
            transition: .3s linear
        }
        .fa-viber:hover{
            background: #665cac
        }
        .fa-whatsapp:hover{
            background: #4fce5d
        }
        .fa-mail-bulk:hover{
            background: #D44638
        }
        .mail-id{
           line-height: 1;
           font-size: 14px;
           font-weight: 600;
        }
        .postjob{
            background-color: transparent!important;
            border-width: 2px;
            color: #000;
            font-weight: 600;
            font-size: 15px;
            border: 2px solid #36b9cc;
            padding: .25rem .5rem;
            line-height: 1.5;
            border-radius: .2rem;
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
        .postjob i{
            padding-right:5px;
        }
        .postjob:hover{
            color:#000;
        }
        
        @media only screen and (max-width:1024px){
            .mail-id{
                font-size:12px;
            }
        }
        @media only screen and (max-width:760px){
            .mail-id{
                font-size:14px;
            }
        }
        @media (max-width:768px){
            .company-profile{
                padding:.75rem!important;
            }

        }
        @media (width:768px){
            .logout-btn{
                margin-top:0.25rem;
            }
            .client-content{
                padding:0!important;
            }
            .main-client{
                padding:0!important;
            }
        }
        @media (width:1024px){
            .logout-btn{
                margin-top:0.25rem;
            }
        }
</style>

<div class="col-md-12 p-0 pl-0 side-bar mb-4">
                <div class="p-0 shadow-sm rounded custom-border  p-0 bg-white">
                   
                    <div class="row p-0  m-0">
                        <div style="background: url(https://www.kumarijob.com/assets/frontend/css/resumeone.jpg)" class="bg-dark w-100 banner rounded-top">
                            <div style="background: url(https://www.kumarijob.com/assets/frontend/css/resumeone.jpg); border:2px solid #fff" alt="" class="m-auto profile rounded-circle img-responsive  bg-white shadow-sm">
                            </div> 
                        </div>
                        <div class="company-profile p-3 ">
                        <div class="col-md-12 m-auto profile-name pt-4">
                            <h6 class="mb-0 semi-text text-dark text-center">Kumari Job</h6>
                        </div>
                        <hr class="my-1 mt-2">
                        <p class="career-obj my-2 text-left" style="line-height:1.2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cons</p>
                        <hr class="my-2">
                        <div class="row profile-add m-0">
                            <div class="col-lg-6 col-md-12 text-dark" style="font-weight: 600">
                                <i class="fa fa-map-marker-alt" style="font-size: 14px"></i> Address:
                            </div>
                            <div class="col-lg-6 col-md-12">
                                kathmandu
                            </div>
                        </div>
                        </div>
                    

                    </div>
                    <div class="d-flex flex-wrap px-3 pb-3 m-0">
                        <a href="employerviewprofile.php" class="mr-auto flex-fill"><button
                                class="btn-info btn-sm  w-100" style="font-weight: 600"><i class="fa fa-user"></i> View
                                Profile </button></a>
                        <a href="">&nbsp;</a>
                        <a href="" class="ml-auto flex-fill logout-btn"><button
                                class="btn btn-info btn-sm  w-100" style="font-weight: 600"><i class="fa fa-key"></i> Logout
                            </button></a>
                    </div>

                </div>

                <div class="p-0 shadow-sm rounded custom-border  mt-3 px-4 py-4 bg-white">
                    <div>
                        <a href="/kumaridesign/empdashboard/resumebasket.php" class="text-dark"><i class="fa fa-folder pr-1"></i> Resume Basket </a>
                    </div>
                    <div>
                        <a href="/kumaridesign/empdashboard/database.php" class="text-dark"><i class="fa fa-database pr-1"></i> Database Service</a>
                    </div>
                    <hr class="my-2">
                    <div class="mt-2">
                    <a href="/kumaridesign/empdashboard/postajob.php"class="postjob"><i class="fa fa-plus-circle"></i> Post A Job</a>
                    </div>

                </div>

                <div class=" mb-5 p-2 custom-border main-client bg-white rounded shadow-sm mt-3">
                    <div class="text-center my-2">
                        <h5 class="semi-text text-dark">Client Support</h5>
                    </div>
                    <div class="pt-2 mb-2">
                        <div class="col-md-12 col-sm-12 client-content">
                            <div class="border rounded py-3 border-bottom-new">
                                <div class="left text-center rounded">
                                    <img src="https://www.kumarijob.com/assets/employee/aastha.png" alt="" class=" img-responsive bg-dark rounded-circle" width="75">
                                </div>
                                <div class="main ml-2 text-center">
                                        <p class="semi-text text-dark mb-0 mt-3" style="line-height: 1">Aastha Kc</p>
                                        <p class="mb-0  text-dark mt-2" style="font-size: 14px;font-weight: 600;"> Senior Client Relation Incharge</p>
                                        
                                        <p class="mb-0  text-dark mail-id" ><i class="fa fa-envelope"></i> aastha.kc@kumarijob.com</p>
                                       
                                        <p class="mb-0 text-dark " style="font-size: 12px;font-weight: 600;"><i class="fas fa-mobile-alt"></i> +977 98600000</p>
                                </div>
                                <div class="d-flex mt-2 ">
                                    <div class=" m-auto px-0">
                                        <i class="fab fa-skype border text-dark" data-toggle="tooltip" data-placement="top" title="skype@username.com"></i>
                                        <i class="fa fa-mail-bulk border text-dark" data-toggle="tooltip" data-placement="top" title="9393939"></i>
                                        <i class="fab fa-viber border text-dark" data-toggle="tooltip" data-placement="top" title="93838333"></i>
                                        <i class="fab fa-whatsapp border text-dark" data-toggle="tooltip" data-placement="top" title="983838383"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                
                       
                    </div>
                </div>


            </div>