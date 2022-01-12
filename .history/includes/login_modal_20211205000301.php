<form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fas fa-user"></i>
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
        <button type="submit" class="btn btn-block btn-primary">Login</button>
    </div>
</form>