<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'Basic' }">
<div class="row square">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="panel profile-cover">
                    <div class="profile-cover__img">
                        @php
                         $trancated = explode('/' , $employee->profile);
                        @endphp
                 <img src="{{ asset('storage/' . $trancated[1] .'/'. $trancated[2]) }}" alt="" width="100" height="100" class="image-fluid img-fluid rounded-circle">
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
                {{-- start of tabs// start of data container --}}
                {{-- <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'description' }" id=""> --}}
                <div class="profile-tab tab-menu-heading">
                    <nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
                        {{-- <a class="nav-link  active" data-toggle="tab" href="#about">Basic Information</a>
                        <a class="nav-link" data-toggle="tab" href="#Identification">Identifications</a>
                        <a class="nav-link" data-toggle="tab" href="#ContractInfo">Contract Info</a>
                        <a class="nav-link" data-toggle="tab" href="#AddFinancial">Financial Data</a>
                        <a class="nav-link" data-toggle="tab" href="#friends">Friends</a>
                        <a class="nav-link" data-toggle="tab" href="#settings">Account Settings</a> --}}

                        <a :class="{ 'active': tab === 'Basic' }" x-on:click.prevent="tab = 'Basic'; window.location.hash = 'Basic'" href="#">Basic</a>

                        <a :class="{ 'active': tab === 'Identification' }" @click.prevent="tab = 'Identification'; window.location.hash = 'Identification'" href="#">Identification</a>

                        <a :class="{ 'active': tab === 'ContractInfo' }" @click.prevent="tab = 'ContractInfo'; window.location.hash = 'ContractInfo'" href="#">ContractInfo</a>

                        <a :class="{ 'active': tab === 'AddFinancial' }" @click.prevent="tab = 'AddFinancial'; window.location.hash = 'AddFinancial'" href="#">AddFinancial</a>
                        <a :class="{ 'active': tab === 'AddArchive' }" @click.prevent="tab = 'AddArchive'; window.location.hash = 'AddArchive'" href="#">AddArchive</a>
                        <a :class="{ 'active': tab === 'AddSkill' }" @click.prevent="tab = 'AddSkill'; window.location.hash = 'AddSkill'" href="#">AddSkill</a>
                        <a :class="{ 'active': tab === 'AddEducation' }" @click.prevent="tab = 'AddEducation'; window.location.hash = 'AddEducation'" href="#">AddEducation</a>
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
                <div x-show="tab === 'Basic'" class="main-content-body tab-pane p-4 border-top-0 active" id="about">
                    <div class="card-body p-0 border p-0 rounded-10">
                        
                      <h3>about data</h3>
                        
                    </div>
                </div>
                <div x-show="tab === 'Identification'">
                @livewire('profile.add-identification', ['employee' => $employee], key($employee->code))
                </div>
                <div x-show="tab === 'ContractInfo'">
                @livewire('profile.add-contract', ['employee' => $employee], key($employee->code))
                </div>
                <div x-show="tab === 'AddFinancial'">
                @livewire('profile.add-financial', ['employee' => $employee], key($employee->code))
                </div>
                <div x-show="tab === 'AddArchive'">
                @livewire('profile.add-archive', ['employee' => $employee], key($employee->code))
                </div>
                <div x-show="tab === 'AddSkill'">
                @livewire('profile.add-skill', ['employee' => $employee], key($employee->code))
                </div>
                <div x-show="tab === 'AddEducation'">
                @livewire('profile.add-education', ['employee' => $employee], key($employee->code))
                </div>
               
                <div class="main-content-body tab-pane border-top-0" id="friends">
                    <div class="card-body border pd-b-10">
                        <!-- row -->
                    </div>
                </div>
                <div class="main-content-body tab-pane p-4 border-top-0" id="settings">
                    <div class="card-body border" data-select2-id="12">
                       
                    </div>
                </div>
            {{-- </div> --}}
                {{-- end of data container --}}
            </div>
        </div>
    </div>
</div>
</div>
@push('js')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('element.updated', (el, component) => {
           
        })
    })
 </script>   
@endpush

@push('css')
<style>
.nav a{
    
    color: #3c4858;
    font-weight: 500;
    padding: 5px;
    font-size: 16px;
    margin-right: 7px;
}
.nav a.active{
color: #6259ca;
font-weight: bold;
}
</style>
    
@endpush