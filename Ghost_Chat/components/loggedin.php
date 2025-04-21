<?php 
    include '../main_components/header.php';
?>

<?php  ?>

<div class="logged">
    <div class="profile">
        <img src="../media/logo.png" alt="">
        <div>
            <p>Username: <?php  echo $_SESSION['username']?></p>
            <p>Email: <?php  echo $_SESSION['email']?></p>
            <p>Anonymous No. <?php  echo $_SESSION['sid']?></p>
        </div>
    </div>

    <div class="logout">
        <a href="../models/logout.php">LOG OUT</a>
    </div>

    <div class="loggedin-content">
        <div class="outer">
            <div>
                <img src="../media/chat.png" alt="">
                <a href="./chat.php"><h2>CHATROOM</h2></a>
            </div>

            <div>
                <img src="../media/report.png" alt="">
                <a href="./report.php"><h2>REPORT</h2></a>
            </div>

            <div>
                <img src="../media/rules.png" alt="">
                <a href="./rules.php"><h2>RULES</h2></a>
            </div>
        </div>
    </div>
</div>