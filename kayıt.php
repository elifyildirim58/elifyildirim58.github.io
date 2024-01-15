<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $ad = htmlspecialchars($_POST["ad"]);
    $soyad = htmlspecialchars($_POST["soyad"]);
    $email = htmlspecialchars($_POST["email"]);
    $sifre = password_hash($_POST["sifre"], PASSWORD_DEFAULT); // Şifreyi güvenli bir şekilde hashle

    // MySQL veritabanı bağlantısı
    $servername = "localhost";
    $username = "veritabani_kullanici";
    $password = "veritabani_sifre";
    $dbname = "uyeler";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantı kontrolü
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    // Kullanıcıyı veritabanına ekleme
    $sql = "INSERT INTO kullanicilar (ad, soyad, email, sifre) VALUES ('$ad', '$soyad', '$email', '$sifre')";

    if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarıyla eklendi!";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    // Bağlantıyı kapat
    $conn->close();
} else {
    // Post isteği değilse, bu sayfaya doğrudan erişildiği için hata mesajı gösterilebilir
    echo "Hata: Bu sayfaya doğrudan erişilemez!";
}
?>
