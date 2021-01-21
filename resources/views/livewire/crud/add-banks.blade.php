<div class="modal effect-scale fade"  id="addBank" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-md" role="document"  data-container="#addBank">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Bank</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAdd">
               
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-6">
                    <x-form-group title="Bank name" for="name" name="bank.name" />
                   </div>
                   <div class="col-sm-6">
                    <x-form-group title="Account Code" for="code" name="bank.code" type="number"/>
                   </div>
                   <div class="col-sm-6">
    
                    <x-form-group title="bank address" for="address" name="bank.address" />
                   </div>
                   <div class="col-sm-6">
                    <x-form-group title="bank contact number" for="number" name="bank.contact_number" />
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
    $("#addBank").modal('hide');
    });
    })

</script>
@endpush