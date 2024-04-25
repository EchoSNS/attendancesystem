<?php

$config = require("config.php");
$userTypes = require("userType.php");
require("Validator.php");

$db = new Database($config['database']);

$id = $_GET['id'];

$currentUser = $db->query("SELECT * FROM accountstbl WHERE accountID = :id",
    [
        "id" => $id
    ])->fetchOrAbort();

$courses = $db->query("SELECT courseID, courseName FROM coursestbl WHERE courseStatus = :status",
    [
        "status" => 1
    ])->fetchAllOrAbort();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];

    if((! Validator::string($_POST['first-name'], 1, 100)))
    {
        $errors['firstName'] = "A first name of no more than 100 characters is required.";
    }
    if((!Validator::string($_POST['middle-name'], 0, 100)))
    {
        $errors['middleName'] = "A middle name of no more than 100 characters is required.";
    }
    if((!Validator::string($_POST['last-name'], 1, 100)))
    {
        $errors['lastName'] = "A last name of no more than 100 characters is required.";
    }
    if((!Validator::email($_POST['email'], 1, 320)))
    {
        $errors['email'] = "An email of no more than 320 characters is required.";
    }
    if((!Validator::integer($_POST['course'], 1)))
    {
        $errors['course'] = "A valid course is required.";
    }
    if(!isset($_POST['userType']))
    {
        $errors['userType'] = "A user type required.";
    }
    elseif ((!Validator::integer($_POST['userType'], 0, 3)))
        if((! Validator::string($_POST['birthDate'])))
        {
            $errors['birthDate'] = "A valid birth date is required";
        }

    if(empty($errors))
    {
        $password = $_POST["password"];

        $firstName = $_POST["first-name"];
        $middleName = $_POST["middle-name"];
        $lastName = $_POST["last-name"];
        $secondaryEmail = $_POST["email"];
        $birthDate = date( 'Y-m-d', strtotime($_POST["birthDate"]));
        $courseID = $_POST["course"];

        $userType = $_POST["userType"];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $db->query("UPDATE accountstbl
        SET password = ?, userType = ?, FirstName = ?, MiddleName = ?, LastName = ?, Birthdate = ?, courseID = ?, secondary_email = ?
        WHERE accountID = ?",
            [
                $password, $userType, $firstName, $middleName, $lastName, $birthDate, $courseID, $secondaryEmail, $id
            ]);
        header('Location:/accounts');
    }
}

$title = "Edit Account Information of " . formatToFullName($currentUser['FirstName'], $currentUser['MiddleName'], $currentUser['LastName']);
$headerName = "Edit Account Information of " . formatToFullName($currentUser['FirstName'], $currentUser['MiddleName'], $currentUser['LastName']);
require "views/account_edit.view.php";
