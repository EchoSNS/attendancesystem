<?php

$config = require("config.php");
$title = "Create a Subject";
$headerName = "Create a Subject";
require("Validator.php");

$db = new Database($config['database']);

$courses = $db->query("SELECT courseID, courseName FROM coursestbl WHERE courseStatus = :status",
    [
        "status" => 1
    ])->fetchAllOrAbort();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];
    if((!Validator::string($_POST['subjectName'], 1, 100)))
    {
        $errors['subjectName'] = "A subject name of no more than 100 characters is required.";
    }
    if((!Validator::string($_POST['description'], 0, 255)))
    {
        $errors['description'] = "A subject description of no more than 255 characters is required.";
    }
    if(!Validator::string($_POST['course'], 1))
    {
        $errors['course'] = "A valid course is required.";
    }

    if(empty($errors))
    {
        $subjectName = $_POST["subjectName"];
        $subjectDesc = $_POST["description"];
        $courseID = $_POST["course"];

        $db->query("INSERT INTO subjectstbl(subjectName, subjectDescription, courseID, subjectStatus)
        VALUES(?, ?, ? ,?)",
            [
                $subjectName, $subjectDesc, $courseID, 1
            ]);
        header('Location:/subjects');
    }
}
require "views/subject_create.view.php";
