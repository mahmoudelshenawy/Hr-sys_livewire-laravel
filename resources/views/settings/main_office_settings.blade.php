@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        @if (session()->has('errors'))
            @foreach ($errors->all as $item)
                <li>{{$item}}</li>
            @endforeach
        @endif
        <div class="card custom-card elevation-2">
            <div class="card-header">
                <h3>Business settings</h3>
            </div>
            <div class="card-body">
                <div class="col-10">
                    <form action="{{route('business_settings.update' , $business_setup->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group d-flex">
                            <p class="mg-b-10">Company Name</p>
                           <input type="text" class="form-control" placeholder="company name" name="name" value="{{$business_setup->name ?? old('name')}}">
                           @error('name')
                               <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">phone</p>
                           <input type="text" class="form-control" name="phone" placeholder="phone" name="phone" value="{{$business_setup->phone ?? old('phone')}}">
                           @error('phone')
                           <span class="text-danger">{{$message}}</span>
                       @enderror
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">address</p>
                           <input type="text" class="form-control" name="address" placeholder="address" name="address" value="{{$business_setup->address ?? old('address')}}">
                           @error('address')
                           <span class="text-danger">{{$message}}</span>
                       @enderror
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">email</p>
                           <input type="text" class="form-control" placeholder="email" name="email" value="{{$business_setup->email ?? old('email')}}">
                           @error('email')
                           <span class="text-danger">{{$message}}</span>
                       @enderror
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">website</p>
                           <input type="text" class="form-control" placeholder="website" name="website" value="{{$business_setup->website ?? old('website')}}">
                           @error('website')
                           <span class="text-danger">{{$message}}</span>
                       @enderror
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">fax</p>
                           <input type="text" class="form-control" placeholder="fax" name="fax" value="{{$business_setup->fax ?? old('fax')}}">
                           @error('fax')
                           <span class="text-danger">{{$message}}</span>
                       @enderror
                        </div>    
                @php
                    $list = country_list()
                @endphp
                <div class="form-group d-flex">
                    <p class="mg-b-10 mr-4">Select Country</p>
                    <select class="form-control select2 " name="country" value="{{$business_setup->country ?? old('country')}}"
                     >
                        <option>Select your country</option>
                       @foreach ($list as $item)
                           <option value="{{$item}}">{{$item}}</option>
                       @endforeach
                    </select>
                    @error('country')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="col-sm-12 col-md-6 mx-auto">
                    <p class="mg-b-10 mr-4 text-center">choose your logo</p>

                    <input type="file" class="dropify " data-height="200" class="mx-auto" name="logo"/>
                    @error('logo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                
                <input type="submit" value="Submit" class="btn ripple btn-success">
            </form>
                </div>
                {{-- testing logo  --}}
                {{-- <img src="{{ asset(appSetting()->logo) }}" alt=""> --}}
            </div>
        </div>
    </div>
        </div>
@endsection