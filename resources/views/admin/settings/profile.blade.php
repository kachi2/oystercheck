


<div class="tab-pane p-2 active show" id="individuals" role="tabpanel">
    <h5>Basic Information </h5>
    <p>This is your personal information that you can update anytime </p>
    <hr>
    <div class="row d-flex align-items-center">
        <div class="col-md-3">
            <h5>Profile Photo </h5>
            <p>This image will be shown publicly as your display picture</p>

        </div>
        <div class="col-md-3 text-center">

            <div class="profile-container mx-auto">
                <img src="https://via.placeholder.com/100" class="rounded-circle img-fluid" alt="Profile">
                <span class="camera-icon">
                  {{-- <i class="fas fa-camera"></i> --}}
                  <img src="{{ asset('assets/profile/camera-plus.png') }}" style="width: 25px; height: 20px" ></img>
                </span>
            </div>
            <h5>Morgans Consortium </h5>
            <p>+2349153414314</p>
            <hr>
            <div class="row d-flex justify-content-between px-0">
                <div class="col-md-6 px-0 text-start">
                  <span>Date Joined:</span>
                  <p class="mb-1">Role:</p>
                </div>
                <div class="col-md-6 px-0 text-start">
                  <span>17th September, 2024</span>
                  <p class="mb-1">Super Admin</p>
                </div>
              </div>
        </div>
       
    </div>
    <hr>

    <div class="row">
        <div class="col-md-3">
            <h5>Profile Details <snap class="badge badge-primary">{{$admin->role->name}}</snap> </h5>
        </div>
        <div class="col-md-9">
            <form action="{{ route('form_profileUpdate') }}" method="POST">
                @csrf
                <div class="row ">
                
                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Full Name</label>
                        <input type="text" class="form-control"  value="{{ $admin->user->name }}" name="name" id="floatingInput" placeholder="Enter First Name">
                    </div>

                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Email Name</label>
                        <input type="email" class="form-control"  value="{{ $admin->user->email }}" name="email" id="floatingInput" placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Phone Number</label>
                        <input type="text" class="form-control"  value="{{ $admin->company_phone }}" name="company_phone" id="floatingInput" placeholder="Phone Number">
                    </div>

                    <div class="row mt-4"> 
                        <div class="col-sm-12 d-grid">
                        <button type="submit" class="btn btn-primary btn-lg submitbtn" style="background-color: #0E2554">Save change</button>
                        </div>
                    </div>
                

                </div>
            </form>
            <hr>
            <div class="container mt-5">
                <form action="" method="POST">
                  <div class="mb-3 row g-0 align-items-center">
                    <label for="inputPassword" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-8">
                      <input type="password" class="form-control" id="inputPassword" placeholder="******">
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-primary" style="background-color: #0E2554">Change</button>
                    </div>
                  </div>
                </form>
            </div>            
        </div>
        
    </div>

</div>