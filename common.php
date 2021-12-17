<?php

 if(isset($_GET['lang'])){ 
    $lang=$_GET['lang'];
}else{
    $lang='en';
}

switch($lang){
   case 'en':
   $lang_file = 'en.php';
   break;

   case 'ua':
   $lang_file = 'ua.php';
   break;

   default:
   $lang_file= 'en.php';

}
include 'languages/'.$lang_file;
?>