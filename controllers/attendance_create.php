<?php

$config = require("config.php");
$title = "Log an Attendance";
$headerName = "Log an Attendance";
require("Validator.php");

$db = new Database($config['database']);

$users = $db->query("SELECT * FROM accountstbl WHERE userType = :userType AND accountStatus = :status",
    [
        "userType" => 3,
        "status" => 1
    ])->fetchAllOrCreate();

$subjectSections = $db->query("SELECT * FROM sectionstbl
         INNER JOIN subjectstbl s on sectionstbl.subjectNumber = s.subjectNumber
         WHERE sectionStatus = :status AND sectionStatus = :status",
    [
        "status" => 1
    ])->fetchAllOrCreate();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];

    if((! Validator::integer(intval($_POST['accountID']), 1)))
    {
        $errors['accountID'] = "A valid user is required.";
    }
    if((!Validator::integer(intval($_POST['section']), 1)))
    {
        $errors['section'] = "A valid section is required.";
    }
    if((! Validator::string($_POST['date'])))
    {
        $errors['date'] = "A valid date is required";
    }

    if(empty($errors))
    {
        $accountID = $_POST["accountID"];
        $section = $_POST["section"];
        $dateTime = date( 'Y-m-d', strtotime($_POST["date"]));

        $db->query("INSERT INTO attendancelogstbl(accountID, sectionNumber, date_time, attendanceStatus)
        VALUES(?, ? ,?, ?)",
            [
                $accountID, $section, $dateTime, 1
            ]);
        header('Location:/attendances');
    }
}
require "views/attendance_create.view.php";
