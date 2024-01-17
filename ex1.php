<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="view/layout/assets/img/logo_gia_dung.png" type="image/vnd.microsoft.icon">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="view/layout/assets/css/header.css">
    <link rel="stylesheet" href="view/layout/assets/css/base.css">
    <link rel="stylesheet" href="view/layout/assets/css/footer.css">
    <link rel="stylesheet" href="view/layout/assets/css/products.css">
    <link rel="stylesheet" href="view/layout/assets/css/table.css">
    <link rel="stylesheet" href="view/layout/assets/css/productDettail.css">
    <script src="view/layout/assets/js/jquery-3.7.1.min.js"></script>

</head>
<body>
<h1>TRANG VÍ DỤ</h1>
<script>
    // ví dụ cho phương thức get dùng jQuery
    // $.get('action.php', function(res){
    //     res=JSON.parse(res);
    //     console.log("res: ", res);

    // });

    
    // ví dụ cho phương thức post dùng jQuery
    // var data = {
    //     'id':2,
    //     'name':'LuuLinh290'
    // }
    // $.post('action.php', data, function(res){
    //     res=JSON.parse(res);
    //     console.log("res: ", res);

    // });
</script>
<?php
  session_start();
  include "./model/connect2.php";
  if(empty($_SESSION['current_user'])){
?>
<div class="container p-5">
    <div class="row justify-content-center ">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3" style="color: #0099FF;"><img src="view/layout/assets/img/logo_gia_dung.png" alt="" height="40" width="40">Login</h2>
          </div>
          <div class="card-body">
          <form id="login-form" action="index.php?pg=login" method="POST">
            <div class="mb-4">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" name="user" id="" class="form-control">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="pass" id="" class="form-control">
            </div>
            <div class="d-gird">
                <input type="submit" name="login" value="ĐĂNG NHẬP" class="btn btn-primary">
            </div>
            <div class="d-gird">
                <label for="" class="form-label">Bạn chưa có tài khoản <a href="register.php"><button type="button" class="btn btn-primary">ĐĂNG KÝ</button></a></label>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  }else {
    $currentUser = $_SESSION['current_user'];
    $result= mysqli_query($conn, "SELECT * FROM user ");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $role= $row["role"];
    if($role==1){
      $_SESSION['role']=$role;
      // include_once "admin/index.php";
      header("Location: admin/index.php");
    } 
    else{
    $_SESSION['role']=$role;
    $_SESSION['id']=$row[0]["id"];
    $_SESSION['username']=$row[0]["username"];
    // include_once "index.php";
    header("Location: index.php");
  }
  ?>
  <!-- <div>
    Xin Chào <?= $currentUser['fullname']?>
  </div> -->
<?php }?>
<script src="view/layout/assets/js/jquery-3.7.1.min.js"></script>
<script>
  $( "#login-form" ).on( "submit", function( event ) {
  // alert( "Handler for `submit` called." );
  event.preventDefault();
        // console.log( $( this ).serializeArray() );
  $.ajax({
    type: "POST",
    url: 'action2.php',
    data: $( this ).serializeArray(),
    success: function (response) {
      // console.log("response: " ,response );
        response =JSON.parse(response);
        if(response.status==0){
          alert(response.message);
        }else{
          alert(response.message);
          location.reload();
        }
    } 
  });
});
  </script>   
</body>
</html>
