<?php
require 'Database.php';
require 'functions.php';
require 'Response.php';
require 'router.php';

$congif = require('config.php');

$db = new Database($congif['database']);
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
$q = "SELECT * from posts where id={$id}";
$posts =  $db->query($q)->fetchAll();
} else {
    //$id = $_GET['id'];
$q = "SELECT * from posts ";
$posts =  $db->query($q)->fetchAll();
}



//dd($posts);
//exit;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       


