<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
    <style>
        * {
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <h1>Persons</h1>

    <?php
        $persons = [
            [
                'name' => 'Andy',
                'age' => 18
            ],
            [
                'name' => 'Abdullah',
                'age' => 16
            ]
        ];
    ?>

    <ul>
        <?php foreach($persons as $person) : ?>
            <li><?= $person['name'] ?> | Age: <?= $person['age'] ?></li>
        <?php endforeach ?>
    <ul>

</body>
</html>
