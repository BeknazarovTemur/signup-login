<?php
require_once("includes/config_session.inc.php");
require_once("includes/signup_view.inc.php");
require_once("includes/login_view.inc.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sign Up</title>
</head>
<body>
<section class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <h3>
                            <?php
                            output_username();
                            ?>
                        </h3>
                        <?php
                        if (!isset($_SESSION['user_id'])) { ?>
                            <div class="text-center mb-3">
                                <h1 class="text-info">Log-in</h1>
                            </div>

                            <form action="includes/login.inc.php" method="post">
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <input type="text" class="form-control mb-2 border border-dark" name="username" placeholder="Username">
                                            <input type="password" class="form-control mb-2 border border-dark" name="pwd" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex gap-2 justify-content-center">
                                            <button type="submit" class="btn btn-primary mb-5">Log-in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>

                        <?php
                        check_login_errors();
                        ?>

                        <div class="text-center mb-3">
                            <h1 class="text-info">Sign-up</h1>
                        </div>

                        <form action="includes/signup.inc.php" method="post">
                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <?php
                                        signup_inputs();
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <button type="submit" class="btn btn-primary mb-5">Sig-up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-danger">
                            <?php
                            check_signup_errors();
                            ?>
                        </div>

                        <form action="includes/logout.inc.php" method="post">
                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="mb-4 d-flex gap-2 justify-content-center">
                                        <button class="btn btn-danger">Logout</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>