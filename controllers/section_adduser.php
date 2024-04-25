<?php

$config = require("config.php");
$title = "Add User to a Section";
$headerName = "Add User to a Section";

$accountTypes = require("userType.php");
require("Validator.php");

$db = new Database($config['database']);

$sectionsSubjects =
    $db->query("SELECT * FROM sectionstbl s
    INNER JOIN subjectstbl s2 on s.subjectNumber = s2.subjectNumber
    WHERE subjectStatus = :status AND sectionStatus = :status",
    [
       "status" => 1
    ])->fetchAllOrCreate();

$users =
    $db->query("SELECT * FROM accountstbl WHERE accountStatus = :status AND userType = :stud OR userType = :prof ORDER BY userType",
    [
       "status" => 1,
        "stud" => 3,
        "prof" => 2
    ])->fetchAllOrCreate();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];

    if((! Validator::integer(intval($_POST['section']), 1)))
    {
        $errors['section'] = "A valid section is required.";
    }
    if((!Validator::integer(intval($_POST['accountID']), 1)))
    {
        $errors['accountID'] = "A valid user is required.";
    }

    if(empty($errors))
    {
        $user = $_POST["accountID"];
        $section = $_POST["section"];

        $db->query("INSERT INTO sectiondetailstbl(accountID, sectionNumber)
        VALUES(?, ?)",
            [
                $user, $section
            ]);
        header('Location:/sections');
    }
}
require "views/section_adduser.view.php";
