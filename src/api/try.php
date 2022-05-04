<?php

// $pw = password_hash('admin1', PASSWORD_DEFAULT);
// echo $pw, "<br>";
// if( password_verify('admin1', $pw )){
//     echo 'true';
// }else{
//     echo 'false';
// }

echo sha1(time())."<br>";
var_dump(sha1(time()));




?>