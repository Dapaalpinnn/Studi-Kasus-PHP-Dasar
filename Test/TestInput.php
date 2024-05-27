<?php 

require_once "../Helper/Input.php";

$name = input("Name");

$umur = input("Umur");
echo "Selamat Datang $name " . PHP_EOL;
echo "$umur Tahun";


?>