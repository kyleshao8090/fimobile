<?php
session_start();
if (isset($_SESSION['login'])) {
    header("location: ./home.php");
}
include "../db/conn.php";
include "../includes/header.php";
?>
<!-- Begin page content -->
<main class="container-fluid h-100">
    <div class="row h-100 overflow-auto">
        <div class="col-12 text-center mb-auto px-0">
            <header class="header">
                <div class="row">
                    <div class="col-auto"></div>
                    <div class="col">
                        <div class="logo-small">
                            <!-- <img src="../assets/img/logo.png" alt=""> -->
                            <i class="bi bi-kanban-fill display-6"></i>
                            <h5>Web2Rise</h5>
                        </div>
                    </div>
                    <div class="col-auto"></div>
                </div>
            </header>
        </div>
        <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
            <h1 class="mb-4 text-color-theme">Sign in</h1>
            <form class="" action="../db/auth.php" method="post">
                <div class="form-group form-floating mb-3 is-valid">
                    <input type="text" class="form-control" id="email" placeholder="Username" name="username">
                    <label class="form-control-label" for="email">Username</label>
                </div>

                <div class="form-group form-floating is-valid mb-3">
                    <input type="password" class="form-control " id="password" placeholder="Password" name="password">
                    <label class="form-control-label" for="password">Password</label>
                    <button type="button" class="text-danger tooltip-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Enter valid Password" id="passworderror">
                        <!-- <i class="bi bi-info-circle"></i> -->
                    </button>
                </div>
                <?php
                if (isset($_GET['msg'])) { ?>
                    <div class="alert alert-danger">
                        <?= $_GET['msg'] ?>
                    </div>
                <?php } ?>
                <!-- <p class="mb-3 text-center">
                    <a href="forgot-password.html" class="">
                        Forgot your password?
                    </a>
                </p> -->

                <button type="submit" name="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">
                    Sign in
                </button>
            </form>

            <!-- <p class="mb-2 text-muted">Don't have account?</p>
            <a href="signup.html" target="_self" class="">
                Sign up <i class="bi bi-arrow-right"></i>
            </a> -->

        </div>
        <!-- <div class="col-12 text-center mt-auto">
            <div class="row justify-content-center footer-info">
                <div class="col-auto">
                    <p class="text-muted">Or you can continue with </p>
                </div>
                <div class="col-auto ps-0">
                    <a href="#" class="p-1"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="p-1"><i class="bi bi-google"></i></a>
                    <a href="#" class="p-1"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div> -->
    </div>
</main>
<?php
include "../includes/footer.php";
?>