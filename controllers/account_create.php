<?php

$config = require("config.php");
$title = "Create Account";
$headerName = "Create an Account";
$userTypes = require("userType.php");
require("Validator.php");

$db = new Database($config['database']);

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
    {
        $errors['userType'] = "A valid user type is required.";
    }
    if((! Validator::string($_POST['birthDate'])))
    {
        $errors['birthDate'] = "A valid birth date is required";
    }

    if(empty($errors))
    {
        $firstName = $_POST["first-name"];
        $middleName = $_POST["middle-name"];
        $lastName = $_POST["last-name"];
        $secondaryEmail = $_POST["email"];
        $courseID = $_POST["course"];
        $userType = $_POST["userType"];
        $birthDate = date( 'Y-m-d', strtotime($_POST["birthDate"]));

        $username = $firstName . "." . $lastName . "@adamson.edu.ph";
        $username = str_replace(' ', '.', $username);
        $username = strtolower($username);

        $password = strtolower($firstName[0] . (empty($middleName[0]) ? $firstName[1] : $middleName[0] ) . $lastName[0] . "." . $birthDate);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $lastID = $db->query("SELECT MAX(accountID) FROM accountstbl")->fetchOrAbort();
        $maxValue = $lastID['MAX(accountID)'];
        $maxValue = substr($maxValue, 4);

        $incrementalNumber = (int)$maxValue + 1;

        $incrementalNumberFormatted = str_pad($incrementalNumber, 5, '0', STR_PAD_LEFT);
        $id_num = date("Y") . $incrementalNumberFormatted;

        $db->query("INSERT INTO accountstbl(accountID, username, password, userType, FirstName, MiddleName, LastName, Birthdate, courseID, secondary_email, accountStatus)
        VALUES(?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?)",
        [
            $id_num, $username, $password, $userType, $firstName, $middleName, $lastName, $birthDate, $courseID, $secondaryEmail, 1
        ]);
        header('Location:/accounts');
    }
}
require "views/account_create.view.php";
