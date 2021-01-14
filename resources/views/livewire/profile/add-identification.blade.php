<div class="main-content-body tab-pane p-4 border-top-0" id="Identification" wire:ignore>
    <div class="card-body border" data-container="#Identification">
        <div class="mb-4 main-content-label">Identification Information</div>
        <form class="form-horizontal" wire:submit.prevent="save">
            <div class="mb-4 main-content-label">complete ID data</div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">passport Number</label>
                    </div>
                    <div class="col-md-9" id="passport_number" wire:ignore>
                        <input data-container="#passport_number" type="text" wire:model="identify.passport_number" class="form-control" placeholder="passport number">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">passport release date</label>
                    </div>
                    <div class="col-md-9" id="passport_release_date" wire:ignore>
                        <input data-container="#passport_release_date" type="text" wire:model="identify.passport_release_date" class="form-control" placeholder="passport release date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">passport expire date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.passport_expire_date" class="form-control" placeholder="passport expire date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">ID number</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.id_number" class="form-control" placeholder="ID number">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">ID release date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.id_release_date" class="form-control" placeholder="ID release date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">ID expire date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.id_expire_date" class="form-control" placeholder="ID expire date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">residency number</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.residency_number" class="form-control" placeholder="residency number">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">residency release date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.residency_release_date" class="form-control" placeholder="residency release date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">residency expire date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.residency_expire_date" class="form-control" placeholder="residency expire date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">driving license number<i>(required)</i></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.deriving_license_number" class="form-control" placeholder="driving license number">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">driving license release date<i>(required)</i></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.license_release_date" class="form-control" placeholder="driving license release date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">driving license expire date<i>(required)</i></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="identify.license_expire_date"  class="form-control" placeholder="driving license expire date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Health certification number</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text"  wire:model="identify.health_certification_number" class="form-control" placeholder="Health certification number">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Health certification release date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text"  wire:model="identify.health_certification_release_date" class="form-control" placeholder="Health certification release date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Health certification expire date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text"  wire:model="identify.health_certification_expire_date" class="form-control" placeholder="Health certification expire date">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Health certification cancel date</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text"  wire:model="identify.health_certification_cancel_date" class="form-control" placeholder="Health certification cancel date">
                    </div>
                </div>
            </div>
            {{-- select country --}}
                 @php
                    $list = country_list();
                    $sponsors = App\Models\Sponsor::all(['id' , 'name']);
                @endphp
                <div class="form-group ">
                    <div class="row row-sm">
                        <div class="col-md-3">
                            <label class="form-label">Select Country</label>
                        </div>
                        <div class="col-md-9">
                            <select wire:model="identify.country_id" class="form-control selectpicker"  data-live-search="true">
                                   <option>Select your country</option>
                                  @foreach ($list as $item)
                                      <option value="{{$item}}">{{$item}}</option>
                                  @endforeach
                               </select>
                        </div>
                        @error('country')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
            {{-- end --}}
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Select Sponsor</label>
                    </div>
                    <div class="col-md-9">
                        <select wire:model="identify.sponsor_id" class="form-control selectpicker "  data-live-search="true">
                               <option>Select sponsor</option>
                              @foreach ($sponsors as $sponsor)
                                  <option value="{{$sponsor->id}}">{{$sponsor->name}}</option>
                              @endforeach
                           </select>
                    </div>
                    @error('indentify.sponsor_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
            </div>
            <div class="mb-4 main-content-label">About Yourself</div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Biographical Info</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
                    </div>
                </div>
            </div>
            <div class="mb-4 main-content-label">Email Preferences</div>
            <div class="form-group mb-0">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Verified User</label>
                    </div>
                    <div class="col-md-9">
                        <div class="custom-controls-stacked">
                            <label class="ckbox mg-b-10-f"><input checked="" type="checkbox"><span> Accept to receive post or page notification emails</span></label>
                            <label class="ckbox"><input checked="" type="checkbox"><span> Accept to receive email sent to multiple recipients</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div>
            <button class="btn ripple btn-primary btn-with-icon mx-auto"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
        </div>
        </form>
    </div>
</div>