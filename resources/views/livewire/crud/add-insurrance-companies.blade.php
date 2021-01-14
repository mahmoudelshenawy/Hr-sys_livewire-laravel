<div class="modal effect-scale fade"  id="addInsurranceCompany" wire:ignore>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document"  data-container="#addInsurranceCompany">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Insurrance Company</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAdd">
               
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Insurrance Company name</p>
                        <div id="for-name" wire:ignore>
                        <input data-container="#for-name" wire:model.lazy="insurrance.name" type="text" class="form-control"  placeholder="insurrance name">
                    </div>
                    @error('insurrance.name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Insurrance Code</p>
                        <div id="for-code" wire:ignore>
                        <input data-container="#for-code" wire:model.lazy="insurrance.code" type="number"  class="form-control"  placeholder="insurrance code">
                    </div>
                    @error('insurrance.code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">address</p>
                        <div  id="for-address" wire:ignore>
                        <input data-container="#for-address" wire:model.lazy="insurrance.address" type="text" class="form-control"  placeholder="address">
                    </div>
                    @error('insurrance.address') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">contact number</p>
                        <div  id="for-number" wire:ignore>
                        <input data-container="#for-number" wire:model.lazy="insurrance.contact_number" type="text" class="form-control"  placeholder="contact number">
                    </div>
                    @error('insurrance.contact_number') <span class="error text-danger">{{ $message }}</span> @enderror
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
    $("#addInsurranceCompany").modal('hide');
    });
    })

</script>
@endpush