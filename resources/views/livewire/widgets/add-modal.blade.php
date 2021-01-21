<div class="d-flex justify-content-between mb-3">
    <h6 class="main-content-label mb-1">{{$title}}</h6>

    <div>
        @if ($allowexcel)
        <a  class="modal-effect btn btn-primary ripple mr-2 text-white"  data-effect="effect-scale" href="#addExcel" data-toggle="modal">Upload From Excel</a>
        @endif   
    <a class="modal-effect btn ripple btn-success" wire:click="$emit('clearance')" data-effect="effect-scale" data-toggle="modal" href="#{{$sectedKey}}" @click="$('#{{$sectedKey}}').modal('show')">{{$name}}</a>
</div>
</div>
