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

### 📌 **Trang chủ:**
![image](https://github.com/user-attachments/assets/94238ca4-6046-4171-b609-6f1272610d18)

### 📌 **Tài khoản khách**

📌 **Quản lý thông tin tài khoản:**  
![image](https://github.com/user-attachments/assets/3e0e3676-504a-4c94-8ba8-82f3a1781afc)

📌 **Quản lý đơn hàng:**  
![image](https://github.com/user-attachments/assets/c79c7580-e765-42b1-80d5-e361d9541bb3)

📌 **Thêm sản phẩm vào giỏ hàng:**  
![image](https://github.com/user-attachments/assets/44dbc457-19af-4f6b-a7f6-76e1f7a22582)

📌 **Giỏ hàng:**  
![image](https://github.com/user-attachments/assets/41fb4e0b-43bc-4c18-83b8-42e9a6938441)

📌 **Đặt hàng:**  
![image](https://github.com/user-attachments/assets/4fa16f49-7651-480a-8894-dece44d70888)

📌 **Thanh toán chuyển khoản ngân hàng:**  
![image](https://github.com/user-attachments/assets/e55394ee-b25a-4659-928b-b6297be2d04e)

### 📌 **Tài khoản Admin**

📌 **Quản lý sản phẩm:**  
![image](https://github.com/user-attachments/assets/8f8180cb-861c-40a9-ab3c-10c90895e1e9)
![image](https://github.com/user-attachments/assets/885b0eb4-7e66-4846-8872-abd753876fd3)
![image](https://github.com/user-attachments/assets/ba599086-401f-458d-a404-1edb4babe037)

📌 **Quản lý trạng thái đơn hàng:**  
![image](https://github.com/user-attachments/assets/fd6e884d-2713-497e-b128-3238fd10ef11)

📌 **Quản lý sản phẩm flash-sale:**  
![image](https://github.com/user-attachments/assets/e712ea84-0bcd-43d6-b3d6-79bc8c18c0a5)

---

## 🎯 Liên hệ & Hỗ trợ

Nếu bạn gặp bất kỳ vấn đề nào hoặc có góp ý, vui lòng tạo một issue trên GitHub hoặc liên hệ qua email.

📧 Email: hungnd.devv@gmail.com
🌐 GitHub: [https://github.com/HungTuLenh](https://github.com/HungTuLenh)

---

🚀 **Chúc bạn cài đặt và sử dụng thành công!**
