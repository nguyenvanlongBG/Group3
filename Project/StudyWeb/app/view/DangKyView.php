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
                <form action="register" method='post'>
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="userName">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="password">
                    </div>
                    <div class="input-form">
                        <span>Nhập Lại Mật Khẩu</span>
                        <input type="password" name="repassword">
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
