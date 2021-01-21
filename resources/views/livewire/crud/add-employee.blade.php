 <div  class="modal effect-scale fade" id="addEmployee" wire:ignore.self>  
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" data-container="#addEmployee">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                    <h6 class="modal-title">Add New Employee</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save"  id="formAdd">
                {{-- Start of modal body --}}
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">code</p>
                        <div id="for-code" >
                        <input data-container="#for-code" wire:model.lazy="employee.code" type="text" class="form-control"  placeholder="employee code">
                    </div>
                    <x-error name="employee.code"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">employee name</p>
                        <div id="for-name" >
                        <input data-container="#for-name" wire:model.lazy="employee.name" type="text" class="form-control"  placeholder="employee name">
                    </div>
                    <x-error name="employee.name"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">employee english name</p>
                        <div  id="for-enname" >
                        <input data-container="#for-enname" wire:model.lazy="employee.en_name" type="text" class="form-control"  placeholder="employee english name">
                    </div>
                    <x-error name="employee.en_name"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">employee short name</p>
                        <div  id="for-shortname" >
                        <input data-container="#for-shortname" wire:model.lazy="employee.short_name" type="text" class="form-control"  placeholder="employee name">
                    </div>
                    <x-error name="employee.short_name"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">Email</p>
                        <div  id="for-email" >
                        <input data-container="#for-email" wire:model.lazy="employee.email" type="text" class="form-control"  placeholder="email">
                    </div>
                    <x-error name="employee.email"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <p class="mg-b-10 mr-2">gender</p>
                    <div id="for-gender" wire:ignore>
                    <select wire:model="employee.gender" data-container="#for-gender" class="form-control selectpicker" 
                    >
                        <option>gender</option>
                           <option value="male">male</option>
                           <option value="female">female</option>
                    </select>
                    </div>
                    <x-error name="employee.gender"/>
                </div>
                   <div class="col-sm-4">
                    <p class="mg-b-10 mr-2">marital status</p>
                    <div  id="for-marital_status" wire:ignore>
                    <select wire:model="employee.marital_status" data-container="#for-marital_status" class="form-control selectpicker" >
                        <option>marital status</option>
                           <option value="single">single</option>
                           <option value="married">married</option>
                           <option value="divorced">divorced</option>
                    </select>
                    </div>
                    <x-error name="employee.marital_status"/>
                </div>
                   <div class="col-sm-4">
                    <p class="mg-b-10 mr-2">military service</p>
                    <div id="for-military_service" wire:ignore>
                    <select data-container="#for-military_service" class="form-control selectpicker" wire:model="employee.military_service" >
                        <option>military service</option>
                           <option value="passed">passed</option>
                           <option value="exempt">exempt</option>
                           <option value="unclear">unclear</option>
                    </select>
                    </div>
                    <x-error name="employee.military_service"/>
                </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">contact number</p>
                        <div  id="for-phone" >
                        <input data-container="#for-phone" wire:model.lazy="employee.phone" type="text" class="form-control"  placeholder="contact number">
                    </div>
                    <x-error name="employee.phone"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">alternative number</p>
                        <div  id="for-altphone" >
                        <input data-container="#for-altphone" wire:model.lazy="employee.alt_phone" type="text" class="form-control"  placeholder="alternative number">
                    </div>
                    <x-error name="employee.alt_phone"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">Adressr</p>
                        <div  id="for-address" >
                        <input data-container="#for-address" wire:model.lazy="employee.address" type="text" class="form-control"  placeholder="address">
                    </div>
                    <x-error name="employee.address"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">Religion</p>
                        <div  id="for-religion" >
                        <input data-container="#for-religion" wire:model.lazy="employee.religion" type="text" class="form-control"  placeholder="religion">
                    </div>
                    <x-error name="employee.religion"/>
                    </div>
                   </div>
                   <div class="col-sm-4">
                    {{-- fc-datepicker --}}
                    <div class="form-group">
                        <p class="mg-b-10">birth_date</p>
                        
                            <div id="for-birth_date" wire:ignore>
                         <input data-container="#for-birth_date" id="datetimepicker" wire:model="employee.birth_date" class="form-control date" type="text">
                        </div>
                        <x-error name="employee.birth_date"/>
                    </div>
                   </div>
               <br>
               <div class="col-sm-12 col-md-4 mx-auto">
                <p class="mg-b-10 mr-4 text-center">choose your logo</p>
                 <div id="for-profile-id" wire:ignore>
                <input data-container="#for-profile-id" type="file" wire:model="profile" class="dropify" data-height="200" />
            </div>
            <x-error name="profile"/>
            </div>
            </div>
            </div>
            {{-- end of modal body --}}
            <br>
            <div class="modal-footer">
                <button class="btn ripple btn-primary btn-with-icon"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
                <button class="btn ripple btn-secondary btn-with-icon">{{ trans('general.save_continue') }} <i class="far fa-copy  ml-2 "></i></button>
                <button class="btn ripple btn-success btn-with-icon">{{ trans('general.save_complete_other') }}<i class="fas fa-folder-plus ml-2 "></i></button>
                <button class="btn ripple btn-light" data-dismiss="modal" type="button">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
@push('js')
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
    $(document).ready(function(){
    $('#formAdd').on('submit', function(){
    $("#addEmployee").modal('hide');
    });
    })
</script>
@endpush
@push('css')
<style>
    .wizard > .actions{
        display: none !important;
    }
    .wizard > .actions li:nth-child(2) a{
        background-color: #8e9f9f !important;
    }
    .wizard > .actions li:nth-child(1) a{
        background-color: #f1388b !important;
    }
    .selectpicker{
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #a8afc7;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #e8e8f7;
    border-radius: 3px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .datepicker{ z-index:99999 !important;}
    .scale{
        overflow-y: scroll;
    }
</style>
@endpush