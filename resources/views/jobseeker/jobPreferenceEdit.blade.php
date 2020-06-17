@include('jobseeker.metatag')
@include('jobseeker.topnavbar')
@include('jobseeker.header')

<style>
    .cover * {
        font-family: 'Poppins', sans-serif !important;
    }

    .form-control,
    select {
        padding: 9px 20px !important;
        border: none;
        border-radius: .35rem !important;
        /* background: #f8f9fa!important; */

        font-size: 14px;
        /* background: transparent!important */
    }

    .see-password {
        border-radius: 0 .25rem .25rem 0;
    }

    .input-group {
        background: #fff;
    }

    .gmail {
        background: #C13C2D !important;
        border-color: #C13C2D;
    }

    .linked {
        background: #0073b1 !important;
        border-color: #0073b1;
    }

    .facebook {
        background: #4267b2 !important;
        border-color: #4267b2;
    }

    .cover {
        width: 100%;
        max-width: 570px;
        margin: auto;
    }
</style>
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
        color: #444
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

    .border {
        border: 1px solid rgba(0, 0, 0, .125) !important;
    }

    .form-control:focus {
        border-radius: 0 !important;
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, .25);
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

    .personal-detail label {
        text-align: right
    }

    .license{
        display: flex;
    }

    @media screen and (max-width:800px) {
        .side-bar {
            padding-right: 0 !important
        }
    }
    @media (width:320px){
        .input-group{
            padding:0!important;
        }
    }
    @media only screen and (max-width:768px){
        .social-icons li{
            margin-top:0.25rem;
        }
    }
