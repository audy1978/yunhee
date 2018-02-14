<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบบริหารจัดการโปรแกรมคิดราคางาน | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin/plugins/iCheck/square/blue.css">
    
    <!-- Smoke -->
    <link rel="stylesheet" href="admin/bootstrap/css/smoke.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <h3 align="center">โปรแกรมคิดราคางาน Version 0.75</h3>
<a href="../"></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">เข้าสู่ระบบบริหารจัดการโปรแกรม</p>
        <form id="form1" action="login_go.php" method="post" novalidate>
          <div class="form-group has-feedback">
              <input id="userName" type="text" class="form-control" placeholder="Username"  name="userName" smk-text="กรุณากรอก Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="userPassword" smk-text="กรุณากรอก Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-6">
                
            </div><!-- /.col -->
             <div class="col-xs-6">
              <button type="submit" class="btn btn-primary btn-block btn-flat">เข้าระบบ</button>
            </div><!-- /.col -->
          </div>
        </form>

       
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="admin/bootstrap/js/smoke.min.js"></script>
    
    <script>
       $(document).ready(function(){
           
        $("#userName").focus();
        
        $('#form1').on("submit",function(e) {
             if ($('#form1').smkValidate()) {
                 $.post("login_go.php", $("#form1").serialize() )
                                .done(function( data ) {
                                    if (data.status === "danger") {
                                        $.smkAlert({text: data.message , type: data.status});
                                        $('#form1').smkClear();
                                        $("#userName").focus();
                                    } else {
                                        $(location).attr('href', 'index.php');
                                    }
                                });                       
                  e.preventDefault();
             }
             e.preventDefault();
        });
        
      });
    </script>
    
    <script>
     $(document).ready(function(){
         
         setInterval(ajaxCall,10000);
        
         function ajaxCall() {
             
// หาใน database ว่ามีงานที่รอดำเนินการกี่งาน 
// 
  // $.smkAlert({text: 'hello' type:'info' permanent: true});
  
        
                                  var txt12 = $('#form1').serialize(); 
        
                                     $.ajax({
					   type: "POST",
					   url: "get_jobs.php",
					   data: txt12,
					   success: function(result) {
						//	var length = e1.options.length;
                                               
                                                    
                                                        
                                                        
                                                       if(result.status == 1) // Success
							{
								// alert(result.message1); 
                                                            
                                                    var  text_job =  'คุณมีงานใหม่ ' + result.message +  ' งาน';      
                                                    $.smkAlert({text: text_job , type:'danger',  time: 10});
                                                               
            
                                                         }
							else // Err
							{
								alert(result.message);
							}
					   }
					 });
        
       
             
    
    
    
    }  //   ajaxcall 
     });
     
    </script>
  
  </body>
</html>


