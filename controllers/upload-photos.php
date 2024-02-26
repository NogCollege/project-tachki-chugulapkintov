<? require_once('connect.php');?>
<?
// $uploadDir = "templates/img/photos/";
// if ($_FILES) {
// $files = array_filter($_FILES['upload']['name']);
// $total = count($_FILES['upload']['name']);
// for ($i = 0; $i < $total; $i++) {
// $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
// if ($tmpFilePath != "") {
// $newFilePath = $uploadDir . $_FILES['upload']['name'][$i];
// if(!file_exists($newFilePath)) {
// move_uploaded_file($tmpFilePath, $newFilePath);
// echo $_FILES['upload']['name'][$i] .' успешно загружен в папку ' .
// $uploadDir .'<br>';
// } else {
// echo 'Файл '. $_FILES['upload']['name'][$i] .' уже существует!';
// }
// }
// }
// }
?>

<?
$file = '';
$query = "SELECT * FROM catalog";
$result = mysqli_query($link, $query);
for ($data = []; $row = mysqli_fetch_assoc($result);
$data[] = $row);


if (isset($_GET['id_car']))
{
  $id_car = strip_tags($_GET['id_car'])-1;
}
$dir = "../templates\img\photos" . $id_car+1 . '-' . $data[$id_car]['title'];
$files = scandir($dir);
    foreach ($files as $file) {
    $file_path = $dir . '/' . $file;
    if (is_file($file_path) && in_array(pathinfo($file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
        echo '<div class="slider-img"> <img class="image" src="' . $file_path . '" ;></div>';
              }
            }

?>