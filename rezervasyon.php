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
  $telefon = htmlspecialchars($_POST["telefon"]);
  $tarih = htmlspecialchars($_POST["tarih"]);
  $saat = htmlspecialchars($_POST["saat"]);
  $kisisayisi = htmlspecialchars($_POST["kisisayisi"]);
  $ekstra = htmlspecialchars($_POST["ekstra"]);
  $sql = "INSERT INTO rezervasyon(isim,eposta,telefon,tarih,saat,kisisayisi,ekstra) VALUES ('$isim','$email','$telefon','$tarih','$saat','$kisisayisi','$ekstra')";

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
              <a class="nav-link" id="nav-aktif" href="rezervasyon.php"
                >Rezervasyon</a
              >
            </li>
            <li class="nav-item mr-2 active ">
              <a class="nav-link" id="navlinkler" href="iletisim.php"
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
      class="container-fluid bg-light p-3 rounded mb-5 d-flex flex-column align-items-center"
          id="rezervasyon_container"
    >
      
    
      <div class="row d-flex flex-column align-items-center" >
        <div class="col-12 col-md-8 " >
        <div class="text-center text-success mt-3" style="display:<?php echo $display ?>;"><span>Mesajınız başarıyla gönderilmiştir. </span><i class="fa fa-check-circle text-success" style="font-size:35px;"></i></div>

          <form action="rezervasyon.php" method="POST" class="mt-2 mt-md-0" autocomplete="off">
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
                />
            </div>
            <div class="col-12">
              <h5 class="m-0 mt-2" >Telefon</h5>
            </div>
            <div class="col-12 ">
              <input
                type="number"
                class="form-text iletisim"
                name="telefon"
                id=""
                
              />
              
          </div>
          <div class="col-12">
            <h5 class="m-0 mt-2" >Tarih</h5>
          </div>
          <div class="col-12 ">
            <input
              type="date"
              class="form-text iletisim"
              name="tarih"
              id=""
              
            />
        </div>
            <div class="col-12">
            <div id="saat_kutu">
              
              <div id="ic_kutu" class="container-fluid">
               <div class="row p-0">
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">12:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">13:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">14:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">15:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">16:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">17:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">18:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">19:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">20:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">21:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">22:00</div>
               <div class="col-3 text-center p-0 d-flex justify-content-center align-items-center saatler"">23:00</div>
               </div>
               
              </div>
        </div>
                <h5 class="m-0 mt-2" >Saat</h5>
              </div>
              <div class="col-12 ">
                <input
                  type="text"
                  class="form-text iletisim"
                  name="saat"
                  id="saat"
                  readonly
                />
                
            </div>
            <div class="col-12">
                <h5 class="m-0 mt-2" >Kişi sayısı</h5>
              </div>
              <div class="col-12 ">
              <select name="kisisayisi" id="" class="form-select iletisim">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="10+">10+ (Ekstra İstekler Bölümünde Belirtiniz)</option>
              </select>
              </div>
              <div class="col-12">
                <h5 class="m-0 mt-2" ">Yorumlar/Ekstradan İstekler</h5>
              </div>
              <div class="col-12 ">
                <textarea name="ekstra" id="" cols="" rows="" class="mt-1 iletisim" style="width:100%; min-height: 100px; resize:none;"></textarea>
            </div>
            <div class="col-12">
              <input type="submit" name="submit" id="" value="Gönder" class="btn" style="background-color:#bda084">
            </div>
            
        
        
          </form>
        </div>
      </div>
    </div>
      
    <a
      id="back-to-top"
      href="#top"
      class="btn btn-light btn-md back-to-top bg-transparent"
      role="button"
      ><i class="fa fa-chevron-up text-white"></i
    ></a>

    <?php include ("includes/jsconnection.html"); ?>
    <script src="rezervasyon.js"></script>
  </body>
</html>
