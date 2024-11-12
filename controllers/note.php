<?php 

$config = require('config.php');
$db = new Database($config['database']);


$heading = "My Notes";

$id = $_GET['id'];


$notes = $db->query('SELECT * FROM `notes` WHERE id = :id', ['id' => $id])->fetchAll();

require 'view/notes.view.php';