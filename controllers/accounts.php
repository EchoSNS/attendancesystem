<?php
$config = require("config.php");
$title = "Accounts Page";
$headerName = "List of Accounts";
$accountTypes = require("userType.php");

$db = new Database($config['database']);



//$columnNames = $db->query("SELECT * FROM accountstbl")->fetchAllOrAbort();
if(isset($_GET['userType'])){
    $rows = $db->query("SELECT * FROM accountstbl INNER JOIN coursestbl c ON accountstbl.courseID = c.courseID WHERE userType = :type ORDER BY userType",
        [
            "type" => $_GET['userType']
        ]
    )->fetchAllOrAbort();
}
else {
    $rows = $db->query("SELECT * FROM accountstbl INNER JOIN coursestbl c ON accountstbl.courseID = c.courseID ORDER BY userType")->fetchAllOrAbort();
}

require "views/accounts.view.php";