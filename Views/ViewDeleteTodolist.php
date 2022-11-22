<?php

require_once __DIR__ . "/../Controllers/DeleteTodolist.php";
require_once __DIR__ . "/../Helpers/Input.php";

function viewDeleteTodolist()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $input = input("Nomot (\"x\" untuk batal)");

    if ($input === "x") {
        echo "Batal mengapus todo" . PHP_EOL;
    } else {
        $success = deleteTodolist($input);

        if ($success) {
            echo "Berhasil menghapus todo dengan nomor $input" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo dengan nomor $input" . PHP_EOL;
        }
    }
}
