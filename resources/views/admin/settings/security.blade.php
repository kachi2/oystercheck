<div class="row d-flex align-items-center">
    <div class="col-md-3">
        <h4>Update Email</h4>
        <p>Update your email address to make sure it is safe</p>
    </div>
    <div class="col-md-9 card p-3">
        <h4>Update Email</h4>
        <div class="d-flex">
            <p class="ml-2">johndoe@email.com</p>
            <img src="{{ asset('assets/icons/check_circle.png') }}" style="width:16px; height:16px" />
        </div>
        <p class="text-muted">Your email is verified</p>
       <form action="#" method="POST">
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="floatingInput" class="form-label">Update Email</label>
                    <input required type="text" class="form-control "  value="" name="name" id="floatingInput" placeholder="Enter new email">
                </div>
                <div class=" text-end">
                    <button type="submit" class="btn btn-primary" style="background-color: #0E2554" >Update Email</button>
                </div>
            </div>
       </form>
    </div>
</div>
<hr/>
<div class="row d-flex align-items-center">
    <div class="col-md-3">
        <h4>Update Email</h4>
        <p>Update your email address to make sure it is safe</p>
    </div>
    <div class="col-md-9 card p-3">
        <h4> Change Password</h4>
     
       <form action="#" method="POST">
            <div class="row">
                <div class="mb-2 col-md-12">
                    <label for="floatingInput" class="form-label">Change Password<snap class="required">*</snap></label>
                    <div class="form-group d-flex align-items-center">
                        <input type="password" class="form-control " id="passwordInput" placeholder="Enter Password">
                        <label for="passwordInput" id="togglePassword" class="ms-2 fw-semibold" style="cursor: pointer; color:#55B8CC;" >Show</label>
                    </div>
                </div>
                
                <div class="mb-2 col-md-12">
                    <label for="floatingInput" class="form-label">New Password<snap class="required">*</snap></label>
                    <div class="form-group d-flex align-items-center">
                        <input type="password" class="form-control " id="newPasswordInput" placeholder="Enter New Password">
                        <label for="passwordInput" id="toggleNewPassword" class="ms-2 fw-semibold" style="cursor: pointer; color:#55B8CC;" >Show</label>
                    </div>
                </div>

                <div class="mb-2 col-md-12">
                    <label for="floatingInput" class="form-label">Confirm Password<snap class="required">*</snap></label>
                    <div class="form-group d-flex align-items-center">
                        <input type="password" class="form-control " id="confirmPasswordInput" placeholder="Confirm New Password">
                        <label for="passwordInput" id="toggleConfirmPassword" class="ms-2 fw-semibold" style="cursor: pointer; color:#55B8CC;" >Show</label>
                    </div>
                </div>

               
                <div class="col-md-3 mb-2 form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        One uppercase letter
                    </label>
                </div>
                <div class="col-md-3 mb-2 form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        One lowercase letter
                    </label>
                </div>
                <div class="col-md-3 mb-2 form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        One number
                    </label>
                </div>
                <div class="col-md-3 mb-2 form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Eight characters long
                    </label>
                </div>
                <div class="col-md-3 mb-2 form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        One special character
                    </label>
                </div>

                <div class=" text-end">
                    <button type="submit" class="btn btn-primary" style="background-color: #0E2554" >Update Email</button>
                </div>
            </div>
       </form>
    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        var passwordInput = document.getElementById('passwordInput');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            this.textContent = 'Show';
        }
    });

    document.getElementById('toggleNewPassword').addEventListener('click', function () {
        var passwordInput = document.getElementById('newPasswordInput');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            this.textContent = 'Show';
        }
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
        var passwordInput = document.getElementById('confirmPasswordInput');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            this.textContent = 'Show';
        }
    });
</script>