<?php

$hash= $_POST["hash"];
$hash= strtolower($hash);

function formd5($hash){
echo "md5 hash identified!!<br>";
$handle= fopen("password.txt","r");

if($handle){
  while (($line = fgets($handle)) !== false){
    $hash_line= md5(trim($line));
    if($hash_line === $hash){
      echo "PAssword cracked !! <br>";
      echo "Cracked string:". $line;
    }
  }
}
else {
  echo "error file opening!!";
}

}

function forsha1($hash){
  echo "sha1 hash identified!<br>";
  $handle= fopen("password.txt","r");

  if($handle){
    while (($line = fgets($handle)) !== false){
      $hash_line= sha1(trim($line));
      if($hash_line === $hash){
        echo "PAssword cracked !! <br>";
        echo "Cracked string:". $line;
      }
    }
  }
  else {
    echo "error file opening!!";
  }
}

if(strlen($hash)==32){
  formd5($hash);
}
elseif (strlen($hash)==40) {
  forsha1($hash);
}
else {
  echo "Bad input// coulnt identify md5 or sha1 hash---";
}


















 ?>
