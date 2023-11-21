<?php
// require_once('inc/app.php');

// require_once('layout/header.php');

//
?>
<!-- Page Content-->
<section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col">
                            <?php
                                echo '<pre>';
                                print_r($_SESSION);
                                echo '</pre>';
                            ?>
                            <div class="">
                                <div class="rounded d-flex justify-content-center">
                                    <div class="shadow-lg p-5 bg-light">
                                        <div class="text-center">
                                            <h3 class="text-primary">Sign In</h3>
                                        </div>
                                        <form action="" method="post">
                                            <!-- -->
                                            <input type="hidden" name="form_name" value="signin">
                                            <input type="hidden" name="csrf_token" value="<?php echo myAppCSRFToken("signin"); ?>">
                                            <!-- -->
                                            <div class="p-4">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text bg-primary"><i
                                                            class="bi bi-person-plus-fill text-white"></i></span>
                                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text bg-primary"><i
                                                            class="bi bi-key-fill text-white"></i></span>
                                                    <input type="password" name="password" class="form-control" placeholder="password">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Remember Me
                                                    </label>
                                                </div>
                                                <button class="btn btn-primary text-center mt-2" type="submit">
                                                    Sign In
                                                </button>
                                                <p class="text-center mt-5">Don't have an account?
                                                    <a href="signup.html"><span class="text-primary">Sign Up</span></a>
                                                </p>
                                                <p class="text-center text-primary"><a href="password.html">Forgot your password?</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php
// require_once('layout/footer.php');