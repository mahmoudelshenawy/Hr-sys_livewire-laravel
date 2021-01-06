<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card custom-card elevation-2">
            <div class="card-header">
                <h3>Business settings</h3>
            {{-- <span>{{$name}}{{$address}}{{$email}}{{$country}}{{$website}}</span>     --}}
            </div>
            <div class="card-body">
                <div class="col-10">
                    <form wire:submit.prevent="save">
                        @csrf
                        <div class="form-group d-flex">
                            <p class="mg-b-10">Company Name</p>
                           <input wire:model="business.name" type="text" class="form-control" placeholder="company name">
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">phone</p>
                           <input wire:model="business.phone" type="text" class="form-control" name="phone" placeholder="phone">
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">address</p>
                           <input wire:model="business.address" type="text" class="form-control" name="address" placeholder="address">
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">email</p>
                           <input wire:model="business.email" type="text" class="form-control" placeholder="email">
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">website</p>
                           <input type="text" class="form-control" placeholder="website">
                        </div>    
                        <div class="form-group d-flex">
                            <p class="mg-b-10 mr-4">fax</p>
                           <input type="text" class="form-control" placeholder="fax">
                        </div>    
                @php
                    $list = country_list()
                @endphp
                <div class="form-group d-flex">
                    <p class="mg-b-10 mr-4">Select Country</p>
                    <select class="form-control select2 " wire:model="business.country" 
                     >
                        <option>Select your country</option>
                       @foreach ($list as $item)
                           <option value="{{$item}}">{{$item}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 mx-auto">
                    <p class="mg-b-10 mr-4 text-center">choose your logo</p>
                    <input type="file" class="dropify " wire:model="business.logo" data-height="200" class="mx-auto"/>
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