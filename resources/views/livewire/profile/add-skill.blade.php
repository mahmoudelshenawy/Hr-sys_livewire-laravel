<div class="main-content-body p-4 border tab-pane border-top-0" id="AddSkill" :key="{{$employee->code}}">
    <div class="card-body border">
        <div class="mb-4 main-content-label">Employee Skills</div>
            <form wire:submit.prevent="save">
                 {{-- select skills --}}
                 @php
                    $skills = App\Models\Skill::all(['id' , 'name']);
                @endphp
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Skills</label>
                        </div>
                        <div class="col-md-9" wire:ignore>
                            <select wire:model="skills" class="form-control selectpicker"  data-live-search="true" multiple wire:ignore>
                                   <option>Select your Skills</option>
                                  @foreach ($skills as $item)
                                      <option value="{{$item->name}}">{{$item->name}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('skills')
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