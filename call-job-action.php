<?php
		$file_code = $_POST["file_code"];
		
		include 'db/database.php';
		
	
		$qry_filecode = "SELECT * FROM tb_jobs WHERE jobs_filecode='$file_code'";
        $result_filecode = mysqli_query($link,$qry_filecode);
        if ($result_filecode) {
            $row_filecode = mysqli_fetch_array($result_filecode,MYSQLI_ASSOC);
            
            $jobs_customer = $row_filecode['jobs_customer'];
            $jobs_file = $row_filecode['jobs_file'];
            mysqli_free_result($result_filecode);
        }
 
        
	 header("location:call_jobs.php?jobs_customer2=$jobs_customer&jobs_file2=$jobs_file&file_code=$file_code");
		
		
?>