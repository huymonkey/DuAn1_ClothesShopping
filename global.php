<?php

    const IMAGES_URL = 'assets/images/';
    const EXTRA_LIBS_URL = 'assets/extra-libs/';
    const LIBS_URL = 'assets/libs/';

    const CSS_URL = 'dist/css/';
    const JS_URL = 'dist/js/';

    const CONTROLLERS_URL = 'app/controllers/';
    const MODELS_URL = 'app/models/';
    const VIEWS_URL = 'app/views/';

    const LIBRARIES_URL = 'libraries/';

    $textBangDieuKhien = "Bảng điều khiển";
    $textQuanLyDanhMuc = "Quản lý danh mục";
    $textQuanLySanPham = "Quản lý sản phẩm";
    $textDanhSachSanPham = "Danh sách sản phẩm";
    $textSanPham = "Sản phẩm";
    $textMauSac = "Màu sắc";
    $textKichThuoc = "Kích thước";
    $textQuanLyNguoiDung = "Quản lý người dùng";
    $textQuanLyBinhLuan = "Quản lý bình luận";
    $textQuanLyDonHang = "Quản lý đơn hàng";
    $textThongKe = "Thống kê";
    $textThem = "Thêm";
    $textSua = "Sửa";
    $textDoiMatKhau = "Đổi mật khẩu";
    $textChiTietSanPham = "Chi Tiết Sản Phẩm";

    // Upload ảnh
    function uploadFiles($name, $tmpName, $to) {
        move_uploaded_file($tmpName, IMAGES_URL . $to . "/" . $name);
        return $to . "/" . $name;
    }

    // Kiểm tra đăng nhập
    function checkLogin($message) {
        if(!isset($_COOKIE["tenEmail"])) {
            echo 
            "<script>
                alert('$message');
                window.location.href = 'index.php?url=dangnhap';
            </script>";
        }
        return true;
    }

    // Debug
    function debug($data) {
        echo "<pre>";
        var_dump($data);
        die;
    }

    // Require đến tất cả các file của một thư mục nào đó 
    function requireFiles($pathFolder) {
        // scandir để lấy toàn bộ file trong folder thành 1 mảng
        $files = scandir($pathFolder);

        // array diff để loại những thằng khác biệt trong mảng ( ở đây là mảng files lấy ở trên )
        $files = array_diff($files,['.','..']); //gán lại thằng files

        foreach($files as $file) {
            require_once $pathFolder . "/$file";
        }
    }

    // Chuyển trang
    function nextPage($link) {
        echo "<script>window.location.href='$link'</script>";
    }
    

?>