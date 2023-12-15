<?php 
    include 'config.php';
    $id = $_POST['id'];

    if ($id) {
        $sql = "DELETE FROM feed WHERE id='$id'";
        $result = $conn -> query($sql);
        
        header("location:admin.php");
    }
?>