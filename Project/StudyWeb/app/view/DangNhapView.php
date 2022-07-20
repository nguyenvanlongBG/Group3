<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="public/css/login.css" />
  </head>
  <body>
   <?php if (isset($_SESSION['dangky'])) {unset($_SESSION['old']);unset($_SESSION['errors']);}?>
    <?php if (isset($_SESSION['dangky'])): ?>
        <script> alert(" Đăng kí thành công .Vui lòng đăng nhập!"); </script>
      <?php endif?>
      <?php if (isset($_SESSION['dangky'])) {unset($_SESSION['dangky']);}?>
    <section>
      <div class="img-bg">
        <img src="public/images/avt@2x.png" alt="Hình Ảnh Minh Họa" />
      </div>
      <div class="noi-dung">
        <div class="form">
          <h2>Trang Đăng Nhập</h2>
          <form action="dang-nhap-processing" method="post">
            <div class="input-form">
              <span>Email</span>
              <input type="email" name="login-id"
      class="form-control"
       placeholder="Username"
      value="<?php if (isset($_SESSION['old'])) {
    echo $_SESSION['old']['login-id'];
}?>">
       <?php if (isset($_SESSION['errors']['login-id'])): ?>
      <div class="invalid-feedback">
        <h4 style="color:red" ><?php echo $_SESSION['errors']['login-id'] ?></h4>
      </div>
      <?php endif?>
            </div>
            <div class="input-form">
              <span>Mật Khẩu</span>
              <input type="password" name="password"
      class="form-control"
       placeholder="Password">

      <?php if (isset($_SESSION['errors']['password'])): ?>
      <div class="invalid-feedback">
      <h4 style="color:red" ><?php echo $_SESSION['errors']['password'] ?></h4>
      </div>
      <?php endif?>
      <?php if ((!isset($_SESSION['errors']['password'])) && (!isset($_SESSION['errors']['login-id']))): ?>
      <div class="invalid-feedback">
        <h4 style="color:red" ><?php if (isset($_SESSION['errors']['failed'])) {
    echo $_SESSION['errors']['failed'];
}
?></h4>
      </div>
      <?php endif?>
            </div>
            <div class="nho-dang-nhap">
              <label><input type="checkbox" name="" /> Nhớ Đăng Nhập</label>
            </div>
            <div class="input-form">
              <input type="submit" value="Đăng Nhập" />
            </div>
            <div class="input-form">
              <p>Bạn Chưa Có Tài Khoản? <a href="dang-ky">Đăng Ký</a></p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
