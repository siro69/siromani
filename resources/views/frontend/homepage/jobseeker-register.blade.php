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
    .input-icon i,.group-input i{
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
    /* The radio-checkbox */
    .radio-checkbox {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 0px;
        cursor: pointer;
        font-size: 0.82rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .radio-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .radio-checkbox:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .radio-checkbox input:checked ~ .checkmark {
        background-color: #fff;
        border: 2px solid #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .radio-checkbox input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .radio-checkbox .checkmark:after {
        top: 3px;
        left: 3px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #2196F3;
        border:none;
    }
    .group-input{
        border:1px solid lightgrey;
        border-radius:25px;
        padding:8px 15px;
    }
    .unother li{
        list-style:none;
    }
    .upload-content{
        font-size: 0.78rem;
        margin-left:20px;
        color:#A6ABAB;
    }
    .upload-div{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .upload-btn{
        border: 1px solid #ec7c03;
        outline: none;
        border-radius: 5px;
        padding: 4px 16px;
        background-color: #fff;
        font-weight: 500;
        color:#A6ABAB;
    }
    .upload-btn:focus{
        outline:none;
    }
    .upload-btn:hover{
        background-color: #ec7c03;
        color:#fff;
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
        .radio-btn{
            margin-left:3rem;
            margin-top:10px;
        }
    }

</style>
<div class="employer-maindiv pt-4">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body pt-0">
                        <div class="card-header">
                            <span>Create an Account - </span>It's fast, easy, and free!
                        </div>
                        <div class="card-content my-3">
                            I am a Jobseeker
                        </div>

                        <div class="card-btn">
                            <button class="btn-1 mx-2">Register as Jobseeker</button>
                            <button class="btn-2 mx-2">Already have an account </button>
                        </div>

                        <form class="mt-4">
                            <div class="d-flex mt-3">
                                <div class="input-feild mr-1">
                                    <div class="input-icon">
                                        <span><i class="fa fa-user-circle"></i></span>
                                    </div>
                                    <input type="password" placeholder="First Name">
                                </div>

                                <div class="input-feild ml-1">
                                    <div class="input-icon">
                                        <span><i class="fa fa-user-circle"></i></span>
                                    </div>
                                    <input type="password" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="input-feild mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="text" placeholder="E-mail Address">
                            </div>

                            <div class="input-feild mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" placeholder="Current Address">
                            </div>

                            <div class="input-feild mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-mobile-alt"></i></span>
                                </div>
                                <input type="text" placeholder="Your Phone Number">
                            </div>

                            <div class="select-box mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <select name="" id="">
                                    <option class="hidden" selected disabled v-model="comp_nature" value="">Current Education</option>
                                    <option data-subtext="Below SLC/SEE" value="below SLC/SEE"> Below SLC/SEE</option>
                                    <option data-subtext="SLC/SEE" value="SLC/SEE"> SLC/SEE</option>
                                    <option data-subtext="Intermediate" value="Intermediate"> Intermediate</option>
                                    <option data-subtext="Bachelors" value="Bachelors"> Bachelors</option>
                                    <option data-subtext="Masters" value="Masters"> Masters</option>
                                </select>
                            </div>

                            <div class="select-box mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-map-marked-alt"></i></span>
                                </div>
                                <select name="" id="">
                                    <option class="hidden" selected disabled v-model="comp_nature" value="">Job Location You Want To Work In?</option>
                                    <option data-subtext=" &lrm;Mahottari District" value="63"> &lrm;Mahottari District</option>
                                    <option data-subtext="Achham District" value="118"> Achham District</option>
                                    <option data-subtext="All Major Cities in Nepal" value="76"> All Major Cities in Nepal</option>
                                    <option data-subtext="Baglung District" value="48"> Baglung District</option>
                                    <option data-subtext="Bajhang District" value="40"> Bajhang District</option>
                                    <option data-subtext="Bajura District" value="96"> Bajura District</option>
                                    <option data-subtext="Banke District" value="64"> Banke District</option>
                                    <option data-subtext="Bara District" value="178"> Bara District</option>
                                    <option data-subtext="Bhaktapur District" value="2"> Bhaktapur District</option>
                                    <option data-subtext="Bhojpur District" value="62"> Bhojpur District</option>
                                    <option data-subtext="Chitwan District" value="12"> Chitwan District</option>
                                    <option data-subtext="Dadeldhura District" value="51"> Dadeldhura District</option>
                                    <option data-subtext="Dang" value="82"> Dang</option>
                                    <option data-subtext="Dang/Hetauda/Kathmandu" value="97"> Dang/Hetauda/Kathmandu</option>
                                    <option data-subtext="Dhading District" value="37"> Dhading District</option>
                                    <option data-subtext="Dhangadhi" value="6"> Dhangadhi</option>
                                    <option data-subtext="Dhangadi, Mahendranagar" value="58"> Dhangadi, Mahendranagar</option>
                                    <option data-subtext="Dhankuta, Nepal" value="123"> Dhankuta, Nepal</option>
                                    <option data-subtext="Dhanusha" value="23"> Dhanusha</option>
                                    <option data-subtext="Dhapasi, Kathmandu" value="146"> Dhapasi, Kathmandu</option>
                                    <option data-subtext="Dharan" value="65"> Dharan</option>
                                    <option data-subtext="Dhaulagiri/Gandaki" value="198"> Dhaulagiri/Gandaki</option>
                                    <option data-subtext="Dhobhighat, Kathmandu" value="162"> Dhobhighat, Kathmandu</option>
                                    <option data-subtext="Dolakha" value="33"> Dolakha</option>
                                    <option data-subtext="Dolakha / Sindupalchwok" value="49"> Dolakha / Sindupalchwok</option>
                                    <option data-subtext="Doti" value="73"> Doti</option>
                                    <option data-subtext="Doti District" value="79"> Doti District</option>
                                    <option data-subtext="Garuda, Rautahat" value="112"> Garuda, Rautahat</option>
                                    <option data-subtext="Ghantaghar, Kathmandu" value="154"> Ghantaghar, Kathmandu</option>
                                    <option data-subtext="Golbazar,Sihara" value="212"> Golbazar,Sihara</option>
                                    <option data-subtext="Gorkha" value="27"> Gorkha</option>
                                    <option data-subtext="Gorkha, Nuwakot and Sindhupalchowk" value="101"> Gorkha, Nuwakot and Sindhupalchowk</option>
                                    <option data-subtext="Gyaneshwor, Kathmandu" value="147"> Gyaneshwor, Kathmandu</option>
                                    <option data-subtext="Head Office, Kathmandu and site Office" value="145"> Head Office, Kathmandu and site Office</option>
                                    <option data-subtext="Hetauda" value="8"> Hetauda</option>
                                    <option data-subtext="Inside and Outside Kathmandu Valley" value="189"> Inside and Outside Kathmandu Valley</option>
                                    <option data-subtext="Itahari" value="85"> Itahari</option>
                                    <option data-subtext="Janakpur" value="183"> Janakpur</option>
                                    <option data-subtext="Janakpur Dham" value="75"> Janakpur Dham</option>
                                    <option data-subtext="Jhapa District" value="24"> Jhapa District</option>
                                    <option data-subtext="Jumla" value="78"> Jumla</option>
                                    <option data-subtext="Jumla, Kailali and other rural districts " value="115"> Jumla, Kailali and other rural districts </option>
                                    <option data-subtext="Kailali" value="17"> Kailali</option>
                                    <option data-subtext="Kailali, Kanchanpur, Dang" value="138"> Kailali, Kanchanpur, Dang</option>
                                    <option data-subtext="kalikot and khotang Districts" value="117"> kalikot and khotang Districts</option>
                                    <option data-subtext="Kamaladi, Ganesthan, Kathmandu, Nepal" value="141"> Kamaladi, Ganesthan, Kathmandu, Nepal</option>
                                    <option data-subtext="Kapilvastu District" value="193"> Kapilvastu District</option>
                                    <option data-subtext="Kaski" value="137"> Kaski</option>
                                    <option data-subtext="Kaski, Chitwan and Siraha" value="170"> Kaski, Chitwan and Siraha</option>
                                    <option data-subtext="Kathmandu" value="1"> Kathmandu</option>
                                    <option data-subtext="Kathmandu &amp; Biratnagar" value="210"> Kathmandu &amp; Biratnagar</option>
                                    <option data-subtext="Kathmandu and Birgunj" value="88"> Kathmandu and Birgunj</option>
                                    <option data-subtext="Kathmandu and Birgunj" value="180"> Kathmandu and Birgunj</option>
                                    <option data-subtext="Kathmandu and Hetauda" value="92"> Kathmandu and Hetauda</option>
                                    <option data-subtext="Kathmandu and Narayanghat" value="108"> Kathmandu and Narayanghat</option>
                                    <option data-subtext="Kathmandu and Nepalgunj" value="90"> Kathmandu and Nepalgunj</option>
                                    <option data-subtext="Kathmandu and Outside Kathmandu" value="187"> Kathmandu and Outside Kathmandu</option>
                                    <option data-subtext="Kathmandu and Sharlahi" value="196"> Kathmandu and Sharlahi</option>
                                    <option data-subtext="Kathmandu, Biratnagar and Bharatpur" value="201"> Kathmandu, Biratnagar and Bharatpur</option>
                                    <option data-subtext="Kathmandu, Biratnagar, Dharan, Birgunj, Bharatpur, Butwal, Janakpur, Nepalgunj." value="194"> Kathmandu, Biratnagar, Dharan, Birgunj, Bharatpur, Butwal, Janakpur, Nepalgunj.</option>
                                    <option data-subtext="Kathmandu, Birtamod, Itahari, Janakpur" value="136"> Kathmandu, Birtamod, Itahari, Janakpur</option>
                                    <option data-subtext="Kathmandu, Birtamod, Itahari, Janakpur, Chitwan, Pokhara" value="135"> Kathmandu, Birtamod, Itahari, Janakpur, Chitwan, Pokhara</option>
                                    <option data-subtext="Kathmandu, Butwal, Narayanghat and Dhangdi" value="203"> Kathmandu, Butwal, Narayanghat and Dhangdi</option>
                                    <option data-subtext="Kathmandu, Kailali" value="139"> Kathmandu, Kailali</option>
                                    <option data-subtext="Kathmandu, Narayanghat, Biratnagar, Janakpur, Nepalgunj" value="127"> Kathmandu, Narayanghat, Biratnagar, Janakpur, Nepalgunj</option>
                                    <option data-subtext="Kathmandu, Narayanghat, Butwal, Pokhara, Biratnagar and Nepalgunj." value="167"> Kathmandu, Narayanghat, Butwal, Pokhara, Biratnagar and Nepalgunj.</option>
                                    <option data-subtext="Kathmandu, Patan, Biratnagar, Birgunj, Pokhara, Butwal and Nepalgunj." value="124"> Kathmandu, Patan, Biratnagar, Birgunj, Pokhara, Butwal and Nepalgunj.</option>
                                    <option data-subtext="Kathmandu, Patan, Birtamod, Itahari, Janakpur, Narayangarh, Pokhara" value="134"> Kathmandu, Patan, Birtamod, Itahari, Janakpur, Narayangarh, Pokhara</option>
                                    <option data-subtext="Kathmandu, Pokhara, Biratnagar and Itahari." value="190"> Kathmandu, Pokhara, Biratnagar and Itahari.</option>
                                    <option data-subtext="Kathmandu, Pokhara, Narayanghat, Janakpur, Dharan, Nepalgunj." value="184"> Kathmandu, Pokhara, Narayanghat, Janakpur, Dharan, Nepalgunj.</option>
                                    <option data-subtext="Kathmandu, Tanahu, Gorkha, Kaski-Pokhara, Myagdi" value="202"> Kathmandu, Tanahu, Gorkha, Kaski-Pokhara, Myagdi</option>
                                    <option data-subtext="Kathmandu/Itahari/Birgunj/Butwal/Nepalgunj/Pokhara" value="86"> Kathmandu/Itahari/Birgunj/Butwal/Nepalgunj/Pokhara</option>
                                    <option data-subtext="Kathmandu/Lamjung" value="158"> Kathmandu/Lamjung</option>
                                    <option data-subtext="Kathmandu/Pokhara" value="199"> Kathmandu/Pokhara</option>
                                    <option data-subtext="Kavre" value="42"> Kavre</option>
                                    <option data-subtext="Kavre District" value="35"> Kavre District</option>
                                    <option data-subtext="Kavrepalanchok" value="18"> Kavrepalanchok</option>
                                    <option data-subtext="Kavrepalanchowk District" value="126"> Kavrepalanchowk District</option>
                                    <option data-subtext="Khurkot, Sindhuli" value="133"> Khurkot, Sindhuli</option>
                                    <option data-subtext="Kirtipur" value="197"> Kirtipur</option>
                                    <option data-subtext="Koteshwor, Kathmandu" value="188"> Koteshwor, Kathmandu</option>
                                    <option data-subtext="Kritipur" value="20"> Kritipur</option>
                                    <option data-subtext="Lahan" value="181"> Lahan</option>
                                    <option data-subtext="Lahan, Birgunj and other few." value="160"> Lahan, Birgunj and other few.</option>
                                    <option data-subtext="Lalitpur" value="3"> Lalitpur</option>
                                    <option data-subtext="Lamjung" value="157"> Lamjung</option>
                                    <option data-subtext="Language Instructor" value="211"> Language Instructor</option>
                                    <option data-subtext="Lukla, Solukhumbu District" value="119"> Lukla, Solukhumbu District</option>
                                    <option data-subtext="Madi, Itahari and Pathari" value="156"> Madi, Itahari and Pathari</option>
                                    <option data-subtext="Maharajgunj" value="130"> Maharajgunj</option>
                                    <option data-subtext="Mahendra Nagar, Dhanusha" value="159"> Mahendra Nagar, Dhanusha</option>
                                    <option data-subtext="Mid and Far Western Regions" value="91"> Mid and Far Western Regions</option>
                                    <option data-subtext="Morang" value="11"> Morang</option>
                                    <option data-subtext="Morang/Sunsari/Saptari" value="84"> Morang/Sunsari/Saptari</option>
                                    <option data-subtext="Narayanghat" value="52"> Narayanghat</option>
                                    <option data-subtext="Nawalparasi" value="192"> Nawalparasi</option>
                                    <option data-subtext="Nayapati" value="168"> Nayapati</option>
                                    <option data-subtext="Nepalgunj" value="5"> Nepalgunj</option>
                                    <option data-subtext="Nepalgunj, Kohalpur, Birgunj and Butwal" value="207"> Nepalgunj, Kohalpur, Birgunj and Butwal</option>
                                    <option data-subtext="New Baneshwor, Kathmandu" value="169"> New Baneshwor, Kathmandu</option>
                                    <option data-subtext="Nuwakot" value="29"> Nuwakot</option>
                                    <option data-subtext="Nuwakot" value="74"> Nuwakot</option>
                                    <option data-subtext="Nuwakot, Chitwan, Pokhara, Lumbini and Nawalparasi" value="166"> Nuwakot, Chitwan, Pokhara, Lumbini and Nawalparasi</option>
                                    <option data-subtext="Outside Kathmandu Valley." value="61"> Outside Kathmandu Valley.</option>
                                    <option data-subtext="Palpa" value="94"> Palpa</option>
                                    <option data-subtext="Palpa/Tanahun/Banke" value="93"> Palpa/Tanahun/Banke</option>
                                    <option data-subtext="Parsa District" value="25"> Parsa District</option>
                                    <option data-subtext="Patan area (Bankhudole)" value="142"> Patan area (Bankhudole)</option>
                                    <option data-subtext="Patandhoka, Lalitpur" value="153"> Patandhoka, Lalitpur</option>
                                    <option data-subtext="Pepsicola, Kathmandu" value="143"> Pepsicola, Kathmandu</option>
                                    <option data-subtext="Pokhara" value="4"> Pokhara</option>
                                    <option data-subtext="Pokhara, Biratnagar and Kathmandu" value="209"> Pokhara, Biratnagar and Kathmandu</option>
                                    <option data-subtext="Pokhara, Chitwan and Birtamod" value="191"> Pokhara, Chitwan and Birtamod</option>
                                    <option data-subtext="Pokhara/Narayanghat/Butwal/Biratnagar/Kathmandu" value="104"> Pokhara/Narayanghat/Butwal/Biratnagar/Kathmandu</option>
                                    <option data-subtext="Prayak Pokhari, Lalitpur" value="152"> Prayak Pokhari, Lalitpur</option>
                                    <option data-subtext="Proeject site Dordi Gaupalika, Lamjung" value="208"> Proeject site Dordi Gaupalika, Lamjung</option>
                                    <option data-subtext="Putalisadak, Kathmandu" value="164"> Putalisadak, Kathmandu</option>
                                    <option data-subtext="Pyuthan, Butwal" value="205"> Pyuthan, Butwal</option>
                                    <option data-subtext="Pyuthan, Gulmi, Butwal" value="204"> Pyuthan, Gulmi, Butwal</option>
                                    <option data-subtext="Ramanand Chowk, Janakpur" value="182"> Ramanand Chowk, Janakpur</option>
                                    <option data-subtext="Ramechap and Rasuwa" value="66"> Ramechap and Rasuwa</option>
                                    <option data-subtext="Ramechhap" value="81"> Ramechhap</option>
                                    <option data-subtext="Ramechhap" value="83"> Ramechhap</option>
                                    <option data-subtext="Rupandehi District" value="47"> Rupandehi District</option>
                                    <option data-subtext="Sagarmatha" value="89"> Sagarmatha</option>
                                    <option data-subtext="Salyan" value="68"> Salyan</option>
                                    <option data-subtext="Salyan District" value="69"> Salyan District</option>
                                    <option data-subtext="Sanga, Kavre, Bagmati" value="155"> Sanga, Kavre, Bagmati</option>
                                    <option data-subtext="Saptari/Parsa/Sinduli/Udayapur/Tanahun/Salyan/Doti" value="105"> Saptari/Parsa/Sinduli/Udayapur/Tanahun/Salyan/Doti</option>
                                    <option data-subtext="Sarlahi, Rautahat, Udaypur, Sunsari" value="120"> Sarlahi, Rautahat, Udaypur, Sunsari</option>
                                    <option data-subtext="Shiraha" value="77"> Shiraha</option> <option data-subtext="Sinamangal, Kathmandu" value="132"> Sinamangal, Kathmandu</option>
                                    <option data-subtext="Sindhuli-Ramechhap" value="176"> Sindhuli-Ramechhap</option>
                                    <option data-subtext="Sindhuli-Ramechhap and Dhankuta-Bhojpur" value="177"> Sindhuli-Ramechhap and Dhankuta-Bhojpur</option>
                                    <option data-subtext="Sindhuli/Udayapur/Tanahun/Salyan/Doti." value="106"> Sindhuli/Udayapur/Tanahun/Salyan/Doti.</option>
                                    <option data-subtext="Sindhuli/Udayapur/Tanahun/Salyan/Doti/Parsa/Dhanusha/Saptari/Morang." value="107"> Sindhuli/Udayapur/Tanahun/Salyan/Doti/Parsa/Dhanusha/Saptari/Morang.</option>
                                    <option data-subtext="Sindhupalchok District" value="116"> Sindhupalchok District</option>
                                    <option data-subtext="Sindhupalchowk and Dolakha" value="67"> Sindhupalchowk and Dolakha</option>
                                    <option data-subtext="Sindhupalchowk District" value="125"> Sindhupalchowk District</option>
                                    <option data-subtext="Sunsari" value="28"> Sunsari</option>
                                    <option data-subtext="Surkhet" value="60"> Surkhet</option>
                                    <option data-subtext="Tanahun and Sindhupalchowk" value="131"> Tanahun and Sindhupalchowk</option>
                                    <option data-subtext="Tanahun District" value="163"> Tanahun District</option>
                                    <option data-subtext="Tansen" value="185"> Tansen</option> <option data-subtext="Thankot" value="30"> Thankot</option> <option data-subtext="Thecho, Lalitpur" value="140"> Thecho, Lalitpur</option>
                                    <option data-subtext="Udayapur" value="80"> Udayapur</option>
                                    <option data-subtext="Udaypur and Sunsari districts" value="121"> Udaypur and Sunsari districts</option>
                                    <option data-subtext="Unavailable/Others" value="26">
                                </select>
                            </div>

                            <div class="select-box mt-3">
                                <div class="input-icon">
                                    <span><i class="fa fa-briefcase"></i></span>
                                </div>
                                <select name="" id="">
                                    <option class="hidden" selected disabled v-model="comp_nature" value="">Job Feild You Want To Work In</option>
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

                            <div class="row group-input mt-3 mx-0">
                                <div class="col-md-6 pl-1">
                                    <span><i class="fas fa-motorcycle mr-2"></i></span>
                                    <span>Two Wheeler</span>
                                </div>
                                <div class="col-md-3 radio-btn">
                                    <ul class="unother m-0 p-0">
                                        <li>
                                            <label class="radio-checkbox">Yes
                                                <input class="unchecked"type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 radio-btn">
                                    <ul class="unother m-0 p-0">
                                        <li>
                                            <label class="radio-checkbox">No
                                                <input class="unchecked"type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row group-input mt-3 mx-0">
                                <div class="col-md-6 pl-1">
                                    <span><i class="far fa-address-card mr-2"></i></span>
                                    <span>Licences</span>
                                </div>
                                <div class="col-md-3 radio-btn">
                                    <ul class="unother m-0 p-0">
                                        <li>
                                            <label class="radio-checkbox">Yes
                                                <input class="unchecked"type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 radio-btn">
                                    <ul class="unother m-0 p-0">
                                        <li>
                                            <label class="radio-checkbox">No
                                                <input class="unchecked"type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row group-input mt-3 mx-0">
                                <div class="col-md-6 pl-1">
                                    <span><i class="fas fa-venus-mars mr-2"></i></span>
                                    <span>Gender</span>
                                </div>
                                <div class="col-md-3 radio-btn">
                                    <ul class="unother m-0 p-0">
                                        <li>
                                            <label class="radio-checkbox">Yes
                                                <input class="unchecked"type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 radio-btn">
                                    <ul class="unother m-0 p-0">
                                        <li>
                                            <label class="radio-checkbox">No
                                                <input class="unchecked"type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

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

                            <div class=" upload-content mt-3">Upload Your Related Curriculum Vitae</div>
                            <div class="upload-div mt-2">
                                <button class="upload-btn">Choose File</button>
                                <span class="ml-2">No File Choosen</span>
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
