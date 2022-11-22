<?php

require_once __DIR__ . "/../Models/Todolist.php";
require_once __DIR__ . "/../Controllers/ShowTodolist.php";
require_once __DIR__ . "/../Controllers/AddTodolist.php";
require_once __DIR__ . "/../Views/ViewDeleteTodolist.php";

$todolist[1] = "TEST1";
$todolist[2] = "TEST2";
$todolist[3] = "TEST3";
$todolist[4] = "TEST4";

showTodolist();

viewDeleteTodolist();

showTodolist();
