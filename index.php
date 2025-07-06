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

    <h1>Peoples</h1>

    <?php
        $peoples = [
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
        <?php foreach($peoples as $people) : ?>
            <li><?= $people['name'] ?> | Age: <?= $people['age'] ?></li>
        <?php endforeach ?>
    <ul>

</body>
</html>
