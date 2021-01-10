	<!-- Horizonatal menu-->
    <div class="main-navbar hor-menu sticky">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="ti-home"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link with-sub" href=""><i class="ti-wallet"></i>@lang('general.users')</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/users">@lang('general.manage_users')</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link with-sub" href=""><i class="ti-wallet"></i>@lang('general.app_settings')</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{ url('/app_settings') }}">@lang('general.manage_app_settings')</a>

                            <a class="nav-sub-link" href="{{ url('/business_settings' . '/' . BusinessSetup()->id . '/edit') }}">@lang('general.manage_business_settings')</a>
                        </li>
                    </ul>
                </li>
                
                
                <li class="nav-item nav-item-mega">
                    <a class="nav-link with-sub" href=""><i class="ti-package"></i>{{ trans('general.hr') }}</a>
                    <div class="nav-sub nav-sub-mega">
                        <div class="container">
                            <div>
                                <ul class="nav">
                                    <li><span>{{ trans('general.master') }}</span></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('branches')}}">{{ trans('general.branches') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('administrations')}}">{{ trans('general.administrations') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('departments')}}">{{ trans('general.departments') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('jobs')}}">{{ trans('general.jobs') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('employment-status')}}">{{ trans('general.employment_status') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('skills')}}">{{ trans('general.skills') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('educations')}}">{{ trans('general.education') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('languages')}}">{{ trans('general.language') }}</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{hr('certifications')}}">{{ trans('general.certification') }}</a>
                                    </li>
                                  
                                </ul>
                            
                            
                            </div>
                            <div>
                                
                            
                            </div>
                            
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link with-sub" href=""><i class="ti-wallet"></i>@lang('general.employees')</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/hr/employees">@lang('general.employees')</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--End  Horizonatal menu-->