<?php 

    if(isset($_POST['submit']) && $_POST['msg']!=''){
    $host = "127.0.0.1";
    $port = "80811";
    $msg = $_POST['msg'];
    $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Couldn't create socket");
    socket_connect($socket, $host, $port) or die("Couldn't connect");
    socket_write($socket, $msg, strlen($msg)) or die("Couldn't write");

    $reply = socket_read($socket,1024);
    $reply = trim($reply);
    echo $reply;
    socket_close($socket);

    }
?>


<form action="" method="post">
    <input type="text" name="msg" id="">
    <input type="submit" value="send" name="submit">
</form>