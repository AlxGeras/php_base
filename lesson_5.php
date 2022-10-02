<?php

require_once ("User.php");
require_once ("Task.php");
require_once ("Comment.php");
require_once ("TaskService.php");

$user = new User('Ivan', 'Ivanov', "ex@ex.ru", 'male',30);

$task  = new Task('Task', $user);

$task->setDescription('Правки');

$task->markAsDone();

$task->setComment(new Comment($user, $task, 'Первый коммент'));

TaskService::addComment($user, $task, 'Второй коммент');

print_r($task);