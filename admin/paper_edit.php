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
  $_SESSION["paper_id"] = $id_edit;
  //  $meSQL = "SELECT * FROM member WHERE id='{$_SESSION['id']}' ";
    $meSQL = "SELECT * FROM tb_paper2 WHERE paper_id='{$id_edit}' ";
	$meQuery = mysql_query($meSQL);
    	if ($meQuery == TRUE) {
        $meResult = mysql_fetch_assoc($meQuery);
		
    } else {
        echo 'error';
    }
    
    session_start();
    $_SESSION['id'] =  $meResult['paper_id'];
    ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            แก้ไขข้อมูลกระดาษ
            
          </h1>
          <ol class="breadcrumb">
              <li><a href="paper.php"><i class="fa fa-dashboard"></i> รายการกระดาษ</a></li>
            <li class="active">แก้ไขข้อมูลกระดาษ</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">แก้ไขข้อมูลกระดาษ</h3>
              <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
              
                <div class="row">
                    <div class="col-md-6">
                        <form id="form1" action="insert_paper.php" method="post" class="form" enctype="multipart/form-data" novalidate>
                            <div class="form-group">
                                <label for="paper_cat">ประเภท <font color="red">*</font></label>
                                <input id="paper_cat" type="text" class="form-control" name="paper_cat" value="<?php echo $meResult['paper_cat']; ?>" smk-text="กรุณากรอก ประเภทกระดาษ" required>
                            </div>
                            <div class="form-group">
                                <label for="paper_seller">ผู้ขาย <font color="red">*</font></label>
                                <input id="paper_seller" type="text" class="form-control" name="paper_seller" value="<?php echo $meResult['paper_seller']; ?>" smk-text="กรุณากรอก ผู้ขาย" required>
                            </div>
                            <div class="form-group">
                                <label for="paper_brand">ยี่ห้อ <font color="red">*</font></label>
                                <input id="paper_brand" type="text" class="form-control" name="paper_brand" value="<?php echo $meResult['paper_band']; ?>" smk-text="กรุณากรอกยี่ห้อ" required>
                            </div>
                             <div class="form-group">
                                <label for="paper_thickness">ความหนา <font color="red">*</font></label>
                                <input id="paper_thickness" type="text" class="form-control" name="paper_thickness" value="<?php echo $meResult['paper_thickness']; ?>" smk-text="กรุณากรอกความหนากระดาษ" required>
                            </div>
                              <div class="form-group">
                                <label for="paper_size">ขนาด <font color="red">*</font></label>
                                <input id="paper_size" type="text" class="form-control" name="paper_size" value="<?php echo $meResult['paper_size']; ?>" smk-text="กรุณากรอกขนาดกระดาษ" required>
                            </div>
                            <!-- select -->
                            
                            <?php  
                               //  check paper type
                            if($meResult['paper_type']=='หน้าม้วน'){
                                $ream_select1='selected'; 
                            } else {
                                $ream_select2='selected'; 
                            }
                            
                            ?>
                    <div class="form-group">
                      <label>แบบ <font color="red">*</font></label>
                      <select name="paper_type" class="form-control" id="paper_type">
                        <option <?php echo $ream_select1; ?> value="หน้าม้วน">หน้าม้วน</option>
                        <option <?php echo $ream_select2; ?> value="รีม">รีม</option>
                       
                      </select>
                    </div>
                            
                            <div class="form-group">
                                <label for="paper_price">ราคา <font color="red">*</font></label>
                                <input id="paper_price" type="text" class="form-control" name="paper_price" value="<?php echo $meResult['paper_price']; ?>" smk-text="กรุณากรอกราคา" required>
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
    
    <script src="bootstrap/js/spin.min.js"></script>
    
    <script>
            $( document ).ajaxStart(function() {
                $("#spin").show();
             }).ajaxStop(function() {
                $("#spin").hide(); 
             });
                            
            $(document).ready(function(){
                $("#paper_cat").focus();
                
                var spinner = new Spinner().spin();
                $("#spin").append(spinner.el);
                 $("#spin").hide();

                $('#form1').on("submit",function(e) {
                    if ($('#form1').smkValidate()) {
                        //upload file via ajax setting
                        $.ajax({
                            url: 'paper_edit_action.php',
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
                                           window.location.href = "paper.php";
                                         // then reload the page.(3)
                                      }, 2000);
                            } else {
                                $.smkAlert({text: data.message , type: data.status});
                            }
                            $("#form1").smkClear();
                            $("#paper_cat").focus();
                        });          
                        e.preventDefault();
                    }
                   e.preventDefault();
                });
                
               
                
            });
    </script>

    
    
  </body>
</html>
