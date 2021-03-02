	<!-- Horizonatal menu-->
    <div class="main-navbar hor-menu sticky">
        <div class="container-lg">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="ti-home"></i>Dashboard</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link with-sub" href=""><i class="ti-wallet"></i>@lang('general.users')</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/users">@lang('general.manage_users')</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link with-sub" href=""><i class="ti-wallet"></i>@lang('general.app_settings')</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{ url('/app_settings') }}">@lang('general.manage_app_settings')</a>

                            <a class="nav-sub-link" href="{{ url('/business_settings' . '/' . BusinessSetup()->id . '/edit') }}">@lang('general.manage_business_settings')</a>
                        </li>
                    </ul>
                </li> --}}
                
                
                {{-- <li class="nav-item nav-item-mega">
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
                                <ul class="nav">
                                    <li><span>{{ trans('general.master') }}</span></li>
                                        <li class="nav-sub-item">
                                            <a class="nav-sub-link" href="{{hr('banks')}}" data-turbolinks="true">{{ trans('general.banks') }}</a>
                                        </li>
                                        <li class="nav-sub-item">
                                            <a class="nav-sub-link" href="{{hr('sponsors')}}" data-turbolinks="true">{{ trans('general.sponsor') }}</a>
                                        </li>
                                        <li class="nav-sub-item">
                                            <a class="nav-sub-link" href="{{hr('insurrance_companies')}}" data-turbolinks="true">{{ trans('general.insurrance_companies') }}</a>
                                        </li>
                                        <li class="nav-sub-item">
                                            <a class="nav-sub-link" href="{{hr('shifts')}}" data-turbolinks="true">{{ trans('general.shifts') }}</a>
                                        </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="nav">
                                    <li><span>{{ trans('general.reports') }}</span></li>
                                        <li class="nav-sub-item">
                                            <a class="nav-sub-link" href="{{url('hr/reports/employees_reports')}}" data-turbolinks="true">{{ trans('general.employees_reports') }}</a>
                                        </li>
                                </ul> 
                            
                            </div>
                            
                        </div>
                    </div>
                </li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link with-sub" href=""><i class="ti-wallet"></i>@lang('general.employees')</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/hr/employees">@lang('general.employees')</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/hr/employees/companions">@lang('general.companions')</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link with-sub" href=""><i class="ti-wallet"></i>@lang('general.payroll')</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/payroll/overtime">@lang('general.payroll_overtime')</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/payroll/allowance">@lang('general.payroll_allowance')</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/payroll/advance">@lang('general.payroll_advance')</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/payroll/commission">@lang('general.commission')</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/payroll/delay_penalty">@lang('general.payroll_delay_penalty')</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/payroll/absence_penalty">@lang('general.payroll_absence_penalty')</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
    <!--End  Horizonatal menu-->