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
                    <div class="input-group" style="width: 200px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="กรอกรหัสงาน">
                      <div class="input-group-btn">
                        <button  id="submit_edit" name="submit_edit" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>
                      </div>
                    </div>
                  </div>
                  
                </div><!-- /.box-header -->
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
                    
                    <?php
			$strSQL = "SELECT * FROM tb_jobs WHERE jobs_status = 'รอดำเนินการ'";
			$objQuery = mysql_query($strSQL);
			while($objResuut = mysql_fetch_array($objQuery))
			{
			?>
			
                    <tr>
                      <td><?php echo $objResuut["jobs_filecode"];?></td>
                      <td><?php echo $objResuut["jobs_file"];?></td>
                      <td><?php echo $objResuut["jobs_contact"];?></td>
                      <td><?php echo $objResuut["jobs_date"];?></td>
                      <td><span class="label label-warning"><?php echo $objResuut["jobs_status"];?></span></td>
                      
                      <td><a href="call_jobs.php?file_code4=<?php echo $objResuut['jobs_filecode']; ?>"  class="btn btn-success btn btn-default" role="button"> <span class="glyphicon glyphicon-ok"></span> อนุมัติงาน</a></td>
                    </tr>
            
			
            
			
			<?php
			}
			?>
                                       
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
                
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
                    <div class="input-group" style="width: 200px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="กรอกรหัสงาน">
                      <div class="input-group-btn">
                        <button  id="submit_edit" name="submit_edit" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
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
                    <?php
			$strSQL = "SELECT * FROM tb_jobs WHERE jobs_status = 'อนุมัติ'";
			$objQuery = mysql_query($strSQL);
			while($objResuut = mysql_fetch_array($objQuery))
			{
			?>
			
                    <tr>
                      <td><?php echo $objResuut["jobs_filecode"];?></td>
                      <td><?php echo $objResuut["jobs_file"];?></td>
                      <td><?php echo $objResuut["jobs_contact"];?></td>
                      <td><?php echo $objResuut["jobs_date"];?></td>
                      <td><span class="label label-success">อนุมัติแล้ว</span></td>
                      <td>-</td>
                    </tr>
            
			
            
			
			<?php
			}
			?>
                  </table>
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