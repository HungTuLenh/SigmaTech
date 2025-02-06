# 📌 Laravel E-commerce Project

## 📖 Giới thiệu

Dự án này là một trang web bán linh kiện điện tử được xây dựng bằng Laravel.

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
đi đến thư mục xampp/htdocs

git clone https://github.com/HungTuLenh/SigmaTech.git
cd SigmaTech
```

### 4️⃣ Cài đặt các package PHP

```sh
composer update
```

### 5️⃣ Tạo file cấu hình môi trường (trong trường hợp không thấy file .env, nếu đã thấy file .env thì bỏ qua bước này)

```sh
cp .env.example .env
```

Chỉnh sửa file `.env` để thiết lập kết nối database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sigmatech
DB_USERNAME=root
DB_PASSWORD=''
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

## 🖼️ Hình ảnh giao diện cùng các chức năng chính

📌 **Trang chủ:**
![Trang chủ](https://private-user-images.githubusercontent.com/131585700/410323112-7c56f535-dcc9-4b88-8de5-85a545620724.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjQ0MDAsIm5iZiI6MTczODgyNDEwMCwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzIzMTEyLTdjNTZmNTM1LWRjYzktNGI4OC04ZGU1LTg1YTU0NTYyMDcyNC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjQxNDBaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NDJiNDlkZjQ5MjM5ZjQ0YTY2YjMzMDEwODI4MWViZTY0ZDA4YjZjZTllYmM0OGM4Y2EwY2ZmNWZlNTg2ZTExJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.FJcCglkV1lUMyXLIUCBGSwB0B2dJiSZR5SuyV3_7j98)

📌 **Giỏ hàng:**
![Giỏ hàng](https://via.placeholder.com/800x400)

📌 **Thanh toán:**
![Thanh toán](https://via.placeholder.com/800x400)

---

## 🎯 Liên hệ & Hỗ trợ

Nếu bạn gặp bất kỳ vấn đề nào hoặc có góp ý, vui lòng tạo một issue trên GitHub hoặc liên hệ qua email.

📧 Email: hungnd.devv@gmail.com
🌐 GitHub: [https://github.com/HungTuLenh](https://github.com/HungTuLenh)

---

🚀 **Chúc bạn cài đặt và sử dụng thành công!**
