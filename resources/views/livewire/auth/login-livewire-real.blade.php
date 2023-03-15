<div class="login-wrap">
    <h4 class="log-title">Login</h4>
    <form>
        <div class="form-group">
            <input type="text" required="" wire:model="email" name="email" placeholder="Email">
            @error('email')
            <span style="color: red">
                {{$message}}
            </span>

            @enderror
        </div>
        <div class="form-group">
            <input required="" wire:model="password" type="password" name="password" placeholder="password">
            @error('password')
            <span style="color: red">
                {{$message}}
            </span>

            @enderror
        </div>

       @if($user_yoq)
        <span style="color: red">
            User topilmadi
            </span>

        @endif
        <a class="forgot-link" href="forgot-password.html">Forgot password?</a>
        <div class="form-group">
            <button type="button"
                    wire:click="login"
                    class="btn btn-brand" name="login">Log in</button>
        </div>
        <p>Or Sign In With?</p>
        <div class="form-group">
            <button type="submit"

                    class="btn btn-google"><i class="fab fa-google-plus-g"></i> Sign In with Google</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-fb"><i class="fab fa-facebook"></i> Sign In with Facebook</button>
        </div>
    </form>
</div>
