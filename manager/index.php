<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
    
    <?php include 'header.php'; ?>
     
	 <?php include 'db/config_db.php'; ?>
    
   <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>สถานะงาน</h3>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">หน้าหลัก</a></li>
                        <li class="active">สถานะงาน</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->   
    
    
   <div class="container"> 
    <!-- Default box งานรออยู่-->
          <div class="box">
            <div class="box-header with-border">
             
              
            </div>
            
            
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">งานรอการอนุมัติ</h3>
                  
                  <div class="box-tools">
                     <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
           <div class="row">
               <div class="col-md-4">
                <div class="input-group">
                  <input type="text" class="form-control" name="txtKeyword" id="txtKeyword" placeholder="กรอกรหัสไฟล์งาน..." value="<?php echo $_GET["txtKeyword"];?>">
                  <span class="input-group-btn">
                      <button id="btn_search" name="btn_search" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>
                  </span>
                </div><!-- /input-group -->
               </div>
              </div>
              
               </form>
                  </div>
                  
              <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <?php
                      $sql_jobs = "SELECT COUNT(*) AS count_jobs FROM tb_jobs WHERE jobs_status = 'รอดำเนินการ'";
                      $result_jobs = mysqli_query($link, $sql_jobs);
                      $count_jobs = mysqli_fetch_assoc($result_jobs);
                ?>
                <span class="label label-primary">ทั้งหมด <?= $count_jobs['count_jobs']; ?> รายการ</span>
              </div><!-- /.box-tools -->
                  
                </div><!-- /.box-header -->
                
                 <?php
                  // หาหน้า 
              include '../db/config_db.php';
              $rows = 15;
              
              if($_GET["txtKeyword"] != ""){
              $sql_paper2 = "SELECT * FROM tb_jobs WHERE (jobs_filecode LIKE '%".$_GET["txtKeyword"]."%' or jobs_file LIKE '%".$_GET["txtKeyword"]."%' ) ";
              } else {
             
              $sql_paper2 = "SELECT * FROM tb_jobs";
              }
              
              $total_data = mysql_num_rows(mysql_query($sql_paper2));
               
              // จบการหาจำนวนหน้า
              
               $total_page = ceil($total_data/$rows);   // หารแล้วปัดเศษ
               $page = $_GET[page];
               if($page<=0){
                   $page=1;
               }
               
               if($page>=$total_page){
                   $page = $total_page;
               }
               $start = ($page-1)*$rows;
               if($_GET["txtKeyword"] != ""){
              $sql = "SELECT * FROM tb_jobs WHERE (jobs_filecode LIKE '%".$_GET["txtKeyword"]."%' or jobs_file LIKE '%".$_GET["txtKeyword"]."%' )  ORDER BY jobs_id  ASC Limit $start,15";
              } else {
                    $sql = "SELECT * FROM tb_jobs WHERE jobs_status = 'รอดำเนินการ' ORDER BY jobs_id  ASC Limit $start,15";
                    }
                    
                    
                    $result = mysqli_query($link, $sql);
                     
                    if (!$result){
                       // ถ้าไม่พบข้อมูลที่ต้องการค้นหา  
               ?>
                        
                       <font color=red>
                               <?php    die ("! ไม่พบข้อมูลงานที่ต้องการ");    ?>
                       </font>
                    
               <?
                    } 
              ?>
                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>รหัสไฟล์งาน</th>
                      <th>ชื่อ file</th>
                      <th>ลูกค้า</th>
                     <th>วัน-เดือน-ปี</th>
                      <th>สถานะ</th>
                      
                      <th>Action</th>
                    </tr>
                    
                  <?php  while ($row = mysqli_fetch_row($result)) {  ?>
                  <tr>
                      <td>
                          <?=  $row[7]; ?>
                      </td>
                      <td>
                          <?=  $row[6]; ?>
                      </td>
                      <td>
                          <?=  $row[3]; ?>
                      </td>
                     <td>
                          <?=  $row[2]; ?>
                      </td>
                      <td><span class="label label-warning">
                          <?=  $row[73]; ?>
                          </span>  </td>
                      
                     <td><a href="call_jobs.php?file_code4=<?php echo $row[7]; ?>"  class="btn btn-success btn btn-default" role="button"> <span class="glyphicon glyphicon-ok"></span> อนุมัติงาน</a></td>
                  
                  </tr>
                  <?php } ?>
                                       
                   
                  </table>
               
                  <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li <?php if($page==1){ echo 'class="disabled"'; } ?>>
                                  <a href="index.php?page=<?php echo $page-1;?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <?php for($i=1;$i<=$total_page;$i++){ ?>
                                <li <?php if($page==$i){ echo 'class="active"'; } ?>  ><a href="index.php?page=<?php echo $i;?>&txtKeyword=<?php echo $_GET["txtKeyword"]?>" > <?php echo $i; ?></a></li>

                                <?php } ?>
                                <li <?php if($page==$total_page){ echo 'class="disabled"'; } ?>>
                                  <a href="index.php?page=<?php echo $page+1;?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                      </nav>
                </div><!-- /.box-body -->
             
              </div><!-- /.box -->
           
            
              
            </div>
                
                      
                
          </div>
            
            
            
            
           
          </div><!-- /.box -->
    

    <!-- Default box งานที่เสร็จแล้ว-->
          <div class="box">
            <div class="box-header with-border">
              
              
            </div>
            
            
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">งานอนุมัติแล้ว</h3>
               
                  
                    <div class="box-tools">
                     <form name="frmSearch2" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
           <div class="row">
               <div class="col-md-4">
                <div class="input-group">
                  <input type="text" class="form-control" name="txtKeyword2" id="txtKeyword2" placeholder="กรอกรหัสไฟล์งาน..." value="<?php echo $_GET["txtKeyword2"];?>">
                  <span class="input-group-btn">
                      <button id="btn_search" name="btn_search" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>
                  </span>
                </div><!-- /input-group -->
               </div>
              </div>
              
               </form>
                  </div>
               
                
                   <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <?php
                      $sql_jobs2 = "SELECT COUNT(*) AS count_jobs FROM tb_jobs WHERE jobs_status = 'อนุมัติ'";
                      $result_jobs2 = mysqli_query($link, $sql_jobs2);
                      $count_jobs2 = mysqli_fetch_assoc($result_jobs2);
                ?>
                <span class="label label-primary">ทั้งหมด <?= $count_jobs2['count_jobs']; ?> รายการ</span>
              </div><!-- /.box-tools -->
                
                
                
                </div><!-- /.box-header -->
                
                 <?php
                  // หาหน้า 
              include '../db/config_db.php';
              $rows = 15;
              
              if($_GET["txtKeyword2"] != ""){
              $sql_paper3 = "SELECT * FROM tb_jobs WHERE (jobs_filecode LIKE '%".$_GET["txtKeyword2"]."%' or jobs_file LIKE '%".$_GET["txtKeyword2"]."%' ) ";
              } else {
             
              $sql_paper3 = "SELECT * FROM tb_jobs WHERE jobs_status = 'อนุมัติ'";
              }
              
              $total_data2 = mysql_num_rows(mysql_query($sql_paper3));
               
              // จบการหาจำนวนหน้า
              
               $total_page2 = ceil($total_data2/$rows);   // หารแล้วปัดเศษ
               $page2 = $_GET[page];
               if($page2<=0){
                   $page2=1;
               }
               
               if($page2>=$total_page2){
                   $page2 = $total_page2;
               }
               $start2 = ($page2-1)*$rows;
               if($_GET["txtKeyword2"] != ""){
              $sql = "SELECT * FROM tb_jobs WHERE (jobs_filecode LIKE '%".$_GET["txtKeyword2"]."%' or jobs_file LIKE '%".$_GET["txtKeyword2"]."%' )  ORDER BY jobs_id  ASC Limit $start2,15";
              } else {
                    $sql = "SELECT * FROM tb_jobs WHERE jobs_status = 'อนุมัติ' ORDER BY jobs_id  ASC Limit $start2,15";
                    }
                    
                    
                    $result2 = mysqli_query($link, $sql);
                     
                    if (!$result2){
                       // ถ้าไม่พบข้อมูลที่ต้องการค้นหา  
               ?>
                        
                       <font color=red>
                               <?php    die ("! ไม่พบข้อมูลงานที่ต้องการ");    ?>
                       </font>
                    
               <?
                    } 
              ?>
                
                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>รหัสไฟล์งาน</th>
                      <th>ชื่อ file</th>
                      <th>ลูกค้า</th>
                      <th>วัน-เดือน-ปี</th>
                      <th>สถานะ</th>
                      <th>หมายเหตุ</th>
                    </tr>
                    
                     <?php  while ($row2 = mysqli_fetch_row($result2)) {  ?>
                  <tr>
                      <td>
                          <?=  $row2[7]; ?>
                      </td>
                      <td>
                          <?=  $row2[6]; ?>
                      </td>
                      <td>
                          <?=  $row2[3]; ?>
                      </td>
                     <td>
                          <?=  $row2[2]; ?>
                      </td>
                      <td><span class="label label-success">
                          <?=  $row2[73]; ?>
                          </span>  </td>
                      
                     <td>-</td>
                  
                  </tr>
                  <?php } ?>
                    
                    
                  </table>
                    
                       <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li <?php if($page2==1){ echo 'class="disabled"'; } ?>>
                                  <a href="index.php?page=<?php echo $page2-1;?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <?php for($i=1;$i<=$total_page2;$i++){ ?>
                                <li <?php if($page2==$i){ echo 'class="active"'; } ?>  ><a href="index.php?page=<?php echo $i;?>&txtKeyword=<?php echo $_GET["txtKeyword2"]?>" > <?php echo $i; ?></a></li>

                                <?php } ?>
                                <li <?php if($page2==$total_page2){ echo 'class="disabled"'; } ?>>
                                  <a href="index.php?page=<?php echo $page2+1;?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                      </nav>
                    
                    
                    
                    
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
            
            
            
            
            <div class="box-footer">
              
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

   </div>

    <?php // include 'bottom.php'; ?>

    <?php include 'footer.php'; ?>
    
    


</body>
</html>