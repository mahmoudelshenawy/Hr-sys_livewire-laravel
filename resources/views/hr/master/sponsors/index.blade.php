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
                        'title' => "Manage Sponsors",
                        'name'   => "Add New Sponsor" ,
                        'sectedKey'  => 'addSponsor'
                    ])   
                <div class="">
                    <livewire:tables.sponsors-table />
                    <livewire:crud.add-sponsors />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
   
@endsection

