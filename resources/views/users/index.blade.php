@extends('layouts.app')

@section('content')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="main-content-label mb-1">Manage Users</h6>
                        <a class="modal-effect btn ripple btn-success" data-effect="effect-scale" data-toggle="modal" href="#addEditUser">Add New User</a>
                        @include('users.add')
                    </div>
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
                                  <td>{{$user->roles[0]->display_name}}</td>
                                  <td class="d-flex justify-content-center">
                                    <i class="fe fe-edit-2 text-primary mr-4" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                                    <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
    
@endsection