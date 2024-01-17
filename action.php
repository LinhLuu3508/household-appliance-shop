<?php
 // ví dụ cho phương thức get dùng jQuery
    // $r= array(
    //     'id'=>1,
    //     'name'=>'Linh'
    // );
    // echo json_encode($r);

 // ví dụ cho phương thức post dùng jQuery
    // echo json_encode($_POST);
   session_start();
   ob_start();
   include "./model/connect.php";
   include "./model/taikhoan.php";
   include "./model/user.php";
   $error= false;
   // if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){

   // }
   if(isset($_POST['login']) && ($_POST['login'])){
      $user=$_POST['user'];
      $pass=$_POST['pass'];
      $kq=getUserInfo($user,$pass);
      $role=$kq[0]['role'];
      if($role==1){
          $_SESSION['role']=$role;
          header("Location: admin/index.php");
      }
      else if($role==0) {
          $_SESSION['role']=$role;
          $_SESSION['id']=$kq[0]['id'];
          $_SESSION['username']=$kq[0]['username'];
          header("Location: index.php");
      }
      else {
          $txt_error="Username hoặc password không tồn tại";
      }
  }
  else{
      echo json_encode(array(
         'status' => 0,
         'message' => 'Thông tin đăng nhập không đúng !'
      ));
      exit();
  }
?>