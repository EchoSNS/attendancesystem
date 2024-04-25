<?php

$config = require("config.php");

$db = new Database($config['database']);

$id = $_GET['id'];

$db->query("DELETE FROM coursestbl WHERE courseID = :id",
    [
        "id" => $id
    ]);


header('Location:/courses');
