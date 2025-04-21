<?php

    include '../main_components/header.php';
    include '../main_components/navbar.php';
    include '../main_components/logo.php';

?>

<div class="register-container">
    <form action="../models/log_in.php" method="POST">
        <div class="register">
            <h1>LOG IN</h1>
            <label for="username">Username</label>
            <input type="text" name="username" id="" required>

            <label for="pass">Password</label>
            <input type="password" name="pass" id="" required>

            <div class="btn">
                <a href="">
                    <input type="submit" value="LOG IN">
                </a>
            </div>
        </div>
    </form>
</div>