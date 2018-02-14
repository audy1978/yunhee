<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <?php include 'head.php';  ?>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <?php include 'header.php';  ?>
      
      <!-- Left side column. contains the logo and sidebar -->
      <?php include 'leftside.php' ?>;

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            ยินดีต้อนรับ
            <small>คุณ <?php echo $s_userFullname; ?> [ ID: <?php echo  $_SESSION['user_id']; ?>] </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
       
          
          <div class="row">
          <div class="col-md-12">
            <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                  
                <div class="box-header with-border">
                  <h3 class="box-title">รายการงานล่าสุด</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                  <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <?php
                      $sql_jobs = "SELECT COUNT(*) AS count_jobs FROM tb_jobs";
                      $result_jobs = mysqli_query($link, $sql_jobs);
                      $count_jobs = mysqli_fetch_assoc($result_jobs);
                ?>
                <span class="label label-primary">ทั้งหมด <?= $count_jobs['count_jobs']; ?> รายการ</span>
              </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                
                   <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
           <div class="row">
               <div class="col-md-4">
                <div class="input-group">
                  <input type="text" class="form-control" name="txtKeyword" id="txtKeyword" placeholder="กรอกรหัสไฟล์งาน..." value="<?php echo $_GET["txtKeyword"];?>">
                  <span class="input-group-btn">
                      <button id="btn_search" name="btn_search" class="btn btn-default" type="submit">ค้นหา</button>
                  </span>
                </div><!-- /input-group -->
               </div>
              </div>
              
               </form>
                
                <div class="box-body">
                    
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
              $sql = "SELECT * FROM tb_jobs WHERE (jobs_filecode LIKE '%".$_GET["txtKeyword"]."%' or jobs_file LIKE '%".$_GET["txtKeyword"]."%' ) ORDER BY jobs_id  ASC Limit $start,15";
              } else {
                    $sql = "SELECT * FROM tb_jobs ORDER BY jobs_id  ASC Limit $start,15";
                    }
                    
                    
                    $result = mysqli_query($link, $sql);
                    
                      if (!$result){
                          die ("! ไม่พบข้อมูลงานที่ต้องการ");
                     } 
                    
              ?>
                    
                    
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>รหัสไฟล์งาน</th>
                          <th>ชื่อ file</th>
                          <th>Status</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                <?php  while ($row = mysqli_fetch_row($result)) {  ?>
                  <tr>
                      <td>
                          <?=  $row[7]; ?>
                      </td>
                      <td>
                          <?=  $row[6]; ?>
                      </td>
                      <td>
                          
                     <?php if ($row[73]=='รอดำเนินการ'){  ?>
                          <span class="label label-warning">  <?=  $row[73]; ?> </span>
                    <?php   }else{   ?>
                      
                       <span class="label label-success">  <?=  $row[73]; ?> </span>
                  <?php    }  ?>
                      
                      </td>
                 
                  
                  
                  </tr>
                  <?php } ?>
                     
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
             
              </div><!-- /.box -->
            </div><!-- /.col -->
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
          
          
          
       

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  


      <!-- Main Footer -->
      <?php include 'footer.php'; ?>
      
      
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
