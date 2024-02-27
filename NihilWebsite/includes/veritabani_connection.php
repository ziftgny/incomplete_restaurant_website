<?php
$database = mysqli_connect("localhost:3307","root","12345","proje");
if(!$database){
    echo "hata : ".mysqli_connect_error();
}

?>