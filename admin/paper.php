<?php
        include '../db/database.php';
?>
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
            ข้อมูลกระดาษ
            <small>จัดการข้อมูลกระดาษ</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
            <li class="active">ข้อมูลกระดาษ</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          <a href="frm_paper.php" class="btn btn-primary">เพิ่มรายการ</a>
          <br><br>
          <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
           <div class="row">
               <div class="col-md-4">
                <div class="input-group">
                  <input type="text" class="form-control" name="txtKeyword" id="txtKeyword" placeholder="กรอกรหัส หรือ ยี่ห้อ" value="<?php echo $_GET["txtKeyword"];?>">
                  <span class="input-group-btn">
                      <button id="btn_search" name="btn_search" class="btn btn-default" type="submit">ค้นหา</button>
                  </span>
                </div><!-- /input-group -->
               </div>
              </div>
              
               </form>
          
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">ข้อมูลกระดาษ</h3>
              <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <?php
                      $sql_user = "SELECT COUNT(*) AS count_user FROM tb_paper2";
                      $result_user = mysqli_query($link, $sql_user);
                      $count_user = mysqli_fetch_assoc($result_user);
                ?>
                <span class="label label-primary">ทั้งหมด <?= $count_user['count_user']; ?> รายการ</span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
              <?php
                  // หาหน้า 
              include '../db/config_db.php';
              $rows = 20;
              
              if($_GET["txtKeyword"] != ""){
              $sql_paper2 = "SELECT * FROM tb_paper2 WHERE (paper_id LIKE '%".$_GET["txtKeyword"]."%' or paper_band LIKE '%".$_GET["txtKeyword"]."%' ) ";
              } else {
             
              $sql_paper2 = "SELECT * FROM tb_paper2";
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
              $sql = "SELECT * FROM tb_paper2 WHERE (paper_id LIKE '%".$_GET["txtKeyword"]."%' or paper_band LIKE '%".$_GET["txtKeyword"]."%' ) ORDER BY paper_id  ASC Limit $start,20 ";
              } else {
                    $sql = "SELECT * FROM tb_paper2 ORDER BY paper_id  ASC Limit $start,20";
                    }
                    
                    
                      $result = mysqli_query($link, $sql);   
                     
                    if (!$result){
                          die ("! ไม่พบข้อมูลกระดาษที่ต้องการ");
                     }              
                
                
              ?>
              <table class="table table-striped">
                  <tr>
                      <th>รหัส</th>
                      <th>ประเภทกระดาษ</th>
                      <th>ผู้ขาย</th>
                      <th>ยี่ห้อ</th>
                      <th>ความหนา</th>
                     
                      <th>แก้ไข</th>
                  </tr>
                  <?php  while ($row = mysqli_fetch_row($result)) {  ?>
                  <tr>
                      <td>
                          <?=  $row[0]; ?>
                      </td>
                      <td>
                          <?=  $row[1]; ?>
                      </td>
                      <td>
                          <?=  $row[2]; ?>
                      </td>
                      <td>
                          <?=  $row[3]; ?>
                      </td>
                      <td>
                          <?=  $row[4]; ?>
                      </td>
                   
                      <td>
                          <a id="btn_edit" name="btn_edit" href="paper_edit.php?id=<?= $row[0]; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                      </td>
                  
                  </tr>
                  <?php  } ?>
              </table>
                
            </div><!-- /.box-body -->
            <div class="box-footer">
              
            </div><!-- box-footer -->
          </div><!-- /.box -->
          
          <nav aria-label="Page navigation">
  <ul class="pagination">
    <li <?php if($page==1){ echo 'class="disabled"'; } ?>>
      <a href="paper.php?page=<?php echo $page-1;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>
    <li <?php if($page==$i){ echo 'class="active"'; } ?>  ><a href="paper.php?page=<?php echo $i;?>&txtKeyword=<?php echo $_GET["txtKeyword"]?>" > <?php echo $i; ?></a></li>
   
    <?php } ?>
    <li <?php if($page==$total_page){ echo 'class="disabled"'; } ?>>
      <a href="paper.php?page=<?php echo $page+1;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
          

        </section><!-- /.content -->
     
      
      </div><!-- /.content-wrapper -->
      
      <div id="spin"></div> 

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
    
    <script src="bootstrap/js/smoke.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $("#btn_del").on("click",function(e) {
             //delete confirm
             $.smkConfirm({text:'แน่ใจว่าต้องการลบข้อมูล ?', accept:'ตกลง', cancel:'ยกเลิก'}, function(e){if(e){               
                var del_url = $('#btn_del').attr('href');
                //window.location.replace(del_url);
                $(location).attr('href', del_url); //redirect to your url
            }});    
             e.preventDefault();
        });
    });
    </script>
    
     
                

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
