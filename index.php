<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];
include_once "model/connect.php";
include_once "admin/user.php";
include_once "model/product.php";
include_once "model/catalog.php";
include_once "model/order.php";
include_once "model/taikhoan.php";

//connectdb();
//require header
include_once "view/header.php";

//NHAN YEU CAU TU USER 
if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
    switch ($_GET['pg']) {
        case 'product':
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $key = $_POST['key'];
            } else {
                $key = "";
            }
            if (isset($_GET['idcatalog']) && ($_GET['idcatalog'])) {
                $idcatalog = $_GET['idcatalog'];
            } else {
                $idcatalog = 0;
            }
            //require product
            $productlist = getProduct($key, $idcatalog);
            $catalog_list = getCatalog();
            include_once "view/product.php";
            break;
        case 'productDetail':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $kq = getOneSanPham($id);
            }
            if (isset($_GET['idcatalog']) && ($_GET['idcatalog'])) {
                $idcatalog = $_GET['idcatalog'];
            } else {
                $idcatalog = 0;
            }
            $productlist = getProduct2($idcatalog);
            include_once "view/productDetail.php";
            break;
        case 'gioithieu':
            include_once "view/gioithieu.php";
            break;
        case 'lienhe':
            include_once "view/lienhe.php";
            break;
        case 'cart':
            include_once "view/cart.php";
            break;
        case 'dathang':
            include_once "view/dathang.php";
            break;
        case 'addcart':
            //lấy dữ liệu từ form lưu vào giỏ
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                if (isset($_POST['soluong']) && ($_POST['soluong'] > 0)) {
                    $soluong = $_POST['soluong'];
                } else {
                    $soluong = 1;
                }
                $flag = 0;
                $i = 0; //định vị ở vị trí thứ i thì cập nhật số lượng
                //Kiểm tra sản phẩm có trong giỏ hàng không
                //Nếu có chỉ cập nhật số lượng
                foreach ($_SESSION['giohang'] as $item) {
                    //Nếu sản phẩm bị trùng tên thì tăng số lượng
                    if ($item[1] == $name) {
                        //Lấy số lượng trong giỏ hàng $item[4] + số lượng vừa mới thêm mới
                        $soluongnew = $soluong + $item[4];
                        //Lấy số lượng mới gán trực tiếp vào sản phẩm đang bị trùng
                        $_SESSION['giohang'][$i][4] = $soluongnew;
                        $flag = 1;
                        break;
                    }
                    $i++;
                }
                //Nếu không thì thêm mới sản phẩm vào giỏ hàng
                if ($flag == 0) {
                    //khởi tạo 1 mảng con trước khi đưa vào giỏ hàng
                    $item = array($id, $name, $img, $price, $soluong);
                    $_SESSION['giohang'][] = $item;
                }

                header("Location: index.php?pg=cart");
            }
            //view giỏ hàng
            // include_once "view/cart.php";
            break;
        case 'delCart':
            //Xóa 1 san pham trong gio hang 
            if (isset($_GET['i']) && $_GET['i'] > 0) {
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0))
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
            } else {
                //Xoa lun gio hang 
                if (isset($_SESSION['giohang']))
                    unset($_SESSION['giohang']);
            }
            //Kiểm tra điều để hiện thị giỏ hàng
            //Nếu giỏ hàng còn sản phẩm thì load lại trang giỏ hàng
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                header('location: index.php?pg=cart');
            }
            //Nếu giỏ hàng rỗng trả về trang index
            else {
                header('location: index.php');
            }
            break;
        case 'thanhtoan':
            if ((isset($_POST['thanhtoan'])) && ($_POST['thanhtoan'])) {
                if (isset($_SESSION['id']))
                    $idUser = $_SESSION['id'];
                else
                    $idUser = 0;
                //Lấy dữ liệu từ form thanh toán 
                $totalOrder = $_POST['totalOrder'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $payment = $_POST['payment'];

                // Set the new timezone
                date_default_timezone_set('Asia/Ho_Chi_Minh');

                $date = date('h:i:sa d-m-Y');
                $orderNumber = "SHOPGIADUNG_" . rand(0, 999999);
                //tạo đơn hàng
                //Và trả về 1 idOrder (id đơn hàng)
                //$item=array($id,$name,$img,$price,$soluong);
                //$_SESSION['user']['id'],$idOrder
                $idOrder = taodonhang($idUser, $orderNumber, $totalOrder, $date, $payment, $name, $address, $email, $phone);
                $_SESSION['idOrder'] = $idOrder;
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    foreach ($_SESSION['giohang'] as $item) {
                        addtocart($idOrder, $item[0], $item[1], $item[2], $item[3], $item[4]);
                    }
                    unset($_SESSION['giohang']);
                }
            }
            include_once "view/donhang.php";
            break;
        case 'myorder':
            $listOrder = '';
            if (isset($_SESSION['id']) && ($_SESSION['id']) > 0) {
                $listOrder = loadAll_DonHang($_SESSION['id']);
            }
            include_once "view/myorder.php";
            break;
        case 'dangnhap':
            include_once "view/login.php";
            break;
        case 'dangky':
            if (isset($_POST['btn-reg']) && ($_POST['btn-reg'])) {
                // echo "Đã submit";
                $username = $_POST['username'];
                $fullname = $_POST['fullname'];
                $pass = $_POST['password'];
                // $gender = $_POST['gender'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                dangky($username, $fullname, $pass, $phone, $address, $email);
            }
            include_once "view/register.php";
            // header('location: index.php?pg=thongtindky');
            break;
        case 'thongtindky':
            include_once "view/thongtindky.php";
            break;
        case 'thoat':
            unset($_SESSION['role']);
            unset($_SESSION['id']);
            unset($_SESSION['username']);
            unset($_SESSION['current_user']);
            header("Location: index.php?pg=login"); //Thoat tai khoan --> Trang Login
            break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $kq = getUserInfo($user, $pass);
                $role = $kq[0]['role'];
                if ($role == 1) {
                    $_SESSION['role'] = $role;
                    header("Location: admin/index.php");
                } else if ($role == 0) {
                    $_SESSION['role'] = $role;
                    $_SESSION['id'] = $kq[0]['id'];
                    $_SESSION['username'] = $kq[0]['username'];
                    header("Location: index.php");
                    break;
                } else {
                    $txt_error = "Username hoặc password không tồn tại";
                }
            }
            include_once "view/login.php";
            break;
        case 'info':
            $listTaiKhoan = loadAll_TaiKhoan();
            $tkct = getOneTaiKhoan($_SESSION['id']);
            include_once "view/thongtindky.php";
            break;
        case 'taikhoan_update':
            //Cập nhật tài khoản
            if (isset($_POST['capnhat_tk']) && ($_POST['capnhat_tk'])) {
                $id = $_POST['id'];
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                updateTKND($id, $fullname, $username, $password, $phone, $address, $email);
            }
            //Load danh sách tài khoản
            $tkct = getOneTaiKhoan($_SESSION['id']);
            $listTaiKhoan = loadAll_TaiKhoan();
            include_once "view/thongtindky.php";
            break;
        //NEU NHAN YEU CAU TU USER MA TRANG DO CHUA DUOC KHAI BAO THI TRA VE TRANG CHU
        default:
            // echo "Ban Dang vao trang chu";
            //require home
            $newproduct = getNewProduct(0);
            // echo var_dump($newproduct);
            include_once "view/home.php";
            break;
    }
}
//NEU KHONG NHAN YEU CAU THI TRA VE TRANG CHU
else {
    // echo "Ban Dang vao trang chu";
    //require home
    $newproduct = getNewProduct(0);
    $noicom = getNoiCom(0);
    $bepgas = getBepgas(0);
    $chen = getChen(0);
    $bepdien = getBepdien(0);
    $dua = getDua(0);
    // echo var_dump($newproduct);
    include_once "view/home.php";
}
//require footer
include_once "view/footer.php";
?>