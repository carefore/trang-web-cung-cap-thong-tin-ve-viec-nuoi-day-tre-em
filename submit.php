<?php
// Kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$childName = $_POST['childName'];
$parentName = $_POST['parentName'];
$email = $_POST['email'];

// Chuẩn bị và thực hiện truy vấn SQL để chèn dữ liệu vào bảng trong cơ sở dữ liệu
$sql = "INSERT INTO childcare_info (child_name, parent_name, email) VALUES ('$childName', '$parentName', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
