<?php

include ("includes/veritabani_connection.php");


$sql_anayemek="SELECT * FROM anayemek;";
$result_anayemek=mysqli_query($database,$sql_anayemek);
$ana_yemek_dizi=mysqli_fetch_all($result_anayemek,MYSQLI_ASSOC);

$sql_tatli="SELECT * FROM tatli;";
$result_tatli=mysqli_query($database,$sql_tatli);
$tatli_dizi=mysqli_fetch_all($result_tatli,MYSQLI_ASSOC);

$sql_icecek="SELECT * FROM icecek;";
$result_icecek=mysqli_query($database,$sql_icecek);
$icecek_dizi=mysqli_fetch_all($result_icecek,MYSQLI_ASSOC);

mysqli_free_result($result_anayemek);
mysqli_free_result($result_tatli);
mysqli_free_result($result_icecek);

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
              <a class="nav-link " id="navlinkler" href="anasayfa.php"
                >Anasayfa</a
              >
            </li>
            <li class="nav-item mr-2 active ">
              <a class="nav-link " id="nav-aktif" href="menu.php">Menü</a>
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
      id="resim-container"
    ></div>
    <div
      class="container-fluid bg-light p-3 rounded mb-5"
      style="width:85vw;margin-top:-5%;   box-shadow: 0px 0px 22px 6px rgba(0, 0, 0, 0.24);
    "
    >
   
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header menu_collapse menu_resim_ana" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="menu_collapse">
          Ana Yemek
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">


      
      <?php foreach($ana_yemek_dizi as $menu) { ?>

          <div
          class="row border rounded m-2"
          style="border:1px solid #bda084!important;
          box-shadow: 0px 0px 26px -7px rgba(0,0,0,0.3);
          "
          >
          <div class="col-6  col-md-3 p-0">
          <div  style="background-image:url('<?php echo $menu["gorsel"];?>')" id="gununyemegi"></div>
          </div>

          <div class="col-6 col-md-9 p-3">

          <h3 class="gununyemegih1"><?php echo $menu["baslik"];?></h3>

          <p class="gununyemegiparag">
          <?php echo $menu["icerik"];?>
          </p>
          </div>
          </div>
          <?php } ?>




      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header menu_collapse menu_resim_tatli" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed menu_collapse" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="menu_collapse">
          Tatlılar
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">




                  <?php foreach($tatli_dizi as $menu) { ?>

            <div
            class="row border rounded m-2"
            style="border:1px solid #bda084!important;
            box-shadow: 0px 0px 26px -7px rgba(0,0,0,0.3);
            "
            >
            <div class="col-6  col-md-3 p-0">
            <div  style="background-image:url('<?php echo $menu["gorsel"];?>')" id="gununyemegi"></div>
            </div>

            <div class="col-6 col-md-9 p-3">

            <h3 class="gununyemegih1"><?php echo $menu["baslik"];?></h3>

            <p class="gununyemegiparag">
            <?php echo $menu["icerik"];?>
            </p>
            </div>
            </div>
            <?php } ?>




      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header  menu_resim_icecek" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="menu_collapse">
          İçecekler
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">



      <?php foreach($icecek_dizi as $menu) { ?>

        <div
        class="row border rounded m-2"
        style="border:1px solid #bda084!important;
        box-shadow: 0px 0px 26px -7px rgba(0,0,0,0.3);
        "
        >
        <div class="col-6  col-md-3 p-0">
        <div  style="background-image:url('<?php echo $menu["gorsel"];?>')" id="gununyemegi"></div>
        </div>

        <div class="col-6 col-md-9 p-3">

        <h3 class="gununyemegih1"><?php echo $menu["baslik"];?></h3>

        <p class="gununyemegiparag">
        <?php echo $menu["icerik"];?>
        </p>
        </div>
        </div>
        <?php } ?>




    </div>
    </div>
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
  </body>
</html>
