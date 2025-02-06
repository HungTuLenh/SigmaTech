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

![Trang chủ](https://private-user-images.githubusercontent.com/131585700/410323112-7c56f535-dcc9-4b88-8de5-85a545620724.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjQ0MDAsIm5iZiI6MTczODgyNDEwMCwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzIzMTEyLTdjNTZmNTM1LWRjYzktNGI4OC04ZGU1LTg1YTU0NTYyMDcyNC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjQxNDBaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NDJiNDlkZjQ5MjM5ZjQ0YTY2YjMzMDEwODI4MWViZTY0ZDA4YjZjZTllYmM0OGM4Y2EwY2ZmNWZlNTg2ZTExJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.FJcCglkV1lUMyXLIUCBGSwB0B2dJiSZR5SuyV3_7j98)

### 📌 **Tài khoản khách**

📌 **Quản lý thông tin tài khoản:**  
![Quản lý thông tin tài khoản](https://private-user-images.githubusercontent.com/131585700/410323920-9da3ec32-45f6-46b2-8b47-bf77b74bc2d2.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjQ3NzUsIm5iZiI6MTczODgyNDQ3NSwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzIzOTIwLTlkYTNlYzMyLTQ1ZjYtNDZiMi04YjQ3LWJmNzdiNzRiYzJkMi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjQ3NTVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT03MzBiZjM4MDVlZGQ1MjU0MWNiZDU1NTk4YzhlOTZmMWEwNjhiMGM5MjViNjdhNDcxMGY4YzZjYWZjZThjOTE1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.8dX6S4SVixTRUBJcEZlQGtgS61TP3Cvl5oVVoc9Uraw)

📌 **Quản lý đơn hàng:**  
![Quản lý đơn hàng](https://private-user-images.githubusercontent.com/131585700/410324021-41a10b87-9bec-4454-a629-a2b50e74693e.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjQ3NzUsIm5iZiI6MTczODgyNDQ3NSwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI0MDIxLTQxYTEwYjg3LTliZWMtNDQ1NC1hNjI5LWEyYjUwZTc0NjkzZS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjQ3NTVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1lOTNhNzM0ZGZlYTVmOTAwYTYzODljYzlmZWNiNTZlZThkOTBiNmQ1OTk5NmQ0NTY4YmZmZmIyN2VmMjc1NDRhJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.Ke0lWOfDCIulIdL0zGVcGaStBdqy2Ozou4i9FuiqRGg)

📌 **Thêm sản phẩm vào giỏ hàng:**  
![Thêm sản phẩm vào giỏ hàng](https://private-user-images.githubusercontent.com/131585700/410324175-86e3c0f0-4f31-4de0-bc87-e1d7dbc79197.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjQ3NzUsIm5iZiI6MTczODgyNDQ3NSwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI0MTc1LTg2ZTNjMGYwLTRmMzEtNGRlMC1iYzg3LWUxZDdkYmM3OTE5Ny5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjQ3NTVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NTI0YjJkYTkxYzdkMzQ0ZTg3NTI3YTAzZDE0NWZjZjUwNTJkZjc4MmY2ZTg5MTJjOGQ3Y2RjMzEwNDVlYzk2JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.UquGmg3qNkakzdiIMsm1403C45AHo3NteKaWsNEbTRE)

📌 **Giỏ hàng:**  
![Giỏ hàng](https://private-user-images.githubusercontent.com/131585700/410324342-cbb668f9-0d50-4fca-91bf-77bd099064a3.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjQ3NzUsIm5iZiI6MTczODgyNDQ3NSwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI0MzQyLWNiYjY2OGY5LTBkNTAtNGZjYS05MWJmLTc3YmQwOTkwNjRhMy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjQ3NTVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT05Yzg3YjE1ZjlmYjZiNGJlN2NkNTMyMzhiYmUzYWM4NmY1MzFlNWMxN2JjMTViOWQzMzMxYzEwZmI5OTdlNzQ0JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.mMAOPQo54Y1Jk1U8omVHi7GC4Zolg6HUGEW6nybE-2U)

📌 **Đặt hàng:**  
![Đặt hàng](https://private-user-images.githubusercontent.com/131585700/410324471-e1208934-5a2f-4150-bdf2-ffcc1aeb524a.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjQ3NzUsIm5iZiI6MTczODgyNDQ3NSwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI0NDcxLWUxMjA4OTM0LTVhMmYtNDE1MC1iZGYyLWZmY2MxYWViNTI0YS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjQ3NTVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04YTZmYTJhNTRlM2Y1M2I0NDgxYWRlOGVkZDVjMTgwYzVlZjcxMTExZmJjYWU1ZGE4NDQxN2RjNmRiZGIxMTVjJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.WAKFoP8cyqCPeA6WeBmWfWvzgab3rJrz3Z12QNyCDdU)

📌 **Thanh toán chuyển khoản ngân hàng:**  
![Thanh toán chuyển khoản ngân hàng](https://private-user-images.githubusercontent.com/131585700/410324545-5d7edc33-0da8-4221-97c5-1b038fd84875.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjUwMzgsIm5iZiI6MTczODgyNDczOCwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI0NTQ1LTVkN2VkYzMzLTBkYTgtNDIyMS05N2M1LTFiMDM4ZmQ4NDg3NS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjUyMThaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NDc4NzhjNDM0ZThlYTJhZTY4YzNlNmQ1OTVjYjMzOTJiMTU3YmQxNmFjZTc2MTUzNmNkMDcyZTNlZjVkMWJjJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.PC1Pj6WUkPLxJO0ipx0fIqNuJZOtALWYddoy0-88pPY)

### 📌 **Tài khoản Admin**

📌 **Quản lý sản phẩm:**  
![Quản lý sản phẩm](https://private-user-images.githubusercontent.com/131585700/410324762-32494953-7c86-430b-bd0d-c889f4a5ac6e.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjUwMzgsIm5iZiI6MTczODgyNDczOCwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI0NzYyLTMyNDk0OTUzLTdjODYtNDMwYi1iZDBkLWM4ODlmNGE1YWM2ZS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjUyMThaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1jOWI1MmJlOTA0MWFhNmU1NWRiMjYyZGU5MjBjOTQ1MzExNmI1MmRiYjgwNmNjMDZiYmRmZTRmNmJiYWNlOWE3JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.uFP0MYYYilFsLDLyA1SS6yr6X-uSO7yd_FqYUFe6SzQ)
![Thêm mới sản phẩm](https://private-user-images.githubusercontent.com/131585700/410324883-74c3ad0a-27f7-4d8d-96d3-8479fc9e57f4.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjUwMzgsIm5iZiI6MTczODgyNDczOCwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI0ODgzLTc0YzNhZDBhLTI3ZjctNGQ4ZC05NmQzLTg0NzlmYzllNTdmNC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjUyMThaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT02YjgwMzdmZjViNDRiYjQ0MWE5MGUxZjkzOWM2YjAyZjBhYzhkZWMwMjRjN2NiMjJlODlhMGQ3MjY0MmU4NzkxJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.zMkhXJKZf8DPr8UN9KSkUfFne9EfChcmhzCm-9Vsj7s)

📌 **Quản lý trạng thái đơn hàng:**  
![Quản lý trạng thái đơn hàng](https://private-user-images.githubusercontent.com/131585700/410325031-9fd28cbd-7ee3-40d9-bf20-670011214053.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjUwMzgsIm5iZiI6MTczODgyNDczOCwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI1MDMxLTlmZDI4Y2JkLTdlZTMtNDBkOS1iZjIwLTY3MDAxMTIxNDA1My5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjUyMThaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04ODY0ZDE2NDY1N2Y1ZWU4MzIzYzA2ZjZkOWFlYTBiOGE3Yzc0MzBjYWMyMjhlYzVmYzk0YTk2OTg2NDQyNzZkJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.PyBGr7Xq4V7dUAcKlGtwZgzgWDl9xg5uJiYrKzG8I_4)

📌 **Quản lý sản phẩm flash-sale:**  
![Quản lý sản phẩm flash-sale](https://private-user-images.githubusercontent.com/131585700/410325127-79bcc735-f98b-4d65-993a-1f679c5486af.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzg4MjUwMzgsIm5iZiI6MTczODgyNDczOCwicGF0aCI6Ii8xMzE1ODU3MDAvNDEwMzI1MTI3LTc5YmNjNzM1LWY5OGItNGQ2NS05OTNhLTFmNjc5YzU0ODZhZi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjUwMjA2JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI1MDIwNlQwNjUyMThaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NjMwNWE1YjVlZjU5NmQxYWNjMDg2ZGUzMDdlYWJmZDc5NjY1NjkxMjhjYmZjNmRkYWMzOTQ0NmM2M2JkYjIzJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.V8HO5ZbTyAjFfO41tae4wTDzS6mvtOGZH418NuoNBR0)

---

## 🎯 Liên hệ & Hỗ trợ

Nếu bạn gặp bất kỳ vấn đề nào hoặc có góp ý, vui lòng tạo một issue trên GitHub hoặc liên hệ qua email.

📧 Email: hungnd.devv@gmail.com
🌐 GitHub: [https://github.com/HungTuLenh](https://github.com/HungTuLenh)

---

🚀 **Chúc bạn cài đặt và sử dụng thành công!**
