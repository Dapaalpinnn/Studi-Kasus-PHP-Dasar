<?php 

require_once "../View/ViewRemove.php";
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";

addTodoList("Dafa");
addTodoList("Alvin");
addTodoList("Zuhdi");

showTodoList();

ViewRemovetodoList();

showTodoList();
?>