<?php

//Task 1

$arrayOne = [1,2,3,4,5,6,7,8,9,10];
$arrayTwo = [1,2,3,4,5,6,7,8,9,10];
$result = [];
foreach ($arrayOne as $key => $value){
    $result[] = $value*$arrayTwo[$key];
}

print_r($result);

//Task 2

$arrayOne = ['бесконечного', 'крепкого','космического'];
$arrayTwo = ['счастья', 'здоровья','терпения'];
$arrayResult = [];
foreach ($arrayOne as $value){
    $arrayResult[] = $arrayOne[array_rand($arrayOne)] . ' ' . $arrayTwo[array_rand($arrayTwo)];
}
$result = implode(', ', array_slice($arrayResult,0,2));

$name = readline('Введите Ваше имя'.PHP_EOL);

echo 'Дорогой ' . $name . ', от всего сердца поздравляю тебя с днем рождения, желаю ' . $result . ' и ' . $arrayResult[2]. '!'.PHP_EOL;



//Task 3
$result = [];

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3
    ],
    'БАП20' => [
        'Антонов Антон' => 4
    ]
];
$students['ИТ20']['Петр Петров'] = 5;
$students['БАП20']['Семен Семенов'] = 2;

foreach ($students as $group => $studentsInGroup){
    $sumMark = 0;
    foreach ($studentsInGroup as $student => $mark){
        $sumMark += $mark;
        if ($mark< 3){
            $lowMarkStudents[$group] = $student;
        }
    }
    $result[$group]['averageMark'] = $sumMark/count($studentsInGroup);
}

print_r($result);

foreach ($result as $key => $value){
    echo 'Средний балл группы ' . $key . ' равен ' . $value['averageMark'].PHP_EOL;

}

foreach ($result as $key => $row)
{
    $tempArray[$key] = $row['averageMark'];
}
array_multisort($tempArray, SORT_DESC, $result);

print_r($tempArray);

foreach ($tempArray as $key => $value){
    echo 'Самая высокая успеваемость у группы ' .$key .' имеющая средний балл ' .$value.PHP_EOL;
    break;
}

echo 'Список студентов на отчисление, имеющих оценку меньше 3'.PHP_EOL;

print_r($lowMarkStudents);
