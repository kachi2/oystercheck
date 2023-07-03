
<form method="post" action="{{route('candidate.doc.approve', encrypt($ss->id))}}" enctype="multipart/form-data">
    @csrf
<div class="modal fade" id="approveDoc{{$ss->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalDefaultLabel">You are about to Approve this document</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    
                    <div class="col-lg-12 pb-2">
                        <label class="p-1" id="image" for="image">Upload Approved Document</label> 
                      <input type="file" name="image" id="image" placeholder="Upload approved document" required> 
                    </div><!--end col-->
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

<form method="post" action="{{route('candidate.doc.disapprove', encrypt($ss->id))}}" enctype="multipart/form-data">
    @csrf
<div class="modal fade" id="disapproveDoc{{$ss->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalDefaultLabel">You are about to Cancel this document</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="p-1" id="note" for="note">State reasons for the disapproval</label> 
                      <input type="text" class="form-control" name="note" id="note" placeholder="Write a note"> 
                    </div><!--end col-->

                    <div class="col-lg-12">
                        <label class="p-1" id="note" for="note">Do you want the candidate to re-upload document?</label> 
                        <br> Yes! Re-upload Document: <input type="radio" name="reupload" value="1">  <br>
                      No! Don't allow re-upload: <input type="radio" name="reupload" value="0"> 
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