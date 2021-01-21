
<form wire:submit.prevent="publish">
   <h1>test file upload</h1>
  <input type="file" wire:model="photo">
  @error('photo')
      <small class="text-danger">{{$message}}</small>
  @enderror
  <button type="submit mr-4">submit</button>
  <button  wire:click="remove">remove</button>
</form>



{{$url}}
<br>
<br>
<img src="{{ $url }}" alt="" width="100" height="200">
{{-- testing/WDrVcTnCkeoZPTwIK6HoaOwSN8TaLB7SjOV7KcvN.jpg --}}

