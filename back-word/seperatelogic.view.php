
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

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <?php echo $book['name']; ?> - <?php echo $book['releaseYear']; ?> - by <?php echo $book['author']; ?>
        </li>
        <?php endforeach; ?>

    </ul>
</body>

</html>