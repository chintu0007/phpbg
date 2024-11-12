<?php 

$config = require('config.php');
$db = new Database($config['database']);


$heading = "My Notes";

$notes = $db->query('SELECT * FROM `notes`')->fetchAll();

require 'view/notes.view.php';