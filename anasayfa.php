
<?php

include ("includes/veritabani_connection.php");

$sql_gununyemegi="SELECT * FROM gununyemegi JOIN anayemek ON gununyemegi.yemek_id=anayemek.id;";
$result_gununyemegi=mysqli_query($database,$sql_gununyemegi);
$gununyemegi_dizi=mysqli_fetch_all($result_gununyemegi,MYSQLI_ASSOC);

mysqli_free_result($result_gununyemegi);
mysqli_close($database);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nihil</title>
  <?php include ("includes/cssconnection.html"); ?>
    
  </head>
  <body>
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
              <a class="nav-link " id="nav-aktif" href="anasayfa.php">Anasayfa</a>
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
      id="resim"
    >
      <div class="container py-5 py-md-0">
        <div class="row text-center px-0">
          <h2 class=" col-12 text-center mb-0 px-0" id="marka-font">Nihil</h2>

          <p class="col-12 mx-0 px-0">Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
      <div  id="suanki_zaman" style="position:absolute; bottom:0; font-size:23px;" >
      
          </div>
    </div>
    <div class="container py-5 px-5 px-m-0">
      <div
        class="row border rounded "
        style="border:1px solid #bda084!important;
box-shadow: 0px 0px 26px -7px rgba(0,0,0,0.3);
"
      >
        <div class="col-6  col-md-3 p-0">
          <div style="background-image:url('<?php echo $gununyemegi_dizi[0]["gorsel"] ?>')" id="gununyemegi"></div>
        </div>

        <div class="col-6 col-md-9 p-3">
          <h1 class="gununyemegibaslik">Günün Yemeği</h1>
          <hr class="gununyemegihr mt-0" />
          <h3 class="gununyemegih1"><?php echo $gununyemegi_dizi[0]["baslik"] ?></h3>

          <p class="gununyemegiparag">
          <?php echo $gununyemegi_dizi[0]["icerik"];?>
          </p>
        </div>
      </div>
    </div>

    <div
      class="jumbotron jumbotron-fluid text-center text-light py-4 mb-0"
      id="jumbotronbg"
    >
      <div class="container">
        <h1 class="display-4">Hakkımızda</h1>
        <p class="lead">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil
          blanditiis saepe eos libero dolorum, cupiditate veritatis iure vel?
          Dolorem necessitatibus suscipit eum totam, voluptate soluta mollitia
          doloremque dolore iusto ipsa temporibus! Tempora voluptates velit, ex
          porro maxime magnam debitis pariatur quaerat reprehenderit, aperiam ea
          quas provident fugit sequi exercitationem voluptate! Fuga quis,
          molestiae temporibus laborum exercitationem error eum dolor dicta nam
          velit unde corrupti aspernatur perspiciatis sunt tempora rerum? Totam
          amet quidem non? Harum aliquam tenetur totam porro neque culpa.
        </p>
        <a href="#"
          ><img
            class="fluid-img ml-2"
            src="Facebook_2.svg"
            style="height:40px;"
            alt=""
        /></a>
        <a href="#"
          ><img
            class="fluid-img ml-2"
            src="instagram_2.svg"
            style="height:40px;"
            alt=""
        /></a>
        <a href="#"
          ><img
            class="fluid-img ml-2"
            src="youtube_2.svg"
            style="height:40px;"
            alt=""
        /></a>
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

    <script src="saat.js"></script>
  </body>
</html>
