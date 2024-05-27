<?php 

require_once "../View/ViewAdd.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";

addTodoList("Beli makan");
addTodoList("Beli Pulsa");
addTodoList("Main game");

ViewAddtodoList();

showTodoList();

?>