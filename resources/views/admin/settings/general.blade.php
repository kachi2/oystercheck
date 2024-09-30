<style>
    .profile-container {
      width: 100px;
      height: 100px;
      position: relative;
      border: 3px solid #c7c7c7;
      border-radius: 50%
    }

    .profile-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      
    }

    .camera-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      /* border-radius: 50%;
      padding: 10px;
      font-size: 24px; */
    }
  </style>
<div class="tab-pane p-2 active show" id="individuals" role="tabpanel">
    <h5>Business Information </h5>
    <hr>
    <div class="card row d-flex align-items-center">
        
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <p>Trending Name </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Trending Name">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#tradingdrop">Edit</button>
                </div>
            </div>
            <hr>
           
            <div class="row">
                <div class="col-md-4">
                    <p>Support Email </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Support Email">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#supportEmaildrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Billing Email </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Billing Email">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#billingdrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Office Address </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Office Address ">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#officeAddressdrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Country </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Country">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554"  data-bs-toggle="modal" data-bs-target="#countrydrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Support Phone Number </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Support Phone Number ">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#supportphonedrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Business Website Link </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Business Website Link">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#businessWebsitedrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Legal Business Name </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Legal Business Name">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#lagelbusinessnamedrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Privacy Link </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Privacy Link ">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#privacyLinkdrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Term of Service Link </p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Term of Service Link">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#termofservicedrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Social Links</p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Social Links">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#socialLinksdrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Business Logo</p>
                </div>
                <div class="col-md-6">
                    <div class="profile-container mx-auto">
                        <img src="https://via.placeholder.com/100" class="rounded-circle img-fluid" alt="Profile">
                        <span class="camera-icon">
                          {{-- <i class="fas fa-camera"></i> --}}
                          <img src="{{ asset('assets/profile/camera-plus.png') }}" style="width: 20px; height: 15px" ></img>
                        </span>
                    </div>
                </div>
              
            </div>
            <hr>
            <h5>Contact Person </h5>
            <div class="row">
                <div class="col-md-4">
                    <p>Contact Name</p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contact Name">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#contactnamedrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Contact Email</p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contact Email">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#contactemaildrop">Edit</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p>Contact Number</p>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contact Number">
                </div>
                <div class="col-md-2 text-end">
                    <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#contactnumbersdrop">Edit</button>
                </div>
            </div>
            <hr>

        </div>
    </div>
    <!-- Button trigger modal -->

  
    <!-- Modal Trading -->
    <div class="modal  fade" id="tradingdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Trading Name</h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label">Trading Name <span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Name">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Support Email -->
    <div class="modal  fade" id="supportEmaildrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Support Email</h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label">Support Email <span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Support Email ">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Billing -->
    <div class="modal  fade" id="billingdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Billing Email</h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Billing Email<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Billing Email ">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Office Address -->
    <div class="modal  fade" id="officeAddressdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Office Address </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> Flat Number </label>
                            <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Flat Number ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> Billing Name</label>
                            <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Billing Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> Billing Number</label>
                            <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Billing Number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> Landmark</label>
                            <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Nearest Landmark">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> Street</label>
                            <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Street Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> Sub-Street</label>
                            <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Sub-Street">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> City</label>
                            <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> Country</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select Countr</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="floatingInput" class="form-label"> State/Region</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select State/Region</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Country -->
    <div class="modal  fade" id="countrydrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Select Country</h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Country<span class="required">*</span></label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Country</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Support Phone Number -->
    <div class="modal  fade" id="supportphonedrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Support Phone Number</h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Support Phone Number<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Support Phone Number">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Support Phone Number -->
    <div class="modal  fade" id="businessWebsitedrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Business Website Link</h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Business Website Link<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Business Website Link">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>
    
     <!-- Modal Lagel business name -->
     <div class="modal  fade" id="lagelbusinessnamedrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Lagel Business Name</h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Lagel Business Nam<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Lagel Business Nam">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

     <!-- Modal Privacy Link -->
     <div class="modal  fade" id="privacyLinkdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Privacy Link </h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Privacy Link <span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Privacy Link ">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

     <!-- Modal Term of Service Link -->
     <div class="modal  fade" id="termofservicedrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Term of Service Link </h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Term of Service Link<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Term of Service Link ">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal Social Links -->
    <div class="modal  fade" id="socialLinksdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
       <div class="modal-dialog  modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
           <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <h4>Social Links </h4>
               <div class="mb-3 mt-3">
                   <label for="floatingInput" class="form-label"> Facebook<span class="required">*</span></label>
                   <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Facebook">
               </div>
               <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Google<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Google">
                </div>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> X <span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter X">
                </div>
           </div>
           <div class="modal-footer">
           <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
           </div>
       </div>
       </div>
    </div>

    <!-- Modal Social Links -->
    <div class="modal  fade" id="socialLinksdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Social Links </h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label"> Facebook<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Facebook">
                </div>
                <div class="mb-3 mt-3">
                     <label for="floatingInput" class="form-label"> Google<span class="required">*</span></label>
                     <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter Google">
                 </div>
                 <div class="mb-3 mt-3">
                     <label for="floatingInput" class="form-label"> X <span class="required">*</span></label>
                     <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter X">
                 </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

     <!-- Modal Customer name-->
    <div class="modal  fade" id="contactnamedrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4> Customer name </h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label">  Customer name<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter  Customer name">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>



    

    <!-- Modal Customer name-->
    <div class="modal  fade" id="contactemaildrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4> Customer Email </h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label">  Customer Email<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter  Customer Email">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
    </div>

     <!-- Modal Customer name-->
     <div class="modal  fade" id="contactnumbersdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tradingdropLabel">Edit details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4> Customer Number </h4>
                <div class="mb-3 mt-3">
                    <label for="floatingInput" class="form-label">  Customer Number<span class="required">*</span></label>
                    <input type="text" class="form-control"  value="" name="name" id="floatingInput" placeholder="Enter  Customer Number">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #0E2554">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
            </div>
        </div>
        </div>
     </div>



</div>