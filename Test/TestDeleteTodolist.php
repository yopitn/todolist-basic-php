<?php

require_once __DIR__ . "/../Models/Todolist.php";
require_once __DIR__ . "/../Controllers/ShowTodolist.php";
require_once __DIR__ . "/../Controllers/AddTodolist.php";
require_once __DIR__ . "/../Controllers/DeleteTodolist.php";

addTodolist("TEST1");
addTodolist("TEST2");
addTodolist("TEST3");

showTodolist();

deleteTodolist(2);

showTodolist();
