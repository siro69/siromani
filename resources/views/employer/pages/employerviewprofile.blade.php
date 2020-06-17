<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
        .font{
            font-family: BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
        }

        .profile-header{
            background-color:#fff;
            border:1px solid lightgrey;
            color:#000;
            position:relative;
        }
        .profile-header h3{
            font-size: 14px;
            font-weight: bold;
            padding: 10px 15px;
            text-transform: uppercase;
            margin:0;
        }
        .edit{
            position:absolute;
            top:6px;
            right:12px;
            border:none;
            padding:0;

        }
        .edit a{
            text-transform:capitalize;
            font-size:0.8125rem;
            font-weight:300;
            color:#000;
            text-decoration:none;
        }
        .fa-pencil-square-o{
            padding-right:5px;
        }
        .profile-detail{
            border:1px solid lightgrey;
            background-color:#fff;
            padding:0 28px;
        }
        .forborder{
            border-block-end:1px solid lightgrey;
        }
        .topic{
            /* padding:0 40px; */
            font-weight: bold;
            color: #000;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:14px;
        }
        .topic img{
            opacity:0.7;
            margin-right:5px;
        }
        .detail p{
            padding: 0 15px;
            text-transform: capitalize;
            font-size:0.8125rem;
            color:#000;
        }
        .column-contact{
            padding:0 15px;
        }
        .column-contact th{
           color:#000;
           opacity:0.6;
           padding:5px 7px;
        }
        .column-contact td{
            font-size:0.8125rem;
            color:#000; 
        }
        .tablediv img{
            margin-top:-4px;
        }
        
    </style>
</head>
<body>

<div class="viewprofile">
    <div class="container p-0">
    <div class="row mt-2">
        <div class="col-md-3">
            @include('employer.pages.employersidebar')

        </div>
    <div class="col-lg-9 col-md-9">
    <div class="font">
        <div class="profile-header">
            <h3>Kumari Job</h3>
            <span class="edit"><a href="editprofile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit profile</a></span>
        </div>
        <div class="profile-detail mt-3">
            <div class="row mt-2 forborder">
            <div class="col-lg-2 col-md-4 mt-2">
                <span class="topic"><img src="../images/note.png" alt="this is icon"width="19px"> About</span>
            </div>
            <div class="col-lg-10 col-md-8 mt-2">
                <span class="detail">
                    <p>Kumari Job is one of the leading legally certified Human Resource consulting firm
                         operating since 2014. Kumari Job offers multiple solutions in the field of HR, 
                         Recruitment and Placement services to different organizations in diversified fields
                          like Financial Institutions, Corporate houses, Trading houses, Schools, Colleges,
                           I/NGOs etc.<br><br> Kumari Job is morally operating by following the principles where value
                            of clients are highly understood and recognized to provide them with the best services.
                             Kumari Job is also known for its professional training services to produce qualified 
                             and skilled manpower in diverse fields.</p>
                </span>
            </div>
            </div>

            <div class="row mt-2">
            <div class="col-lg-2 col-md-4 mt-2">
                <span class="topic"><img src="../images/phone1.png" alt="this is icon"width="20px">Contact</span>
            </div>
            <div class="col-lg-10 col-md-8 column-contact">
                <span class="contact-item">
               
                <table class=" tablediv mt-2">
                    <tr>
                    <th><img src="../images/slidearrow.png" alt="this is icon" width="13px"></th>
                    <td>Kumari Job</td>
                    </tr>
                    <tr>
                    <th><i class="fa fa-map-marker icons" aria-hidden="true"></i></th>
                    <td>Tinkune,Kathmandu</td>
                    </tr>
                    <tr>
                    <th><i class="fa fa-phone icons" aria-hidden="true"></i></th>
                    <td>+977-212314564687</td>
                    </tr>
                    <tr>
                    <th><i class="fa fa-globe icons" aria-hidden="true"></i></th>
                    <td>www.kumarijob.com</td>
                    </tr>
                </table>
                </span>
            </div>
            </div>

        </div>
    </div>

    </div>
    <div>
</div>
</div>
</body>
</html>
