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
                    'title' => "Manage Employment Status",
                    'name'   => "Add New Employment Status" ,
                    'sectedKey'  => 'addEmploymentStatus'
                ])  
                <div class="">
                    <livewire:tables.employment-status-table />
                    <livewire:crud.add-employment-status />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
   
@endsection

