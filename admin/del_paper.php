<?php
        
        include '../db/database.php';
        
        $id = $_GET['id'];
        
        
        
        $sql = "DELETE FROM tb_paper2 WHERE paper_id='$id' ";
        
        $result = mysqli_query($link, $sql);
        
        if ($result) {
            header("Location: paper.php");
        }
        

