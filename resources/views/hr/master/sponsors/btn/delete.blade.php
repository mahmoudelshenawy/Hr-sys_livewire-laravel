<div class="modal effect-slide-in-bottom fade" id="deleteSponsor">
    <div class="modal-dialog modal-dialog-centered modal-content-demo" role="document">
        <div class="modal-content tx-size-sm">
            <form wire:submit.prevent="remove({{ $id }})" id="deleteSponsorForm" onsubmit="test()">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="fa fa-warning tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                <span class="iconify" data-icon="la:trash-alt-solid" data-inline="false"></span>
                <h4 class="tx-danger mg-b-20">Are you sure to delete this?</h4>
                <button  class="btn ripple btn-danger pd-x-25" type="submit">Continue</button>
            </form>
            </div>
        </div>
    </div>
</div>
{{-- <br> --}}
@push('js')
<script>
    function test(){
        $('#deleteSponsor').modal('hide');
    }
    $(document).ready(function(){
        $('#deleteSponsorForm').on('submit' , function(){
               $('#deleteSponsor').modal('hide');
           })
    })
</script>
@endpush