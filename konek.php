<?php

//host, user, password, nama database
$link = mysqli_connect('localhost', 'root','', 'php-api');

//menguji error
if( !$link ){
    die('ada error' . mysqli_connect_error());
}
?>
