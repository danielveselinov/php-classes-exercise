<?php 

require_once __DIR__ . "/Classes/Member.php";
require_once __DIR__ . "/Classes/Topic.php";

$author = new Member("Daniel", "Veselinov", "gospodinot", "root", "admin");
// $author->login();
// echo $author->isLoggedIn();
echo $author->identity();
echo "<br/><br/>";
$topic = new Topic($author);


// echo "<pre>";
// print_r($u);