
<?
require_once('connect.php');

  $query = "SELECT * FROM catalog";
  $result = mysqli_query($link, $query);
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

  if (isset($_GET['id']))
  {
    $id_car = strip_tags($_GET['id']) -1;
  }
echo '<table><tr>';
$dir = "../templates/img/photos/" . ((int)$id_car +(int)1) . '-' . $data[$id_car]['title'];
$files = scandir($dir);
foreach ($files as $file) {
  $file_path = $dir . '/' . $file;
  if (is_file($file_path) && in_array(pathinfo($file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
    echo '<td><img class="image" src="' . $file_path . '";></td>';

    echo '<td><form method="post" action="delete_image.php">
    <input type="hidden" name="image_path" value="' . $file_path . '">
    <button type="submit" name="delete_image">Удалить</button>
    </form></td>';
    
    
    
  }

  

  
}


echo '</tr></table>';
?>



<?php
require_once('connect.php');

$query = "SELECT * FROM catalog";
$result = mysqli_query($link, $query);
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

if (isset($_GET['id']))
{
  $id_car = strip_tags($_GET['id']) -1;
}

echo '<form action="upload-photos.php?id=' . ((int)$id_car +(int)1) . '" method="post" enctype="multipart/form-data">';
echo '<input name="upload[]" type="file" multiple="multiple"> ';
echo '<input type="submit">';
echo '</form>';

$uploadDir = "../templates/img/photos/"  . ((int)$id_car +(int)1) . '-' . $data[$id_car]['title']. '/';
if ($_FILES) {

  $files = array_filter($_FILES['upload']['name']);
  $total = count($_FILES['upload']['name']);
  for ($i = 0; $i < $total; $i++) {
    $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
    var_dump($_FILES);
    if ($tmpFilePath != "") {
      $newFilePath = $uploadDir . $_FILES['upload']['name'][$i];
      if(!file_exists($newFilePath)) {
          move_uploaded_file($tmpFilePath, $newFilePath);
          echo $_FILES['upload']['name'][$i] .' успешно загружен в папку ' .
              $uploadDir .'<br>';
      } else {
          echo 'Файл '. $_FILES['upload']['name'][$i] .' уже существует!';
      }
    }
  }
}
?>

