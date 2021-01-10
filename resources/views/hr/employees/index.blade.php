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
                <div class="d-flex justify-content-between mb-3">
                    <h6 class="main-content-label mb-1">Manage Employees</h6>
                    <a class="modal-effect btn ripple btn-success" data-effect="effect-scale" data-toggle="modal" href="#addEmployee" wire:click="$emit('clearEmployee')">Add New Employee</a>
                    {{-- @include('hr.employees.add') --}}
                </div>
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

