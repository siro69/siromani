<header class="main-navbar">
    <nav class="navbar navbar-expand-md shadow-sm sticky-top bg-white">
    <div class="container p-0">
        <div class="kumari-logo">
         <a href="https://www.kumarijob.com/">
            <img src="{{ asset('images/jobseekers/kumarijob.png') }}" class="responsive" width="100">
         </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse text-left" id="navbarContent">
           
            <ul class="navbar-nav ml-auto" onclick="myFunction(event)">
                <li class="nav-item home active">
                    <a class="nav-link" href="{{ route('frontend.home') }}">
                        Leave Dashboard
                    </a>
                </li>



            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->first_name   }} {{ Auth::user()->last_name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            </ul>
            </div>
        </div>
    </nav>
    <nav class="sidenav">   
    </nav>
</header>



