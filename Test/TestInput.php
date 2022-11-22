<?php

require_once __DIR__ . "/../Helpers/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;
$age = input("Age");
echo "Your age is $age" . PHP_EOL;