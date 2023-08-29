<?php 
function kutu($metin, $color) {
    echo '<div style="height:250px; width:250px; background-color: '.$color.'; color:white; display:flex; align-items:center; justify-content:center; font-size:1.6em; border-radius: 10px">'.$metin.'</div>';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stil.css">
  </head>
  <body>
    <section class="headerTop">
    <div class="container-fluid ust-bar">
        <div class="row">
            <div class="col-md-3 logo">
                <img src="./images/logo.jpeg" height="100px" class="rounded-5">
            </div>
            <div class="col-md-9 menu">
                <ul>
                    <li><a href="">Anasayfa</a></li>
                    <li><a href="">Hakkımızda</a></li>
                    <li><a href="">İletişim</a></li>
                    <li style="background-color:#25D366;"><a href=""><i class="bi bi-whatsapp"></i> Whatsapp</a></li>
                </ul>
            </div>
        </div>
    </div>
    </section>



<?php 
/**
 * Slider Area
 */
?>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./images/ornek.webp"></div>
      <div class="swiper-slide"><img src="./images/ornek.webp"></div>
    </div>
    <div class="swiper-scrollbar"></div>
  </div>
<?php 
/**
 * Slider Area
 */
?>


    <section class="tanitim">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="height:400px; width:400px; background-color: orange; display:flex; align-items:center; justify-content:center; font-size:1.6em; border-radius: 10px">Logo</div>
                </div>
                <div class="col-md-5">
                    <h1>Refleks Makina</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="referanslar">
        <div class="container">
            <h1>Referans Çalışmalarımız</h1>
            <div class="row">
                <div class="col-md-3 mb-5">
                <?php kutu("Resim 1", "orange"); ?>
                </div>

                <div class="col-md-3 mb-5">
                <?php kutu("Resim 2", "orange"); ?>
                </div>

                <div class="col-md-3 mb-5">
                <?php kutu("Resim 3", "orange"); ?>
                </div>

                <div class="col-md-3 mb-5">
                <?php kutu("Resim 4", "orange"); ?>
                </div>

                <div class="col-md-3">
                <?php kutu("Resim 1", "orange"); ?>
                </div>

                <div class="col-md-3">
                <?php kutu("Resim 2", "orange"); ?>
                </div>

                <div class="col-md-3">
                <?php kutu("Resim 3", "orange"); ?>
                </div>

                <div class="col-md-3">
                <?php kutu("Resim 4", "orange"); ?>
                </div>
            </div>
        </div>
    </section>



    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footerTitle">Bülten Katalog</div>
                    <div>
                    <p class="katalog">Katalog PDF Görüntüle <i class="bi bi-cloud-arrow-down-fill"></i></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="footerTitle">Sosyal Medya</div>
                    <ul>
                      <li><a href=""><i class="bi bi-facebook"></i> Facebook</a></li>
                      <li><a href=""><i class="bi bi-instagram"></i> Instagram</a></li>
                      <li><a href=""><i class="bi bi-youtube"></i> Youtube</a></li>
                    </ul>
                </div>



                <div class="col-md-4">
                    <div class="footerTitle">İletişim</div>
                    <ul>
                      <li><a href=""><i class="bi bi-phone-fill"></i> 0506 770 1861</a></li>
                      <li><a href=""><i class="bi bi-telephone-outbound-fill"></i> 0212 123 18 61</a></li>
                      <li><a href=""><i class="bi bi-geo-alt-fill"></i> Gaziosmanapaşa İstanbul</a></li>
                      <li><a href=""><i class="bi bi-envelope-fill"></i> mail@refleksmakina.com</a></li>
                    </ul>
                </div>


            </div>
            <div class="border-top border-1 mt-5">
            <p class="power">Copyright &copy 1990-2023 refleksmakina.com <br> Web sitemizde yer alan görsellerin izin kopyalanması ve kullanılması yasaktır.</p>
            <p class="power mt-2 fw-bold">Design & Code - A&F Yazılım ve E-Ticaret Hizmetleri</p>
            </div>
        </div>
    </section>





  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>