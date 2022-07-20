<?php
if (isset($_SESSION['authentication']) == false) {
    // Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
    header('Location: http://127.0.0.1/mvc3/dang-nhap');
    exit();
}
