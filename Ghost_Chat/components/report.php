<?php

    include '../main_components/header.php'

?>

<div class="report">
    <a href="./loggedin.php"><h2>EXIT</h2></a>
    <div class="report-content">
        <h1>REPORT</h1>
        <div class="choose-number">
            <label for="number">SELECT ANONYMOUS NO.</label>
            <select name="number" id="">
                <option value=""></option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
            </select>
        </div>

        <div class="choose-violation">
            <label for="violation">SELECT VIOLATION</label>
            <select name="violation" id="">
                <option value=""></option>
                <option value="">🚫 Bullying, harassment, or hate speech.</option>
                <option value="">🚫 Sending threats or encouraging violence.</option>
                <option value="">🚫 Sharing personal information (your name, address, phone number, etc.).</option>
                <option value="">🚫 Posting offensive, sexual, or explicit content.</option>
                <option value="">🚫 Impersonating other people.</option>
                <option value="">🚫 Repeated spamming or flooding the chat.</option>
                <option value="">🚫 Disrespecting school staff, faculty, or fellow students.</option>
            </select>
        </div>

        <div class="report-btn">
            <button>REPORT</button>
        </div>
    </div>
</div>