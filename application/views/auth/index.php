<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Page</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?= base_url('asset-login/'); ?>images/bg.jpg);"></div>
                        <h3 class="text-center mb-0">Welcome</h3>
                        <p class="text-center">Sign in by entering the information below</p>
                        <form action="<?= base_url('auth') ?>" method="post" class="login-form">
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-100 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3">Get Started</button>
                            </div>
                        </form>
                        <div class="w-100 text-center mt-4 text">
                            <p class="mb-0">Don't have an account?</p>
                            <a href="#">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>