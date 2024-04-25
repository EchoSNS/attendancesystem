<?php
$config = require("config.php");
$userType = require("userType.php");

$db = new Database($config['database']);

if(!isset($_GET["id"])) {
    abort();
}

$courseSubjects = $db->query(
    "SELECT * FROM coursestbl INNER JOIN subjectstbl s on coursestbl.courseID = s.courseID
         WHERE coursestbl.courseID = :id AND courseStatus = :status",
    [
        "id" => $_GET["id"],
        "status" => 1
    ])->fetchAllOrCreate();

//dd($courseSubjects);

$title = $courseSubjects[0]['courseName'] . " Subjects";
$headerName = $courseSubjects[0]['courseName'] . " List of Subjects";
require "views/course.view.php";
