<?php

    include '../main_components/header.php';

?>

<div class="chat">
    <a href="./loggedin.php"><h2>EXIT</h2></a>

    <div class="chat-info">
        <h4>Anonymous No. <?php  echo $_SESSION['sid']?></h4>
    </div>

    <div class="chat-content">
        <div class="upper">
            <img src="../media/logo.png" alt="">
            <h5>GHOSTCHAT CCTC</h5>
        </div>
        
        <div class="body">
            <div class="left">
                <h6>No. 4</h6>
                <p>Hellooooooo</p>
            </div>

            <div class="right">
                <div>
                    <h6>No. <?php  echo $_SESSION['sid']?></h6>
                    <p>Hey! wassup</p>
                </div>
            </div>

            <div class="left">
                <h6>No. 5</h6>
                <p>Watchu doin guys?</p>
            </div>

            <div class="right">
                <div>
                    <h6>No. <?php  echo $_SESSION['sid']?></h6>
                    <p>Nothing dude</p>
                </div>
            </div>

            <div class="left">
                <h6>No. 7</h6>
                <p>Is anyone an IT 3rd year in here?</p>
            </div>
        </div>

        <div class="lower">
            <div>
                <button><img src="../media/add.png" alt=""></button>
                <button><img src="../media/image.png" alt=""></button>
                <button><img src="../media/file.png" alt=""></button>
                <button><img src="../media/gif.png" alt=""></button>
                <button><img src="../media/emoji.png" alt=""></button>
                <input type="text" name="" id="">
                <button class="send">Send</button>
            </div>
        </div>
    </div>
</div>