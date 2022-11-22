<?php

require_once __DIR__ . "/../Models/Todolist.php";
require_once __DIR__ . "/../Controllers/AddTodolist.php";
require_once __DIR__ . "/../Helpers/Input.php";

function viewAddTodolist()
{
    echo "MENAMBAH TODO BARU" . PHP_EOL;

    $input = input("Todo (\"x\" untuk batal)");

    if ($input === "x") {
        echo "Batal menambahkan todo baru" . PHP_EOL;
    } else {
        addTodolist($input);
    }
}