</style>
<section class="jobseekerdashboard bg-light">


    <div class="container px-1  main-body">

        <div class="row p-0 m-0">


            @include('jobseeker.profilesidebar')



            <div class="col-md-9 p-0 border bg-white">

                <!-- <div class="border bg-white  mb-3 p-3 d-flex mb-4 position-relative hide">
                    <span class="position-absolute warning">
                        <p class="ml-4">&times;</p>
                    </span>
                    <p class="text-warning info"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam error
                        asperiores corrupti eos? Incidunt vero . </p>
                    <button class="btn btn-sm btn-light border mr-3"><i class="fa fa-user"></i> Complete
                        Profile</button>
                </div> -->

                <h6 class="px-3 mb-0 py-2 d-flex">
                    <span> <i data-feather="briefcase" class="p-1"></i> Job Preferences </span>
                </h6>
                <hr class="m-0">

                <form action="" class="personal-detail form" >
                    <div style="padding:20px 100px" class="inner-form">
                    <div class="row p-3 border">
                        <div class="col-md-12 d-flex">
                            <label for="" class="col-3 m-auto"> Expected Salary* </label>
                            <div class="input-group border  d-flex p-0">

                            <select class="form-control" name="expected_salary"> <option value="">Select</option> <option value="0" selected=""> Below 10000</option> <option value="1"> 10000-15000</option> <option value="2"> 15000-20000</option> <option value="3"> 20000-30000</option> <option value="4"> 30000-40000</option> <option value="5"> 40000-50000</option> <option value="6"> 50000-60000</option> <option value="7"> Above 60000</option> <option value="8"> Negotiable</option> </select>
                            </div>

                        </div>
                        <div class="col-md-12 d-flex my-3">
                            <label for="" class="col-3 m-auto"> Looking For* </label>
                            <div class="input-group border  d-flex p-0">
                            <select class="form-control " name="looking_for"> <option value="0" selected=""> Full Time</option> <option value="1"> Part Time</option> <option value="2"> Contract</option> <option value="3"> Full Time/Part Time</option> <option value="4"> Full Time/Part Time/Contract</option> <option value="5"> Full Time Morning Shift</option> <option value="6"> Full Time Evening Shift</option> </select>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto"> Job Location* </label>
                            <div class="input-group border  d-flex p-0">
                              <select class="form-control" name="job_location" id="location" placeholder="Job Location You Want To Work In?"> <option value="63"> &lrm;Mahottari District</option> <option value="118"> Achham District</option> <option value="76"> All Major Cities in Nepal</option> <option value="48"> Baglung District</option> <option value="40"> Bajhang District</option> <option value="96"> Bajura District</option> <option value="64"> Banke District</option> <option value="178"> Bara District</option> <option value="2"> Bhaktapur District</option> <option value="62"> Bhojpur District</option> <option value="12"> Chitwan District</option> <option value="51"> Dadeldhura District</option> <option value="82"> Dang</option> <option value="97"> Dang/Hetauda/Kathmandu</option> <option value="37"> Dhading District</option> <option value="6"> Dhangadhi</option> <option value="58"> Dhangadi, Mahendranagar</option> <option value="123"> Dhankuta, Nepal</option> <option value="23"> Dhanusha</option> <option value="146"> Dhapasi, Kathmandu</option> <option value="65"> Dharan</option> <option value="198"> Dhaulagiri/Gandaki</option> <option value="162"> Dhobhighat, Kathmandu</option> <option value="33"> Dolakha</option> <option value="49"> Dolakha / Sindupalchwok</option> <option value="73"> Doti</option> <option value="79"> Doti District</option> <option value="112"> Garuda, Rautahat</option> <option value="154"> Ghantaghar, Kathmandu</option> <option value="212"> Golbazar,Sihara</option> <option value="27"> Gorkha</option> <option value="101"> Gorkha, Nuwakot and Sindhupalchowk</option> <option value="147"> Gyaneshwor, Kathmandu</option> <option value="145"> Head Office, Kathmandu and site Office</option> <option value="8"> Hetauda</option> <option value="189"> Inside and Outside Kathmandu Valley</option> <option value="85"> Itahari</option> <option value="183"> Janakpur</option> <option value="75"> Janakpur Dham</option> <option value="24"> Jhapa District</option> <option value="78"> Jumla</option> <option value="115"> Jumla, Kailali and other rural districts </option> <option value="17"> Kailali</option> <option value="138"> Kailali, Kanchanpur, Dang</option> <option value="117"> kalikot and khotang Districts</option> <option value="141"> Kamaladi, Ganesthan, Kathmandu, Nepal</option> <option value="193"> Kapilvastu District</option> <option value="137"> Kaski</option> <option value="170"> Kaski, Chitwan and Siraha</option> <option value="1" selected=""> Kathmandu</option> <option value="210"> Kathmandu &amp; Biratnagar</option> <option value="88"> Kathmandu and Birgunj</option> <option value="180"> Kathmandu and Birgunj</option> <option value="92"> Kathmandu and Hetauda</option> <option value="108"> Kathmandu and Narayanghat</option> <option value="90"> Kathmandu and Nepalgunj</option> <option value="187"> Kathmandu and Outside Kathmandu</option> <option value="196"> Kathmandu and Sharlahi</option> <option value="201"> Kathmandu, Biratnagar and Bharatpur</option> <option value="194"> Kathmandu, Biratnagar, Dharan, Birgunj, Bharatpur, Butwal, Janakpur, Nepalgunj.</option> <option value="136"> Kathmandu, Birtamod, Itahari, Janakpur</option> <option value="135"> Kathmandu, Birtamod, Itahari, Janakpur, Chitwan, Pokhara</option> <option value="203"> Kathmandu, Butwal, Narayanghat and Dhangdi</option> <option value="139"> Kathmandu, Kailali</option> <option value="127"> Kathmandu, Narayanghat, Biratnagar, Janakpur, Nepalgunj</option> <option value="167"> Kathmandu, Narayanghat, Butwal, Pokhara, Biratnagar and Nepalgunj.</option> <option value="124"> Kathmandu, Patan, Biratnagar, Birgunj, Pokhara, Butwal and Nepalgunj.</option> <option value="134"> Kathmandu, Patan, Birtamod, Itahari, Janakpur, Narayangarh, Pokhara</option> <option value="190"> Kathmandu, Pokhara, Biratnagar and Itahari.</option> <option value="184"> Kathmandu, Pokhara, Narayanghat, Janakpur, Dharan, Nepalgunj.</option> <option value="202"> Kathmandu, Tanahu, Gorkha, Kaski-Pokhara, Myagdi</option> <option value="86"> Kathmandu/Itahari/Birgunj/Butwal/Nepalgunj/Pokhara</option> <option value="158"> Kathmandu/Lamjung</option> <option value="199"> Kathmandu/Pokhara</option> <option value="42"> Kavre</option> <option value="35"> Kavre District</option> <option value="18"> Kavrepalanchok</option> <option value="126"> Kavrepalanchowk District</option> <option value="133"> Khurkot, Sindhuli</option> <option value="197"> Kirtipur</option> <option value="188"> Koteshwor, Kathmandu</option> <option value="20"> Kritipur</option> <option value="181"> Lahan</option> <option value="160"> Lahan, Birgunj and other few.</option> <option value="3"> Lalitpur</option> <option value="157"> Lamjung</option> <option value="211"> Language Instructor</option> <option value="119"> Lukla, Solukhumbu District</option> <option value="156"> Madi, Itahari and Pathari</option> <option value="130"> Maharajgunj</option> <option value="159"> Mahendra Nagar, Dhanusha</option> <option value="91"> Mid and Far Western Regions</option> <option value="11"> Morang</option> <option value="84"> Morang/Sunsari/Saptari</option> <option value="52"> Narayanghat</option> <option value="192"> Nawalparasi</option> <option value="168"> Nayapati</option> <option value="5"> Nepalgunj</option> <option value="207"> Nepalgunj, Kohalpur, Birgunj and Butwal</option> <option value="169"> New Baneshwor, Kathmandu</option> <option value="29"> Nuwakot</option> <option value="74"> Nuwakot</option> <option value="166"> Nuwakot, Chitwan, Pokhara, Lumbini and Nawalparasi</option> <option value="61"> Outside Kathmandu Valley.</option> <option value="94"> Palpa</option> <option value="93"> Palpa/Tanahun/Banke</option> <option value="25"> Parsa District</option> <option value="142"> Patan area (Bankhudole)</option> <option value="153"> Patandhoka, Lalitpur</option> <option value="143"> Pepsicola, Kathmandu</option> <option value="4"> Pokhara</option> <option value="209"> Pokhara, Biratnagar and Kathmandu</option> <option value="191"> Pokhara, Chitwan and Birtamod</option> <option value="104"> Pokhara/Narayanghat/Butwal/Biratnagar/Kathmandu</option> <option value="152"> Prayak Pokhari, Lalitpur</option> <option value="208"> Proeject site Dordi Gaupalika, Lamjung</option> <option value="164"> Putalisadak, Kathmandu</option> <option value="205"> Pyuthan, Butwal</option> <option value="204"> Pyuthan, Gulmi, Butwal</option> <option value="182"> Ramanand Chowk, Janakpur</option> <option value="66"> Ramechap and Rasuwa</option> <option value="81"> Ramechhap</option> <option value="83"> Ramechhap</option> <option value="47"> Rupandehi District</option> <option value="89"> Sagarmatha</option> <option value="68"> Salyan</option> <option value="69"> Salyan District</option> <option value="155"> Sanga, Kavre, Bagmati</option> <option value="105"> Saptari/Parsa/Sinduli/Udayapur/Tanahun/Salyan/Doti</option> <option value="120"> Sarlahi, Rautahat, Udaypur, Sunsari</option> <option value="77"> Shiraha</option> <option value="132"> Sinamangal, Kathmandu</option> <option value="176"> Sindhuli-Ramechhap</option> <option value="177"> Sindhuli-Ramechhap and Dhankuta-Bhojpur</option> <option value="106"> Sindhuli/Udayapur/Tanahun/Salyan/Doti.</option> <option value="107"> Sindhuli/Udayapur/Tanahun/Salyan/Doti/Parsa/Dhanusha/Saptari/Morang.</option> <option value="116"> Sindhupalchok District</option> <option value="67"> Sindhupalchowk and Dolakha</option> <option value="125"> Sindhupalchowk District</option> <option value="28"> Sunsari</option> <option value="60"> Surkhet</option> <option value="131"> Tanahun and Sindhupalchowk</option> <option value="163"> Tanahun District</option> <option value="185"> Tansen</option> <option value="30"> Thankot</option> <option value="140"> Thecho, Lalitpur</option> <option value="80"> Udayapur</option> <option value="121"> Udaypur and Sunsari districts</option> <option value="26"> Unavailable/Others</option> </select>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex">
                            <label for="" class="col-3 m-auto pl-0"> Job Category<small>(1st)</small>* </label>
                            <div class="input-group border  d-flex p-0">

                                <select class="form-control" name="first_preference" id="field" placeholder="First Job Field You Want To Work In"> <option value="">Select</option> <option value="145"> Health Informatics</option> <option value="104"> Abroad Study</option> <option value="38"> Accounting\Finance</option> <option value="99"> Admin/Legal Works </option> <option value="179"> Administration</option> <option value="101"> Advertising </option> <option value="79"> Adviser/Counseling</option> <option value="1"> Aerospace/Defense</option> <option value="82"> Agriculture/Horticulture</option> <option value="135"> Android Developer</option> <option value="140"> Animal Welfare</option> <option value="146"> Animation</option> <option value="80"> Architect/Interior Designing</option> <option value="94"> Art Gallery</option> <option value="122"> Audit Firm</option> <option value="2"> Automobiles and Parts</option> <option value="98"> Baby Products Store</option> <option value="3"> Bank/Financial Institution</option> <option value="161"> Bank/Financial Services</option> <option value="165"> Bar &amp; Beverage Academy</option> <option value="127"> Beauty Products</option> <option value="4"> Biotechnology</option> <option value="143"> BPO/Call Center</option> <option value="110"> Brand Promoter</option> <option value="184"> Business Firm</option> <option value="124"> Car Rental</option> <option value="136"> Cargo &amp; Courier</option> <option value="138"> Casino</option> <option value="6"> Chemicals</option> <option value="7"> Church/Religious Organization</option> <option value="147"> Client Relation/PR</option> <option value="91"> Clothing</option> <option value="160"> Communication/Journalism</option> <option value="8"> Community Organization</option> <option value="10"> Computers/Technology</option> <option value="55"> Construction/Engineering/Architects</option> <option value="53"> Consulting /Legal</option> <option value="11"> Consulting/Business Services</option> <option value="102"> Content Writer</option> <option value="118"> Corporate</option> <option value="134"> Cosmetic Product</option> <option value="70"> Creative / Graphics / Designing</option> <option value="85"> Customer Service</option> <option value="45"> Data Base Management</option> <option value="151"> Department Store</option> <option value="131"> Design &amp; Drafting</option> <option value="141"> Digital Marketing</option> <option value="107"> Digital Soultion</option> <option value="189"> Distillery</option> <option value="119"> Distributors</option> <option value="123"> Dry Cleaning </option> <option value="126"> E-commerce</option> <option value="180"> E-Commerce</option> <option value="76"> Editor/Copywriter/Writer</option> <option value="12"> Education</option> <option value="187"> Education Programme Counselor</option> <option value="177"> Electric Vehicle</option> <option value="103"> Electronics Items </option> <option value="13"> Energy/Utility</option> <option value="181"> Engineering</option> <option value="14"> Engineering/Construction</option> <option value="42"> Entertainment</option> <option value="173"> Entrepreneur</option> <option value="190"> Event Management</option> <option value="15"> Farming/Agriculture</option> <option value="174"> Fashion/Vogue/Trend</option> <option value="112"> Fitness Center</option> <option value="46"> FMCG</option> <option value="16"> Food/Beverages</option> <option value="44"> Foreign Government Organization</option> <option value="111"> Foreman</option> <option value="81"> Gaming</option> <option value="48"> General Mgmt. / Administration</option> <option value="164"> Gift Shop</option> <option value="17"> Government Organization</option> <option value="74"> Grocery</option> <option value="130"> Handicraft/Craft Store</option> <option value="108"> Hardware Suppliers</option> <option value="18"> Health/Beauty</option> <option value="19"> Health/Medical/Pharmaceuticals</option> <option value="64"> Health/Pharma/Biotech/Medical/R&amp;D</option> <option value="116"> Herbal Products</option> <option value="68"> Hospital / Clinic / Diagnostic Centre</option> <option value="40"> Hospitality</option> <option value="188"> Hospitality/ Travel/ Ticketing/ Tour</option> <option value="117"> Hostel</option> <option value="61"> Human Resource /Org.Development</option> <option value="88"> Human Resource Consulting</option> <option value="114"> Hydropower</option> <option value="77"> IELTS / TOEFL/GRE/GMAT/SAT Instructor</option> <option value="172"> Import/Export</option> <option value="20"> Industrials</option> <option value="21"> Insurance Company</option> <option value="121"> Interior Design </option> <option value="106"> International Contract</option> <option value="22"> Internet/Software</option> <option value="166"> Internship</option> <option value="78"> Interpreter/ Translator</option> <option value="62" selected=""> IT&amp;Telecommunication</option> <option value="167"> Jewellery Shop</option> <option value="175"> Laboratory/Lab Assistant</option> <option value="153"> Language Instructor</option> <option value="23"> Legal/Law</option> <option value="71"> Logistic/Procurement</option> <option value="162"> Lounge &amp; Bar</option> <option value="149"> Machinery Equipments </option> <option value="159"> Manufacturing</option> <option value="158"> Marketing Communications/Advertising/Marketing OR Brand Management</option> <option value="56"> Marketing/Advertising/Customer Ser..</option> <option value="24"> Media/News/Publishing</option> <option value="125"> Medical Suppliers</option> <option value="25"> Mining/Materials</option> <option value="115"> Mobile Distributor</option> <option value="156"> Music Industry</option> <option value="58"> NGO/INGO/Social/Develop.Projects</option> <option value="27"> Non-Profit Organization</option> <option value="93"> Nursing </option> <option value="182"> Old Age Home</option> <option value="86"> Online Delivery</option> <option value="163"> Online Liquor Store</option> <option value="43"> Online Marketing/Advertising</option> <option value="148"> Online Sales</option> <option value="113"> Online Transportation Service</option> <option value="144"> Operations</option> <option value="50"> Others</option> <option value="39"> Overseas Company</option> <option value="139"> Paint Company</option> <option value="28"> Pharmaceutical</option> <option value="169"> Photography</option> <option value="29"> Political Organization</option> <option value="92"> Printing and Publications</option> <option value="186"> Product/Service</option> <option value="60"> Production/Maintance /Quality</option> <option value="87"> Programming/Software Development</option> <option value="155"> Purchase</option> <option value="150"> Real Estate</option> <option value="170"> Recruiter</option> <option value="105"> Recruitment Agency </option> <option value="89"> Repair and Maintenance</option> <option value="90"> Repair and Maintenance</option> <option value="100"> Research And Develpoment</option> <option value="31"> Retail and Consumer Merchandise</option> <option value="168"> Retail Sales Store</option> <option value="73"> Sales/Business Development</option> <option value="176"> Sanitary-wares</option> <option value="75"> School/College</option> <option value="72"> Secretarial/Front Desk/Receptionist</option> <option value="128"> Shirting/Suiting</option> <option value="33"> Small Business</option> <option value="185"> Software Company</option> <option value="178"> Sports</option> <option value="152"> Supermarket </option> <option value="129"> Tea Manufacturer</option> <option value="154"> Technician</option> <option value="34"> Telecommunication</option> <option value="97"> Telephone Operator</option> <option value="96"> Teller/ Cashier</option> <option value="132"> Therapy Centre</option> <option value="83"> Tourism Industry</option> <option value="137"> Trading Company</option> <option value="142"> Trainee</option> <option value="133"> Training &amp; Placement</option> <option value="35"> Transportation</option> <option value="36"> Travel/Leisure</option> <option value="37"> University</option> <option value="120"> Veterinary</option> <option value="157"> Visual &amp; Commercial Art</option> <option value="109"> Web Developers</option> <option value="183"> Welders</option> <option value="171"> Wholesale &amp; Supply Store</option> </select>
                            </div>

                        </div>
                        <div class="col-md-12 d-flex my-3">
                            <label for="" class="col-3 m-auto pl-0"> Job Category<small>(2nd)</small>*  </label>
                            <div class="input-group border  d-flex p-0">
                            <select class="form-control" name="second_preference" id="field" placeholder="Second Job Field You Want To Work In"> <option value="">Select</option> <option value="145"> Health Informatics</option> <option value="104"> Abroad Study</option> <option value="38"> Accounting\Finance</option> <option value="99"> Admin/Legal Works </option> <option value="179"> Administration</option> <option value="101"> Advertising </option> <option value="79"> Adviser/Counseling</option> <option value="1"> Aerospace/Defense</option> <option value="82"> Agriculture/Horticulture</option> <option value="135"> Android Developer</option> <option value="140"> Animal Welfare</option> <option value="146"> Animation</option> <option value="80"> Architect/Interior Designing</option> <option value="94"> Art Gallery</option> <option value="122"> Audit Firm</option> <option value="2"> Automobiles and Parts</option> <option value="98"> Baby Products Store</option> <option value="3"> Bank/Financial Institution</option> <option value="161"> Bank/Financial Services</option> <option value="165"> Bar &amp; Beverage Academy</option> <option value="127"> Beauty Products</option> <option value="4"> Biotechnology</option> <option value="143"> BPO/Call Center</option> <option value="110"> Brand Promoter</option> <option value="184"> Business Firm</option> <option value="124"> Car Rental</option> <option value="136"> Cargo &amp; Courier</option> <option value="138"> Casino</option> <option value="6"> Chemicals</option> <option value="7"> Church/Religious Organization</option> <option value="147"> Client Relation/PR</option> <option value="91"> Clothing</option> <option value="160"> Communication/Journalism</option> <option value="8"> Community Organization</option> <option value="10"> Computers/Technology</option> <option value="55"> Construction/Engineering/Architects</option> <option value="53"> Consulting /Legal</option> <option value="11"> Consulting/Business Services</option> <option value="102"> Content Writer</option> <option value="118"> Corporate</option> <option value="134"> Cosmetic Product</option> <option value="70"> Creative / Graphics / Designing</option> <option value="85"> Customer Service</option> <option value="45"> Data Base Management</option> <option value="151"> Department Store</option> <option value="131"> Design &amp; Drafting</option> <option value="141"> Digital Marketing</option> <option value="107"> Digital Soultion</option> <option value="189"> Distillery</option> <option value="119"> Distributors</option> <option value="123"> Dry Cleaning </option> <option value="126"> E-commerce</option> <option value="180"> E-Commerce</option> <option value="76"> Editor/Copywriter/Writer</option> <option value="12"> Education</option> <option value="187"> Education Programme Counselor</option> <option value="177"> Electric Vehicle</option> <option value="103"> Electronics Items </option> <option value="13"> Energy/Utility</option> <option value="181"> Engineering</option> <option value="14"> Engineering/Construction</option> <option value="42"> Entertainment</option> <option value="173"> Entrepreneur</option> <option value="190"> Event Management</option> <option value="15"> Farming/Agriculture</option> <option value="174"> Fashion/Vogue/Trend</option> <option value="112"> Fitness Center</option> <option value="46"> FMCG</option> <option value="16"> Food/Beverages</option> <option value="44"> Foreign Government Organization</option> <option value="111"> Foreman</option> <option value="81"> Gaming</option> <option value="48"> General Mgmt. / Administration</option> <option value="164"> Gift Shop</option> <option value="17"> Government Organization</option> <option value="74"> Grocery</option> <option value="130"> Handicraft/Craft Store</option> <option value="108"> Hardware Suppliers</option> <option value="18"> Health/Beauty</option> <option value="19"> Health/Medical/Pharmaceuticals</option> <option value="64"> Health/Pharma/Biotech/Medical/R&amp;D</option> <option value="116"> Herbal Products</option> <option value="68"> Hospital / Clinic / Diagnostic Centre</option> <option value="40"> Hospitality</option> <option value="188"> Hospitality/ Travel/ Ticketing/ Tour</option> <option value="117"> Hostel</option> <option value="61"> Human Resource /Org.Development</option> <option value="88"> Human Resource Consulting</option> <option value="114"> Hydropower</option> <option value="77"> IELTS / TOEFL/GRE/GMAT/SAT Instructor</option> <option value="172"> Import/Export</option> <option value="20"> Industrials</option> <option value="21"> Insurance Company</option> <option value="121"> Interior Design </option> <option value="106"> International Contract</option> <option value="22"> Internet/Software</option> <option value="166"> Internship</option> <option value="78"> Interpreter/ Translator</option> <option value="62"> IT&amp;Telecommunication</option> <option value="167"> Jewellery Shop</option> <option value="175"> Laboratory/Lab Assistant</option> <option value="153"> Language Instructor</option> <option value="23"> Legal/Law</option> <option value="71"> Logistic/Procurement</option> <option value="162"> Lounge &amp; Bar</option> <option value="149"> Machinery Equipments </option> <option value="159"> Manufacturing</option> <option value="158"> Marketing Communications/Advertising/Marketing OR Brand Management</option> <option value="56"> Marketing/Advertising/Customer Ser..</option> <option value="24"> Media/News/Publishing</option> <option value="125"> Medical Suppliers</option> <option value="25"> Mining/Materials</option> <option value="115"> Mobile Distributor</option> <option value="156"> Music Industry</option> <option value="58"> NGO/INGO/Social/Develop.Projects</option> <option value="27"> Non-Profit Organization</option> <option value="93"> Nursing </option> <option value="182"> Old Age Home</option> <option value="86"> Online Delivery</option> <option value="163"> Online Liquor Store</option> <option value="43"> Online Marketing/Advertising</option> <option value="148"> Online Sales</option> <option value="113"> Online Transportation Service</option> <option value="144"> Operations</option> <option value="50"> Others</option> <option value="39"> Overseas Company</option> <option value="139"> Paint Company</option> <option value="28"> Pharmaceutical</option> <option value="169"> Photography</option> <option value="29"> Political Organization</option> <option value="92"> Printing and Publications</option> <option value="186"> Product/Service</option> <option value="60"> Production/Maintance /Quality</option> <option value="87"> Programming/Software Development</option> <option value="155"> Purchase</option> <option value="150"> Real Estate</option> <option value="170"> Recruiter</option> <option value="105"> Recruitment Agency </option> <option value="89"> Repair and Maintenance</option> <option value="90"> Repair and Maintenance</option> <option value="100"> Research And Develpoment</option> <option value="31"> Retail and Consumer Merchandise</option> <option value="168"> Retail Sales Store</option> <option value="73"> Sales/Business Development</option> <option value="176"> Sanitary-wares</option> <option value="75"> School/College</option> <option value="72"> Secretarial/Front Desk/Receptionist</option> <option value="128"> Shirting/Suiting</option> <option value="33"> Small Business</option> <option value="185"> Software Company</option> <option value="178"> Sports</option> <option value="152"> Supermarket </option> <option value="129"> Tea Manufacturer</option> <option value="154"> Technician</option> <option value="34"> Telecommunication</option> <option value="97"> Telephone Operator</option> <option value="96"> Teller/ Cashier</option> <option value="132"> Therapy Centre</option> <option value="83"> Tourism Industry</option> <option value="137"> Trading Company</option> <option value="142"> Trainee</option> <option value="133"> Training &amp; Placement</option> <option value="35"> Transportation</option> <option value="36"> Travel/Leisure</option> <option value="37"> University</option> <option value="120"> Veterinary</option> <option value="157"> Visual &amp; Commercial Art</option> <option value="109"> Web Developers</option> <option value="183"> Welders</option> <option value="171"> Wholesale &amp; Supply Store</option> </select>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto"> License </label>
                            <div class="input-group border d-flex p-2 px-3">
                                <div class="custom-control custom-radio mr-3 my-auto">
                                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="license" value="1" required>
                                    <label class="custom-control-label" for="customControlValidation2">Yes</label>
                                </div>
                                <div class="custom-control custom-radio mb-3 my-auto">
                                    <input type="radio" class="custom-control-input" id="customControlValidation1" name="license" value="0" required>
                                    <label class="custom-control-label" for="customControlValidation1">No</label>
                                </div>
                              
                            </div>

                        </div>
                        <div class="col-md-12 mb-3 license">
                            <label for="" class="col-3 m-auto"> Two Wheelers </label>
                            <div class="input-group border  d-flex p-2 px-3">
                           
                                <div class="custom-control custom-radio mr-3 my-auto">
                                    <input type="radio" class="custom-control-input" id="customControlValidation4" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation4">Yes</label>
                                </div>
                                <div class="custom-control custom-radio mb-3 my-auto">
                                    <input type="radio" class="custom-control-input" id="customControlValidation5" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation5">No</label>
                                </div>
                              
                                
                            </div>

                        </div>
                        <div class="col-md-12 mb-3 license">
                            <label for="" class="col-3 m-auto"> Four Wheelers </label>
                            <div class="input-group border  d-flex p-2 px-3">
                           
                                <div class="custom-control custom-radio mr-3 my-auto">
                                    <input type="radio" class="custom-control-input" id="customControlValidation6" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation7">Yes</label>
                                </div>
                                <div class="custom-control custom-radio mb-3 my-auto">
                                    <input type="radio" class="custom-control-input" id="customControlValidation8" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation9">No</label>
                                </div>
                              
                                
                            </div>

                        </div>
 
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto pl-0"> Career Objective </label>
                            <div class="input-group border  d-flex p-0">
                            <textarea class="form-control" name="" id="field" ></textarea>
                                 
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                            <label for="" class="col-3 m-auto pl-0"> Hobbies & Info </label>
                            <div class="input-group border  d-flex p-0">
                            <textarea class="form-control" name="" id="field" ></textarea>
                                 
                            </div>
                        </div>

                    </div>
                       

             
             
                </div>
                <hr class="mb-0">
                <div class="text-center">
                <button class="btn border btn-info btn-sm mt-4 mb-4"><i class="fa fa-save"></i> Submit</button>
                <button class="btn border bg-light btn-sm mt-4 mb-4">&times; Cancel</button>
                </div>
                 
                </form>

        
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

        $('input[type="checkbox"]').change(function () {
            if ($(this).is(':checked')) {
                $('.enddate').hide()
                $('input[name="end_date"]').val('')
            } else {
                $('.enddate').show()
            }
        })

        $('.license').hide();
        $('input[name="license"]').on('change',function(){
           
            if($(this).val() == '1'){
                $('.license').show()
            }else{
                $('.license').hide()
            }
        })
    
    })
</script>
<script>
    feather.replace()
</script>
