<?php
//the code to acess the database


function getDB()
{
  $db_host = "localhost";
  $db_name = "cms";
  $db_user = "kelly_cms";
  $db_pass ="v6JEVTv3aDKBehUT";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}
