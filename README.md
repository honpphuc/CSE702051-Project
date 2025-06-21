# 🎓 Dự án môn học: Lập trình Web nâng cao

## 🔖 Tên dự án: Hệ thống quản lý đặt sân bóng đá mini

---

## 📌 Thông tin chung

- **Môn học:** Lập trình Web nâng cao  
- **Giảng viên hướng dẫn:** [Tên giảng viên nếu có]  
- **Học kỳ:** II, Năm học 2024–2025  
- **Nhóm:** Nhóm 3  
- **Lớp:** [Lớp học phần nếu có]  

---

## 👥 Thành viên nhóm

| STT | Họ và tên       | MSSV       | Vai trò                     |
|-----|------------------|------------|-----------------------------|
| 1   | Nguyễn Văn Lượng      | 23010799    | Phát triển Back-end (Laravel, DB) |
| 2   | Lý Hoài Nam       | 23010773   | Thiết kế giao diện (HTML/CSS, Blade) |
| 3   | Lê Hồng Phúc         | 23010746    | Triển khai & Kiểm thử (Git, Test, Deploy) |

---

## 🎯 Mục tiêu của dự án

- Cho phép người dùng đặt sân bóng theo thời gian thực
- Hiển thị danh sách sân bóng và trạng thái đặt sân
- Cung cấp lịch sử đặt sân cho người dùng
- Cung cấp chức năng quản lý sân, đặt sân cho admin
- Đảm bảo an toàn dữ liệu và xác thực người dùng

---

## ⚙️ Công nghệ sử dụng

- **Ngôn ngữ:** PHP, HTML, CSS, JavaScript
- **Framework:** Laravel 10.x
- **Giao diện:** Blade Template + Bootstrap
- **CSDL:** MySQL
- **Quản lý phiên:** Laravel Auth
- **Quản lý dự án:** Git & GitHub

---

## 🧩 Cấu trúc chức năng chính

- Đăng ký/Đăng nhập người dùng
- Trang chủ hiển thị danh sách sân
- Chức năng đặt sân (theo ngày/giờ)
- Quản lý lịch sử đặt sân
- Trang quản trị cho admin (CRUD sân, người dùng)

---

## 📂 Cài đặt dự án (Local)

1. Clone dự án:

```bash
git clone https://github.com/nhom3/CSE702051-Project.git
cd CSE702051-Project
```

2. Cài đặt thư viện:

```bash
composer install
```

3. Tạo file `.env`:

```bash
cp .env.example .env
php artisan key:generate
```

4. Cấu hình database trong `.env`, sau đó chạy migration:

```bash
php artisan migrate
```

5. Chạy server:

```bash
php artisan serve
```

---

## 📌 Ghi chú

- Dự án được phát triển trong khuôn khổ môn học, không sử dụng cho mục đích thương mại.
- Nhóm sẵn sàng trình bày, demo và báo cáo đầy đủ nếu có yêu cầu.

---

## 📧 Liên hệ
- Email nhóm: 23010746@st.phenikaa-uni.edu.vn

---

> 🧠 Cảm ơn quý thầy cô đã theo dõi và góp ý cho dự án của nhóm!