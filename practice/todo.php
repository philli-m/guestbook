<?php

$database = mysqli_connect('127.0.0.1', 'root', 'ServantEgg86', 'todo')
or die('Error connecting to MySQL server.');

$comment = $_POST['comment'];


$query = "INSERT INTO todo_list (comment) VALUES ('$comment')";

$database->exec("INSERT INTO guestbook (comment) VALUES ('" . $_POST["comment"] . "')");

mysqli_query($database, $query)
    or die(mysqli_error($database));

mysqli_close($database);
