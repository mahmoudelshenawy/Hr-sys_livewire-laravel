@props(['type' => 'text' ,'space','for' , 'name'])

<input data-container="#for-{{$for}}" wire:model.lazy="{{$name}}" type="{{$type}}" class="form-control"  placeholder="{{$space}}">