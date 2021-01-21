<div class="main-content-body p-4 border tab-pane border-top-0" id="AddFinancial" :key="{{$employee->code}}">
    <div class="card-body border">
        <div class="mb-4 main-content-label">Financial Information</div>
        <form class="form-horizontal needs-validation" wire:submit.prevent="save">
            <div class="mb-4 main-content-label">complete ID data</div>
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Basic Salary</label> 
                        {{-- wire:model="financial.basic_salary" --}}
                    </div>
                    <div class="col-md-9" id="basic_salary">
                        <input type="text" onchange="@this.set('financial.basic_salary', this.value)" name="financial.basic_salary"  class="form-control @error('financial.basic_salary') is-invalid @enderror" placeholder="basic salary">
                        @error('financial.basic_salary')
                        <small data-container="#basic" class="text-danger">{{$message}}</small>
                     @enderror
                    </div>
                </div>
            </div> <!-- basic salary-->
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">unfixed Salary</label>
                    </div>
                    <div class="col-md-9" id="unfixed_salary">
                        <input type="text" wire:model="financial.unfixed_salary" class="form-control @error('financial.unfixed_salary') is-invalid @enderror" placeholder="unfixed salary">
                        @error('financial.unfixed_salary')
                        <small class="text-danger">{{$message}}</small>
                     @enderror
                    </div>
                   
                </div>
            </div> <!-- unfixed_salary-->
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">basic insurance</label>
                    </div>
                    <div class="col-md-9" id="basic_insurance">
                        <input type="text" wire:model="financial.basic_insurance" class="form-control @error('financial.basic_insurance') is-invalid @enderror" placeholder="basic insurance">
                        @error('financial.basic_insurance')
                       <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    
                </div>
            </div> <!-- basic_insurance-->
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">unfixed insurance</label>
                    </div>
                    <div class="col-md-9" id="unfixed_insurance">
                        <input type="text" wire:model="financial.unfixed_insurance" class="form-control @error('financial.unfixed_insurance') is-invalid @enderror" placeholder="unfixed insurance">
                        @error('financial.unfixed_insurance')
                        <small class="text-danger">{{$message}}</small>
                       @enderror
                    </div>
                   
                </div>
            </div> <!-- unfixed_insurance-->
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">food allowance</label>
                    </div>
                    <div class="col-md-9" id="food_allowance">
                        <input type="text" data-container="#food_allowance" wire:model="financial.food_allowance" class="form-control @error('financial.food_allowance') is-invalid @enderror" placeholder="food allowance">
                        @error('financial.food_allowance')
                        <small class="text-danger">{{$message}}</small>
                       @enderror
                    </div>
                   
                </div>
            </div> <!-- food_allowance-->
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">gazoline allowance</label>
                    </div>
                    <div class="col-md-9" id="gazoline_allowance">
                        <input type="text" data-container="#gazoline_allowance" wire:model="financial.gazoline_allowance" class="form-control @error('financial.gazoline_allowance') is-invalid @enderror" placeholder="gazoline allowance">
                        @error('financial.gazoline_allowance')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                   
                </div>
            </div> <!-- gazoline_allowance-->
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">car allowance</label>
                    </div>
                    <div class="col-md-9" id="car_allowance">
                        <input type="text" data-container="#car_allowance" wire:model="financial.car_allowance" class="form-control @error('financial.car_allowance') is-invalid @enderror" placeholder="car allowance">
                        @error('financial.car_allowance')
                       <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    
                </div>
            </div> <!-- car_allowance-->
            @php
                $accounts = \App\Models\Bank::all(['id' , 'name']);
            @endphp
            <div class="form-group has-danger">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">Bank account name</label>
                    </div>
                    <div class="col-md-9" id="bank_id">
                          <select wire:model="financial.bank_id" class="form-control selectpicker "  data-live-search="true">
                                   <option>Select Bank account name</option>
                                  @foreach ($accounts as $acc)
                                      <option value="{{$acc->id}}">{{$acc->name}}</option>
                                  @endforeach
                               </select>
                               @error('financial.bank_id')
                               <small class="text-danger">{{$message}}</small>
                            @enderror
                    </div>
                   
                </div>
            </div> <!-- bank_id-->
            
            <div>
                <button class="btn ripple btn-primary btn-with-icon mx-auto"  type="submit">{{ trans('general.save_only') }} <i class="far fa-folder  ml-2"></i></button>
            </div>
        </form>
    </div>
</div>