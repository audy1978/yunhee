<?php
        $menu_active = basename($_SERVER['REQUEST_URI']);
?>


<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    switch ($menu_active) {
                        case "index.php":
                        
				if ($_SESSION['user_level'] == 'จนท. ขาย' OR $_SESSION['user_level'] == 'จนท. จัดซื้อ' OR $_SESSION['user_level'] == 'จนท.ตัวอย่าง') {
						if($_SESSION['user_level'] == 'จนท. จัดซื้อ' OR $_SESSION['user_level'] == 'จนท.ตัวอย่าง') {
						     
                                                      if($_SESSION['user_level'] == 'จนท.ตัวอย่าง'){ 
                                                         echo '<li class="active"><a href="index.php">หน้าหลัก</a></li>
                                                         <li><a href="call_jobs.php">เรียกแฟ้มงาน</a></li>
                                                          <li><a href="order_exa_exa.php">ใบสั่งทำตัวอย่าง</a></li>';
                                                      }else{
                                                          echo '<li class="active"><a href="index.php">หน้าหลัก</a></li>
                                                         <li><a href="call_jobs.php">เรียกแฟ้มงาน</a></li>';
                                                      }
                        
                                                
                                                } else {
							
							echo '<li class="active"><a href="index.php">หน้าหลัก</a></li>
                                                        <li><a href="create_job.php">สร้างงาน</a></li>
                                                        
                                                            <li><a href="order_exa.php">ใบสั่งทำตัวอย่าง</a></li>';
                                                        
						}
					 
					 				 
		                    } else {
						
						echo '<li class="active"><a href="index.php">หน้าหลัก</a></li>
                                                    <li><a href="create_job.php">สร้างงาน</a></li>
                                                    <li><a href="call_jobs.php">เรียกแฟ้มงาน</a></li>
					';
						
					}
					                  
						    break;
                        case "create_job.php":
                        if ($_SESSION['user_level'] == 'จนท. ขาย' OR $_SESSION['user_level'] == 'จนท. จัดซื้อ' OR $_SESSION['user_level'] == 'จนท.ตัวอย่าง') {
						echo '<li><a href="index.php">หน้าหลัก</a></li>
                    <li class="active"><a href="create_job.php">สร้างงาน</a></li> 
                    <li><a href="order_exa.php">ใบสั่งทำตัวอย่าง</a></li>';
                    
                
						}else {
							
							echo '<li><a href="index.php">หน้าหลัก</a></li>
                    <li class="active"><a href="create_job.php">สร้างงาน</a></li>
                    <li><a href="call_jobs.php">เรียกแฟ้มงาน</a></li>
                    ';
						}
                                                
                                                					
							break;
                                                        
                                                        
                     case "order_exa.php":
                        if ($_SESSION['user_level'] == 'จนท. ขาย' OR $_SESSION['user_level'] == 'จนท. จัดซื้อ' OR $_SESSION['user_level'] == 'จนท.ตัวอย่าง') {
						echo '<li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="create_job.php">สร้างงาน</a></li> 
                    <li class="active"><a href="order_exa.php">ใบสั่งทำตัวอย่าง</a></li>';
                    
                
						}else {
							
							echo '<li><a href="index.php">หน้าหลัก</a></li>
                    <li class="active"><a href="create_job.php">สร้างงาน</a></li>
                    <li><a href="call_jobs.php">เรียกแฟ้มงาน</a></li>
                    ';
						}
                                                
                                                					
							break;
                                                        
                                                        
                                                        
                        case "call_jobs.php":
                       if ($_SESSION['user_level'] == 'จนท. ขาย' OR $_SESSION['user_level'] == 'จนท. จัดซื้อ' OR $_SESSION['user_level'] == 'จนท.ตัวอย่าง') {
					    
						if ($_SESSION['user_level'] == 'จนท. จัดซื้อ' OR $_SESSION['user_level'] == 'จนท.ตัวอย่าง') {
						echo '<li><a href="index.php">หน้าหลัก</a></li>
                              <li class="active"><a href="call_jobs.php">เรียกแฟ้มงาน</a></li>';
						} else {
							
							echo '<li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="create_job.php">สร้างงาน</a></li>';
                    
							
						}
					   
					   
					   }else {
						  echo '<li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="create_job.php">สร้างงาน</a></li>
                    <li class="active"><a href="call_jobs.php">เรียกแฟ้มงาน</a></li>'; 
					   
					   }
							
							break;
                                                        
                                                        
                                                      
                                                        
                       
                    }   
                    ?>
                    
                  
                    <li><a href="ch_password.php">เปลี่ยนรหัสผ่าน</a></li>
                    <li><a href="logout.php">ออกจากระบบ</a></li>
                    
      
                   
            
                    
                    
                    <li><a href="#">สวัสดี :  <? echo $_SESSION['user_fullname'];?></a></li>
                    
                    
                </ul>
            </div>
        </div>
    





</header><!--/header-->