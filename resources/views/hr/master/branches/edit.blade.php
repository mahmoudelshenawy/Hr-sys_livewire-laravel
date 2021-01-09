<div class="modal effect-scale fade"  id="Editbranch_{{$branch->code}}">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit branch</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ url('/hr/master/branches/' . $branch->code) }}" method="post">
                @csrf
                @method('put')
            <div class="modal-body">
               <div class="row">
                 
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Name</p>
                        <input type="text" class="form-control" name="name" placeholder=" BranchName" value="{{$branch->name}}">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <p class="mg-b-10">address</p>
                    <input type="text" class="form-control" name="address" placeholder="address" value="{{$branch->address}}">
                    @error('address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                   </div>
                   @php
                   $list = country_list()
               @endphp
               <div class="col-sm-6">
                   <p class="mg-b-10 mr-2">Select Country</p>
                   <select class="form-control select2 " name="country" value="{{$branch->country}}"
                    >
                       <option>Select country</option>
                      @foreach ($list as $item)
                          <option value="{{$item}}">{{$item}}</option>
                      @endforeach
                   </select>
                   @error('country')
                   <span class="text-danger">{{$message}}</span>
               @enderror
               </div>
                   <div class="col-sm-6">
                    <p class="mg-b-10">phone</p>
                    <input type="text" class="form-control" name="phone" placeholder="phone" value="{{$branch->phone}}">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                   </div>
                   <div class="col-sm-6">
                    <p class="mg-b-10">email</p>
                    <input type="email" class="form-control" name="email" placeholder="email" value="{{$branch->email}}">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                   </div>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="submit">Save</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>