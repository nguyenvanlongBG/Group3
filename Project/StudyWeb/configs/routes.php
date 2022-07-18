<?php
$routes['default_controller'] = 'TrangChuController';

/*
đường dẫn ảo -> đường dẫn thật
 */

$routes['san-pham'] = 'product/index';
$routes['trang-chu'] = 'admin/TrangChuController/index';
$routes['admin'] = 'admin/AdminController/index';
// $routes['tin-tuc/.+-(\d+).html'] = 'news/category/';
$routes['model'] = 'admin/ManagerTaiKhoanx/show';
$routes['cham-diem'] = 'BaiThiController/show';
$routes['khoa-hoc-hoa'] = 'KhoaHocHoaController/index';
$routes['detail'] = 'KhoaHocHoaController/chuong';
$routes['dang-nhap'] = 'DangNhapController/index';
$routes['dang-ky'] = 'DangKyController/index';
$routes['register'] = 'DangKyController/check';
$routes['AddUser'] = 'admin/ManagerTaiKhoanController/add';
$routes['listUser'] = 'admin/ManagerTaiKhoanController/index';
$routes['deleteUser'] = 'admin/ManagerTaiKhoanController/delete';
$routes['updateUser'] = 'admin/ManagerTaiKhoanController/updateTaiKhoan';
$routes['updatedUser'] = 'admin/ManagerTaiKhoanController/updatedTaiKhoan';
$routes['listDeThi'] = 'admin/ManagerDeThiController/index';
$routes['updateDeThi'] = 'admin/ManagerDeThiController/updateDeThi';
$routes['addDeThi'] = 'admin/ManagerDeThiController/add';
$routes['deleteDeThi'] = 'admin/ManagerDeThiController/delete';
$routes['deleteCauHoi'] = 'admin/ManagerCauHoiDeController/delete';
$routes['updateCauHoi'] = 'admin/ManagerCauHoiDeController/update';
$routes['addCauHoi'] = 'admin/ManagerCauHoiDeController/add';
$routes['updatedCauHoi'] = 'admin/ManagerCauHoiDeController/updatedCauHoi';
$routes['showBaiThi'] = 'admin/ManagerBaiThiController/showBaiThi';

// $routes['khoahochoa-Este'] = 'KhoaHocHoaController/chuong';
