<?php
$routes['default_controller'] = 'home';
/*
đường dẫn ảo -> đường dẫn thật
 */
$routes['san-pham'] = 'product/index';
$routes['trang-chu'] = 'home';
$routes['tin-tuc/.+-(\d+).html'] = 'news/category/$1';
$routes['model'] = 'admin/ManagerAccount/show';
$routes['cham-diem'] = 'Bai_thiController/show';
