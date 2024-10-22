<?php

$books =[
    [
        'name' => "Do Androids Dream of Electric Sheep",
        'author' => "Philip K. Dick",
        'releaseYear' => 1968,
        'purchaseUrl' => "http://example.com"    
    ],
    [
        'name' => "Project Hail Marry",
        'author' => "Andy Weir",
        'releaseYear' => 2021,
        'purchaseUrl' => "http://example.com"    
    ],
    [
        'name' => "The Martian",
        'author' => "Andy Weir",
        'releaseYear' => 2011,
        'purchaseUrl' => "http://example.com"    
    ]

   
];      
  


function filter($items, $fn) {
    $filterdItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filterdItems[] = $item;
        }
    }

    return $filterdItems;
}

//$filteredBooks =  filter($books, 'author','Andy Weir');
$filteredBooks = filter($books, function ($book){
    return $book['releaseYear'] >= 2000;
});

require 'seperatelogic.view.php';