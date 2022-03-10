<?php 

require_once __DIR__ . "/Classes/Member.php";
require_once __DIR__ . "/Classes/Post.php";
require_once __DIR__ . "/Classes/Topic.php";

$author = new Member("Daniel", "Veselinov", "root", "admin", "admin");
$member = new Member("John", "Doe", "john", "doe123", "member");
$member->login();
$author->login();

echo "<br/>";

$topic = new Topic("How to generate random text", $author, "tech");

$post = new Post();
$post->setTitle("Ipsum dolor");
$post->setText("Lorem ispsum dolor is randomly generated text that comes with a lot of different latin words..");
$post->setCategory("tech");

echo "<br/>";
$topic->addPost($member, $post);