
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
$dir = "../templates/img/photos/" . $id_car +1 . '-' . $data[$id_car]['title'];
$files = scandir($dir);
foreach ($files as $file) {
  $file_path = $dir . '/' . $file;
  if (is_file($file_path) && in_array(pathinfo($file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
    echo '<td><img class="image" src="' . $file_path . '";></td>';

    if(isset($_POST['delete_photo'])){
      $file = $_POST[$file_path];
      if(file_exists($file)){
        unlink($file);
      }
    }
    
    echo '<form  method="post" ';
    echo '<input type="hidden" name="photo" value="название_фото">';
    echo '<input type="submit" name="delete_photo" value="удалить">';
    echo '</form>';
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

echo '<form action="upload-photos.php?id=' . $id_car +1 . '" method="post" enctype="multipart/form-data">';
echo '<input name="upload[]" type="file" multiple="multiple"> ';
echo '<input type="submit">';
echo '</form>';

$uploadDir = "../templates/img/photos/"  . $id_car +1 . '-' . $data[$id_car]['title']. '/';
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

