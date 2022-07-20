 <!-- Cần CSS phần này -->




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Khoá học hoá</title>
	<link rel="stylesheet"   href="public/css/main.css">
</head>
<body>
	<div class="container-fluid px-0 border-bottom shadow-sm">
		<nav class="container navbar  navbar-expand-lg navbar-light bg-white d-flex justify-content-between">
		  <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand mx-auto" href="#">
			<img src="public/images/avt@2x.png" width="30" height="30" class="d-inline-block align-top rounded-circle" alt="">
			NgocLamEducation
		  </a>
		  <div class="collapse navbar-collapse" id="navbarContent">
			<hr class="d-block d-lg-none mt-0">
			<ul class="navbar-nav mx-auto flex-column flex-sm-row justify-content-sm-center">
			  <li class="nav-item px-0 px-sm-2 px-lg-0">
				<a class="nav-link text-dark" href="trang-chu">Trang chủ <span class="sr-only"></span></a>
			  </li>
			  <li class="nav-item px-0 px-sm-2 px-lg-0">
				<a class="nav-link text-dark" href="khoa-hoc-hoa">Khoá học môn Hoá</a>
			  </li>
			  <li class="nav-item px-0 px-sm-2 px-lg-0">
				<a class="nav-link text-dark" href="public/images/info.jpg">Thông tin giáo viên</a>
			  </li>
			  <li class="nav-item px-0 px-sm-2 px-lg-0">
				<a class="nav-link text-dark" href="public/images/hocsinhtieubieu.jpg">Học sinh tiêu biểu</a>
			  </li>
			</ul>
			<ul class="navbar-nav d-flex flex-row justify-content-center">
			  <li class="nav-item">
				<a target="_blank" href="https://www.facebook.com/lam.vungoc.549/" class="nav-link waves-effect waves-light">
				  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 24 24" style=" fill:#000000;">    <path d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h7.621v-6.961h-2.343v-2.725h2.343V9.309 c0-2.324,1.421-3.591,3.495-3.591c0.699-0.002,1.397,0.034,2.092,0.105v2.43h-1.428c-1.13,0-1.35,0.534-1.35,1.322v1.735h2.7 l-0.351,2.725h-2.365V21H19c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z"></path></svg>
				</a>
			  </li>
			  <li class="nav-item">
				<a target="_blank" href="https://www.youtube.com/channel/UCz64V1fGZzVZj8QYm-pWnSA" class="nav-link">
				  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 24 24" style=" fill:#000000;">    <path d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4S5.746,4,4.186,4.418 c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768 C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.861-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M10,15.464V8.536L16,12L10,15.464z"></path></svg>
				</a>
			  </li>
			  <li class="nav-item">
				<a target="_blank" href="https://www.tiktok.com/@itsmelam1itsmelam150900" class="nav-link">
				  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 24 24" style=" fill:#000000;"><path d="M 6 3 C 4.3550302 3 3 4.3550302 3 6 L 3 18 C 3 19.64497 4.3550302 21 6 21 L 18 21 C 19.64497 21 21 19.64497 21 18 L 21 6 C 21 4.3550302 19.64497 3 18 3 L 6 3 z M 12 7 L 14 7 C 14 8.005 15.471 9 16 9 L 16 11 C 15.395 11 14.668 10.734156 14 10.285156 L 14 14 C 14 15.654 12.654 17 11 17 C 9.346 17 8 15.654 8 14 C 8 12.346 9.346 11 11 11 L 11 13 C 10.448 13 10 13.449 10 14 C 10 14.551 10.448 15 11 15 C 11.552 15 12 14.551 12 14 L 12 7 z"></path></svg>
				</a>
			  </li>
			  <li class="nav-item px-0 px-sm-2 px-lg-0">
				<a class="nav-link text-dark" href="dang-nhap">Đăng nhập</a>
			  </li>
			  <li class="nav-item px-0 px-sm-2 px-lg-0">
				<a class="nav-link text-dark" href="dang-ky">Đăng ký</a>
			  </li>
			</ul>
		  </div>
		</nav>
		</div>
        <div class="cate-col-right">
<?php echo $data['Diem'] ?>
        </div>
</body>
</html>
