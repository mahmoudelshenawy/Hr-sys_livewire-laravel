@extends('layouts.app')

{{-- @push('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endpush --}}

@section('content')
 <!-- Row -->
 <div class="row row-sm">
    <div class="col-lg-12">
        @if(session()->get('errors'))
    {{-- toastr.error("{{ session()->get('errors')->first() }}"); --}}
    <div class="alert alert-danger">{{session()->get('errors')->first()}}</div>
        @endif
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                    'title' => "Manage Employee",
                    'name'   => "Add New Employee" ,
                    'sectedKey'  => 'addEmployee'
                ])  
                <div class="">
                    <livewire:tables.employees-table />
                    <livewire:crud.add-employee />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
   
@endsection

