<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";

// Menampilkan todolist
$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";

showTodoList();

?>