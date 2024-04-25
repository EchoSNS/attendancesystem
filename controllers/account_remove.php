<?php

$config = require("config.php");

$db = new Database($config['database']);

$id = $_GET['id'];

$db->query("DELETE FROM accountstbl WHERE accountID = :id",
[
    "id" => $id
]);


header('Location:/accounts');
