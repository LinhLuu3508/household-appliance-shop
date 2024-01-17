<?php
    session_start();
    ob_start();
    include "../model/connect.php";
    include "user.php";
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $role=checkUser($user,$pass);
        $_SESSION['role']=$role;
        if($role==1) header('Location: index.php');
        else {
            $txt_error="Username hoặc password không tồn tại";
        }
        // header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="view/layout/assets/img/logo_gia_dung.png" type="image/x-icon">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/layout/assets/css/login.css">
</head>
<!-- style="background: #0099FF;" -->
<body class="">
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3" style="color: #0099FF;"><img src="view/layout/assets/img/logo_gia_dung.png" alt="" height="40" width="40">Login</h2>

          </div>
          <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="user" id="" class="form-control">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pass" id="" class="form-control">
            </div>
            <div class="d-gird">
                <input type="submit" name="dangnhap" value="ĐĂNG NHẬP" class="btn text-light main-bg" style="color: #0099FF;">
            </div>
            <?php
                if(isset($txt_error)&& $txt_error!=""){
                    echo "<font color='red'>".$txt_error."</font>";
                }
            ?>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

  


