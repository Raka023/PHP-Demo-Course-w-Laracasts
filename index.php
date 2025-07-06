<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
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
    <?php
        $name = "Andy";
        $mature = false;

        if ($mature) {
            $message = "$name is old enough to watch movies";
        } else {
            $message = "$name isn't old enough to watch movies";
        }
    ?>

    <h1>
        <?= $message ?>
    </h1>

</body>
</html>