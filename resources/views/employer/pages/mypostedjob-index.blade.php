<style>
.card-header h6{
  font-size:0.9rem;
}
.card-header i{
  padding-right:5px;
  opacity:0.6;
}
.card-body{
  font-size:0.8125rem;
  color:#000;
  font-weight:400;
}
table td, th{
  font-size:0.8125rem!important;
  font-weight:400;
}
table th{
  font-weight:bold;
}
th i{
  opacity:0.6;
}
td a{
  color:#000!important;
}
.dropdown{
  margin:0;
}
/* .table th{
  background-color:#F2F2F2;
} */
  .dropdown{
    margin:0!important;
}
.dropdown-menu{
    left:-80px!important;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0,0,0,.05);
}
</style>
<!-- My Posted Job -->
<div id="menu3" class="container p-0 tab-pane">
<div class="row mt-5">
<div class="col-md-3">
    @include('employer.pages.employersidebar')

</div>
<div class="col-lg-9 col-md-9">
  <div class="emptables">
    <div class="row">
      <div class="col-md-12">
        
        <p class="mb-0"></p>
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-list"></i>Posted Job List</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped display text-dark" id="" width="100%" cellspacing="0">
              <thead>
              <tr>
                    <th class="text-left">S.N</th>
                    <th>Job Title</th>
                    <th>Posted Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Views</th>
                    <th>Applied</th>
                    <th><i class="fas fa-sliders-h"></i></th>
              </tr>
              </thead>
                <tbody>
                  <!-- first data row-->
                  <tr>
                    <td class="tdata-center">1</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Training Coordinator</a></td>
                    <td class="tdata-center">2019-07-18</td>
                    <td class="tdata-center">2019-07-26</td>
                    <td class="tdata-center"><i class="far fa-check-circle text-success"></i>Active</td>
                    <td class="tdata-center">921</td>
                    <td class="tdata-center">21</td>
                   
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- second row data -->
                  <tr>
                    <td class="tdata-center">2</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Client Relation Officer(Butwal)</a></td>
                    <td class="tdata-center">2019-07-10</td>
                    <td class="tdata-center">2019-07-26</td>
                    <td class="tdata-center"><i class="far fa-check-circle text-success"></i>Active</td>
                    <td class="tdata-center">595</td>
                    <td class="tdata-center">95</td>
            
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- third row data -->
                  <tr>
                    <td class="tdata-center">3</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Receptionist(Butwal)</a></td>
                    <td class="tdata-center">2019-06-17</td>
                    <td class="tdata-center">2019-06-30</td>
                    <td class="tdata-center"><i class="far fa-check-circle text-success"></i>Active</td>
                    <td class="tdata-center">595</td>
                    <td class="tdata-center">15</td>
                  
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- fourth row data -->
                  <tr>
                    <td class="tdata-center">4</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Business Development Officer</a></td>
                    <td class="tdata-center">2019-06-23</td>
                    <td class="tdata-center">2019-07-10</td>
                    <td class="tdata-center"><i class="far fa-check-circle text-success"></i>Active</td>
                    <td class="tdata-center">595</td>
                    <td class="tdata-center">15</td>
             
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- fifth row data -->
                  <tr>
                    <td class="tdata-center">5</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Recruitment Officer</a></td>
                    <td class="tdata-center">2019-06-23</td>
                    <td class="tdata-center">2019-07-10</td>
                    <td class="tdata-center"><i class="far fa-check-circle text-success"></i>Active</td>
                    <td class="tdata-center">595</td>
                    <td class="tdata-center">15</td>
                
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- sixth row data -->
                  <tr>
                    <td class="tdata-center">6</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Client Relation Officer(Butwal)</a></td>
                    <td class="tdata-center">2019-06-23</td>
                    <td class="tdata-center">2019-07-10</td>
                    <td class="tdata-center"><i class="far fa-check-circle text-success"></i>Active</td>
                    <td class="tdata-center">3435</td>
                    <td class="tdata-center">15</td>
           
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- 7th row data -->
                  <tr>
                    <td class="tdata-center">7</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Marketing and Communication Officer</a></td>
                    <td class="tdata-center">2019-06-23</td>
                    <td class="tdata-center">2019-07-10</td>
                    <td class="tdata-center"><i class="far fa-check-circle text-success"></i>Active</td>
                    <td class="tdata-center">435</td>
                    <td class="tdata-center">15</td>
             
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- 8th row data -->
                  <tr>
                    <td class="tdata-center">8</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Training Coordinator</a></td>
                    <td class="tdata-center">2019-07-18</td>
                    <td class="tdata-center">2019-07-26</td>
                    <td class="tdata-center"><i class="far fa-times-circle text-danger"></i>Expired</td>
                    <td class="tdata-center">921</td>
                    <td class="tdata-center">15</td>
               
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- 9th row data -->
                  <tr>
                    <td class="tdata-center">9</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Client Relation Officer(Butwal)</a></td>
                    <td class="tdata-center">2019-07-10</td>
                    <td class="tdata-center">2019-07-26</td>
                    <td class="tdata-center"><i class="far fa-times-circle text-danger"></i>Expired</td>
                    <td class="tdata-center">595</td>
                    <td class="tdata-center">15</td>
                 
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- 10th row data -->
                  <tr>
                    <td class="tdata-center">10</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Receptionist(Butwal)</a></td>
                    <td class="tdata-center">2019-06-17</td>
                    <td class="tdata-center">2019-06-30</td>
                    <td class="tdata-center"><i class="far fa-times-circle text-danger"></i>Expired</td>
                    <td class="tdata-center">595</td>
                    <td class="tdata-center">15</td>
                
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <!-- 11th row data -->
                  <tr>
                    <td class="tdata-center">11</td>
                    <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Business Development Officer</a></td>
                    <td class="tdata-center">2019-06-23</td>
                    <td class="tdata-center">2019-07-10</td>
                    <td class="tdata-center"><i class="far fa-times-circle text-danger"></i>Expired</td>
                    <td class="tdata-center">595</td>
                    <td class="tdata-center">15</td>
                 
                    <td class="tdata-center">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>View Applications</a>
                          <a class="dropdown-item" href="#"><i class="far fa-eye"></i>View job</a>
                          <a class="dropdown-item" href="#"><i class="far fa-edit"></i>Edit Detail</a>
                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>Delete Post</a>
                      </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
