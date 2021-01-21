<div class="modal effect-scale fade"  id="addShift" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document"  data-container="#addShift">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New shift</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAdd">
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-6">
                    <x-form-group title="shift name" for="name" name="shift.name"/>
                   </div><!-- name-->
                    <div class="col-sm-6">
                    <x-form-group title="Check In" for="check_in" name="shift.check_in" type="time"/>
                   </div><!-- check_in-->
                <div class="col-sm-6">
                    <x-form-group title="Check Out" for="check_out" name="shift.check_out" type="time"/>
                   </div><!-- check_out-->
                   <div class="col-sm-6">
                @php
                $days = config('enums.days');
               @endphp
                <x-select-group title="Weekend day/days" name="weekend" for="weekend" searchable multiple>
                    @foreach ($days as $day)
                    <option value="{{$day}}">{{$day}}</option>
                    @endforeach
                </x-select-group>
            </div>
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
    $("#addShift").modal('hide');
    });
    });
</script>
@endpush