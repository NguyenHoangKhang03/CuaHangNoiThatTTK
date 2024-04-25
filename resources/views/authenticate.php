<?php
// Kiểm tra xem người dùng đã gửi dữ liệu đăng nhập hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Thực hiện xác minh thông tin đăng nhập (ở đây chỉ là ví dụ đơn giản)
    if ($username === 'admin' && $password === 'password') {
        // Đăng nhập thành công, chuyển hướng người dùng đến trang chính sau khi đăng nhập
        header("Location: dashboard.php");
    } else {
        // Đăng nhập thất bại, hiển thị thông báo lỗi
        echo "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
?>