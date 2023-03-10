<?php 
  require "./config/config.php";
  $asr = $mysql -> query("SELECT * FROM `assortment`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/hashvetvutyunStyle.php">   
    <link rel="stylesheet" href="./css/masnachyuxStyle.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/masnachyuxMedia.php">
    <link rel="stylesheet" href="./css/masnachyuxMedia375.php">
    <link rel="stylesheet" href="./css/masnachyuxMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">

     <title>Document</title>
     <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <div class="header" id="header">
    <a href="index.php" class="logo" id="logo"></a>
    <a
      href="#"
      class="toggle-button"
      id="toggle-button"
      onclick="toggleNav(this)"
    >
      <span class="bar1"></span>
      <span class="bar2"></span>
      <span class="bar3"></span>
    </a>      <ul class="navbar" id="navbar">
<!--       <li><a href="Artadranq.php" class="resp-neu-li">Տեսականի</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
 -->      <li><a href="About.php">Մեր մասին</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux.php">Մասնաճյուղեր</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog.php">Բլոգ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact.php">Կապ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
        <a href="#" class="active">Հայ</a>
        <a href="#">EN</a>
        <a href="#">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="#" class="active">Հայ</a>
      <a href="#">EN</a>
      <a href="#">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
      <img class="heart_icon" id="heart_icon" src="./img//heart.png" alt="" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
      <a href="tel:+37433515555" class="order-call">Պատվիրել զանգ</a>
    </div>
  </div>
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Որոնում</div>
      <div class="search-input-wrapper">
        <input class="search-input" type="text" name="" id="search-input" />
        <img id="search_icon-active" src="./img/activ-search.png" alt="" />
     </div>
    <div class="search-icon-close" id="close-search"><img src="./img/search-icon-close.png" alt=""></div>
  </div>
  <div class="second-menu">
    <div class="second-menu-navigation">
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product.php?type='.$value['type-arm'].'" class="sub-menu-a">'.$value['type-arm'].'</a>';
              }
            ?>
    </div>
    <div class="language">
      <a href="#" class="active">Հայ</a>
      <a href="#">EN</a>
      <a href="#">РУ</a>
    </div>
  </div>
  <div class="menu_holder">
    <div class="text_center">
        <div class="border_div"></div>
        <p class="credit">Հաշվետվություններ</p>
    </div>
</div>
    <div class="container">
        <div class="texts">
            <p class="main">Գլխավոր
                <img src="./img/arrow.png" class="arrow">Նորություններ և հոդվածներ
            </p>
        </div>
        <div class="report-main">
          <div class="report-titleA">Հաշվետվություններ</div>
          <div class="report-titleB">Հաշվետվություններ</div>
          <div class="reports">Տարեկան հաշվետվություններ</div>
          <div class="reportsTable">
              <?php 
                $rep = $mysql->query("SELECT * FROM `reports`");

                foreach ($rep as $value) {
                  echo '
                  <div class="pdf-main">
                    <div class="pdf-flex">
                      <div class="pdf-an">'.$value['date'].'</div>
                      <a class="pdf-img" href="reports/'.$value['file'].'"><img src="./img/pdf1.png" alt="pdf"></a>
                    </div>
                    <div class="pdf-hr"><hr></div>
                  </div>
                  ';
                }
              ?>
          </div>
      </div>
  
    </div>
    
      

  
    <div class="headphones-hover">
      <div class="headphones">
        <img src="./img/naushnik.png" alt="" />
      </div>
      <div class="hover-icons">
        <div class="hover-icon-watsup button">
          <a href="watsup:+374 33 51 55 55" target="_blank"><img src="./img/wUp.png" alt="" /></a>
        </div>
        <div class="hover-icon-messanger button">
         <a href="https://www.facebook.com/messages/t/100000024311828" target="_blank"><img src="./img/messanger-icon.png" alt="" /></a>
        </div>
        <div class="hover-icon-call button">
        <a href="tel:+374 33 51 55 55" target="_blank"><img src="./img/icon-hover-call.png" alt="tel" /></a>
        </div>
        <div class="hover-icon-mail button">
          <a href="mailto:@semur.am" target="_blank"><img src="./img/icon-hover-mail.png" alt="" /></a>
        </div>
        <div class="hover-icon-headphone button">
          <img src="./img/headphone-hover.png" alt="headphone" target="_blank" />
        </div>
      </div>
    </div>
      
    <div class="footer">
      <div class="info">
        <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
        <a href="#"
          >Գործարան, Կոտայքի մարզ, ք. Եղվարդ,<br />
          Երևանյան Խճուղի, շ․ 118
        </a>
        <a href="">033 51 55 55, 033 52 55 55</a>
        <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
        <div class="resp-menu">
          <ul class="resp-menu-ul">
            <li><a href="Apranq.php">Արտադրանք</a></li>
            <li><a href="About.php">Մեր մասին</a></li>
            <li><a href="Masnachyux.php">Մասնաճյուղեր</a></li>
            <li><a href="Contact.php">Կապ</a></li>
          </ul>
        </div>
        <div class="resp-hr"></div>

        <p class="copy">Սեմուր ընդ Կո © 2022</p>
        <p class="copy1">Բոլոր իրավունքները պաշտպանված են:</p>
      </div>
      <div class="container-footer">
        <div class="footer-items">
          <a>Արտադրանք</a>
          <?php 
              foreach ($asr as $value) {
                echo '<a href="Product.php?type='.$value['type-arm'].'">'.$value['type-arm'].'</a>';
              }
            ?>
        </div>
        <div class="footer-items footer-info">
          <a>Ավելին</a>
         <a href="About.php" class="about">Մեր մասին</a>          
          <a  href="Masnachyux.php" class="masnachyux">Մասնաճյուղեր</a>
          <a href="Blog.php">Semur բլոգ</a>
          <a href="#">Գաղտնիության քաղաքականություն</a>
          <a href="Hashvetvutyun.php">Հաշվետվություն</a>
          <a href="Aparik.php"> Ապառիկ վաճառք</a>
          <a href="Contact.php">Կապ </a>
        </div>
        <div class="resp-footer-line"></div>

        <div class="footer-items footer-img">
          <div class="social">
            <p>Հետևեք մեզ</p>
            <a target="_blank" href="https://www.instagram.com/semur.co/">
              <img src="./img/Instagram Icon.png" alt="Instagram" />
            </a>
            <a
              target="_blank"
              href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/"
            >
              <img src="./img/Facebook Icon.png" alt="Facebook" />
            </a>
            <a
              target="_blank"
              href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg"
            >
              <img src="./img/Youtube Icon.png" alt="Youtube" />
            </a>
          </div>
        </div>
      </div>
    </div>
 
    <script src="./js/style.js"></script>
</body>
</html>