<?php

$config = require("config.php");
$title = "Create a Course";
$headerName = "Create a Course";

require("Validator.php");

$db = new Database($config['database']);

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

        $db->query("INSERT INTO coursestbl(courseName, description, courseStatus)
        VALUES(?, ? ,?)",
            [
                $courseName, $description, 1
            ]);
        header('Location:/courses');
    }
}
require "views/course_create.view.php";
