<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="public/css/login.css">
</head>
<body>
    <section>
        <div class="img-bg">
            <img src="public/images/avt@2x.png" alt="Hình Ảnh Minh Họa">
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Ký</h2>
                <form action="dang-ky-processing" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>

                    </div>
                    <div class="input-form">
                        <span>Họ và Tên</span>
                        <input type="text" name="hoten"
      class="form-control"
       placeholder="Họ và Tên"
      value="<?php if (isset($_SESSION['old2'])) {
    echo $_SESSION['old2']['hoten'];
}?>">
       <?php if (isset($_SESSION['errors2']['hoten'])): ?>
      <div class="invalid-feedback">
        <h4 style="color:red" ><?php echo $_SESSION['errors2']['hoten'] ?></h4>
      </div>
      <?php endif?>
                    </div>
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="email"
      class="form-control"
       placeholder="Email"
      value="<?php if (isset($_SESSION['old2'])) {
    echo $_SESSION['old2']['email'];
}?>">
       <?php if (isset($_SESSION['errors2']['email'])): ?>
      <div class="invalid-feedback">
        <h4 style="color:red" ><?php echo $_SESSION['errors2']['email'] ?></h4>
      </div>
      <?php endif?>
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="password"
      class="form-control"

      value="">
       <?php if (isset($_SESSION['errors2']['password'])): ?>
      <div class="invalid-feedback">
        <h4 style="color:red" ><?php echo $_SESSION['errors2']['password'] ?></h4>
      </div>
      <?php endif?>
                    </div>
                    <div class="input-form">
                        <span>Nhập Lại Mật Khẩu</span>
                        <input type="password" name="repassword"
      class="form-control"

      value="">
       <?php if (isset($_SESSION['errors2']['repassword'])): ?>
      <div class="invalid-feedback">
        <h4 style="color:red" ><?php echo $_SESSION['errors2']['repassword'] ?></h4>
      </div>
      <?php endif?>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Ký">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
