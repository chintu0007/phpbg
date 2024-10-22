<?php
require 'Database.php';
require 'functions.php';


//require 'router.php';
$congif = require('config.php');

$db = new Database($congif['database']);
$id = $_GET['id'];

$q = "SELECT * from posts where id={$id}";
$posts =  $db->query($q)->fetchAll();

dd($posts);
exit;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       


