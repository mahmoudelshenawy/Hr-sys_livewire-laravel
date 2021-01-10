<div class="modal effect-scale fade"  id="addEmployee" wire:ignore>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document"  data-container="#addEmployee">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Employee</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save"  id="{{$toUpdate ? 'formAdd_' . $employee->code : 'formAdd'}}">
               
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">employee name</p>
                        <div id="for-name" wire:ignore>
                        <input data-container="#for-name" wire:model.lazy="employee.name" type="text" class="form-control"  placeholder="employee name">
                    </div>
                    @error('employee.name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">employee english name</p>
                        <div  id="for-enname" wire:ignore>
                        <input data-container="#for-enname" wire:model.lazy="employee.en_name" type="text" class="form-control"  placeholder="employee english name">
                    </div>
                    @error('employee.en_name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">employee short name</p>
                        <div  id="for-shortname" wire:ignore>
                        <input data-container="#for-shortname" wire:model.lazy="employee.short_name" type="text" class="form-control"  placeholder="employee name">
                    </div>
                    @error('employee.short_name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">Email</p>
                        <div  id="for-email" wire:ignore>
                        <input data-container="#for-email" wire:model.lazy="employee.email" type="text" class="form-control"  placeholder="email">
                    </div>
                    @error('employee.email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">contact number</p>
                        <div  id="for-phone" wire:ignore>
                        <input data-container="#for-phone" wire:model.lazy="employee.phone" type="text" class="form-control"  placeholder="contact number">
                    </div>
                    @error('employee.phone') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">alternative number</p>
                        <div  id="for-altphone" wire:ignore>
                        <input data-container="#for-altphone" wire:model.lazy="employee.alt_phone" type="text" class="form-control"  placeholder="alternative number">
                    </div>
                    @error('employee.alt_phone') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">Adressr</p>
                        <div  id="for-address" wire:ignore>
                        <input data-container="#for-address" wire:model.lazy="employee.address" type="text" class="form-control"  placeholder="address">
                    </div>
                    @error('employee.address') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">Religion</p>
                        <div  id="for-religion" wire:ignore>
                        <input data-container="#for-religion" wire:model.lazy="employee.religion" type="text" class="form-control"  placeholder="religion">
                    </div>
                    @error('employee.religion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    {{-- fc-datepicker --}}
                    <div class="form-group">
                        <p class="mg-b-10">birth_date</p>
                        <div  id="for-birth_date" wire:ignore>
                        <input data-container="#for-birth_date" wire:model.lazy="employee.birth_date" class="form-control datepicker" type="text"  placeholder="MM/DD/YYYY">
                    </div>
                    @error('employee.birth_date') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">passport number</p>
                        <div  id="for-passport_number" wire:ignore>
                        <input data-container="#for-passport_number" wire:model.lazy="employee.passport_number" type="text" class="form-control"  placeholder="passport number">
                    </div>
                    @error('employee.passport_number') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                        <p class="mg-b-10">ID number</p>
                        <div  id="for-id_number" wire:ignore>
                        <input data-container="#for-id_number" wire:model.lazy="employee.id_number" type="text" class="form-control"  placeholder="ID number">
                    </div>
                    @error('employee.id_number') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   @php
                   $list = country_list()
               @endphp
               <div class="col-sm-4">
                   <p class="mg-b-10 mr-2">Select Country</p>
                   <div  id="for-country-id" wire:ignore>
                   <select data-container="#for-country-id" class="form-control select2 " wire:model="employee.country_id"
                    >
                       <option>Select Country</option>
                      @foreach ($list as $index=>$item)
                          <option value="{{$index}}">{{$item}}</option>
                      @endforeach
                   </select>
                   </div>
                   @error('country_id')
                   <span class="text-danger">{{$message}}</span>
               @enderror
               </div>
               {{$employee->profile}}
               <div class="col-sm-12 col-md-4 mx-auto">
                <p class="mg-b-10 mr-4 text-center">choose your logo</p>
                 <div id="for-profile-id" wire:ignore>
                <input data-container="#for-profile-id" type="file" wire:model="profile" class="dropify" data-height="200"/>
            </div>
                @error('profile')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            </div>
            <br>
            <div class="modal-footer">
                <button class="btn ripple btn-primary btn-with-icon"  type="submit" wire:click="$refresh()">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
                <button class="btn ripple btn-secondary btn-with-icon">{{ trans('general.save_continue') }} <i class="far fa-copy  ml-2 "></i></button>
                <button class="btn ripple btn-success btn-with-icon">{{ trans('general.save_complete_other') }}<i class="fas fa-folder-plus ml-2 "></i></button>
                <button class="btn ripple btn-light" data-dismiss="modal" type="button">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
@push('js')
<script>
    $(document).ready(function(){

    $('#formAdd').on('submit', function(){
    $("#addEmployee").modal('hide');
    });

    $('.datepicker').datepicker({});
    })

</script>
@endpush