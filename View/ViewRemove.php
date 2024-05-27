<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function ViewRemovetodoList(){
    echo "Menghapus Todolist";

    $pilihan = input("Nomor (Ketik 'x' untuk batal)");

    if($pilihan == "x"){
        echo "Batal menghapus Todolist" . PHP_EOL;
    } else {

        $succes = removeTodoList($pilihan);
    
        if($succes){
            echo "Sukses menghapus Todolist nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus Todolist nomor $pilihan" . PHP_EOL;
        }
    }
}

?>