<?php 
$host = "127.0.0.1";
$port = "80811";
$timeout = "3";

$socket = socket_create(AF_INET, SOCK_STREAM,0) or die("Couldn't create socket");
$result = socket_bind($socket, $host, $port) or die("Couldn't bind");
$result = socket_listen($socket, $timeout) or die("Couldn't listen");

do{
    $accept = socket_accept($socket) or die("Couldn't accept");

    $msg = socket_read($accept,1024);
    $msg = trim($msg);
    echo $msg."\n";
    echo"Enter your reply:";
    $reply = fgets(STDIN);
    socket_write($accept,$reply,strlen($reply));

    }while (true);

socket_close($socket);
?>

