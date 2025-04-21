<?php
function create_connection(){
    $host="localhost";
    $username="root";
    $password="";
    $database="ghostchat";
    
    return new mysqli($host,$username,$password,$database);
}

if (!create_connection()){
    echo 'failed';
}