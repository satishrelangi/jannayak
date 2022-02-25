<?php
require('connection.php');
require('functions.php');
$msg='';
if(isset($_POST['submit'])){
	$username=get_safe_value($con,$_POST['username']);
	$password=get_safe_value($con,$_POST['password']);
	$sql="select * from admin_users where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['ADMIN_LOGIN']='yes';
		$_SESSION['ADMIN_ID']=$row['id'];
		$_SESSION['ADMIN_USERNAME']=$username;
		header('location:index.php');
		die();
	}else{
		$msg="PLEASE ENTER CORRECT LOGIN DETAILS";	
	}	
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="container-fluid loginbody">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 login-box py-3">
                    <p class="login-key"><i class="fa fa-key" aria-hidden="true"></i></p>
                    <p class="login-title">ADMIN PANEL</p>
                    <form class="my-3 text-left mx-5" autocomplete="off" method="post">
                        <input type="text"  name="username" class="form-control p-0 m-0 mt-2 px-1"  placeholder="username" id="adminname" required>
                        <input type="password" name="password" class="form-control p-0 m-0 my-4 px-1" placeholder="password" id="adminpassword" required>
                        <button type="submit"  name="submit" class="btn btn-outline-primary mx-auto d-block px-5 mb-5 mt-5" id="adminLogin">LOGIN</button>
                    </form>
                    <div class="field_error"><?php echo $msg?></div>
                </div>
            </div>
        </div>
    </div>    
      <script src="../assets/bootstrap/js/jquery.js"></script>   
  </body>
</html>