<?php 

// Menerima input data berupa number dari todolist
function removeTodoList(int $number) : bool
{
    // Mengambil variable global
    global $todoList; 

    // Cek apakah data ada, jika tidak, return false
    if($number > sizeof($todoList)){ 
        return false;
    }
    
    // Mengganti data yang dihapus dengan menggeser data selanjutnya.
    for($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$i] = $todoList[$i + 1];    
    };

    // Menghapus sisa nomor terakhir yang kosong
    unset($todoList[sizeof($todoList)]);

    return true;

}
?>