@props(['title' , 'name' , 'for' , 'searchable' =>false , 'multiple' => false])

<div class="form-group">
    <p class="mg-b-10 mr-2">{{$title}}</p>
    <div id="for-{{$for}}" wire:ignore>
    <select wire:model="{{$name}}" data-container="#for-{{$for}}" class="form-control selectpicker"  data-live-search="{{$searchable}}" 
    {{$multiple ? 'multiple' : ''}} >
        <option>select {{$title}}</option>
        {{$slot}}
    </select>
    </div>
    <x-error name="{{$name}}"/>
</div>

