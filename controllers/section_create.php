<?php

$config = require("config.php");
$title = "Create a Section";
$headerName = "Create a Section";
require("Validator.php");

$db = new Database($config['database']);

$subjects = $db->query("SELECT * FROM subjectstbl WHERE subjectStatus = :status",
    [
        "status" => 1
    ])->fetchAllOrCreate();

if($_SERVER['REQUEST_METHOD'] == 'POST' && $subjects)
{
    $errors = [];
    if(!Validator::string($_POST['schedule'], 1, 100))
    {
        $errors['schedule'] = "A valid schedule is required.";
    }
    if(!Validator::integer(intval($_POST['subjectNumber']), 1))
    {
        $errors['subjectNumber'] = "A valid subject is required.";
    }

    if(empty($errors))
    {
        $schedule = $_POST["schedule"];
        $subjectNumber = $_POST["subjectNumber"];

        $db->query("INSERT INTO sectionstbl( schedule, subjectNumber, sectionStatus)
        VALUES(?, ? ,?)",
            [
                $schedule, $subjectNumber, 1
            ]);
        header('Location:/sections');
    }
}
require "views/section_create.view.php";
