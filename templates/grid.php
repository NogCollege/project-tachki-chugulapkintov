<div class="grid__zxc">
        <div class="auotopark">
        <div class="h2__zxc">
            <h2>Наш автопарк</h2>
            <a href=""><p>Смотреть все</p></a>
        </div>
        <div class="btn__zxc">
            <a href="">
              <div class="cv">
                    
                    <img src="templates/img/Group 47.png" alt="">
                    <p>Внедорожник</p>

            </div>
            </a>
            <a href="">
                <div class="cv">
                      
                    <img src="templates/img/Group 47 (1).png" alt="">
                    <p>Бизнес</p>
  
              </div>
              </a>
              <a href="">
                <div class="cv">
                      
                    <img src="templates/img/Group 48.png" alt="">
                    <p>Спорткар</p>
  
              </div>
              </a>
              <a href="">
                <div class="cv">
                      
                    <img src="templates/img/Group 47 (2).png" alt="">
                    <p>Премиум</p>
  
              </div>
              </a>
              <a href="">
                <div class="cv">
                      
                    <img src="templates/img/Group 47 (3).png" alt="">
                    <p>Комфорт</p>
  
              </div>
              </a>
            
        </div>
    </div>
            <div class="block__main__grid__zxc">
                <div class="container">

                <!-- <div class="block__grid"> -->
                    <?php
                    require_once 'controllers/connect.php';
                        foreach ($data as $elem){
                            $result.="<div class='block__grid'>"."<p class='p__zxc__grid'>".$elem['city']."</p>"."<img class='penus' src='templates/img/photos/".$elem['id']."-".$elem['title']."/main.jpg'>"."<p class='p__zxc'>".$elem['full_name'].' '.$elem['year']."</p>"."<div class = 'about'>"."<p>"."<img class='logo_card' src='templates\img\Vector (2).png'>".$elem['engin_capacity']." ".$elem['engin']."</p>"."<p>"."<img class='logo_card' src='templates\img\Vector (3).png'>".$elem['horse']."</p>"."</div>"."<hr>"."<div class='inf'>"."<a href=''>"."<div class='aaaaapen'>"."Забронировать"."</div>"."</a>"."<div class='ppppen'>"."<p>"."от"."</p>"."<h3>".$elem['cost_min']."</h3>"."<p>"."руб/сут."."</p>"."</div>"."</div>"."</div>";
                        }
                        echo $result;
                        ;

                    ?>
               
    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>