<?php
$config = require("config.php");
$title = "Sections Page";
$headerName = "List of Sections";

$db = new Database($config['database']);

$rows = $db->query("SELECT * FROM sectionstbl
    INNER JOIN subjectstbl s ON sectionstbl.subjectNumber = s.subjectNumber ORDER BY sectionstbl.subjectNumber, subjectName")->fetchAllOrCreate();

require "views/sections.view.php";