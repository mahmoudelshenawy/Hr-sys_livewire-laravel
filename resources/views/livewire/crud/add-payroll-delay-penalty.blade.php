<div class="modal effect-scale fade"  id="addPayrollDelayPenalty" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document"  data-container="#addPayrollDelayPenalty">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New PayRoll Delay Penalty</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAdd">
                <div class="modal-body">
                   <div class="row">
                    <div class="col-sm-6">
                        @php
                        $employees = \App\Models\Employee::all(['name' , 'code']);
                       @endphp
                        <x-select-group title="Employee" name="delay.employee_code" for="employee_code" searchable>
                            @foreach ($employees as $employee)
                            <option value="{{$employee->code}}">{{$employee->name}}</option>
                            @endforeach
                        </x-select-group>
                    </div><!-- employee code-->
                    <div class="col-sm-6">
                        @php
                        $months = config('enums.months');
                       @endphp
                        <x-select-group title="Month" name="delay.month" for="month" searchable >
                            @foreach ($months as $index=>$month)
                            <option value="{{$index + 1}}">{{$month}}</option>
                            @endforeach
                        </x-select-group>
                    </div><!-- month-->
                       <div class="col-sm-6">
                        <x-form-group title="ddelay in minutes" for="days" name="delay.duration" type="number"/>
                       </div><!-- days-->
                       <div class="col-sm-6">
                        <x-form-group title="equivalent penalty" for="amount" name="delay.amount" type="number"/>
                       </div><!-- amount-->
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
    $("#addPayrollDelayPenalty").modal('hide');
    });
    });
</script>
@endpush