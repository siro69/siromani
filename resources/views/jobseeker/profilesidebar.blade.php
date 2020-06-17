
<style>
.sidebar-profile{
    line-height: 2;
    font-weight:400;
    font-size:0.75rem;
}
.font-weight-bold{
    font-size:0.82rem;
    font-weight:400!important;
}
.side-information:hover , .side-information:hover .profile-image{
    background: #f8f9fa!important;
}
@media screen and (max-width:800px) {
      
         #sidebar-profile{
            padding: 0!important;
        }
    }
</style>
<div class="col-md-3 pl-0 mb-3" id="sidebar-profile">
    <div class="border side-information bg-white">
    <a href="{{ route('jobseeker.profile-preferences') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="briefcase" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile font-weight-bold"> Job Preferences</p>
            </div>
        </div>
    </a>
    
    </div>
    <div class="border side-information bg-white mt-1">
    <a href="{{ route('jobseeker.dashboard') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="file-text" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile" > Basic Information</p>
            </div>
        </div>
        </a>
    </div>
    <div class="border side-information bg-white mt-1">
    <a href="{{ route('jobseeker.profile-experience') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="user-check" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile"  > Experience</p>
            </div>
        </div>
        </a>
    </div>
    <div class="border side-information bg-white mt-1">
    <a href="{{ route('jobseeker.profile-education') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="clipboard" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile" >Education </p>
            </div>
        </div>
</a>
    </div>
    <div class="border side-information bg-white mt-1">
        <a href="{{ route('jobseeker.profile-skill') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="award" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile" > Skill</p>
            </div>
        </div>
        </a>
    </div>

    <div class="border side-information bg-white mt-1">
    <a href="{{ route('jobseeker.profile-reference') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="share" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile" > Reference</p>
            </div>
        </div>
    </a>
    </div>

    <div class="border side-information bg-white mt-1">
    <a href="{{ route('jobseeker.profile-award') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
            <i data-feather="award" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile"> Professional Award</p>
            </div>
        </div>
    </a>
    </div>
  
    <div class="border side-information bg-white mt-1">
    <a href="{{ route('jobseeker.profile-training') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="database" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile" > Trainings</p>
            </div>
        </div>
    </a>
    </div>

    <div class="border side-information bg-white mt-1">
    <a href="{{ route('jobseeker.profile-language') }}" class="text-dark">
        <div class="d-flex p-0 m-0">
            <div class="profile-image bg-white my-auto px-2 col-2 text-center p-0">
                <i data-feather="mic" class="p-1" ></i>
            </div>
            <div class="my-auto py-2">
                <p class="mb-0 sidebar-profile"> Language</p>
            </div>
        </div>
    </a>
    </div>
    

</div>
