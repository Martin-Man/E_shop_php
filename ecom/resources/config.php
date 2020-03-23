<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom_db";


foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }

    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

//defined("DB_NAME") ? null : define("DB_NAME",  "ecom_db");
//defined("DB_NAME") ? null : define("DB_NAME",  "ecom2");
$conn = $connection = new mysqli($servername, $username, $password, $dbname);
//$connection = new mysqli($servername, $username, $password, $dbname);
//$connection = mysqli_connect($servername, $username, $password, $dbname);



defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");
require_once("functions.php");
require_once("cart.php");
?>
