<div class="row">
<div class="col-8 mx-auto">
    <table class="table table-striped table-bordered text-nowrap" id="user-datatable">
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
      @endforeach
    </tbody>
   
    </table>
    {{ $users->links() }}
</div>
</div>
</div>
<script>
    // $('.selectpicker').selectpicker('refresh');
      
    
// $(document).ready(function(){
    
// })
    
</script>

@push('js')
    <script>
         var table = $('#user-datatable').DataTable({
      dom: 'Bfrtip',
      lengthChange: true,
      responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_ items/page',
		},
		buttons: [ 'copy', 'excel', 'pdf', 'colvis']
	});
	table.buttons().container()
	.appendTo( '#exportexample_wrapper .col-md-6:eq(0)' );
    </script>
@endpush