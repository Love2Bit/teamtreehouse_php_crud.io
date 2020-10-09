<?php 

var_dump($_SERVER['REQUEST_METHOD']);

// echo $_GET['name'];
// echo "<br\n>";
// echo $_GET['password'];
// echo "<br\n>";
// echo $_GET['email'];

// echo $_POST['name']."<br>";
// echo $_POST['password']."<br>";

var_dump($_GET);

$filter=filter_input(INPUT_GET,'email',FILTER_SANITIZE_ENCODED);

echo $filter;
