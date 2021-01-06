@extends('layouts.app')

@section('content')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="main-content-label mb-1">Manage Branches</h6>
                        <a class="modal-effect btn ripple btn-success" data-effect="effect-scale" data-toggle="modal" href="#addEditBranch">Add New Branch</a>
                        @include('hr.master.branches.add')
                    </div>
                    <div class="table-responsive">
                        <table id="exportexample" class="table table-striped table-bordered text-nowrap" >
                            <thead>
                                <tr>
                                    <th>code</th>
                                    <th>Name</th>
                                    <th>address</th>
                                    <th>country</th>
                                    {{-- <th>phone</th>
                                    <th>email</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                          @foreach ($branches as $branch)
                              <tr>
                                  <td>{{$branch->code}}</td>
                                  <td>{{$branch->name}}</td>
                                  <td>{{$branch->address}}</td>
                                  <td>{{$branch->country}}</td>
                                  {{-- <td>{{$branch->phone ?? ''}}</td>
                                  <td>{{$branch->email ??''}}</td> --}}
                                  <td class="d-flex justify-content-center">
                                    <a class="modal-effect" data-effect="effect-scale" data-toggle="modal" href="#Editbranch_{{$branch->code}}">
                                        <i class="fe fe-edit-2 text-primary mr-4" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
                                    </a>
                                    <a class="modal-effect" data-effect="effect-scale" data-toggle="modal" href="#deleteBranch_{{$branch->code}}">
                                    <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                    </a>
                                  </td>
                                 
                              </tr>
                              @include('hr.master.branches.edit')
                              @include('hr.master.branches.delete')
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