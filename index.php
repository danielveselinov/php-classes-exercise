<?php 

require_once __DIR__ . "/Classes/Member.php";
require_once __DIR__ . "/Classes/Post.php";
require_once __DIR__ . "/Classes/Topic.php";

$author = new Member("Daniel", "Veselinov", "root", "admin", "admin");
$member = new Member("John", "Doe", "john", "doe123", "member");
$member->login();
$author->login();

//Create topic by admin=>author
$topic = new Topic("How to generate random text", $author, "tech");

//Create first post by user=>member
$post = new Post();
$post->setTitle("Ipsum dolor");
$post->setText("Lorem ispsum dolor is randomly generated text that comes with a lot of different latin words..");
$post->setCategory("tech");

//Create second post by same user=>member
$anoterPost = new Post();
$anoterPost->setTitle("PHP OOP forum exercise");
$anoterPost->setText("Simple forum with authentication where admin create topics for users to post in them.");
$anoterPost->setCategory("tech");

echo "<br/>";
$topic->addPost($member, $post);
$topic->addPost($member, $anoterPost);