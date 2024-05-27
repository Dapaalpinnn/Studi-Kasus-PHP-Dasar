<?php 

require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";

function ViewAddtodoList(){
    echo "--- Menambah To Do ---" . PHP_EOL;

    $todo = input("Masukkan Kegiatanmu (ketik x untuk batal)");
    if($todo == "x"){
        echo "Baiklah semoga ingat >_-";
    } else {
        addTodoList($todo);
    }
    
}

?>