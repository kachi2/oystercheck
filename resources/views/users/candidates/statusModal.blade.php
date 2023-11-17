
<form method="post" action="{{route('candidateApprove', encrypt($candidate->user_id))}}" enctype="multipart/form-data">
    @csrf
<div class="modal fade" id="approveCandidate{{$candidate->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalDefaultLabel">You are about to Approve this Candidate</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="p-1" id="note" for="note">Write a note</label> 
                      <input type="text" class="form-control" name="note" id="note" placeholder="Write a note"> 
                    </div><!--end col-->
                </div><!--end row-->                                                      
            </div><!--end modal-body-->
            <div class="modal-footer">   
                <button type="submit" class="btn btn-soft-primary btn-sm" >Approve</button>                                                 
                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->
</form>

<form method="post" action="{{route('candidateDisApprove', encrypt($candidate->user_id))}}" enctype="multipart/form-data">
    @csrf
<div class="modal fade" id="disapproveCandidate{{$candidate->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: rgb(118, 11, 11)">
                <h6 class="modal-title m-0" id="exampleModalDefaultLabel" >You are about to reject this candidate</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="p-1" id="note" for="note">State reasons for the rejection</label> 
                      <input type="text" class="form-control" name="note" id="note" placeholder="Write a note"> 
                    </div><!--end col-->
                </div><!--end row-->                                                      
            </div><!--end modal-body-->
            <div class="modal-footer">   
                <button type="submit" class="btn btn-soft-primary btn-sm" >Reject</button>                                                 
                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->
</form>