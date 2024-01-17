<?php
require 'model/connect.php';
if(isset($_POST['btn-reg'])){
    // echo "Đã submit";
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    if(!empty($username) && !empty($fullname) && !empty($pass) && !empty($email) 
    && !empty($address) && !empty($gender) && !empty($pass)){
        // insert data into database
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO `user` (`fullname`,`username`,`pass`,`gender`,`phone`,`address`,`email`) 
        VALUES ('$fullname','$username',md5('$pass'),'$gender','$phone', '$address','$email') ";

        if($conn->query($sql)==TRUE){
            echo "Lưu dữ liệu thành công";
        }
        else{
            echo "Lỗi {$sql} ".$conn-> error;
        }
    }
    else {
        echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký";
    }
}
?>
