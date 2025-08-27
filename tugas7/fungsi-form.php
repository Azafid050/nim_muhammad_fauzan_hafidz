<?php
// Fungsi
// Definisi: blok kode yang bisa dipanggil berulang.

// parameter itu dibagian dalam () di function, pendefinisian
    function salam($waktu, $nama){
        echo "selamat $waktu guys $nama <br>";
    }
// dan yang berada di () dinamakan argumen, ataupun yang dipanggil
    salam("pagi", "salim");
    salam("sore", "mimin");

// return value
// sebuah nilai seharusnya mengembalikan nilai bukan langsung dengan perintah echo
    function tambah($nilai1, $nilai2){
        $hasil = $nilai1 + $nilai2;
        return $hasil;
        echo "return ini akan memberhentikan fungsi disini";
    }

// $a = tambah(10, 10);
// $b = tambah($a, 5);
// echo $b;
// echo "<br>";

    $a = tambah(10, 10);
    $b = tambah($a, 5);
    echo $b;
    echo "<br>";

    echo tambah(5, 4);
    echo "<br>";
    echo "hasil dari 10 + 7 adalah : ".tambah(10, 7);

// 

    function tambah_kurang($nilai1, $nilai2){
        $hasil[] = $nilai1 + $nilai2;
        $hasil[] = $nilai1 - $nilai2;
        return $hasil;
    }

    $a = tambah_kurang(10, 7);
    echo "<br>";
    echo "10 tambah 7 = ".$a[0];
    echo "<br>";
    echo "10 kurang 7 = ".$a[1]; echo "<br>"
?>

<?php
// Scope variabel local
// variabel yang dideklarasi di dalam sebuah fungsi disebut variabel lokal
// hanya bisa digunakan didalam fungsi tersebut
// variabel loka tidak bisa diakses oleh fungsi luar

    function halo() {
        $nama = "azafid";
        echo "halo, $nama!"; 
    }

    halo();
?>

<?php
// global scope
// variabel yang dideklarasi di luar fungsi
// bisa diakses diman saja, tapi tidak otomatis bisa di akses di dalam fungsi


    $nama = "Azafid"; echo "<br>";

    function hai() {
        global $nama;
        echo "Hai, $nama!";
    }

    hai();
// ada juga pake $GLOBALS['nama'] . "!"; array khusus yang otomatis berisi semua variasi global, cara ini lebih aman jika banyak variabel global
?>


<!-- Form get, data muncul di URL, tidak aman untuk password, bisa bookmark URL, ukuran data lebih kecil daripada Form post, cocok buat search, filter, sharing url -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
</head>
<body>
  <h2>Form GET</h2>
  <form action="" method="GET">
    <input type="text" name="username" placeholder="Masukkan username"><br><br>
    <input type="password" name="password" placeholder="Masukkan password"><br><br>
    
    <select name="gender">
      <option value="male">Laki-laki</option>
      <option value="female">Perempuan</option>
    </select><br><br>
    
    <button type="submit">Kirim</button>
  </form>

  <?php
  // Cek jika form sudah dikirim
  if(isset($_GET['username'])) {
      $username = $_GET['username'];
      $password = $_GET['password'];
      $gender   = $_GET['gender'];
      
      echo "<h3>Data Diterima (GET):</h3>";
      echo "Username: $username <br>";
      echo "Password: $password <br>";
      echo "Gender: $gender <br>";
  }
  ?>

<!-- Form post, data tidak muncul di url, tapi aman untuk password, tidak bisa bookmark url, ukuran data lebih besar daripada form get, cocok buat login, registrasi dan upload -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
</head>
<body>
  <h2>Form POST</h2>
  <form action="" method="POST">
    <input type="text" name="username" placeholder="Masukkan username"><br><br>
    <input type="password" name="password" placeholder="Masukkan password"><br><br>
    
    <select name="gender">
      <option value="male">Laki-laki</option>
      <option value="female">Perempuan</option>
    </select><br><br>
    
    <button type="submit">Kirim</button>
  </form>

  <?php
  // Cek jika form sudah dikirim
  if(isset($_POST['username'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $gender   = $_POST['gender'];
      
      echo "<h3>Data Diterima (POST):</h3>";
      echo "Username: $username <br>";
      echo "Password: $password <br>";
      echo "Gender: $gender <br>";
  }
  ?>
</body>
</html>

<!-- super global -->

<!-- Superglobal adalah variabel bawaan PHP yang tersedia di mana saja (di luar maupun di dalam fungsi). -->

<!-- $_GET → mengambil data dari form method="GET" -->
<!-- $_POST → mengambil data dari form method="POST" -->

<form method="GET">
  <input type="text" name="azafid" placeholder="Masukkan azafid">
  <button type="submit">Kirim</button>
</form>

<?php
if(isset($_GET['azafid'])) {
    echo "azafid: " . $_GET['azafid'];
}
?>


<form method="POST">
  <input type="password" name="password" placeholder="Masukkan password">
  <button type="submit">Kirim</button>
</form>

<?php
if(isset($_POST['password'])) {
    echo "Password: " . $_POST['password'];
}
?>



