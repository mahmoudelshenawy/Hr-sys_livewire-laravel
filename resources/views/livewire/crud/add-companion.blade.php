<div class="modal effect-scale fade"  id="addCompanion" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document"  data-container="#addCompanion">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Companion</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAdd">
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">companion name</p>
                        <div id="for-name" wire:ignore>
                        <input data-container="#for-name" wire:model.lazy="person.name" type="text" class="form-control"  placeholder="companion name">
                    </div>
                    @error('person.name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div><!-- name-->
                   
                   <div class="col-sm-6">
                    <p class="mg-b-10 mr-2"> with Employee</p>
                    <div id="for-employee_code">
                        @php
                            $employees = \App\Models\Employee::all(['code' , 'name']);
                        @endphp
                        <div class="dropdown bootstrap-select form-control show" wire:ignore>
                    <select wire:model="person.employee_code" data-container="#for-employee_code" class="form-control selectpicker"  data-live-search="true" 
                    >
                        <option>select employee</option>
                        @foreach ($employees as $emp)
                        <option value="{{$emp->code}}">{{$emp->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    </div>
                    @error('person.employee_code')
                    <span class="text-danger">{{$message}}</span>
                @enderror
               
            </div>
                <!-- employee code-->
                   <div class="col-sm-6">
                    <p class="mg-b-10 mr-2">Relation level</p>
                    <div id="for-relation_level" wire:ignore>
                        @php
                            $levels = array_keys(config('enums.companions'));
                        @endphp
                    <select wire:model="person.relation_level" data-container="#for-relation_level" class="form-control selectpicker"  data-live-search="true" 
                    >
                        <option>select relation level</option>
                        @foreach ($levels as $level)
                        <option value="{{$level}}">{{$level}}</option>
                        @endforeach
                    </select>
                    </div>
                    @error('person.relation_level')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div><!--relation level-->
                <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">national id</p>
                        <div id="for-national_id" wire:ignore>
                        <input data-container="#for-national_id" wire:model.lazy="person.national_id" type="text" class="form-control"  placeholder="national id">
                    </div>
                    @error('person.national_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div><!-- national_id-->
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Residency number</p>
                        <div id="for-residence_number" wire:ignore>
                        <input data-container="#for-residence_number" wire:model.lazy="person.residence_number" type="number" class="form-control"  placeholder="Residency number">
                    </div>
                    @error('person.residence_number') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div><!-- residence_number-->
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Medical Insurrance Number</p>
                        <div id="for-medical_insurance_number" wire:ignore>
                        <input data-container="#for-medical_insurance_number" wire:model.lazy="person.medical_insurance_number" type="number" class="form-control"  placeholder="Medical Insurrance Number">
                    </div>
                    @error('person.medical_insurance_number') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div><!-- medical_insurance_number-->
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Birth Date</p>
                        <div id="for-birth_date" wire:ignore>
                        <input data-container="#for-birth_date" wire:model.lazy="person.birth_date" type="text" class="form-control floating date"  placeholder="Birth Date" id="datetimepicker">
                    </div>
                    @error('person.birth_date') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div><!-- birth_date-->
                   
            </div>
             
              
            </div>
            <br>
            <div class="modal-footer">
                <button class="btn ripple btn-primary btn-with-icon"  type="submit" wire:click="$refresh()">{{ trans('general.save') }} <i class="far fa-folder  ml-2"></i></button>
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
    $("#addCompanion").modal('hide');
    });
    });
</script>
@endpush