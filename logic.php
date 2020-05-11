<?php

$hash=$_POST["hash"];
$hash= strtolower($hash);

$handle = fopen("password.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $hash_line= md5(trim($line));
        if($hash_line === $hash){
          echo "Password cracked! <br>";
          echo "Cracked string:".$line;

        }
    }

    }

else{
  echo "file error";
}
