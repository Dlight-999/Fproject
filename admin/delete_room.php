<?php
    include('../config/constants.php');


    if(isset($_GET['id'])){
        $id = $_GET['id'];


        $sql = "DELETE FROM room WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        if($res==true){
            $_SESSION['delete']="Package deleted sucessfully";
            header('location:'.siteurl.'admin/room.php');
        }
        else{
            $_SESSION['delete']="Failed to delete";
            header('location:'.siteurl.'admin/room.php');
        }
        
    }

    else{
        header('location:'.siteurl.'admin/room.php');
    }


?>