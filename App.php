<?php 

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewShow.php";
require_once __DIR__ . "/View/ViewAdd.php";
require_once __DIR__ . "/View/ViewRemove.php";
require_once __DIR__ . "/helper/Input.php";

echo "Aplikasi TodoList". PHP_EOL;

viewShowTodoList()

?>