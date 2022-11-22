<?php

require_once __DIR__ . "/../Models/Todolist.php";
require_once __DIR__ . "/../Controllers/ShowTodolist.php";
require_once __DIR__ . "/../Views/ViewAddTodolist.php";
require_once __DIR__ . "/../Views/ViewDeleteTodolist.php";
require_once __DIR__ . "/../Helpers/Input.php";

function viewShowTodolist()
{
    while (true) {
        showTodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah todo" . PHP_EOL;
        echo "2. Hapus todo" . PHP_EOL;
        echo "x. Keluar aplikasi" . PHP_EOL;
        echo PHP_EOL;
        
        $input = input("Pilih");

        if ($input === "1") {
            viewAddTodolist();
        } else if ($input === "2") {
            viewDeleteTodolist();
        } else if ($input === "x") {
            break;
        } else {
            echo "Pilihan yang kamu masukkan tidak dimengerti, silahkan coba lagi." . PHP_EOL;
        }
    }

    echo "Kamu keluar dari aplikasi, terimakasih." . PHP_EOL;
}
