<div class="modal effect-scale fade"  id="addExcel" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document"  data-container="#addExcel">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add {{$model}} From Excel</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form wire:submit.prevent="save" id="formAddExcel">
                <div class="modal-body">
                   <div class="row">
                    <div class="col-sm-6">
                        @php
                        $months = config('enums.months');
                       @endphp
                       <x-select-group title="Month" name="month" for="month2" searchable>
                        @foreach ($months as $index=>$month)
                        <option value="{{$index + 1}}">{{$month}}</option>
                        @endforeach
                    </x-select-group>
                    </div><!-- month-->
                    <div class="col-md-6 mx-auto">
                         <div id="for-file" wire:ignore>
                        <input data-container="#for-file" type="file" wire:model="file" class="dropify" data-height="200"/>
                    </div>
                        @error('file')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
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
@php
    $m = $model;
@endphp
<script>
    
    $(document).ready(function(){
    $('#formAddExcel').on('submit', function(){
     $('#addExcel').modal('hide')
    })
    });
</script>
@endpush