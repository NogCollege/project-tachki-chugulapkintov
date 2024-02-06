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
            <!-- <div class="block__main__grid__zxc">
                <div class="container">

                <div class="block__grid"> -->
                    <?php
                    require_once 'controllers/connect.php';
                        foreach ($data as $elem){
                            $result.="<div class='block__main__grid__zxc'>"."<div class='block__grid'>"."<p class='p__zxc__grid'>".$elem['city']."</p>"."<img src='templates\img\image 22.png'>"."<h3>".$elem['full_name'].' '.$elem['year']."</h3>"."<p>"."<img class='logo_card' src='templates\img\qng.png'>".$elem['engin_capacity']." ".$elem['engin']."<img class='logo_card' src='templates\img\hp.png'>".$elem['horse']."</p>".$elem['cost_max']."</div>"."</div>".'<br>';
                        }
                        echo $result;
                        ;

                    ?>
                <!-- </div> -->

                <!-- <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid"><??></p>
                </div>
                    <img class="penus" src="img/image 22.png" alt="">
                    <p class="p__zxc">BMW X2, 2021</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <a href=""><div class="aaaaapen">Забронировать</div></a>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22 (1).png" alt="">
                    <p class="p__zxc">Kia Sportage, 2022</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22 (2).png" alt="">
                    <p class="p__zxc">Lexus IS, 2018</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22 (3).png" alt="">
                    <p class="p__zxc">Jaguar XF,  2012</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22 (4).png" alt="">
                    <p class="p__zxc">Toyota RAV4,  2017</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22.png" alt="">
                    <p class="p__zxc">BMW X2, 2021</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22 (1).png" alt="">
                    <p class="p__zxc">Kia Sportage, 2022</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22 (2).png" alt="">
                    <p class="p__zxc">Lexus IS, 2018</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
    
                    </div>
                </div>
                <div class="block__grid">
                    <div class="p__zxc__grid">
                    <p class="p__grid">дубай</p>
                </div>
                    <img class="penus" src="img/image 22 (3).png" alt="">
                    <p class="p__zxc">Jaguar XF,  2012</p>
                    <div class="about">
                        
                        <p> <img src="img/Vector (2).png" alt=""> 2,3 л./бензин</p>
                        
                        <p><img src="img/Vector (3).png" alt=""> 317 л.с</p>
                    </div>
                    <hr>
                    <div class="inf">
                        <div class="aaaaapen"><a href="">Забронировать</a></div>
                        <div class="ppppen"><p>от</p> <h3>7 150</h3> <p>руб/сут.</p></div>
                        <div class="block__underblock"></div>
    
                    </div> -->
                <!-- </div> -->
            </div>
            </div>
        </div>
    </div>