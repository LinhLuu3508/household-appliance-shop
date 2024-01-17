<!-- FILE index.php này đóng vai trò như Controller -->
<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&& ($_SESSION['role']==1)){
        include "../model/connect.php";
        include "../model/danhmuc.php";
        include "../model/product.php";
        include "../model/taikhoan.php";
        include "../model/global.php";
        include "../model/donhang.php";
        // require HEADER
        include "view/header.php";
        // NHAN YEU CAU TU USER
        if(isset($_GET['pg']) && $_GET['pg']!=""){
            switch ($_GET['pg']) {
                //Điều hướng
                case 'danhmuc':
                    $tb="";
                    //Nhận yêu cầu và xử lý
                   
                    //Lấy danh sách danh mục
                    $kq=getAllDanhMuc();//liên lạc đến model - tương tác csdl - trả về mảng dữ liệu
                    include "view/danhmuc.php";
                    break;
                case 'adddm':
                    $tb="";
                    //Nhận yêu cầu và xử lý
                    if((isset($_POST['themmoi'])) &&($_POST['themmoi'])){
                        $tendanhmuc=$_POST['tendanhmuc']; 
                        themdm($tendanhmuc);
                    }
                    //Lấy danh sách danh mục
                    $kq=getAllDanhMuc();//liên lạc đến model - tương tác csdl - trả về mảng dữ liệu
                    include "view/danhmuc.php";
                    break;
                case 'delcatalog':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id=$_GET['id'];
                        $tb=delCatalog($id);
                    }
                    $kq=getAllDanhMuc();
                    include "view/danhmuc.php";
                    break;
                case 'updatedmform':
                    // Lấy 1 RECORD đúng với id truyền vào
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id=$_GET['id'];
                        $detail=getOneDanhMuc($id);
                        //Cần danh sách danh mục
                        $kq=getAllDanhMuc();
                        include "view/updatedmform.php";
                    }
                    break;
                case 'update_dm':
                    if(isset($_POST['sua'])){
                        $id=$_POST['id'];
                        $tendanhmuc=$_POST['tendanhmuc'];
                        updatedm($id,$tendanhmuc);
                        $tb="";
                        $kq=getAllDanhMuc();
                        include "view/danhmuc.php";
                    }
                    break;
                case 'themoidm':
                    include "view/themoidm.php";
                    break;       
                case 'sanpham':
                    //Load danh sách danh mục
                    $dsdm=getAllDanhMuc();
                    //Load danh sách sản phẩm
                    $dssp=getAllSanPham();
                    include "view/sanpham.php";
                    break;
                case 'updatespform':
                    //Load danh sách danh mục
                    $dsdm=getAllDanhMuc();
                    //sp chi tiết
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $spct=getOneSanPham($_GET['id']);
                    }
                    //Load danh sách sản phẩm
                    $dssp=getAllSanPham();
                    include "view/updatespform.php";
                    break;
                case 'sanpham_update':
                    //Load danh sách danh mục
                    $dsdm=getAllDanhMuc();
                    //Cập nhật sản phẩm
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $tensp=$_POST['name'];
                        $price=$_POST['price'];
                        $iddm=$_POST['iddm'];
                        $chitiet=$_POST['chitiet'];
                        if($_FILES["img"]["name"]!=""){
                            
                            $target_dir = "../upload_img/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);
                            $img = $_FILES["img"]["name"];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                                // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
                            if($uploadOk == 1){
                                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                                // if($_FILES['img']['name']!="") $img=$_FILES['img']['name'];
                                // else $img="";
                                //insertSanPham($tensp,$img,$price,$iddm);
                            }    
                        }
                        else {
                            $img="";
                        }
                        updatesp($id,$tensp,$price,$img,$chitiet,$iddm);
                    }
                    //Load danh sách sản phẩm
                    $dssp=getAllSanPham();
                    include "view/sanpham.php";
                    break;
                case 'sanpham_add':
                    if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['name'];
                        $price=$_POST['price'];
                        
                        $target_dir = "../upload_img/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img = $_FILES["img"]["name"];
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if($uploadOk == 1){
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                            // if($_FILES['img']['name']!="") $img=$_FILES['img']['name'];
                            // else $img="";
                            insertSanPham($tensp,$img,$price,$iddm);
                        }    
                    }
                    //Load danh sách danh mục
                    $dsdm=getAllDanhMuc();
                    //Load danh sách sản phẩm
                    $dssp=getAllSanPham();
                    include "view/sanpham.php";
                    break;
                case 'themoisp':
                    //Load danh sách danh mục
                    $dsdm=getAllDanhMuc();
                    //Load danh sách sản phẩm
                    $dssp=getAllSanPham();
                    include "view/themoisp.php";
                    break; 
                case 'delSanPham':
                    if(isset($_GET['id']) &&($_GET['id'])>0){
                        $id=$_GET['id'];
                        //Xóa file ảnh trên localhost
                        $img_file='../'.PATH_IMG.getImg($id);
                        if(file_exists($img_file)){
                            unlink($img_file);
                        }
                        //Xóa sản phẩm trong đó có xóa ảnh trên database
                        delSp($id);
                    }
                    $dsdm=getAllDanhMuc();
                    $dssp=getAllSanPham();
                    include "view/sanpham.php";
                    break;
                case 'taikhoan':
                    $listTaiKhoan=loadAll_TaiKhoan();
                    include "view/taikhoan.php";
                    break;
                case 'updatetkform':

                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $tkct=getOneTaiKhoan($_GET['id']);
                    }
                     //Load danh sach tai khoan
                    $listTaiKhoan=loadAll_TaiKhoan();
                    include "view/updatetkform.php";
                    break;
                case 'taikhoan_update':
                    //Cập nhật tài khoản
                    if(isset($_POST['capnhat_tk'])&&($_POST['capnhat_tk'])){
                        $id=$_POST['id'];
                        $fullname=$_POST['fullname'];
                        $username=$_POST['username'];
                        $pass=$_POST['pass'];
                        $phone=$_POST['phone'];
                        $address=$_POST['address'];
                        $role=$_POST['role'];
                        $email=$_POST['email'];
                        updateTK($id,$fullname,$username,$pass,$phone,$address,$role,$email);
                    }
                    //Load danh sách tài khoản
                    $listTaiKhoan=loadAll_TaiKhoan();
                    include "view/taikhoan.php";
                    break;
                case 'delTaiKhoan':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        delTK($id);
                    }
                    $listTaiKhoan=loadAll_TaiKhoan();
                    include "view/taikhoan.php";
                    break;
                case 'donhang':
                    $listDonHang=loadAll_DonHang();
                    include "view/donhang.php";
                    break;
                case 'thoat':
                    if(isset($_SESSION['role'])){
                        unset($_SESSION['role']);
                        unset($_SESSION['current_user']);//xoa session moi vua dang nhap
                    } 
                    header("Location: login.php");
                    break;
                case 'ex1':
                    include "view/ex1.php";
                    break;
                default:
                    // require HOME
                    include "view/home.php";
                    break;
            }
        }
        else {
            include "view/home.php";
        }

        // require FOOTER
        include "view/footer.php";
    }
    else {
        header("Location: login.php");
    }
?>