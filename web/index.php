<?php

$host = '127.0.0.1';
$username = 'root';
$password = 'ServantEgg86';

$database = mysqli_connect($host, $username, $password, 'guestlist')
or die("Go back, here be Dragons");
echo "you are safe now";

$comments = [];

if (isset($_POST["comment"])) {
    $comment = $_POST["comment"];
    $database->exec("INSERT INTO guestlistDB (comment) VALUES ('" . $_POST["comment"] . "')");
}

$result = $database->query('SELECT * FROM guestlistDB');

while($row = $result->fetchArray()) {
    $comments[] = $row["comment"];
}


require __DIR__ . "/../views/index.html";

//<?php
//
//$comments = [];
//

//
//
//if (isset($_POST["comment"])) {
//    $comment = $_POST["comment"];
//    $query = "INSERT INTO guestbook (comment) VALUES ('" . $_POST["comment"] . "')";
//}
//
//$result = $database->query('SELECT * FROM guestlist');
//
//while($row = $result->fetch_array()) {
//    $comments[] = $row["comment"];
//}
//
////
//require __DIR__ . "/../views/index.html";
//
//mysqli_close();
