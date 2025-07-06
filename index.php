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
            'birthYear' => 2008,
            'age' => 18
        ],
    ];

    function filterArray($array, $fn) {
        $filteredArrays = [];

        foreach ($array as $data) {
            if ($fn($data)) {
                $filteredArrays[] = $data;
            }
        }

        return $filteredArrays;
    }

    $filteredPersons = array_filter($persons, function ($person) {
        return $person['birthYear'] >= 2008;
    });

    require 'index.view.php';