<?php

declare(strict_types=1);

function signup_inputs()
{
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<input type="text" class="form-control mb-2 border border-dark" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '">';
    } else {
        echo '<input type="text" class="form-control mb-2 border border-dark" name="username" placeholder="Username">';
    }

    echo '<input type="password" class="form-control mb-2 border border-dark" name="pwd" placeholder="Password">';

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<input type="text" class="form-control mb-2 border border-dark" name="email" placeholder="E-Mail alue="' . $_SESSION["signup_data"]["email"] . '"">';
    } else {
        echo '<input type="text" class="form-control mb-2 border border-dark" name="email" placeholder="E-Mail">';
    }
}

function check_signup_errors()
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
        echo '<br>';
        echo '<p class="form-success text-success">Signup success!</p>';
    }
}