<?php

$config = require("config.php");

$db = new Database($config['database']);

$section = $_GET['section'];
$user = $_GET['user'];
$date = $_GET['date'];

$db->query("DELETE FROM attendancelogstbl WHERE sectionNumber = :section AND accountID = :user AND date_time = :date",
    [
        "section" => $section,
        "user" => $user,
        "date" => $date
    ]);


header('Location:/attendances');
