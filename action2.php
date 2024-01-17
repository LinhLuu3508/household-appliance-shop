<?php
       session_start();
       ob_start();
       include "./model/connect2.php";
       $error = false;
       if(isset($_POST['user']) && !empty($_POST['user']) 
       && isset($_POST['pass']) && !empty($_POST['pass'])){
       $result= mysqli_query($conn, "SELECT * FROM user WHERE username='".$_POST['user']."' AND pass='".$_POST['pass']."'");
          if(!$result){
              $error = mysqli_error($conn);
          }
          else {
              $user=mysqli_fetch_assoc($result);
              $_SESSION['current_user'] = $user;
          }
          mysqli_close($conn);
          if($error !== false || $result->num_rows == 0){
              echo json_encode(array(
                     'status' => 0,
                     'message' => "Thong tin dang nhap khong dung"
              ));
              exit;
          }
          else {
              echo json_encode(array(
                     'status' => 1,
                     'message' => "Dang nhap thanh cong"
              ));

              exit; 
          }
       }
       else {
              echo json_encode(array(
                     'status' => 0,
                     'message' => "Thong tin dang nhap khong dung"
              ));
              exit;
       }
?>