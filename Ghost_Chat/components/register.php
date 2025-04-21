<?php

    include '../main_components/header.php';
    include '../main_components/navbar.php';
    include '../main_components/logo.php';

?>

<div class="register-container">
    <form action="../models/registration.php" method="POST">
        <div class="register">
            <h1>REGISTER</h1>
            
            <label for="username">Username</label>
            <input type="text" name="username" id="" required>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="" required>

            <div class="btn">
                <a href="">
                    <input type="submit" value="REGISTER">
                </a>
            </div>
        </div>
    </form>
</div>