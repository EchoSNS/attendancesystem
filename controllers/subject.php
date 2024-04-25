<?php
$config = require("config.php");
$userType = require("userType.php");

$db = new Database($config['database']);

if(!isset($_GET["id"])) {
    abort();
}

$subjectSections = $db->query(
    "SELECT * FROM subjectstbl INNER JOIN sectionstbl s on subjectstbl.subjectNumber = s.subjectNumber
         WHERE s.sectionNumber = :id AND subjectStatus = :status",
    [
        "id" => $_GET["id"],
        "status" => 1
    ])->fetchAllOrCreate();

if($subjectSections) {
    $title = ($subjectSection ? $subjectSections[0]['subjectName'] : "") . " Sections";
    $headerName = ($subjectSection ? $subjectSections[0]['subjectName'] : "") . " List of Sections";
}
else{
    $title = " Sections";
    $headerName = " List of Sections";
}
require "views/subject.view.php";
