<form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php">
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fas fa-user"></i>
            </span>
        </div>
        <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
    </div>

    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fas fa-phone-alt"></i>
            </span>
        </div>
        <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
    </div>

    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fas fa-envelope"></i>
            </span>
        </div>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>

    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fas fa-lock"></i>
            </span>
        </div>
        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
    </div>


    <div class="form-group">
        <span>I'm a</span>
        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
        <label for="gender-male">
        </label>
        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
        <label for="gender-female">
            Female
        </label>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-block btn-primary">Create Account</button>
    </div>
</form>

