<?php 
include("db.php");
?>

<form method="post">
    <input type="text" name="id" placeholder="id">
    <input type="text" name="title" placeholder="title">
    <br>
    <input name="submit" type="submit" value="inset">
</form>

<?php
    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $title = $_POST['title'];

        
        echo "$id";
        echo " $title";
        
        $update = "update category set cat_title = '$title' where cat_id = '$id'";
        $run = mysqli_query($con,$update);

        if ($run) {
            echo"<script>alert('updated successfully');</script>";
        }



       
    }



    
?>