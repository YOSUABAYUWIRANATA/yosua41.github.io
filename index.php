<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">
    <title>Posstest 2 Pemrograman Web</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo"><img src="gambar/logoooo.png" alt="" width="60px" /><p class="name">Pizza Yoshua</p></div>
      <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <div class="menu">
          <li class="anjay"><a href="#">HOME</a></li>
          <li class="anjay"><a href="#aboutme">ABOUT</a></li>
          <li class="anjay"><a href="register.php">LOGIN</a></li>
          <li class="anjay"><a href="#product">MENU</a></li>
          <li><a href="#"><i class="bi-brightness-high-fill" id="toggleDark" ></i></a></li>
        </div>
      </ul>
    </nav>

    <!-- main content -->
    <!-- iklan -->
    <div class="row">
      <div class="col-2">
        <img src="gambar/iklann1.webp" alt="pict1" />
      </div>
      <div class="col-2">
        <img src="gambar/iklannn2.webp" alt="pict2" />
      </div>
      <div class="col-2">
        <img src="gambar/iklannn3.webp" alt="pict1" />
      </div>
      <div class="col-2">
        <img src="gambar/iklann4.webp" alt="pict2" />
      </div>
    </div>

    <!-- makanan -->
    <div id="product" class="container">
        <h2>MENU FAVORITE</h2>
          <div class="card">
            <img src="gambar/menu1.jpg" class="content" />
            <div class="deskrip">
              <h4>Rp. 40.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
          <div class="card">
            <img src="gambar/menu2.jpg" class="content" />
            <div class="deskrip">
              <h4>Rp. 32.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
          <div class="card">
            <img src="gambar/menu3.jpg" class="content" />
            <div class="deskrip">
              <h4>Rp. 55.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
          <div class="card">
            <img src="gambar/menu4.jpg" class="content" />
            <div class="deskrip">
              <h4>Rp. 12.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
        </div>
      </div>

      <!-- About me -->
    <section id="aboutme">
        <div class = "image">
           <img src="gambar/fotoku.jpeg" id="foto">
        </div>
  
        <div class = "content">
            <h2>tentang saya</h2>
            <span><!-- line here --></span>
            <p> YOSUA BAYU WIRANATA<br>NIM 2109106126<br><b>PESAN!!<br> jangan meremehkan pelajaran yang sepele karena dari pelajaran tersebut anda dapat berkembang<br> karena masalalu tudak dapat terulang kembali </p>
            <ul class = "icons">
                <li><a href="https://www.instagram.com/yosbyu_/?hl=en">
                <i  class="fa-brands fa-instagram"></i>
                </li></a>
                <li><a href="https://github.com/YOSUABAYUWIRANATA">
                  <i class="fa-brands fa-github"></i>
                </li></a>
                <li><a href="https://www.youtube.com/channel/UC2i-YseT9mR9weZuzQgkJBQ">
                  <i class="fa-brands fa-youtube"></i>
                </li></a>
            </ul>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="bottom">
          <p>Copyright ©2022 by YOSUA BAYU WIRANATA</p>
        </div>
      </footer>
      <script src="script.js"></script>
  </body>
</html>