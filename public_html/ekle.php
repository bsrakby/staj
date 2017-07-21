<?php 
include("baglanti.php"); // veritabanı bağlantısı 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veritabanı İşlemleri</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="col-md-6">
<form action="" method="post">
    
    <table class="table">
        
        <tr>
            <td>ad</td>
            <td><input type="text" name="ad" class="form-control" ></td>
        </tr>
<tr>
            <td>soyad</td>
            <td><input type="text" name="soyad" class="form-control" ></td>
        </tr>

        <tr>
            <td>numara</td>
            <td><textarea name="telefon" class="form-control" ></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
        </tr>

    </table>

</form>

<!-- HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodları -->

<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atama
   
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $telefon=$_POST["telefon"];
   


    if ($ad<>"" && $soyad<>""&& $telefon<>"") { 
    // Veri alanlarının boş olup olmadığının kontrolü
        
         // Veri ekleme sorgusu
        if ($baglanti->query("INSERT INTO deneme (ad, soyad, telefon) VALUES ('$ad','$soyad','$telefon')")) 
        {
            echo "Veri Eklendi"; // Veri eklendiyse eklendi yaz
        }
        else
        {
            echo "Hata oluştu";
        }

    }

}

?>
</div>

</table>
</div>
</div>
</body>
</html>
