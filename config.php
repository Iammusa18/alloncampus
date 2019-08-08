<?php
//init session
session_start();
session_regenerate_id();

define("DB_DSN", "mysql:host=localhost;dbname=alloncampus");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");


require("classes/Article.php");

function handleException($exception)
{
    echo "Sorry, a problem occurred. Please try later.";
}

//check if user is authenticated
function check_login()
{
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1;
}
try {
	$username="root";
	$password="";
    $conn = new PDO("mysql:host=localhost;dbname=alloncampus", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
set_exception_handler('handleException'); //process all errors


