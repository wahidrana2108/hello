<?php
    include ("db.php");
?>

<form action="#" method="post">
    <input type="email" name="user" placeholder="Enter username" required><br><br>
    <input type="text" name="pass" placeholder="Enter Password" required><br><br>
    <input type="submit" value="Insert" name="login">
</form>


<?php
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

}
?>


