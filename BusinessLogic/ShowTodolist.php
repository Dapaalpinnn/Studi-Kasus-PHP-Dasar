<?php 

function showTodoList(){

    // Mengambil array dari global scope
    global $todoList; 
    echo "TODOLIST" . PHP_EOL;

    // Meampilkan Todolist menggunakan array foreach 
    foreach($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    };

};
?>