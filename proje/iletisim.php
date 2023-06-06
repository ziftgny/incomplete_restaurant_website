
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nihil</title>
    <?php include ("includes/cssconnection.html"); ?>
  </head>
  <body>
   <?php 

include ("includes/veritabani_connection.php");
$display = "none";
if(isset($_POST["submit"])){

 
  $isim = htmlspecialchars($_POST["isim"]);
  $email = htmlspecialchars($_POST["e-posta"]);
  $konu = htmlspecialchars($_POST["konu"]);
  $mesaj = htmlspecialchars($_POST["mesaj"]);
  $sql = "INSERT INTO iletisim(isim,email,konu,mesaj) VALUES ('$isim','$email','$konu','$mesaj')";
  
  if(mysqli_query($database,$sql)){
    $display = "block";
  }
    

  mysqli_close($database);
 
  ?>
  <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
   }
  </script>

   <?php } ?>

    <nav
      id="top"
      class="navbar navbar-expand-md navbar-dark text-white bg-transparent py-2 position-absolute px-0"
      style="width:100%;"
    >
      <div class="container px-3 px-md-0">
        <a class="navbar-brand " href="anasayfa.php" id="marka-font">Nihil</a>
        <button
          class="navbar-toggler "
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="z-index:1 ;"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse ml-0 ml-md-5 border-0 "
          style="z-index:1"
          id="navbarNav"
        >
          <ul class="navbar-nav " id="navtext">
            <li class="nav-item mr-2 active">
              <a class="nav-link " id="navlinkler" href="anasayfa.php"
                >Anasayfa</a
              >
            </li>
            <li class="nav-item mr-2 active ">
              <a class="nav-link " id="navlinkler" href="menu.php">Menü</a>
            </li>
            <li class="nav-item mr-2 active ">
              <a class="nav-link" id="navlinkler" href="rezervasyon.php"
                >Rezervasyon</a
              >
            </li>
            <li class="nav-item mr-2 active ">
              <a class="nav-link" id="nav-aktif" href="iletisim.php"
                >İletişim</a
              >
            </li>
            <li class="nav-item mr-2 active ">
              <a class="nav-link" id="navlinkler" href="galeri.php">Galeri</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div
      class="fluid-img text-light d-flex justify-content-center align-items-center"
      id="resim-container"
    ></div>
    <div
      class="container-fluid bg-light p-3 rounded mb-5"
      style="width:85vw;margin-top:-5%;   box-shadow: 0px 0px 22px 6px rgba(0, 0, 0, 0.24);
      "
    >
      <div class="row">
        <div class="col-12 col-md-6">
          <h3>Adres</h3>
          <hr />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus modi! Deleniti cum qui aspernatur, molestiae cupiditate officia ex fugiat?
          </p>
          <h3 class="mt-2">İrtibat</h3>
          <hr />
          <h5>Telefon:</h5>
          <h5>Fax:</h5>
          <h5>E-Posta:</h5>
          
        </div>
        <div class="col-12 col-md-6">
          <h3 class="mt-3 mt-md-0">Önerileriniz veya Şikayetleriniz için:</h3>
          <div class="text-center text-success mt-3" style="display:<?php echo $display ?>;"><span>Mesajınız başarıyla gönderilmiştir. </span><i class="fa fa-check-circle text-success" style="font-size:35px;"></i></div>
          
          <form action="iletisim.php" method="POST" class="mt-2 mt-md-0">
            <div class="row">
              <div class="col-12">
                <h5 class="m-0 mt-2 ">İsim</h5>
              </div>
              <div class="col-12 ">
                
                <input 
                  type="text"
                  class="form-text iletisim"
                  name="isim"
                  id="" 
                />
              </div>
              <div class="col-12">
                <h5 class="m-0 mt-2" ">E-posta</h5>
              </div>
              <div class="col-12 ">
                <input
                  type="email"
                  class="form-text iletisim"
                  name="e-posta"
                  id=""
                  value= ""
                  required
                />
            </div>
            <div class="col-12">
              <h5 class="m-0 mt-2" >Konu</h5>
            </div>
            <div class="col-12 ">
              <input
                type="text"
                class="form-text iletisim"
                name="konu"
                id=""
                
              />
          </div>
          <div class="col-12">
            <h5 class="m-0 mt-2" ">Mesaj</h5>
          </div>
          <div class="col-12 ">
            <textarea name="mesaj" id="" cols="" rows="" class="mt-1 iletisim" style="width:100%; min-height: 100px; resize:none;" required></textarea>
        </div>
        <div class="col-12">
          <input type="submit" name="submit" id="" value="Gönder" class="btn" style="background-color:#bda084">
        </div>
          </form>
        </div>
        
      </div>
    
      <iframe class="col-12 mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12048.241948949628!2d29.073515227198882!3d40.98015631811966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac7b749c9ecdf%3A0x41ebb6401d7dbb82!2zS2FkxLFrw7Z5LCBTYWhyYXnEsSBDZWRpdCwgMzQ3MzQgS2FkxLFrw7Z5L8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1582123860737!5m2!1str!2str" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
   
    </div>

    <a
      id="back-to-top"
      href="#top"
      class="btn btn-light btn-md back-to-top bg-transparent"
      role="button"
      ><i class="fa fa-chevron-up text-white"></i
    ></a>

    <?php include ("includes/jsconnection.html"); 
    ?>
  </body>
</html>


