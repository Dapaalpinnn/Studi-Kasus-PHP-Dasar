<?php 

// Menerima input data berupa string
function addTodoList(string $todo){

    // Mengambil variable global
    global $todoList;

    // Melihat panjang array sebelumnya + 1
    $number = sizeof($todoList) + 1; 

    // Memasukkan $todo ke list
    $todoList[$number] = $todo;
    
}
?>