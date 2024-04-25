<?php

$config = require("config.php");

require("Validator.php");

$db = new Database($config['database']);

$id = $_GET['id'];

$currentCourse = $db->query("SELECT * FROM coursestbl WHERE courseID = :id",
[
    "id" => $id
])->fetchOrAbort();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];

    if((! Validator::string($_POST['courseName'], 1, 100)))
    {
        $errors['courseName'] = "A course name of no more than 100 characters is required.";
    }
    elseif(isset($_POST['description']) && (!Validator::string($_POST['description'], 0, 255)))
    {
        $errors['description'] = "A course description of no more than 255 characters is required.";
    }

    if(empty($errors))
    {
        $courseName = $_POST["courseName"];
        $description = $_POST["description"];

        $db->query("UPDATE coursestbl
        SET courseName = :courseName, description = :description
        WHERE courseID = :id",
            [
                "courseName" => $courseName,
                "description" => $description,
                "id" => $id
            ]);
        header('Location:/courses');
    }
}
$title = "Edit " . $currentCourse['courseName'] . " Information";
$headerName = "Edit " . $currentCourse['courseName'] . " Information";
require "views/course_edit.view.php";
