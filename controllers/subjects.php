<?php
$config = require("config.php");
$title = "Subjects Page";
$headerName = "List of Subjects";

$db = new Database($config['database']);

$rows = $db->query("SELECT * FROM subjectstbl INNER JOIN coursestbl c ON subjectstbl.courseID = c.courseID ORDER BY c.courseID")->fetchAllOrCreate();

require "views/subjects.view.php";