<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar pemrograman Dart");
addTodoList("Belajar pemrograman Kotlin");
addTodoList("Belajar pemrograman React");
addTodoList("Belajar Web");
addTodoList("Belajar HTTP attack");

var_dump($todoList)

?>