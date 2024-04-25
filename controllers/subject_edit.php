<?php

$config = require("config.php");

require("Validator.php");

$db = new Database($config['database']);

$id = $_GET['id'];

$courses = $db->query("SELECT courseID, courseName FROM coursestbl WHERE courseStatus = :status",
    [
        "status" => 1
    ])->fetchAllOrAbort();

$currentSubject = $db->query("SELECT * FROM subjectstbl WHERE subjectNumber = :id",
    [
        "id" => $id
    ])->fetchOrAbort();

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
    if(!Validator::integer(intval($_POST['course']), 1))
    {
        $errors['course'] = "A valid course is required.";
    }

    if(empty($errors))
    {
        $subjectName = $_POST["subjectName"];
        $subjectDesc = $_POST["description"];
        $courseID = $_POST["course"];

        $db->query("UPDATE subjectstbl
        SET subjectName = :subjectName, subjectDescription = :description, courseID = :courseID
        WHERE subjectNumber = :id",
            [
                "subjectName" => $subjectName,
                "description" => $subjectDesc,
                "courseID" => $courseID,
                "id" => $id
            ]);
        header('Location:/subjects');
    }
}
$title = "Edit " . $currentSubject['subjectName'] . " Information";
$headerName = "Edit " . $currentSubject['subjectName'] . " Information";
require "views/subject_edit.view.php";
