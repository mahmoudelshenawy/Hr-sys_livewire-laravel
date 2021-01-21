<div class="main-content-body p-4 border tab-pane border-top-0" id="AddArchive" :key="{{$employee->code}}">
    <div class="card-body border">
        <div class="mb-4 main-content-label">Employee Images Archive Data</div>
<form wire:submit.prevent="savePhoto">
    <div class="form-group ">
        <div class="row row-sm">
            <div class="col-md-3">
                <label class="form-label my-auto"><h3>add Employee image here</h3></label>
            </div>
                <div class="col-md-9" id="end_of_contract" wire:ignore>
                    <input wire:model="photo" type="file" class="dropify">
                </div>  
                @error('photo')
                    <small class="text-danger">{{$message}}</small>
                @enderror
        </div>
    </div><!-- end of images -->
    <div>
    <button class="btn ripple btn-primary btn-with-icon mx-auto"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
</div>
</form>
    </div>
    <div class="card-body border">
        <div class="mb-4 main-content-label">Employee Documents Archive Data</div>
<form wire:submit.prevent="saveDocument">
    <div class="form-group ">
        <div class="row row-sm">
            <div class="col-md-3">
                <label class="form-label my-auto"><h3>add Employee files or documents here</h3></label>
            </div>
                <div class="col-md-9" id="">
                    <input wire:model="file" type="file" class="dropify"  wire:ignore>
                </div>  
                @error('file')
                <small class="text-danger">{{$message}}</small>
                @enderror
               
        </div>
    </div><!-- end of images -->
    <div>
    <button class="btn ripple btn-primary btn-with-icon mx-auto"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
    </div>
</form>
    </div>
</div>        