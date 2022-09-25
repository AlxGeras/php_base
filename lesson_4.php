<?php

//Task 1

$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$newArray = array_map(function ($elem){
   if ($elem%2 == 0){
       return 'Четное';
   }
   else{
       return 'Нечетное';
   }
}, $array);

print_r($newArray);

//Task 2

$array = [1,2,3,4,5,6,7,8,9];

function myFunction(array $array) : array
{
    $max = $array[0];
    $min = $array[0];
    $avg = 0;
    foreach ($array as $value){
        if ($value < $min){
            $min = $value;
        }
        if ($value > $max){
            $max = $value;
        }
        $avg += $value;
    }
 return [$min, $max, $avg/sizeof($array)];
}

print_r(myFunction($array));

// Task 3

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];



function searchItem($item, $box){
    foreach ($box as $value) {
        if ($value == $item) {
            return true;
        }
        elseif (gettype($value) == 'array') {
            if (searchItem($item, $value) == true){
                return true;
            }
        }
    }
    return false;
}

$item = 'Ключ';

echo searchItem($item, $box) ? $item . ' найден в коробке'.PHP_EOL: $item . ' не найден в коробке'.PHP_EOL;

$item = 'Неизвестный предмет';

echo searchItem($item, $box) ? $item . ' найден в коробке'.PHP_EOL: $item . ' не найден в коробке'.PHP_EOL;