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
                'birthYear' => 2007,
                'age' => 18
            ],
            [
                'name' => 'Abdullah',
                'birthYear' => 2009,
                'age' => 16
            ],
            [
                'name' => 'Jojo',
                'birthYear' => 2007,
                'age' => 18
            ],
        ];

        function filterArray($array, $key, $value) {
            $filteredArrays = [];

            foreach ($array as $data) {
                if ($data[$key] === $value) {
                    $filteredArrays[] = $data;
                }
            }

            return $filteredArrays;
        }
    ?>

    <ul>
        <?php foreach (filterArray($persons, 'age', 18) as $person) : ?>
            <li><?= $person['name'] ?> | Births Year : <?= $person['birthYear'] ?> | Age: <?= $person['age'] ?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>
