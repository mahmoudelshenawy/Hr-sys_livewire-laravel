<div class="modal effect-scale fade"  id="addCertification" wire:ignore>
    <div class="modal-dialog modal-dialog-centered modal-md" role="document"  data-container="#addCertification">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Certification</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAdd">
               
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Certification name</p>
                        <div id="for-name" wire:ignore>
                        <input data-container="#for-name" wire:model.lazy="certification.name" type="text" class="form-control"  placeholder="certification name">
                    </div>
                    @error('certification.name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">certification description</p>
                        <div  id="for-enname" wire:ignore>
                        <input data-container="#for-enname" wire:model.lazy="certification.description" type="text" class="form-control"  placeholder="certification english name">
                    </div>
                    @error('certification.description') <span class="error text-danger">{{ $message }}</span> @enderror
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
    $("#addCertification").modal('hide');
    });
    })

</script>
@endpush