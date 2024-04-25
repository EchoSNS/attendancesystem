<?php
$config = require("config.php");
$title = "Attendances Page";
$headerName = "List of Attendances";

$db = new Database($config['database']);

$rows = $db->query("SELECT * FROM attendancelogstbl
    INNER JOIN sectionstbl s on attendancelogstbl.sectionNumber = s.sectionNumber
    INNER JOIN subjectstbl s2 on s.subjectNumber = s2.subjectNumber
    INNER JOIN accountstbl a on attendancelogstbl.accountID = a.accountID
    ORDER BY attendancelogstbl.sectionNumber, a.userType, LastName, FirstName, MiddleName")->fetchAllOrCreate();

require "views/attendances.view.php";