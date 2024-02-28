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
<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <?php require_once('controllers/head.php'); ?>

<body>

<?php require_once('templates/header.php'); ?>

<main class="main1">

<div class="container">
        <div class="namebtn">
        <h2 class="title">Бронирование машины</h2>
    
        <a class="exit" href="index.php#autopark"><p>Назад</p></a>
        </div>
      
        <div class="personal">
        <div class="slideer">
        <div class="slider slider-item">
        <?php
            $dir = "templates/img/photos/" . ((int)$id_car +(int)1) . '-' . $data[$id_car]['title'];
            $files = scandir($dir);
            foreach ($files as $file) {
              $file_path = $dir . '/' . $file;
              if (is_file($file_path) && in_array(pathinfo($file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                echo '<div class="slider-img"> <img class="image" src="' . $file_path . '" ;></div>';
                
              }
            }
            
        ?>
    </div>

    

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.slider-item').slick({
            infinite: true,
            dots: true,
            lazyload: 'onedemand',
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    </script>
    
          <!-- <div class="centr-slider">
          <div class="slider-img">
          <div class="images1">
            php
            $dir = "templates/img/photos/" . ((int)$id_car +(int)1) . '-' . $data[$id_car]['title'];
            $files = scandir($dir);
            foreach ($files as $file) {
              $file_path = $dir . '/' . $file;
              if (is_file($file_path) && in_array(pathinfo($file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                echo '<div class="slider-img"> <img class="image" src="' . $file_path . '" ;></div>';
                
              }
            }
            ?>
          </div>
          </div>
          </div> -->

          <!-- <div class="btn-slider">
            <button type="button" class="slider-arrow slider-prev"><img src="templates/img/levo.png" alt=""> </button>
            <button type="button" class="slider-arrow slider-next"><img src="templates/img/pravo.png" alt=""></button>
          </div> -->

          <div class="full-inf">
            <h2 class="car-name"><?= $data[$id_car]['full_name']?></h2>
            <div class="characteristic">
              <img src="templates/img/Vector (2).png" alt="">
              <p class="fuel"><?=$data[$id_car]['engin_capacity']?>л/<?=$data[$id_car]['engin']?></p>
              <img src="templates/img/Vector (3).png" alt="">
              <p class="engine"><?=$data[$id_car]['horse']?> л.с.</p>
            </div>
            <div> <p class="description"><?=$data[$id_car]['full_description']?></p> </div>
            <div class="btn-price">
              <a class="button" href="<?= "personal.php?id_car=" . $id_car+1?>">Забронировать</a>
              <p class="price">от <span><?=$data[$id_car]['cost_med']?></span>руб/сут.</p>
            </div>
          </div>
        </div>
      </div>

</main>

<?php require_once('templates/footer.php'); ?>

</body>
</html>

<script src="templates/slider.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="slick/slick.min.js"></script>

<script type="text/javascript" src="slider.js">
$('.single-item').slick({
    infinite: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1
  });
</script>
