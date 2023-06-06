
<?php

include ("includes/veritabani_connection.php");

  $sql="SELECT * FROM galeri" ;
  $result=mysqli_query($database,$sql);
  $dizi=mysqli_fetch_all($result,MYSQLI_ASSOC);

  mysqli_free_result($result);
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
              <a class="nav-link" id="nav-aktif" href="galeri.php">Galeri</a>
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
      class="container-fluid bg-transparent p-0 mb-5"
      style="width:85vw;margin-top:-5%;overflow:hidden; 
    "
    >
    
      <div class="row p-0 m-0">




        <div class="col-6 col-md-3 p-0">
        <?php for($x=0;$x<count($dizi);$x=$x+4) {  ?>
        <div class="col-12  m-0 p-0 " ><img src="<?php echo $dizi[$x]["resim"];?>" alt="" class="img-fluid"id="galeri_linear" ></div>
        <?php } ?>
      </div>
        
        <div class="col-6 col-md-3 p-0">
        <?php for($x=1;$x<count($dizi);$x=$x+4) {  ?>
        <div class="col-12  m-0 p-0 " ><img src="<?php echo $dizi[$x]["resim"];?>" alt="" class="img-fluid"id="galeri_linear" ></div>
        <?php } ?>      
        </div>
        <div class="col-6 col-md-3 p-0">
        <?php for($x=2;$x<count($dizi);$x=$x+4) {  ?>
        <div class="col-12  m-0 p-0 " ><img src="<?php echo $dizi[$x]["resim"];?>" alt="" class="img-fluid"id="galeri_linear" ></div>
        <?php } ?>
        </div>
        <div class="col-6 col-md-3 p-0">
        <?php for($x=3;$x<count($dizi);$x=$x+4) {  ?>
        <div class="col-12  m-0 p-0 " ><img src="<?php echo $dizi[$x]["resim"];?>" alt="" class="img-fluid"id="galeri_linear" ></div>
        <?php } ?>        
        </div>
          
        
      </div>
              <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
     
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
