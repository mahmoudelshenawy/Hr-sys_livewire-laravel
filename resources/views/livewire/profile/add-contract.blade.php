<div class="main-content-body  tab-pane border-top-0" id="ContractInfo" wire:ignore>
    <div class="border p-4" data-container="#ContractInfo">
        <div class="main-content-body main-content-body-profile">
            <div class="main-profile-body p-0">
                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
@php
    $emp_status = App\Models\EmploymentStatus::all(['id' , 'name']);
    $branches = App\Models\Branch::all(['id' , 'name']);
    $admins = App\Models\Administration::all(['id' , 'name']);
    $departs = App\Models\Department::all(['id' , 'name']);
    $jobs = App\Models\Job::all(['id' , 'name']);
    // $employees = App\Models\Employee::all(['code' , 'name']);
    // $employees = DB::table('employees')->where('code' , '!=' , $employee->code)->select('employees.*');
   $employees = DB::select('select code , name from employees where code != ?', [$employee->code]);
@endphp
           <form class="form-horizontal" wire:submit.prevent="save">
                 <div class="mb-4 main-content-label">complete Contract information</div>
                 <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Employment Status</label>
                        </div>
                        <div class="col-md-9">
                            <select wire:model="contract.employment_status_id" class="form-control selectpicker "  data-live-search="true">
                                   <option>Select Employment Status</option>
                                  @foreach ($emp_status as $status)
                                      <option value="{{$status->id}}">{{$status->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('contract.employment_status_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <!-- employment status end-->
                 <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Branch</label>
                        </div>
                        <div class="col-md-9">
                            <select wire:model="contract.branch_id" class="form-control selectpicker "  data-live-search="true">
                                   <option>Select Branch</option>
                                  @foreach ($branches as $branch)
                                      <option value="{{$branch->id}}">{{$branch->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('contract.branch_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <!-- branch id end-->
                 <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Administration</label>
                        </div>
                        <div class="col-md-9">
                            <select wire:model="contract.administration_id" class="form-control selectpicker "  data-live-search="true">
                                   <option>Select Administration</option>
                                  @foreach ($admins as $admin)
                                      <option value="{{$admin->id}}">{{$admin->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('contract.administration_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <!-- administration_id end-->
                 <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Department</label>
                        </div>
                        <div class="col-md-9">
                            <select wire:model="contract.department_id" class="form-control selectpicker "  data-live-search="true">
                                   <option>Select Department</option>
                                  @foreach ($departs as $depart)
                                      <option value="{{$depart->id}}">{{$depart->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('contract.department_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <!-- department_id end-->
                 <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Job</label>
                        </div>
                        <div class="col-md-9">
                            <select wire:model="contract.job_id" class="form-control selectpicker "  data-live-search="true">
                                   <option>Select Job</option>
                                  @foreach ($departs as $depart)
                                      <option value="{{$depart->id}}">{{$depart->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('contract.job_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <!-- job_id end-->
                 <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Supervisor</label>
                        </div>
                        <div class="col-md-9">
                            <select wire:model="contract.supervisor_code" class="form-control selectpicker "  data-live-search="true">
                                   <option>Select Supervisor</option>
                                  @foreach ($employees as $employee)
                                      <option value="{{$employee->code}}">{{$employee->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('contract.supervisor_code')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <!-- supervisor_id end-->
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">hiring date</label>
                        </div>
                            <div class="col-md-9" id="date_of_hiring" wire:ignore>
                                <input data-container="#date_of_hiring" type="text" x-init="new Pickaday({field : $el})" wire:model="contract.date_of_hiring" class="form-control fc-datepicker" placeholder="hiring date">
                            </div>  
                            @error('contract.date_of_hiring')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div><!-- date of hiring -->
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">start of contract date</label>
                        </div>
                            <div class="col-md-9" id="strat_of_contract" wire:ignore>
                                <input data-container="#strat_of_contract" type="text" wire:model="contract.strat_of_contract" class="form-control" placeholder="start of contract date">
                            </div>  
                            @error('contract.strat_of_contract')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div><!-- start of contract date -->
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">end of contract date</label>
                        </div>
                            <div class="col-md-9" id="end_of_contract" wire:ignore>
                                <input data-container="#end_of_contract" type="text" wire:model="contract.end_of_contract" class="form-control" placeholder="end of contract date">
                            </div>  
                            @error('contract.end_of_contract')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div><!-- end of contract date -->
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Attendanble</label>
                        </div>
                        <div class="col-md-9" id="passport_release_date" wire:ignore>
                            <label class="custom-switch">
                            <input type="checkbox" wire:model="attendable" name="custom-switch-checkbox" class="custom-switch-input" {{$attendable ? 'checked' : ''}}>
                            <span class="custom-switch-indicator"></span>
                        </label>
                        </div>
                    </div>
                </div>
                <!-- attendanble -->
                <div x-data="{
                    annual : $wire.hasAnnualVacation,
                    bonus : $wire.hasTerminalBonus
                }"><!-- Data Container-->
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">has annual vacation</label>
                        </div>
                        <div class="col-md-9" id="annual_vacation" wire:ignore>
                            <label class="custom-switch">
                            <input  @click="annual = ! annual" type="checkbox" wire:model="hasAnnualVacation" name="custom-switch-checkbox" class="custom-switch-input" {{$hasAnnualVacation ? 'checked' : ''}}>
                            <span class="custom-switch-indicator"></span>
                        </label>
                        </div>
                    </div>
                </div><!-- has annual vacation-->
                <div x-show="annual" class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">number of days of annual vacation</label>
                        </div>
                            <div class="col-md-9" id="days_of_annual_vacation" wire:ignore>
                                <input data-container="#days_of_annual_vacation" type="number" wire:model="contract.days_of_annual_vacation" class="form-control" placeholder="number of days of annual vacation">
                            </div>  
                    </div>
                </div><!-- days of annual vacation-->
            
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">has terminal bonus</label>
                    </div>
                    <div class="col-md-9" id="" >
                        <label class="custom-switch">
                        <input @click="bonus = ! bonus" type="checkbox" wire:model="hasTerminalBonus" name="custom-switch-checkbox" class="custom-switch-input" {{$hasTerminalBonus ? 'checked' : ''}}>
                        <span class="custom-switch-indicator"></span>
                    </label>
                    </div>
                </div>
            <!-- has terminal bonus vacation-->
            <div x-show="bonus" class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">number of days of terminal bonus</label>
                    </div>
                        <div class="col-md-9" id="days_of_terminal_bonus" wire:ignore>
                            <input data-container="#days_of_terminal_bonus" type="numeric" wire:model="contract.days_of_terminal_bonus" class="form-control" placeholder="number of days of terminal bonus">
                        </div>  
                </div>
            </div><!-- days of terminal bonus-->
        </div>
         <!-- Alpine wrapper end here--> 
         <div>
            <button class="btn ripple btn-primary btn-with-icon mx-auto"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
        </div>
           </form>
            </div>
            <!-- main-profile-body -->
        </div>
    </div>
</div>