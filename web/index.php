<?php

$database = new SQLite3(__DIR__ . "/../guestbook.db");

$comments = [];

if (isset($_POST["comment"])) {
    $comment = $_POST["comment"];
    $database->exec("INSERT INTO guestbook (comment) VALUES ('" . $_POST["comment"] . "')");
}

$result = $database->query('SELECT * FROM guestbook');

while($row = $result->fetchArray()) {
    $comments[] = $row["comment"];
}


require __DIR__ . "/../views/index.html";

