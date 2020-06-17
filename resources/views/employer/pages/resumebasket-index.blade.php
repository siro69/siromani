<style>
  table th,td{
    font-size:0.8125rem!important;
  }
</style>
<!-- Resume Basket -->
<div id="menu2" class="container-fluid  tab-pane">
  <div class="row mt-5">
    <div class="col-md-3">
        @include('employer.pages.employersidebar')

    </div>

  <div class="col-lg-9 col-md-9">
  <div class="resume-basket mt-0">
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of All Applicants</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-left">S.N</th>
                <th>Job Title</th>
                <th>Job Category</th>
                <th>Posted Date</th>
                <th>End Date</th>
                <th>Views</th>
                <th>Applications</th>
              </tr>
            </thead>
            <tbody>
              <!-- first data row-->
              <tr>
                <td class="tdata-center">1</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Training Coordinator</a></td>
                <td class="tdata-center">Training Coordinator</td>
                <td class="tdata-center">2019-07-18</td>
                <td class="tdata-center">2019-07-26</td>
                <td class="tdata-center">921</td>
                <td class="tdata-center hover-ring"><a href="#.">15</a></td>
              </tr>
              <!-- second row data -->
              <tr>
                <td class="tdata-center">2</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">IT Recruiter</a></td>
                <td class="tdata-center">Recruitment Agency</td>
                <td class="tdata-center">2019-07-29</td>
                <td class="tdata-center">2019-08-06</td>
                <td class="tdata-center">1389</td>
                <td class="tdata-center hover-ring"><a href="#.">12</a></td>
              </tr>
              <!-- third row data -->
              <tr>
                <td class="tdata-center">3</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Client Relation Officer</a></td>
                <td class="tdata-center">Client Relation/PR</td>
                <td class="tdata-center">2019-07-10</td>
                <td class="tdata-center">2019-07-18</td>
                <td class="tdata-center">780</td>
                <td class="tdata-center hover-ring"><a href="#.">4</a></td>
              </tr>
              <!-- fourth row data -->
              <tr>
                <td class="tdata-center">4</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Receptionist(Butwal)</a></td>
                <td class="tdata-center">Secretarial/Receptionist</td>
                <td class="tdata-center">2019-07-10</td>
                <td class="tdata-center">2019-07-18</td>
                <td class="tdata-center">690</td>
                <td class="tdata-center hover-ring"><a href="#.">20</a></td>
              </tr>
              <!-- fifth row data -->
              <tr>
                <td class="tdata-center">5</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Business Development Officer</a></td>
                <td class="tdata-center">Sales/Business Development</td>
                <td class="tdata-center">2019-07-10</td>
                <td class="tdata-center">2019-07-18</td>
                <td class="tdata-center">768</td>
                <td class="tdata-center hover-ring"><a href="#.">30</a></td>
              </tr>
              <!-- sixth row data -->
              <tr>
                <td class="tdata-center">6</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">  Recruitment Officer</a></td>
                <td class="tdata-center">Recruitment Agency</td>
                <td class="tdata-center">2019-07-10</td>
                <td class="tdata-center">2019-07-18</td>
                <td class="tdata-center">1199</td>
                <td class="tdata-center hover-ring"><a href="#.">19</a></td>
              </tr>
              <!-- 7th row data -->
              <tr>
                <td class="tdata-center">7</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Marketing Manager</a></td>
                <td class="tdata-center">Marketing/Advertising</td>
                <td class="tdata-center">1970-01-01</td>
                <td class="tdata-center">2019-06-22</td>
                <td class="tdata-center">1209</td>
                <td class="tdata-center hover-ring"><a href="#.">29</a></td>
              </tr>
              <!-- 8th row data -->
              <tr>
                <td class="tdata-center">8</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">  Branch Manager(Butwal)</a></td>
                <td class="tdata-center">General Mgmt./ Administration</td>
                <td class="tdata-center">2019-06-14</td>
                <td class="tdata-center">2019-06-22</td>
                <td class="tdata-center">864</td>
                <td class="tdata-center hover-ring"><a href="#.">50</a></td>
              </tr>
              <!-- 9th row data -->
              <tr>
                <td class="tdata-center">9</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Client Relation Officer(Butwal)</a></td>
                <td class="tdata-center">Client Relation/PR </td>
                <td class="tdata-center">2019-06-14</td>
                <td class="tdata-center">2019-06-22</td>
                <td class="tdata-center">528</td>
                <td class="tdata-center hover-ring"><a href="#.">17</a></td>
              </tr>
              <!-- 10th row data -->
              <tr>
                <td class="tdata-center">10</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">Receptionist (Butwal)</a></td>
                <td class="tdata-center">Client Relation/PR </td>
                <td class="tdata-center">2019-06-14</td>
                <td class="tdata-center">2019-06-22</td>
                <td class="tdata-center">528</td>
                <td class="tdata-center hover-ring"><a href="#.">12</a></td>
              </tr>
              <!-- 11th row data -->
              <tr>
                <td class="tdata-center">11</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">  Sourcing Officer</a></td>
                <td class="tdata-center">Recruitment Agency</td>
                <td class="tdata-center">2019-06-14</td>
                <td class="tdata-center">2019-06-22</td>
                <td class="tdata-center">1028</td>
                <td class="tdata-center hover-ring"><a href="#.">124</a></td>
              </tr>
              <!-- 12th row data -->
              <tr>
                <td class="tdata-center">12</td>
                <td><a href="#." data-toggle="tooltip" title="View job details" data-placement="bottom">  Data Entry</a></td>
                <td class="tdata-center">Database Management</td>
                <td class="tdata-center">2019-06-14</td>
                <td class="tdata-center">2019-06-22</td>
                <td class="tdata-center">1995</td>
                <td class="tdata-center hover-ring"><a href="#.">52</a></td>
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
