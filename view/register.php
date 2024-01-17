<!-- TRANG DANG KY -->
    <div id="wapper">
        <div class="container">
            <div class="row justify-content-around">
                <form id="re-form" action="index.php?pg=dangky" class="col-md-6 bg-light p-3 my-3" method="POST">
                   <div class="">
                        <h1 class="text-center text-uppercase h3 py-3" style="color:#0099FF">
                            Đăng ký tài khoản  <img src="view/layout/assets/img/logo_gia_dung.png" alt="" width="60" height="60">
                        </h1>  
                   </div>
                    <div class="form-group py-2">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" class="form-control" require>
                    </div>
                    <div class="form-group py-2">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" class="form-control" require>
                    </div>
                    <div class="form-group py-2">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" require> 
                    </div>
                    <!-- <div class="form-group py-2">
                        <label for="password">Nhập lại mật khẩu</label>
                        <input type="password" name="re_password" id="re_password" class="form-control" require> 
                    </div> -->
                    <!-- <div class="form-group py-2">
                        <label for="gender">Giới tính</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="male" value="male" class="form-check-input" checked>
                                <label for="male" class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="female" value="female" class="form-check-input">
                                <label for="female" class="form-check-label">Nữ</label>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group py-2">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group py-2">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="form-group py-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" require>
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" value="Đăng ký" name="btn-reg" class="btn-primary btn btn-block mb-3 mt-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="view/layout/assets/js/jquery-3.7.1.min.js"></script>
<script src="view/layout/assets/js/jquery.validate.min.js"></script>
<script>
    $("#reg-form").validate({
        rules: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            re_password: {
                equalTo: "#password"
            }
        },
        messages: {
            fullname:{
                required: "Bạn chưa nhập họ và tên !",
            },
            email: {
                required: "Bạn chưa nhập email !",
                email: "Email chưa đúng định dạng !"
            },
            password: {
                required: "Bạn chưa nhập mật khẩu !",
                minlength: "Mật khẩu tối thiểu phải có 6 kí tự !"
            },
            re_password: {
                equalTo: "Mật khẩu không khớp! Vui lòng nhập lại"
            }
        },
        submitHandler: function(form) {
            alert("Click dk");
            console.log($(form).serializeArray());
            $.ajax({
                type: "POST",
                url: 'reg_action.php',
                dataType: $(this).serializeArray(),
                success: function(response) {
                    response = JSON.parse(response);
                    if(response.status == 0){
                        alert(response.message);
                    }
                    else {
                        alert(response.message);
                        location.reload();
                    }
                }
            });
        }
    });
</script>


