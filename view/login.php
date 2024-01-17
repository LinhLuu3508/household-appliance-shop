<!-- <div class="container  col-lg-4" >
  <h2 style="color:#0099FF;justify-content:center">LOGIN</h2>
      <form action="index.php?pg=login" method="POST">
          <div>
            <label for="">Tên đăng nhập </label>
            <input type="text" name="user" id="">
          </div>
          <br>
          <div>
          <label for="">Mật khẩu</label>
          <input type="password" name="pass" id="">
          </div>
          <br>
          <input type="submit" name="login" value="ĐĂNG NHẬP">
          <?php
            if(isset($txt_error)&& $txt_error!=""){
              echo "<font color='red'>".$txt_error."</font>";
            }
          ?>
      </form>
</div> -->

<div class="container p-5">
    <div class="row justify-content-center ">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3" style="color: #0099FF;"><img src="view/layout/assets/img/logo_gia_dung.png" alt="" height="40" width="40">Login</h2>
          </div>
          <div class="card-body">
          <form id="ogin-form" action="index.php?pg=login" method="POST">
            <div class="mb-4">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" name="user" id="" class="form-control" require>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="pass" id="" class="form-control" require>
            </div>
            <div class="d-gird">
                <input type="submit" name="login" value="ĐĂNG NHẬP" class="btn btn-primary">
            </div>
            <div class="d-gird">
                <label for="" class="form-label">Bạn chưa có tài khoản <a href="index.php?pg=dangky"><button type="button" class="btn btn-primary">ĐĂNG KÝ</button></a></label>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="view/layout/assets/js/jquery-3.7.1.min.js"></script>
<script src="view/layout/assets/js/jquery.validate.min.js"></script>
<script>
    $("#login-form").validate({
        rules: {
            user: {
                required: true,
            },
            pass: {
                required: true
            }
        },
        messages: {
            user:{
                required: "Bạn chưa nhập tên đăng nhập !"
            },
            pass: {
                required: "Bạn chưa nhập mật khẩu !"
            }
        },
        submitHandler: function(form) {
            alert("Click dn");
            // console.log($(form).serializeArray());
            // $.ajax({
            //     type: "POST",
            //     url: 'reg.php',
            //     dataType: $(form).serializeArray(),
            //     success: function(response) {
            //         response = JSON.parse(response);
            //         if(response.status == 0){
            //             alert(response.message);
            //         }
            //         else {
            //             alert(response.message);
            //             // location.reload();
            //         }
            //     }
            // });
        }
    });
</script>


