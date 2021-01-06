@extends('layouts.app')

@section('content')
    <div class="row">
<div class="col-md-8 mx-auto">
    <div class="card custom-card elevation-2">
        <div class="card-header">
            <h3>Manage your application</h3>
        </div>
        <div class="card-body">
            <div class="col-10">
                <form action="{{ route('app_settings.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group d-flex">
                <p class="mg-b-10">Select default language</p>
                <select class="form-control select2-no-search">
                    <option label="Choose one">
                    </option>
                    <option value="ar" class="d-flex">
                        <span class="avatar  ml-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/eg.svg') }}" alt="img"></span>
                        <div class="d-flex">
                            <span class="mt-2">Arabic</span>
                        </div>
                        </option>  
                    <option value="en" class="d-flex">
                        <span class="avatar  ml-3 align-self-center bg-transparent"><img src="{{ asset('assets/img/flags/us_flag.jpg') }}" alt="img"></span>
                        <div class="d-flex">
                            <span class="mt-2">English</span>
                        </div>
                        </option>  
                </select>
            </div>
            <div class="form-group d-flex">
                <p class="mg-b-10">Select default theme color</p>
                <select class="form-control select2-no-search">
                    <option>select theme color</option>
                    <option value="dark">dark</option>
                    <option value="light">light</option>
                </select>
            </div>
            <div class="form-group d-flex">
                <p class="mg-b-10">Select Sidebar direction</p>
                <select class="form-control select2-no-search">
                    <option>Select Sidebar direction</option>
                    <option value="hor">horizontal</option>
                    <option value="vert">vertical</option>
                </select>
            </div>
            @php
                $list = timezone_identifiers_list();
            @endphp
            <div class="form-group d-flex">
                <p class="mg-b-10">Select TimeZone</p>
                <select class="form-control select2">
                    <option>Select your timezone</option>
                   @foreach ($list as $item)
                       <option value="{{$item}}">{{$item}}</option>
                   @endforeach
                </select>
            </div>
            
            <input type="submit" value="Submit" class="btn ripple btn-success">
        </form>
            </div>
            {{-- testing logo  --}}
            <img src="{{ asset(appSetting()->logo) }}" alt="">
        </div>
    </div>
</div>
    </div>
@endsection