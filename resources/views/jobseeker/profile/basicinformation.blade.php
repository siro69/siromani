

                <!-- Personal Detail -->
                <div class="bg-white border per-det">
                <h6 class="mb-0 px-3 py-2 d-flex border-bottom">
                    <span class="my-auto"><i class="fa fa-file-alt"></i> Basic Information </span>
                  <a href="/kumari/basicInformationEdit.php" class="ml-auto"><button class="btn btn-sm btn-light border comp-pre "><i class="far fa-edit pr-1"></i>Edit Basic Info</button></a>  
                </h6>
                <!-- <hr> -->
                <div class="p-3">
                <table class="table table-striped mt-0">
                    <tr>
                        <td class="pad">Full Name</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> {{ Auth::user()->first_name }} {{ \Auth::user()->last_name }}</td>
                    </tr>
                    <tr>
                        <td class="pad">Date Of Birth</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> 2054/4/4</td>
                    </tr>
                    <tr>
                        <td class="pad">Gender</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> Web Developer</td>
                    </tr>
                    <tr>
                        <td class="pad">Marital</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> Single</td>
                    </tr>
                    <tr>
                        <td class="pad">Mobile Number</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> 98700000</td>
                    </tr>
                    <tr>
                        <td class="pad">Telephone Number</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> 98700000</td>
                    </tr>
                    <tr>
                        <td class="pad">Current Address</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> Kathmandu, Nepal</td>
                    </tr>
                    <tr>
                        <td class="pad">Permanent Address</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> Kathmandu, Nepal</td>
                    </tr>
                   
                    <tr>
                        <td class="pad">Provience</td>
                        <td style="width:1px">:</td>
                        <td class="fontweight"> 98700000</td>
                    </tr>
                  
                </table>
                </div>
                </div>
