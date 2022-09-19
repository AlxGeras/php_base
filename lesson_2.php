<?php

//Task 1

do{
    $userAnswer = readline('Назовите год основания города Москва? Варианты: 1147, 1100, 1200'.PHP_EOL);
    gettype($userAnswer);
if ($userAnswer == '1147'){
    echo('Вы угадали'.PHP_EOL);
}
elseif($userAnswer == '1100' || $userAnswer == '1200'){
    echo('Вы не угадали'.PHP_EOL);
}
} while($userAnswer != '1100' && $userAnswer != '1200' && $userAnswer != '1147');

//Task 2

$name = readline('Как Вас зовут?');
$numberOfTasks = readline('Сколько дел на сегодня запланировано?');
$sumOfTimeTasks = 0;
$resultOfBuildDayTasks = $name .', сегодня у вас запланировано '. $numberOfTasks .' приоритетных задачи на день:'.PHP_EOL;

for ($i=0;$i<$numberOfTasks;$i++){
    $priorityTask = readline('Какая задача стоит перед вами сегодня?');
    $priorityTaskTime = readline('Сколько примерно времени эта задача займет?');
    $resultOfBuildDayTasks .= '- ' . $priorityTask  . ' (' . $priorityTaskTime . 'ч)'.PHP_EOL;
    $sumOfTimeTasks += $priorityTaskTime;
}
echo $resultOfBuildDayTasks;
echo 'Примерное время выполнения плана = '. ($sumOfTimeTasks) .'ч';

// Task 3

do {
$numberOfFinger = readline('Назоваите номер пальца по счету'.PHP_EOL);
    if((int) $numberOfFinger > 0){
switch ($numberOfFinger){
    case (($numberOfFinger - 1)%8 == 0): echo 'Большой палец'.PHP_EOL; break;
    case (($numberOfFinger - 2)%8 == 0 || ($numberOfFinger - 8)%8 == 0): echo 'Указательный палец'.PHP_EOL; break;
    case (($numberOfFinger - 3)%8 == 0 || ($numberOfFinger - 7)%8 == 0): echo 'Средний палец'.PHP_EOL; break;
    case (($numberOfFinger - 4)%8 == 0 || ($numberOfFinger - 6)%8 == 0) : echo 'Безымянный палец'.PHP_EOL; break;
    case (($numberOfFinger - 5)%8 == 0): echo 'Мизинец'.PHP_EOL; break;
        }
    }
} while ($numberOfFinger <=0);


