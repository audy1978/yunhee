<?php
        //include '../db/database.php';
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
      
            <?php
  include '../db/config_db.php';
  
  $id_edit = mysql_real_escape_string(trim($_GET['id']));
  
  //  $meSQL = "SELECT * FROM member WHERE id='{$_SESSION['id']}' ";
    $meSQL = "SELECT * FROM tb_user WHERE user_id='{$id_edit}' ";
	$meQuery = mysql_query($meSQL);
    	if ($meQuery == TRUE) {
        $meResult = mysql_fetch_assoc($meQuery);
		
    } else {
        echo 'error';
    }
    
    session_start();
    $_SESSION['id'] =  $meResult['user_id'];

    ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            ผู้ใช้งานระบบ
            <small>เพิ่มผู้ใช้งานระบบ</small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="user.php"><i class="fa fa-dashboard"></i> รายการผู้ใช้งานระบบ</a></li>
            <li class="active">เพิ่มผู้ใช้งานระบบ</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">เพิ่มผู้ใช้งานระบบ</h3>
              <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
              
                <div class="row">
                    <div class="col-md-6">
                        <form id="form1" action="user_edit_action.php.php" method="post" class="form" enctype="multipart/form-data" novalidate>
                            <div class="form-group">
                                <label for="userName">Username</label>
                                <input id="userName" type="text" class="form-control" value="<?php echo $meResult['user_username']; ?>" name="userName" smk-text="กรุณากรอก Username" required>
                            </div>
                            <div class="form-group">
                                <label for="userPassword">Password <font color="red">(กรอกในกรณีเปลี่ยน password)</font></label>
                                <input id="userPassword" type="password" class="form-control" name="userPassword"  smk-text="กรุณากรอก Password อย่างน้อย 4 ตัวอักษร" >
                            </div>
                            <div class="form-group">
                                <label for="userFullname">ชื่อ-สกุล</label>
                                <input id="userFullname" type="text" class="form-control" value="<?php echo $meResult['user_fullname']; ?>" name="userFullname" smk-text="กรุณากรอกชื่อ-สกุล" required>
                            </div>
                             <div class="form-group">
                                <label for="user_tel">เบอร์โทรศัพท์</label>
                                <input id="user_tel" type="text" class="form-control" name="user_tel" value="<?php echo $meResult['user_tel']; ?>" smk-text="กรุณากรอกเบอร์โทรศัพท์" required>
                            </div>
                              <div class="form-group">
                                <label for="user_email">E-mail</label>
                                <input id="user_email" type="text" class="form-control" name="user_email" value="<?php echo $meResult['user_email']; ?>" smk-text="กรุณากรอก E-mail" required>
                            </div>
                            <!-- select -->
                            <?php
                            // หาสิทธิการเข้าถึงโปรแกรม
                            if($meResult['user_level']=='Admin'){
                                $chk_level1 = "selected";
                            }
                            
                            if($meResult['user_level']=='จนท. ขาย'){
                                $chk_level2 = "selected";
                            }
                            if($meResult['user_level']=='จนท. จัดซื้อ'){
                                $chk_level3 = "selected";
                            }
                            if($meResult['user_level']=='จนท.ตัวอย่าง'){
                                $chk_level4 = "selected";
                            }
                              if($meResult['user_level']=='ผู้จัดการ'){
                                $chk_level5 = "selected";
                            }
                            
                            
                            ?>
                            
                    <div class="form-group">
                      <label>สิทธิการเข้าระบบ</label>
                      <select name="user_level" class="form-control" id="user_level">
                          <option <?php echo $chk_level1; ?> value="Admin">Admin</option>
                        <option <?php echo $chk_level2; ?> value="จนท. ขาย">จนท. ขาย</option>
                        <option <?php echo $chk_level3; ?> value="จนท. จัดซื้อ">จนท. จัดซื้อ</option>
                        <option <?php echo $chk_level4; ?> value="จนท.ตัวอย่าง">จนท.ตัวอย่าง</option>
                        <option <?php echo $chk_level5; ?> value="ผู้จัดการ">ผู้จัดการ</option>
                      </select>
                    </div>
                             <div class="form-group">
                                <label for="userPicture">ภาพประจำตัว</label>
                                <input id="userPicture" type="file" name="userPicture">
                                <p class="help-block">เลือกไฟล์ภาพนามสกุล .jpg, .png, .gif เท่านั้น</p>
                             </div>
                            <button id="btn1" type="submit" class="btn btn-primary">บันทึก</button>
                        </form>
                    </div>
                </div>
              
                
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
    
    <script src="bootstrap/js/spin.min.js"></script>
    
    <script>
            $( document ).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide(); 
             });
                            
            $(document).ready(function(){
                $("#userName").focus();
                
                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                 $("#spin").hide();

                $('#form1').on("submit",function(e) {
                    if ($('#form1').smkValidate()) {
                        //upload file via ajax setting
                        $.ajax({
                            url: 'user_edit_action.php',
                            type: 'POST',
                            data: new FormData( this ),
                            processData: false,
                            contentType: false,
                            dataType: 'json'
                        }).done(function( data ) {
                            if (data.status === "success") {
                                $.smkAlert({text: data.message , type: data.status});
                                // กลับไปหน้าหลัก
                                   setTimeout(function(){// wait for 5 secs(2)
                                         //  window.location("index.php"); 
                                           window.location.href = "user.php";
                                         // then reload the page.(3)
                                      }, 2000);
                                
                            } else {
                                $.smkAlert({text: data.message , type: data.status});
                            }
                            $("#form1").smkClear();
                            $("#userName").focus();
                        });          
                        e.preventDefault();
                    }
                   e.preventDefault();
                });
                
               
                
            });
    </script>

    
    
  </body>
</html>
