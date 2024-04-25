<?php
$config = require("config.php");
$title = "Courses Page";
$headerName = "List of Courses";

$db = new Database($config['database']);

$rows = $db->query("SELECT * FROM coursestbl")->fetchAllOrCreate();

require "views/courses.view.php";