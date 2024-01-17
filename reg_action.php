<?php
       session_start();
       ob_start();
       include "./model/connect2.php";
       $error = false;
       if(isset($_POST['username'])&& !empty($_POST['username'])){
       $result= mysqli_query($conn, "INSERT INTO user (username,fullname,pass,phone,address,email) 
       VALUES ('".$_POST['username']."','".$_POST['fullname']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['email']."')");
          if(!$result){
              if(strpos(mysqli_error($conn),"Duplicate entry") !== false){
                     echo json_encode(array(
                            'status' => 0,
                            'message' => "Tên đăng nhập đã tồn tại"
                     ));
                     exit;
              }
          }
          mysqli_close($conn);
          if($error !== false ){
              echo json_encode(array(
                     'status' => 0,
                     'message' => "Có lỗi khi đăng ký, xin mời thử lại!"
              ));
              exit;
          }
          else {
              echo json_encode(array(
                     'status' => 1,
                     'message' => "Đăng ký thành công"
              ));
              // header("Location: index.php");
              exit; 
          }
       }
       else {
              echo json_encode(array(
                     'status' => 0,
                     'message' => "Bạn chưa nhập thông tin"
              ));
              exit;
       }
?>