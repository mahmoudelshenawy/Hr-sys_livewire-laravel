@php
    $trancated = explode('/' , $value);
@endphp

{{-- <div class="d-flex align-items-center">
<img src="{{ asset('storage/' . $trancated[1] .'/'. $trancated[2]) }}" alt="" width="40" height="40" class="image-fluid img-fluid rounded-circle"> <h6 class="leading align-self-center self-center ml-3 mt-2">{{$name}}</h6></div> --}}
<div class="d-flex align-items-center">
<img src="{{ $value  ?? asset('img/default.jpg')}}" alt="" width="40" height="40" class="image-fluid img-fluid rounded-circle"> <h6 class="leading align-self-center self-center ml-3 mt-2">{{$name}}</h6></div>