<div class="d-flex justify-content-between mb-3">
    <h6 class="main-content-label mb-1">{{$title}}</h6>
    <a class="modal-effect btn ripple btn-success" data-effect="effect-scale" data-toggle="modal" href="#{{$sectedKey}}" wire:click="$emit('clearance')">{{$name}}</a>
</div>