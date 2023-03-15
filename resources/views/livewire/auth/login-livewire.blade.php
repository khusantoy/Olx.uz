<div class="login-wrap log-sec">
    <h4 class="log-title">Create an Account</h4>
    <form >
        <div class="form-group">
            <input type="text" wire:model="name"  placeholder="Name">
            @error('name')
            <span style="color: red">
                {{$message}}
            </span>

            @enderror
        </div>
        <div class="form-group">
            <input type="email" wire:model="email"  placeholder="Enter Email">
            @error('email')
            <span style="color: red">
                {{$message}}
            </span>

            @enderror
        </div>
        <div class="form-group">
            <input required="" type="password" wire:model="password"  placeholder="password">
            @error('password')
            <span style="color: red">
                {{$message}}
            </span>

            @enderror
        </div>
        <div class="form-group">
            <input required="" type="password" wire:model="password_confirmation"  placeholder="Confirm password">
            @error('password_confirmation')
            <span style="color: red">
                {{$message}}
            </span>

            @enderror
        </div>
        <div class="chek-form">
            <div class="custome-checkbox">
                <input class="form-check-input" wire:model="check" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                <label class="form-check-label" for="exampleCheckbox12"><span>By continuing, you agree to litzagency <a href="terms-conditions.html">Terms of Use</a> and <a href="privacy-policy.html">Privacy Policy.</a></span></label>
                @error('check')
                <span style="color: red">
                {{$message}}
            </span>

                @enderror
            </div>
        </div>
        <a class="forgot-link" href="forgot-password.html">Forgot password?</a>
        <div class="form-group">
            <button type="button" wire:click="register" class="btn btn-brand">Create Account</button>
        </div>
        <a href="login.html" class="exist-user">Existing User?</a>
        <p>Or Sign In With</p>
        <div class="form-group">
            <a href="javascript:void();" class="btn btn-google"><i class="fab fa-google-plus-g"></i> Sign In with Google</a>
        </div>
        <div class="form-group">
            <a href="javascript:void();" class="btn btn-fb"><i class="fab fa-facebook"></i> Sign In with Facebook</a>
        </div>
    </form>
</div>
