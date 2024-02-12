<?php
$path = '../../ArendaTachek\templates\img\photos/';

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'ArendaTachek';
$conn = new mysqli($host, $user, $password, $db_name);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, title FROM catalog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$carId = $row["id"];
$carName = $row["title"];
$folderName = $carId . '-' . strtolower(preg_replace('/\s+/', '', $carName));
if (!file_exists($path . $folderName)) {
mkdir($path . $folderName);
echo "Папка " . $folderName . " успешно создана<br>";
}
else {
    echo "Папка " . $folderName . " уже есть<br>";
}
}
} 
else {
echo "Нет автомобилей в базе данных";
}
$conn->close();
?>