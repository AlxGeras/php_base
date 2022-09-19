<?php

$name = readline('Как Вас зовут?');
$old = readline('Сколько Вам лет?');

echo ('Вас зовут ' . $name . ' вам '. $old .' лет'.PHP_EOL);


$priorityTaskOne = readline('Какая задача стоит перед вами сегодня?');
$priorityTaskOneTime = readline('Сколько примерно времени эта задача займет?');
$priorityTaskSecond = readline('Какая задача стоит перед вами сегодня?');
$priorityTaskSecondTime = readline('Сколько примерно времени эта задача займет?');
$priorityTaskThird = readline('Какая задача стоит перед вами сегодня?');
$priorityTaskThirdTime = readline('Сколько примерно времени эта задача займет?');

echo $name .', сегодня у вас запланировано 3 приоритетных задачи на день:'.PHP_EOL;
echo '- ' . $priorityTaskOne  . ' (' . $priorityTaskOneTime . 'ч)'.PHP_EOL;
echo '- ' . $priorityTaskSecond  . ' (' . $priorityTaskSecondTime . 'ч)'.PHP_EOL;
echo '- ' . $priorityTaskThird  . ' (' . $priorityTaskThirdTime . 'ч)'.PHP_EOL;
echo 'Примерное время выполнения плана = '. ($priorityTaskOneTime+ $priorityTaskSecondTime +$priorityTaskThirdTime) .'ч';