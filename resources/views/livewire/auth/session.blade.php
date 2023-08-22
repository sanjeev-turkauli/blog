<div>
    <div class="main" wire:key="session">


        @if(isset($session))
        @if($session != 'login')
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form class="register-form" id="register-form" wire:submit.prevent="store">
                            <div class="form-group">
                                <label for="name"><i class="fa-solid fa-user"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" wire:model="name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa-solid fa-envelope"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" wire:model="email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="fa-solid fa-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" wire:model="password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fa-solid fa-lock"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" wire:model="cpassword" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{url('assets/frontend/auth/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="javascript:void(0)" class="signup-image-link" wire:click.prevent="login()">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
        @else
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{url('assets/frontend/auth/images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="javascript:void(0)" wire:click.prevent="register()" class="signup-image-link">Create an account</a>
                    </div>


                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form class="register-form" id="login-form" wire:submit.prevent="session">
                            <div class="form-group">
                                <label for="your_name"><i class="fa-solid fa-envelope"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Eamil" wire:model="email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="fa-solid fa-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" wire:model="password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google fa-brands fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @endif

    </div>
</div>
<script>
    window.addEventListener("showAlertMessage", (data) => {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: `${data.detail.type}`,
            title: `${data.detail.title}`
        })

    });
</script>