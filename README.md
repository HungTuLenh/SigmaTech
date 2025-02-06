# 📌 Laravel E-commerce Project

## 📖 Giới thiệu

Dự án này là một trang web bán linh kiện điện tử được xây dựng bằng Laravel. Nó bao gồm các chức năng như quản lý sản phẩm, giỏ hàng, đặt hàng và thanh toán.

---

## 🚀 Hướng dẫn cài đặt

### 1️⃣ Yêu cầu hệ thống

-   **PHP** >= 8.1
-   **Composer**
-   **XAMPP** (hoặc MariaDB/MySQL)
-   **Git**

### 2️⃣ Cài đặt XAMPP và Composer

🔹 **Tải XAMPP** tại: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)  
🔹 **Tải Composer** tại: [https://getcomposer.org/](https://getcomposer.org/)

Sau khi cài đặt XAMPP, hãy đảm bảo rằng Apache và MySQL đã được khởi động.

### 3️⃣ Clone dự án về thư mục htdocs

```sh
cd C:/xampp/htdocs

git clone https://github.com/your-repo/your-project.git
cd your-project
```

### 4️⃣ Cài đặt các package PHP

```sh
composer update
```

### 5️⃣ Tạo file cấu hình môi trường

```sh
cp .env.example .env
```

Chỉnh sửa file `.env` để thiết lập kết nối database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_database_name
DB_USERNAME=root
DB_PASSWORD=
```

### 6️⃣ Tạo database và chạy migration

```sh
php artisan migrate --seed
```

### 7️⃣ Chạy dự án

```sh
php artisan serve
```

Mở trình duyệt và truy cập: `http://127.0.0.1:8000`

---

## 🖼️ Hình ảnh giao diện

_Dưới đây là một số hình ảnh về giao diện của website:_

📌 **Trang chủ:**
![Trang chủ](https://via.placeholder.com/800x400)

📌 **Giỏ hàng:**
![Giỏ hàng](https://via.placeholder.com/800x400)

📌 **Thanh toán:**
![Thanh toán](https://via.placeholder.com/800x400)

---

## 🔥 Chức năng chính

✅ **Quản lý sản phẩm**: Xem danh sách sản phẩm, tìm kiếm, lọc theo danh mục.  
✅ **Giỏ hàng**: Thêm, xóa sản phẩm vào giỏ hàng, cập nhật số lượng.  
✅ **Đặt hàng**: Điền thông tin giao hàng, chọn phương thức thanh toán.  
✅ **Thanh toán**: Hỗ trợ thanh toán qua chuyển khoản ngân hàng.  
✅ **Quản lý đơn hàng**: Xem lịch sử đơn hàng, trạng thái đơn hàng.  
✅ **Hệ thống đăng nhập & đăng ký**: Đăng ký tài khoản, đăng nhập và quản lý thông tin cá nhân.

---

## 🎯 Liên hệ & Hỗ trợ

Nếu bạn gặp bất kỳ vấn đề nào hoặc có góp ý, vui lòng tạo một issue trên GitHub hoặc liên hệ qua email.

📧 Email: support@example.com  
🌐 GitHub: [https://github.com/your-repo](https://github.com/your-repo)

---

🚀 **Chúc bạn cài đặt và sử dụng thành công!**
