<style>
    body{
        font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
        font-size: .8125rem;
        font-weight: 400;
        line-height:1.5;
    }
    .employer-maindiv{
        background-color:#f4f4f7;
    }
    .card-header,.card-content{
        background-color:#fff;
        font-size:0.89rem;
        font-weight:500;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .card-header span{
        font-size:1.2rem;
        font-weight:600;
    }
    .card-btn{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .card-btn button{
        background-color:#fff;
        border:1px solid #ec7c03;
        border-radius:5px;
        background-color:#ec7c03;
        color:#fff;
        padding:5px 10px;
        font-weight:500;
        font-size:0.89rem;
        outline:none;
    }
    .card-btn button:hover{
        background-color:#FF680A;
        border:2px solid #FF680A;
    }
    .input-feild,.select-box{
        position:relative;
    }
    .input-icon{
        position:absolute;
        top:50% ;
        left:21px;
        transform: translateY(-50%);
    }
    .input-icon i{
        font-size:1.1rem;
        color:#ec7c03;
    }
    .input-feild input,.select-box select{
        width:100%;
        padding:8px 50px;
        border:1px solid lightgrey;
        border-radius:25px;
        outline:none;
    }
    .most-write{
        font-size:0.68rem;
        padding:3px 26px;
    }
    .capcha-input{
        padding:8px 22px!important;
    }
    .verify{
        font-weight:500;
        font-size:0.92rem;
    }
    .capcha button{
        border:none;
        outline:none;
        background-color:#Fff;
    }

    /* CHECKMARK CSS */
    /* The container */
    .check-div {
        display: block;
        position: relative;
        padding-left: 35px;
        font-size:0.89rem;
        font-weight:500;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .check-div input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmarked {
        position: absolute;
        top: 0;
        left: 5px;
        height: 18px;
        width: 18px;
        background-color: #eee;
        border: 1px solid #ec7c03;
        border-radius: 5px;
    }

    /* On mouse-over, add a grey background color */
    .check-div:hover input ~ .checkmarked {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .check-div input:checked ~ .checkmarked {
        background-color: #ec7c03;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmarked:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .check-div input:checked ~ .checkmarked:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .check-div .checkmarked:after {
        left: 6px;
        top: 3px;
        width: 6px;
        height: 9px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    .submit-btn{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:0 30px;
    }
    .submit-btn button{
        width:100%;
        padding:5px 0;
        outline:none;
        border:1px solid #ec7c03;
        border-radius:5px;
        background-color:#ec7c03;
        color:#fff;
        font-size:0.9rem;
        font-weight:500;
    }
    .submit-btn button:hover{
        background-color:#FF680A;
        border:2px solid #FF680A;
    }
    @media (max-width:320px){
        .input-feild input,.select-box select{
            padding:3px 26px;
        }
        .input-icon{
            left:8px;
        }
        .input-icon i{
            font-size:0.95rem;
        }
        .capcha-fill{
            margin-top:10px;
        }
    }
</style>
<div class="employer-maindiv pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body pt-0">
                        <div class="card-header">
                            <span>Create an Account - </span>It's fast, easy, and free!
                        </div>
                        <div class="card-content my-3">
                            I am a Employer
                        </div>

                        <div class="card-btn">
                            <button class="btn-1 mx-2">Register as Employer</button>
                            <button class="btn-2 mx-2">Already have an account </button>
                        </div>

                        <form class="mt-4">
                            <div class="input-feild">
                                <div class="input-icon">
                                    <span><i class="far fa-building"></i></span>
                                </div>
                                <input type="text" placeholder="Company Name">
                            </div>
                            <!-- <div class="most-write text-danger">
                                Required Company Name !
                            </div> -->

                            <div class="select-box mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-briefcase"></i></span>
                                </div>
                                <select name="" id="">
                                    <option class="hidden" selected disabled v-model="comp_nature" value="">Company Type</option>
                                    <option value="145"> Health Informatics</option>
                                    <option value="104"> Abroad Study</option>
                                    <option value="38"> Accounting / Finance</option>
                                    <option value="99"> Admin / Legal Works </option>
                                    <option value="179"> Administration</option>
                                    <option value="101"> Advertising </option>
                                    <option value="79"> Adviser / Counseling</option>
                                    <option value="1"> Aerospace / Defense</option>
                                    <option value="82"> Agriculture / Horticulture</option>
                                    <option value="135"> Android Developer</option>
                                    <option value="140"> Animal Welfare</option>
                                    <option value="146"> Animation</option>
                                    <option value="80"> Architect / Interior Designing</option>
                                    <option value="94"> Art Gallery</option>
                                    <option value="122"> Audit Firm</option>
                                    <option value="2"> Automobiles and Parts</option>
                                    <option value="98"> Baby Products Store</option>
                                    <option value="3"> Bank / Financial Institution</option>
                                    <option value="161"> Bank / Financial Services</option>
                                    <option value="165"> Bar & Beverage Academy</option>
                                    <option value="127"> Beauty Products</option>
                                    <option value="4"> Biotechnology</option>
                                    <option value="143"> BPO / Call Center</option>
                                    <option value="110"> Brand Promoter</option>
                                    <option value="184"> Business Firm</option>
                                    <option value="124"> Car Rental</option>
                                    <option value="136"> Cargo & Courier</option>
                                    <option value="138"> Casino</option>
                                    <option value="6"> Chemicals</option>
                                    <option value="7"> Church / Religious Organization</option>
                                    <option value="147"> Client Relation/PR</option>
                                    <option value="91"> Clothing</option>
                                    <option value="160"> Communication / Journalism</option>
                                    <option value="8"> Community Organization</option>
                                    <option value="10"> Computers / Technology</option>
                                    <option value="55"> Construction / Engineering / Architects</option>
                                    <option value="53"> Consulting / Legal</option>
                                    <option value="11"> Consulting / Business Services</option>
                                    <option value="102"> Content Writer</option>
                                    <option value="118"> Corporate</option>
                                    <option value="134"> Cosmetic Product</option>
                                    <option value="70"> Creative / Graphics / Designing</option>
                                    <option value="85"> Customer Service</option>
                                    <option value="45"> Data Base Management</option>
                                    <option value="151"> Department Store</option>
                                    <option value="131"> Design & Drafting</option>
                                    <option value="141"> Digital Marketing</option>
                                    <option value="107"> Digital Soultion</option>
                                    <option value="189"> Distillery</option>
                                    <option value="119"> Distributors</option>
                                    <option value="123"> Dry Cleaning </option>
                                    <option value="126"> E-commerce</option>
                                    <option value="76"> Editor / Copywriter / Writer</option>
                                    <option value="12"> Education</option>
                                    <option value="187"> Education Programme Counselor</option>
                                    <option value="177"> Electric Vehicle</option>
                                    <option value="103"> Electronics Items </option>
                                    <option value="13"> Energy / Utility</option>
                                    <option value="181"> Engineering</option>
                                    <option value="14"> Engineering / Construction</option>
                                    <option value="42"> Entertainment</option>
                                    <option value="173"> Entrepreneur</option>
                                    <option value="190"> Event Management</option>
                                    <option value="15"> Farming / Agriculture</option>
                                    <option value="174"> Fashion / Vogue / Trend</option>
                                    <option value="112"> Fitness Center</option>
                                    <option value="46"> FMCG</option>
                                    <option value="16"> Food / Beverages</option>
                                    <option value="44"> Foreign Government Organization</option>
                                    <option value="111"> Foreman</option>
                                    <option value="81"> Gaming</option>
                                    <option value="48"> General Mgmt. / Administration</option>
                                    <option value="164"> Gift Shop</option>
                                    <option value="17"> Government Organization</option>
                                    <option value="74"> Grocery</option>
                                    <option value="130"> Handicraft / Craft Store</option>
                                    <option value="108"> Hardware Suppliers</option>
                                    <option value="18"> Health / Beauty</option>
                                    <option value="19"> Health / Medical / Pharmaceuticals</option>
                                    <option value="64"> Health / Pharma / Biotech / Medical</option>
                                    <option value="116"> Herbal Products</option>
                                    <option value="68"> Hospital / Clinic / Diagnostic Centre</option>
                                    <option value="40"> Hospitality</option>
                                    <option value="188"> Hospitality/ Travel/ Ticketing/ Tour</option>
                                    <option value="117"> Hostel</option>
                                    <option value="61"> Human Resource / Org.Development</option>
                                    <option value="88"> Human Resource Consulting</option>
                                    <option value="114"> Hydropower</option>
                                    <option value="77"> IELTS / TOEFL / GRE / GMAT / SAT Instructor</option>
                                    <option value="172"> Import / Export</option>
                                    <option value="20"> Industrials</option>
                                    <option value="21"> Insurance Company</option>
                                    <option value="121"> Interior Design </option>
                                    <option value="106"> International Contract</option>
                                    <option value="22"> Internet / Software</option>
                                    <option value="166"> Internship</option>
                                    <option value="78"> Interpreter / Translator</option>
                                    <option value="62"> IT & Telecommunication</option>
                                    <option value="167"> Jewellery Shop</option>
                                    <option value="175"> Laboratory / Lab Assistant</option>
                                    <option value="153"> Language Instructor</option>
                                    <option value="23"> Legal / Law</option>
                                    <option value="71"> Logistic / Procurement</option>
                                    <option value="162"> Lounge & Bar</option>
                                    <option value="149"> Machinery Equipments </option>
                                    <option value="159"> Manufacturing</option>
                                    <option value="158"> Marketing Communications / Advertising</option>
                                    <option value="56"> Marketing / Advertising / Customer Ser..</option>
                                    <option value="24"> Media / News / Publishing</option>
                                    <option value="125"> Medical Suppliers</option>
                                    <option value="25"> Mining / Materials</option>
                                    <option value="115"> Mobile Distributor</option>
                                    <option value="156"> Music Industry</option>
                                    <option value="58"> NGO / INGO / Social / Develop.Projects</option>
                                    <option value="27"> Non-Profit Organization</option>
                                    <option value="93"> Nursing </option>
                                    <option value="182"> Old Age Home</option>
                                    <option value="86"> Online Delivery</option>
                                    <option value="163"> Online Liquor Store</option>
                                    <option value="43"> Online Marketing/Advertising</option>
                                    <option value="148"> Online Sales</option>
                                    <option value="113"> Online Transportation Service</option>
                                    <option value="144"> Operations</option>
                                    <option value="50"> Others</option>
                                    <option value="39"> Overseas Company</option>
                                    <option value="139"> Paint Company</option>
                                    <option value="28"> Pharmaceutical</option>
                                    <option value="169"> Photography</option>
                                    <option value="29"> Political Organization</option>
                                    <option value="92"> Printing and Publications</option>
                                    <option value="186"> Product / Service</option>
                                    <option value="60"> Production / Maintance / Quality</option>
                                    <option value="87"> Programming / Software Development</option>
                                    <option value="155"> Purchase</option>
                                    <option value="150"> Real Estate</option>
                                    <option value="170"> Recruiter</option>
                                    <option value="105"> Recruitment Agency </option>
                                    <option value="89"> Repair and Maintenance</option>
                                    <option value="90"> Repair and Maintenance</option>
                                    <option value="100"> Research And Develpoment</option>
                                    <option value="31"> Retail and Consumer Merchandise</option>
                                    <option value="168"> Retail Sales Store</option>
                                    <option value="73"> Sales / Business Development</option>
                                    <option value="176"> Sanitary-wares</option>
                                    <option value="75"> School / College</option>
                                    <option value="72"> Secretarial / Front Desk / Receptionist</option>
                                    <option value="128"> Shirting / Suiting</option>
                                    <option value="33"> Small Business</option>
                                    <option value="185"> Software Company</option>
                                    <option value="178"> Sports</option>
                                    <option value="152"> Supermarket </option>
                                    <option value="129"> Tea Manufacturer</option>
                                    <option value="154"> Technician</option>
                                    <option value="34"> Telecommunication</option>
                                    <option value="97"> Telephone Operator</option>
                                    <option value="96"> Teller / Cashier</option>
                                    <option value="132"> Therapy Centre</option>
                                    <option value="83"> Tourism Industry</option>
                                    <option value="137"> Trading Company</option>
                                    <option value="142"> Trainee</option>
                                    <option value="133"> Training & Placement</option>
                                    <option value="35"> Transportation</option>
                                    <option value="36"> Travel / Leisure</option>
                                    <option value="37"> University</option>
                                    <option value="120"> Veterinary</option>
                                    <option value="157"> Visual & Commercial Art</option>
                                    <option value="109"> Web Developers</option>
                                    <option value="183"> Welders</option>
                                </select>
                            </div>

                            <div class="input-feild mt-3">
                                <div class="input-icon">
                                    <span><i class="far fa-user"></i></span>
                                </div>
                                <input type="text" placeholder="Company Person Name">
                            </div>
                            <!-- <div class="most-write text-danger">
                                Required Company Person Name !
                            </div> -->

                            <div class="input-feild mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" placeholder="Company Address">
                            </div>
                            <!-- <div class="most-write text-danger">
                                Required Company Address !
                            </div> -->

                            <div class="input-feild mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="text" placeholder="E-mail Address">
                            </div>
                            <!-- <div class="most-write text-danger">
                                Required E-mail Address !
                            </div> -->

                            <div class="d-flex mt-3">
                                <div class="input-feild mr-1">
                                    <div class="input-icon">
                                        <span><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="text" placeholder="Office Contact">
                                </div>

                                <div class="input-feild ml-1">
                                    <div class="input-icon">
                                        <span><i class="fa fa-mobile-alt"></i></span>
                                    </div>
                                    <input type="text" placeholder="Mobile Number">
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="input-feild">
                                    <div class="input-icon">
                                        <span><i class="fa fa-user-circle"></i></span>
                                    </div>
                                    <input type="text" placeholder="User Name">
                                </div>
                                <!-- <div class="most-write text-danger">
                                    Required User Name !
                                </div> -->

                                <div class="d-flex mt-3">
                                    <div class="input-feild mr-1">
                                        <div class="input-icon">
                                            <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" placeholder="Enter Password">
                                    </div>

                                    <div class="input-feild ml-1">
                                        <div class="input-icon">
                                            <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="verify mt-3 mb-2">Verify this code</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="capcha">
                                            <img src="https://www.kumarijob.com/assets/frontend/captcha/1590845545.2003.jpg" width="170" height="34" style="border:0;" alt=" ">
                                            <button class="ml-2"><i class="fas fa-sync-alt"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 capcha-fill pl-0">
                                        <div class="input-feild ml-1">
                                            <input type="password" class="capcha-input" placeholder="Enter Code Here">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mb-4">
                                    <label class="container check-div m-0">
                                        <input type="checkbox">
                                        <span class="checkmarked"></span>
                                        I agree to the Kumari Job
                                        <span><a href="">Terms & Services</a></span> and
                                        <span><a href="">Privacy Policy</a></span>

                                    </label>
                                </div>

                                <div class="submit-btn">
                                    <button type="submit">Register Now</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
