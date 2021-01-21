@props(['title' , 'for' , 'name' , 'type' => 'text'])

<div class="form-group">
    <p class="mg-b-10">{{$title}}</p>
    <div id="for-{{$for}}" wire:ignore>
    <input data-container="#for-{{$for}}" wire:model.lazy="{{$name}}" type="{{$type}}" class="form-control" placeholder="{{$title}}">
</div>
<x-error name="{{$name}}"/>
</div>