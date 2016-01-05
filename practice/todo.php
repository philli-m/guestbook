<?php

$comments = [];

$host = '127.0.0.1';
$username = 'root';
$password = 'ServantEgg86';

$dbConnection = mysqli_connect($host, $username, $password, 'todo')
    or die("Go back, here be Dragons");
echo "you are safe now";

$comments = $_POST['comment'];
$date = $_POST['date'];

$query = "INSERT INTO todo_list (comments, date) VALUES ('$comments', '$date')";

//$database->exec("INSERT INTO guestbook (comment) VALUES ('" . $_POST["comment"] . "')");

mysqli_query($dbConnection, $query)
    or die(mysqli_error($dbConnection));
echo "something has worked";

mysqli_close($dbConnection);

