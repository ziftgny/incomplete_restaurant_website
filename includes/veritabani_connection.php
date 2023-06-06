<?php
$database = mysqli_connect("localhost","south","123456","proje");
if(!$database){
    echo "hata : ".mysqli_connect_error();
}

?>