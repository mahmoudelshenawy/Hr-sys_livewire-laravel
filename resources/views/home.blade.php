@extends('layouts.app')
@section('content')
     <div class="row">
<div class="col-6">
@livewire('demo-test')
</div>
</div>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">  --}}
    @php
        $variable = 'this is var';
    @endphp
    <x-error message="hey there this is the first error" :add="$variable" class="py-5"/>
@endsection