<?php

require_once __DIR__ . "/../Models/Todolist.php";
require_once __DIR__ . "/../Controllers/ShowTodolist.php";
require_once __DIR__ . "/../Controllers/AddTodolist.php";

$todolist[1] = "TEST1";
$todolist[2] = "TEST2";

addTodolist("TEST1");
addTodolist("TEST2");

showTodolist();
