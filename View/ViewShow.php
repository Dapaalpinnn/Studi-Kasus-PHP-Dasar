<?php 

require_once __DIR__ . "/../BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../View/ViewAdd.php";
require_once __DIR__ . "/../View/ViewRemove.php";

function viewShowTodoList(){
    while(true){

        showTodoList();
    
        echo "Pilihan: " . PHP_EOL;
        echo "1. Tambah Todolist" . PHP_EOL;
        echo "2. Todolist Selesai" . PHP_EOL;
        echo "x. Keluar " . PHP_EOL;
    
        $pilihan = input("Pilih");
        if($pilihan == "1"){
            ViewAddtodoList();
        } else if($pilihan == "2"){
            ViewRemovetodoList();
        } else if($pilihan == "x"){
            break;
        } else{
            echo "----- Pilihan Tidak Valid -----" . PHP_EOL;
        }
    }
    echo "Good Bye >_-";
}
?>