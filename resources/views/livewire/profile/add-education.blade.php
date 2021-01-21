<div class="main-content-body p-4 border tab-pane border-top-0" id="AddEducation" :key="{{$employee->code}}">
    <div class="card-body border">
        <div class="mb-4 main-content-label">Employee Educations</div>
            <form wire:submit.prevent="save">
                 {{-- select Educations --}}
                 @php
                    $Educations = App\Models\Education::all(['id' , 'name']);
                @endphp
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Educations</label>
                        </div>
                        <div class="col-md-9" wire:ignore>
                            <select wire:model="educations" class="form-control selectpicker"  data-live-search="true" multiple wire:ignore>
                                   <option>Select your Educations</option>
                                  @foreach ($Educations as $item)
                                      <option value="{{$item->name}}">{{$item->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('educations')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
            {{-- end --}}
            <div>
                <button class="btn ripple btn-primary btn-with-icon mx-auto"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
            </div>
            </form>
    </div>
</div>