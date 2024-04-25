<?php
$config = require("config.php");
$userType = require("userType.php");

$db = new Database($config['database']);

if(!isset($_GET["id"])) {
    abort();
}

$accountInfo = $db->query(
    "SELECT * FROM accountstbl INNER JOIN coursestbl c on accountstbl.courseID = c.courseID WHERE accountID = :id AND accountStatus = :status",
    [
        "id" => $_GET["id"],
        "status" => 1
    ])->fetchOrAbort();

//dd($accountInfo);
$fullName = formatToFullName($accountInfo['FirstName'], $accountInfo['MiddleName'], $accountInfo['LastName']);

$title = $fullName . " Profile Page";
$headerName = $fullName . "'s Profile Information";
require "views/account.view.php";
