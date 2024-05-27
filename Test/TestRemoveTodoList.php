<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/RemoveTodoList.php";

// Add Todolist
addTodoList("Belajar Javascript");
addTodoList("Belajar Database MySQL");
addTodoList("Belajar Typescript");

// Show Todolist
showTodoList();

// Remove todolist
removeTodoList(3);
showTodoList();

// Hapus data nomor Todolist yang tidak ada
$succes = removeTodoList(3);
var_dump($succes);

showTodoList();

?>