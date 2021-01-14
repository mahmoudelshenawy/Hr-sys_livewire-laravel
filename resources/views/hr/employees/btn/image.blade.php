@php
    $trancated = explode('/' , $value);
@endphp
<img src="{{ asset('storage/' . $trancated[1] .'/'. $trancated[2]) }}" alt="" width="60" height="60" class="image-fluid img-fluid rounded-circle">
