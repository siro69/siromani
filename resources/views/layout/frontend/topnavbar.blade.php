<div id="top-navbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 col-md-3 left-side">
                <ul class="left-icons">
                    <li class="skype"><a href="skype:live:suzanamoktan?call" data-toggle="tooltip" title="Skype:+977-9801178845" data-placement="bottom"><i class="fab fa-skype"></i></a></li>
                    <li class="whatsapp"><a href="#." data-toggle="tooltip" title="Whatsapp:+977-9801178845" data-placement="bottom"><i class="fab fa-whatsapp"></i></a></li>
                    <li class="email"><a href="#." data-toggle="tooltip" title="info@kumarijob.com" data-placement="bottom"><i class="far fa-envelope"></i></a></li>
                    <li class="viber"><a href="#." data-toggle="tooltip" title="viber:+977-9801178845" data-placement="bottom"><i class="fab fa-viber"></i></a></li>
                </ul>
            </div>
            <div class="col-5 col-md-5 middle-side">
                <ul>
                    <li class="num1"><a href=""><i class="fas fa-phone-volume"></i>01-5199600</a></li>
                    <li class="num2"><a href=""><i class="fas fa-mobile-alt"></i>+977-9801178845</a></li>
                    <li class="download-app"><a href=""><img src="https://kumarijob.com/assets/frontend/navbaricon/download-app-header.gif?v=2">Download Our App</a></li>
                </ul>
            </div>
            <div class="col-4 col-md-4 right-side">
                <ul>
                    <li class="services"><a href=""><i class="far fa-bell"></i>Services</a></li>
                    <li class="support"><a href=""><i class="fas fa-info-circle"></i>Support</a></li>
                    <li class="faq"><a href="" data-toggle="tooltip" title="Frequently Asked Question" data-placement="bottom"><i class="far fa-question-circle"></i>FAQ</a></li>
                    <li class="feedback"><a href="" data-toggle="tooltip" title="Any Feedback ?" data-placement="bottom"><i class="far fa-comment-alt"></i>Feedback</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

