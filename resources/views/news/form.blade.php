<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
</head>
<body>
    <header>
        <h1>
            " ĐĂNG KÍ "
        </h1>
        <p>Đăng kí tài khoản để sử dụng phần mềm.</p>
    </header>
    <form action="">
        @csrf
        <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Họ và tên" required>
                <label for="inputUser">Họ và tên</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
                <label for="inputEmail">Email</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="number" name="number" class="form-control" placeholder="Số điện thoại">
                <label for="inputNumber">Số điện thoại</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu" required>
                <label for="inputPassword">Mật khẩu</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Xác nhận mật khẩu" required>
                <label for="inputConfirmPassword">Xác nhận mật khẩu</label>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="link">Đăng nhập</a>
            <span>.</span>
            <a href="#" class="link">Quên mật khẩu?</a>
        </div>
    </form>
</body>
</html>