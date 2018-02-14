<?php
        
        include '../db/database.php';
        
        $id = $_GET['id'];
        
        //delete image
        $sql_img = "SELECT user_picture FROM tb_user WHERE user_id='$id'";
        $result_img = mysqli_query($link, $sql_img);
        $img_name = mysqli_fetch_row($result_img);
        @unlink('./dist/img/'.$img_name[0]);
        
        $sql = "DELETE FROM tb_user WHERE user_id='$id' ";
        
        $result = mysqli_query($link, $sql);
        
        if ($result) {
            header("Location: user.php");
        }
        

