<?php 
     @$baglanti = new mysqli('DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME'); // Veritabanı bağlantısı
    if(mysqli_connect_error()) //Hata kontrolü
    {
        echo mysqli_connect_error();
        exit; //Hata varsa PHP sonlandır
    }

$baglanti->set_charset("utf8"); // Türkçe karakter desteği

?>
