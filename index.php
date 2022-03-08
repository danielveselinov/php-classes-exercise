<?php 

require_once __DIR__ . "/Classes/Member.php";

$u = new Member("Daniel", "Veselinov", "gospodinot", "root", "admin");
$u->login();
echo $u->identity();

// echo "<pre>";
// print_r($u);