@extends('layouts.app')

{{-- @push('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endpush --}}

@section('content')
 <!-- Row -->
 <div class="row row-sm" x-data="{ open: $wire.showModal}">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                    'title' => "Manage Employee",
                    'name'   => "Add New Employee" ,
                    'sectedKey'  => 'addEmployee'
                ])  
               
                    <livewire:tables.employees-table />   
                    <livewire:crud.add-employee/>
              
              
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
   
@endsection

@push('css')
    <style>
        .handmade{
  position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
    padding-right: 16px;
    display: block;
    overflow-x: hidden;
    overflow-y: auto;
    transition: opacity 0.15s linear;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb;
        }
    </style>
@endpush