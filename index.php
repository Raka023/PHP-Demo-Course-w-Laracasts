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
            'Andy',
            'Abdullah',
            'Jojo'
        ];
    ?>

    <ul>
        <?php foreach($peoples as $people) : ?>
            <li><?= $people ?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>