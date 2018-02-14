<?php
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
        }
        include '../db/database.php';
        
        $session_userID= $_SESSION['user_id'];
        
        $qry_user = "SELECT * FROM tb_user WHERE user_id='$session_userID'";
        $result_user = mysqli_query($link,$qry_user);
        if ($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            
            $s_userFullname = $row_user['user_fullname'];
            $s_userPicture = $row_user['user_picture'];
            mysqli_free_result($result_user);
        }