<div class="modal effect-scale"  id="Editdepart_{{$depart->code}}">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit Departments</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ hr('departments/' . $depart->code) }}" method="post">
                @csrf
                @method('put')
            <div class="modal-body">
               <div class="row">
                 
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Name</p>
                        <input type="text" class="form-control" name="name" placeholder=" departinistration name" value="{{$depart->name}}">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   </div>
                  
                   @php
                   $list = App\Models\Branch::all(['name' , 'code']);
               @endphp
               <div class="col-sm-6">
                   <p class="mg-b-10 mr-2">Select branch</p>
                   <select class="form-control select2 " name="branch_id"
                    >
                       <option>Select a branch</option>
                      @foreach ($list as $item)
                          <option value="{{$item->code}}" {{$depart->branch_id == $item->code ? 'selected' : ''}}>{{$item->name}}</option>
                      @endforeach
                   </select>
                   @error('country')
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