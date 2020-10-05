<?php
session_start();

define('KB', 1024);
define('MB', 1048576);

if (isset($_POST['prof-submit'])) {
    require 'dbhandler.php';
   

    $uname = $_SESSION['username'];

    $file = $_FILES['profile-image'];

    
    $file_name=$file['name'];

    print_r($file);

}