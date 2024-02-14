<?php
  require_once('controllers/connect.php');
  
  $query = "SELECT * FROM catalog";
  $result = mysqli_query($link, $query);
  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

  
  if (isset($_GET['id_car']))
  {
    $id_car = strip_tags($_GET['id_car']) -1;
  }
?>

<!DOCTYPE html>
<html lang="ru">

    <?php require_once('controllers/head.php'); ?>

<body>

<?php require_once('templates/header.php'); ?>

<main class="main1">

<div class="container">
        <h2 class="title">Бронирование машины</h2>
        <div class="personal">
          <div class="images1">
            <?php
            $dir = "templates/img/photos/" . $id_car+1 . '-' . $data[$id_car]['title'];
            $files = scandir($dir);
            foreach ($files as $file) {
              $file_path = $dir . '/' . $file;
              if (is_file($file_path) && in_array(pathinfo($file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                echo '<img class="slider-img" src="' . $file_path . '" ;>';
              }
            }
            ?>
          </div>
          <div class="full-inf">
            <h2 class="car-name"><?= $data[$id_car]['full_name']?></h2>
            <div class="characteristic">
              <img src="templates/img/Vector (2).png" alt="">
              <p class="fuel"><?=$data[$id_car]['engin_capacity']?> л/бензин</p>
              <img src="templates/img/Vector (3).png" alt="">
              <p class="engine"><?=$data[$id_car]['horse']?> л.с.</p>
            </div>
            <p class="description"><?=$data[$id_car]['full_description']?></p>
            <div class="btn-price">
              <a class="button" href="<?= "personal.php?id_car=" . $id_car?>">Забронировать</a>
              <p class="price">от<span><?=$data[$id_car]['cost_med']?></span>руб/сут.</p>
            </div>
          </div>
        </div>
      </div>

</main>

<?php require_once('templates/footer.php'); ?>

</body>
</html>