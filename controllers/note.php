<?php 

$config = require('config.php');
$db = new Database($config['database']);


$heading = "My Notes";
$currentUserId = 3;

//$notes = $db->query('SELECT * FROM `notes` WHERE id = :id', ['id' => $id])->fetchAll();
$note = $db->query('SELECT * FROM `notes` WHERE id = :id', 
    [       
        'id' => $_GET['id']       
    ])
    ->findOrFail();   
    // if($note['user_id'] !== $currentUserId) {
    //     abort(Response::FORBIDDEN);
    // }

    authorize($note['user_id'] === $currentUserId);

require 'view/notes.view.php';