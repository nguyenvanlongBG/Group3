<?php
if (isset($_SESSION['authentication']) == false) {
    // Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
    header('Location: http://127.0.0.1/mvc2/dang-nhap');
    exit();
} else {
    if (isset($_SESSION['authentication']) == true) {
        // Ngược lại nếu đã đăng nhập
        $permission = $_SESSION['authentication'];
        // Kiểm tra quyền của người đó có phải là admin hay không
        if ($permission != 'user') {
            // Nếu không phải admin thì xuất thông báo
            echo "Vui lòng đăng nhập dưới tài khoản user<br>";
            echo "<a href='http://localhost/mvc3'> Click để về lại trang chủ</a>";
            exit();
        }
    }
}
