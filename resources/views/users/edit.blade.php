<div class="modal effect-scale"  id="EditUser_{{$user->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit User</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('users.update' , $user->id) }}" method="post">
                @csrf
                @method('put')
            <div class="modal-body">
               <div class="row">
                 
                   <div class="col-sm-6">
                    <div class="form-group">
                        <p class="mg-b-10">Name</p>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$user->name}}">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   </div>
                   <div class="col-sm-6">
                    <p class="mg-b-10">Email</p>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                   </div>
                   <div class="col-sm-6">
                    <p class="mg-b-10">password</p>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                   </div>
                   <div class="col-md-6">
                    <p class="mg-b-10">select Role</p>
                    @php
                        $roles = App\Models\Role::where('id' , '!=' ,  1)->get();
                        $roles_ids = $user->roles->pluck('id')->toArray();
                        $permission_ids = $user->allPermissions->pluck('id')->toArray();
                    @endphp
                    <select class="form-control select2" name="role">
                        <option label="Choose one">
                        </option>
                       @foreach ($roles as $role)
                           <option value="{{$role->name}}" {{in_array($role->id , $roles_ids) ? 'selected' : ''}}>{{$role->display_name}}</option>
                       @endforeach
                    </select>
                    @error('role')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                    {{-- select permissions --}}
                    <div class="col-md-12 mx-auto my-3">
                        <div class="form-group">
                            <p class="mb-2 text-center">Specifiy Permissions</p>
                            <div class="selectgroup selectgroup-pills">
                                @php
                                    $permissions = App\Models\Permission::all();
                                @endphp
                                
                                @foreach ($permissions as $item)
                                <label class="selectgroup-item">
                                <input type="checkbox" name="permissions[]" value="{{$item->id}}" class="selectgroup-input" {{in_array($item->id , $permission_ids) ? 'checked' : ''}}>
                                <span class="selectgroup-button">{{$item->display_name}}</span>
                            </label>
                                @endforeach
                            </div>
                            @error('permissions')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
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