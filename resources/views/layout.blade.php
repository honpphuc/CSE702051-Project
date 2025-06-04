<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar-container">
                <div class="navbar-left">
                </div>
                <div class="navbar-center">
                <ul class="navbar-nav">
                    <li>
                        <a href="#">"Giới thiệu"</a>
                    </li>
                    <li>
                        <a href="#">"Đặt sân"</a>
                    </li>
                    <li>
                        <a href="#">"Tìm đội"</a>
                    </li>
                    <li>
                        <a href="#">"Hướng dẫn"</a>
                    </li>
                    <li>
                        <a href="#">"Liên hệ"</a>
                    </li>
                </ul>
                </div>
                <div class="navbar-right">
                    <a href="#" class="btn btn-primary">Đăng nhập</a>
                    <a href="{{ route ('new.form') }}" class="btn btn-secondary">Đăng ký</a>
                </div>
            </nav>
        </div>
    </header>

</body>
</html>