<?php

require_once "./Models/Todolist.php";
require_once "./Controllers/ShowTodolist.php";
require_once "./Controllers/AddTodolist.php";
require_once "./Controllers/DeleteTodolist.php";
require_once "./Views/ViewShowTodolist.php";
require_once "./Views/ViewAddTodolist.php";
require_once "./Views/ViewDeleteTodolist.php";

echo "APLIKASI TODOLIST" . PHP_EOL;
echo "=====================" . PHP_EOL;

viewShowTodolist();
