<?php
require_once "config.php";

// getting content by categories
$sports = Article::getList(1);
$nights = Article::getList(2, 'onDate', 'DESC');
$societies = Article::getList(3, 'id', 'DESC');
$squares = Article::getList(4, 'title', 'ASC');
include "views/main.php"; //main site temp