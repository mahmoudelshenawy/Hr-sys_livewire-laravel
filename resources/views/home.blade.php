@extends('layouts.app')
@section('content')
     <div class="row">
     <div class="col-10 mx-auto">
      <div x-data="{ open: false }">
        <button @click="open = true">Show More...</button>

        <a href="/test">test</a>
        <a href="/test2">test2</a>
        <ul x-show="open" @click.away="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>

    </div><input class="form-control datepicker" placeholder="MM/DD/YYYY">
    <input type="text" id="datepickerD" class="">
</div>
    </div>
</div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
     new Pikaday({
        field: document.getElementById('datepickerD'),
        toString(date, format = 'YYYY-MM-DD'),
    });
</script>
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endpush