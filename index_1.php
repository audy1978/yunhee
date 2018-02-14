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
                  <h3 class="box-title">งานรอดำเนินการ</h3>
                  
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
                         <?php
                           if($_SESSION['user_level'] == 'จนท. ขาย') {
                               
                           ?>
                            <td><a href="edit_data_job.php?id_edit=<?php echo $objResuut['jobs_id']; ?>"  class="btn btn-success btn btn-default" role="button"> <span class="glyphicon glyphicon-pencil"></span> แก้ไข</a></td>
                          
                            <?php }else{ ?>    
                            <td><a href="call_jobs.php?file_code=<?php echo $objResuut['jobs_filecode']; ?>&jobs_customer2=<?php echo $objResuut['jobs_customer']; ?>&jobs_file2=<?php echo $objResuut['jobs_file']; ?> "  class="btn btn-success btn btn-default" role="button"> <span class="glyphicon glyphicon-pencil"></span> แก้ไขแฟ้มงาน</a></td>
                          
                            <?php }  ?>
                          
                    
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
              หมายเหตุ :
            </div><!-- /.box-footer-->
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
                      <td><span class="label label-success"><?php echo $objResuut["jobs_status"];?></span></td>
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
              หมายเหตุ :
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

    </div>    <!-- /.containner -->

    <?php // include 'bottom.php'; ?>

    <?php include 'footer.php'; ?>
    
    


</body>
</html>


