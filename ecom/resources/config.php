<?php
ob_start();
session_start();
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "ecom2";
$dbname = "ecom_db";

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");


// Connect to AZURE MySQL in App database
foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }

    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}


$connection = new mysqli($servername, $username, $password, $dbname);

require_once("functions.php");
require_once("cart.php");
?>