<?php
$config = require("config.php");
$userType = require("userType.php");

$db = new Database($config['database']);

if(!isset($_GET["id"])) {
    abort();
}

$rows = $db->query(
    "SELECT * FROM sectiondetailstbl sd INNER JOIN sectionstbl s on sd.sectionNumber = s.sectionNumber
         INNER JOIN subjectstbl s2 on s.subjectNumber = s2.subjectNumber
         INNER JOIN accountstbl a on sd.accountID = a.accountID
         WHERE sd.sectionNumber = :id AND s.sectionStatus = :status AND a.userType = :userType AND a.accountStatus = :status",
    [
        "id" => $_GET["id"],
        "status" => 1,
        "userType" => 3
    ])->fetchAllOrCreate();

$profs = $db->query(
    "SELECT * FROM sectiondetailstbl sd INNER JOIN sectionstbl s on sd.sectionNumber = s.sectionNumber
         INNER JOIN subjectstbl s2 on s.subjectNumber = s2.subjectNumber
         INNER JOIN accountstbl a on sd.accountID = a.accountID
         WHERE sd.sectionNumber = :id AND s.sectionStatus = :status AND a.userType = :userType AND a.accountStatus = :status",
    [
        "id" => $_GET["id"],
        "status" => 1,
        "userType" => 2
    ])->fetchAllOrCreate();

//dd($courseSubjects);

$title = "List of Students and Professors in section " . $_GET['id'];
$headerName = "List of Students and Professors in section " . $_GET['id'];
require "views/section.view.php";
