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
            ผู้ใช้งานระบบ
            <small>จัดการข้อมูลผู้ใช้งานระบบ</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
            <li class="active">ผู้ใช้งานระบบ</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          <a href="frm_user.php" class="btn btn-primary">เพิ่มรายการ</a>
          <br><br>
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">ผู้ใช้งานระบบ</h3>
              <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <?php
                      $sql_user = "SELECT COUNT(*) AS count_user FROM tb_user";
                      $result_user = mysqli_query($link, $sql_user);
                      $count_user = mysqli_fetch_assoc($result_user);
                ?>
                <span class="label label-primary">ทั้งหมด <?= $count_user['count_user']; ?> รายการ</span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
              <?php
                    $sql = "SELECT * FROM tb_user ORDER BY user_id DESC";
                    $result = mysqli_query($link, $sql);
                    
              ?>
              <table class="table table-striped">
                  <tr>
                      <th>รหัส</th>
                      <th>ชื่อ-สกุล</th>
                      <th>Username</th>
                      <th>ภาพประจำตัว</th>
                      <th>สิทธิการเข้าระบบ</th>
                      
                       <th>แก้ไข</th>
                  </tr>
                  <?php  while ($row = mysqli_fetch_row($result)) {  ?>
                  <tr>
                      <td>
                          <?=  $row[0]; ?>
                      </td>
                      <td>
                          <?=  $row[3]; ?>
                      </td>
                      <td>
                          <?=  $row[1]; ?>
                      </td>
                      <td>
                          <img src="dist/img/<?= $row[7]; ?>" class="img-circle" width="32px" height="32px" alt="<?=  $row[1]; ?> ?>">
                      </td>
                      <td>
                          <?=  $row[6]; ?>
                      </td>
                    
                         <td>
                          <a id="btn_edit" name="btn_edit" href="user_edit.php?id=<?= $row[0]; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                      </td>
                  </tr>
                  <?php } ?>
              </table>
                
            </div><!-- /.box-body -->
            <div class="box-footer">
              
            </div><!-- box-footer -->
          </div><!-- /.box -->
          

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
