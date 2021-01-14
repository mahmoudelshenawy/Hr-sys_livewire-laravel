<div class="modal effect-scale fade"  id="addSponsor" wire:ignore>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document"  data-container="#addSponsor">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Sponsor</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
             @foreach ($errors->all() as $error)
                 <span class="alert alert-danger">{{$error}}</span>
             @endforeach
            <form wire:submit.prevent="save" id="formAdd">
               
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Sponsor name</p>
                        <div id="for-name" wire:ignore>
                        <input data-container="#for-name" wire:model="sponsor.name" type="text" class="form-control"  placeholder="sponsor name">
                    </div>
                    </div>
                    @error('sponsor.name') <span class="error text-danger">{{ $message }}</span> @enderror
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">sponsor Code</p>
                        <div id="for-code" wire:ignore>
                        <input data-container="#for-code" wire:model.lazy="sponsor.code" type="number"  class="form-control"  placeholder="sponsor code">
                    </div>
                    @error('sponsor.code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6" wire:key="UNIQUE_KEY">
                    <p class="mg-b-10 mr-2">Sponsor type</p>
                    <div  id="for-sponsor-type" wire:ignore>
                    <select data-container="#for-sponsor-type" wire:model="sponsor.type" class="selectpicker form-control" data-live-search="true">
                      <option>Select Type</option>
                      <option value="freelancer">Freelancer</option>
                      <option value="organization">organization</option>
                    </select>
                    </div>
                    @error('sponsor.type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">sponsor address</p>
                        <div  id="for-address" wire:ignore>
                        <input data-container="#for-address" wire:model="sponsor.address" type="text" class="form-control"  placeholder="address">
                    </div>
                    @error('sponsor.address') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">sponsor contact number</p>
                        <div  id="for-number" wire:ignore>
                        <input data-container="#for-number" wire:model="sponsor.contact_number" type="text" class="form-control"  placeholder="contact number">
                    </div>
                    @error('sponsor.contact_number') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                   <div class="col-md-6 mx-auto">
                    <p class="mg-b-10 mr-4 text-center">choose sponsor image</p>
                     <div id="for-photo-id" wire:ignore>
                    <input data-container="#for-photo-id" type="file" wire:model="photo" class="dropify" data-height="200"/>
                </div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
            </div>
            <br>
            <div class="modal-footer" wire:ignore>
                <button class="btn ripple btn-primary btn-with-icon" type="submit" wire:click="save">{{ trans('general.save') }} <i class="far fa-folder  ml-2"></i></button>
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
    $("#addSponsor").modal('hide');
    });
    })
</script>
@endpush