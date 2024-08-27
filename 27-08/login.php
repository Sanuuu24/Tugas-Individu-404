<?php include('template/header.php') ?>

    <div class="main-content login-panel login-panel-2">
        <h3 class="panel-title">Login</h3>
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <form>
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Username or email address">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="input-group mb-20">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    <div class="d-flex justify-content-between mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label class="form-check-label text-white" for="loginCheckbox">
                                Remember Me
                            </label>
                        </div>
                        <a href="reset-password.html" class="text-white fs-14">Forgot Password?</a>
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Login</button>
                </form>
                <div class="other-option">
                    <p class="mb-0">Don't have an account? <a href="registration-2.html" class="text-white text-decoration-underline">create</a></p>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    <?php include('template/footer.php')?>