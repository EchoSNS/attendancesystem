<?php

$config = require("config.php");

$db = new Database($config['database']);

$id = $_GET['id'];

$db->query("DELETE FROM subjectstbl WHERE subjectNumber = :id",
    [
        "id" => $id
    ]);


header('Location:/subjects');
