@extends('master_front')

@section('content')
<!-- start account page -->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="assets/images/image1.png" alt="image1" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                        </div>

                        <form id="loginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>

                        <form id="registerForm">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end account page -->
@endsection

@push('scripts')
<!-- js for toggle form -->
<script>
    var loginForm = document.getElementById("loginForm");
    var registerForm = document.getElementById("registerForm");
    var indicator = document.getElementById("indicator");

    function register() {
        registerForm.style.transform = "translateX(-300px)";
        loginForm.style.transform = "translateX(-300px)";
        indicator.style.transform = "translateX(100px)";
    }

    function login() {
        registerForm.style.transform = "translateX(0px)";
        loginForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(0px)";
    }
</script>
@endpush