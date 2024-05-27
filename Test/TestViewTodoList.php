<?php 

require_once "../Model/TodoList.php";
require_once "../View/ViewShow.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar Pemrograman Kotlin");
addTodoList("Belajar Pemrograman PHP");
addTodoList("Belajar Pemrograman Javascript");
addTodoList("Belajar Kriptografi");

viewShowTodoList();

?>