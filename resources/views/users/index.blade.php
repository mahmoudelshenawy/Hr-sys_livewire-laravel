@extends('layouts.app')

@section('content')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="main-content-label mb-1">Manage Users</h6>
                        <button class="modal-effect btn ripple btn-success" data-effect="effect-scale" data-toggle="modal" data-target="#addEditUser">Add New User</button> 
                    </div>
                    @include('users.add')
                    <div class="table-responsive">
                        <table id="exportexample" class="table table-striped table-bordered text-nowrap" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                          @foreach ($users as $user)
                              <tr>
                                  <td>{{$user->id}}</td>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->roles[0]->display_name ?? 'No Role'}}</td>
                                  <td class="d-flex justify-content-center">
                                    <a class="modal-effect" data-effect="effect-scale" data-toggle="modal" href="#EditUser_{{$user->id}}">
                                        <i class="fe fe-edit-2 text-primary mr-4" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                                    </a>
                                    <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                  </td>
                              </tr>
                              @include('users.edit')
                          @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
    <div class="modal" id="modaldemo8">
        <div class="modal-dialog modal-lg show" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Large Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h6>Modal Body</h6>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>    
@endsection