<div class="modal effect-scale fade"  id="addBank" wire:ignore>
    <div class="modal-dialog modal-dialog-centered modal-md" role="document"  data-container="#addBank">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Bank</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAdd">
               
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Bank name</p>
                        <div id="for-name" wire:ignore>
                        <input data-container="#for-name" wire:model.lazy="bank.name" type="text" class="form-control"  placeholder="bank name">
                    </div>
                    @error('bank.name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Bank Code</p>
                        <div id="for-code" wire:ignore>
                        <input data-container="#for-code" wire:model.lazy="bank.code" type="number" class="form-control"  placeholder="bank code">
                    </div>
                    @error('bank.code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">bank address</p>
                        <div  id="for-address" wire:ignore>
                        <input data-container="#for-address" wire:model.lazy="bank.address" type="text" class="form-control"  placeholder="address">
                    </div>
                    @error('bank.address') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">bank contact number</p>
                        <div  id="for-number" wire:ignore>
                        <input data-container="#for-number" wire:model.lazy="bank.contact_number" type="text" class="form-control"  placeholder="contact number">
                    </div>
                    @error('bank.contact_number') <span class="error text-danger">{{ $message }}</span> @enderror
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
    $("#addBank").modal('hide');
    });
    })

</script>
@endpush