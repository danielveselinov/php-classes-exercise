<?php 

require_once __DIR__ . "/Classes/Member.php";
require_once __DIR__ . "/Classes/Topic.php";

$author = new Member("Daniel", "Veselinov", "gospodinot", "root", "admin");
$author->login();
// echo $author->identity();

echo "<br/><br/>";

// $author1 = new Member("ADMIN", "ADMIN", "administrator", "admin", "member");
// $author1->login();

$topic = new Topic("Eminem - Stan ft. Dido", $author, "Music");
echo "<br/>";
$topic->addPost($author, "Eminem - Stan ft. Daniel", "Music");


// echo "<pre>";
// print_r($u);