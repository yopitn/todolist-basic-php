<?php

function showTodolist()
{
    global $todolist;

    echo "TODOLIST" . PHP_EOL;

    if (sizeof($todolist) > 0) {
        foreach ($todolist as $number => $value) {
            echo "$number. $value" . PHP_EOL;
        }
    } else {
        echo "Belum ada todolist" . PHP_EOL;
    }
}
