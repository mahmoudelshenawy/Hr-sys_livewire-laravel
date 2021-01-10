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
                    <h6 class="main-content-label mb-1">Manage Certifications</h6>
                    <a class="modal-effect btn ripple btn-success" data-effect="effect-scale" data-toggle="modal" href="#addCertification" wire:click="">Add New Certification </a>
                </div>
                <div class="">
                    <livewire:tables.certifications-table />
                    <livewire:crud.add-certifications />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
   
@endsection

