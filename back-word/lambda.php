<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>

    <h1>Recommended Books</h1>
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
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <?php echo $book['name']; ?> - <?php echo $book['releaseYear']; ?> - by <?php echo $book['author']; ?>
            </li>
        <?php endforeach; ?>

    </ul>
</body>

</html>