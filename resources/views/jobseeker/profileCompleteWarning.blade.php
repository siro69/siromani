
  <style>

@media screen and (max-width:800px) {
      
      #warning-profile{
         text-align: center
     }
     .progess-bar{
         margin: auto;
         padding: 14px;
     }
     #profile-btn{
         margin: auto!important;
         padding: 14px;
     }
     #profile-btn button{
        padding: 6px;
        width: 175px;
        margin-right: 0!important
     }
 }
  </style>
            
                <div class="border bg-white mb-3 p-3 d-flex flex-wrap position-relative hide" id="warning-profile">
                    <span class="position-absolute warning">
                        <p class="ml-4">&times;</p>
                    </span>
                   <div class="d-flex progess-bar">
                        <button class="btn btn-sm btn-light border pt-1 col-md-12 d-flex my-auto">   
                        <div class="progress p-0 my-auto" style="width:119px">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-center font-weight-bold my-auto ml-3">20%</p>
                        </button>
                       

             
                   </div>
                   <div class="px-4">
                    <h6 class="mb-0 complete"><i class="far fa-user py-1"></i> Profile Completeness</h6>
                    <small class="text-primary info" style="font-weight: 300;font-size:12px"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                        </small>
                   </div>

                    <div class="ml-auto my-auto" id="profile-btn">
                         <button class="btn btn-sm btn-light border mr-3 comp-pre" style="padding: 6px">
                            <i class="fa fa-user"></i> 
                            Complete Profile
                        </button>
                    </div>
                   
                </div>
