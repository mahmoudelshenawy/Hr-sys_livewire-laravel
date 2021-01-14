@extends('layouts.app')

{{-- @push('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endpush --}}

@section('content')
 <!-- Row -->
 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                    'title' => "Manage Languages",
                    'name'   => "Add New Language" ,
                    'sectedKey'  => 'addLanguage'
                ])   
                <div class="">
                    <livewire:tables.languages-table />
                    <livewire:crud.add-languages />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
   
@endsection

