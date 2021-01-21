@extends('layouts.app')
@section('content')
<div class="row square">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="panel profile-cover">
                    <div class="profile-cover__img">
                       
                 <img src="{{ $employee->profile ?? asset('img/default.jpg') }}" alt="" width="100" height="100" class="image-fluid img-fluid rounded-circle">
                        <h3 class="h3">{{$employee->name}}</h3>
                    </div>
                    <div class="profile-cover__action bg-img">
                        <button class="btn btn-rounded btn-danger">
                            <i class="fa fa-plus"></i>
                            <span>Follow</span>
                        </button>
                        <button class="btn btn-rounded btn-success">
                            <i class="fa fa-comment"></i>
                            <span>Message</span>
                        </button>
                    </div>
                    <div class="profile-cover__info">
                        <ul class="nav">
                            <li><strong>26</strong>Projects</li>
                            <li><strong>33</strong>Followers</li>
                            <li><strong>136</strong>Following</li>
                        </ul>
                    </div>
                </div>
                <div class="profile-tab tab-menu-heading">
                    <nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
                        <a class="nav-link  active" data-toggle="tab" href="#about">Basic Information</a>
                        <a class="nav-link" data-toggle="tab" href="#Identification">Identifications</a>
                        <a class="nav-link" data-toggle="tab" href="#ContractInfo">Contract Info</a>
                        <a class="nav-link" data-toggle="tab" href="#AddFinancial">Financial Data</a>
                        <a class="nav-link" data-toggle="tab" href="#friends">Friends</a>
                        <a class="nav-link" data-toggle="tab" href="#settings">Account Settings</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card main-content-body-profile">
            <div class="tab-content">
                <div class="main-content-body tab-pane p-4 border-top-0 active" id="about">
                    <div class="card-body p-0 border p-0 rounded-10">
                        <div class="p-4">
                            <h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
                            <p class="m-b-5">Hi I'm Petey Cruiser,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            <div class="m-t-30">
                                <h4 class="tx-15 text-uppercase mt-3">Experience</h4>
                                <div class=" p-t-10">
                                    <h5 class="text-primary m-b-5 tx-14">Lead designer / Developer</h5>
                                    <p class="">websitename.com</p>
                                    <p><b>2010-2015</b></p>
                                    <p class="text-muted tx-13 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>

                                <div class="">
                                    <h5 class="text-primary m-b-5 tx-14">Senior Graphic Designer</h5>
                                    <p class="">coderthemes.com</p>
                                    <p><b>2007-2009</b></p>
                                    <p class="text-muted tx-13 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-top"></div>
                        <div class="p-4">
                            <label class="main-content-label tx-13 mg-b-20">Contact</label>
                            <div class="d-sm-flex">
                                <div class="mg-sm-l-20 mg-b-10">
                                    <div class="main-profile-contact-list">
                                        <div class="media">
                                            <div class="media-icon bg-primary-transparent text-primary"> <i class="icon ion-md-phone-portrait"></i> </div>
                                            <div class="media-body"> <span>Mobile</span>
                                                <div> +245 354 654 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-sm-l-20 mg-b-10">
                                    <div class="main-profile-contact-list">
                                        <div class="media">
                                            <div class="media-icon bg-success-transparent text-success"> <i class="icon ion-logo-slack"></i> </div>
                                            <div class="media-body"> <span>Slack</span>
                                                <div> @spruko.w </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="main-profile-contact-list">
                                        <div class="media">
                                            <div class="media-icon bg-info-transparent text-info"> <i class="icon ion-md-locate"></i> </div>
                                            <div class="media-body"> <span>Current Address</span>
                                                <div> San Francisco, CA </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top"></div>
                        <div class="p-4">
                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                            <div class="d-md-flex">
                                <div class="mg-md-l-20 mg-b-10">
                                    <div class="main-profile-social-list">
                                        <div class="media">
                                            <div class="media-icon bg-primary-transparent text-primary"> <i class="icon ion-logo-github"></i> </div>
                                            <div class="media-body"> <span>Github</span> <a href="">github.com/spruko</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-md-l-20 mg-b-10">
                                    <div class="main-profile-social-list">
                                        <div class="media">
                                            <div class="media-icon bg-success-transparent text-success"> <i class="icon ion-logo-twitter"></i> </div>
                                            <div class="media-body"> <span>Twitter</span> <a href="">twitter.com/spruko.me</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-md-l-20 mg-b-10">
                                    <div class="main-profile-social-list">
                                        <div class="media">
                                            <div class="media-icon bg-info-transparent text-info"> <i class="icon ion-logo-linkedin"></i> </div>
                                            <div class="media-body"> <span>Linkedin</span> <a href="">linkedin.com/in/spruko</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-md-l-20 mg-b-10">
                                    <div class="main-profile-social-list">
                                        <div class="media">
                                            <div class="media-icon bg-danger-transparent text-danger"> <i class="icon ion-md-link"></i> </div>
                                            <div class="media-body"> <span>My Portfolio</span> <a href="">spruko.com/</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @livewire('profile.add-identification', ['employee' => $employee], key($employee->code))
                @livewire('profile.add-contract', ['employee' => $employee], key($employee->code))
                @livewire('profile.add-financial', ['employee' => $employee], key($employee->code))
               
               
                <div class="main-content-body tab-pane border-top-0" id="friends">
                    <div class="card-body border pd-b-10">
                        <!-- row -->
                    </div>
                </div>
                <div class="main-content-body tab-pane p-4 border-top-0" id="settings">
                    <div class="card-body border" data-select2-id="12">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
@endsection

