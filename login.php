<?php
include('koneksi.php');
session_start();

$usrnm = mysqli_real_escape_string($koneksi,htmlentities($_POST['username']));
$paswd = mysqli_real_escape_string($koneksi,htmlentities($_POST['password']));
$query = mysqli_query($koneksi,"SELECT * FROM user where username = '$usrnm' and password = '$paswd'") or die(mysqli_error($koneksi));

if (mysqli_num_rows($query) == 0){
    echo '<script>
            alert("user '.$usrnm.' tidak ditemukan"); 

          </script>';
} else {
    $cek = mysqli_fetch_assoc($query);
    if ($cek['level'] == 1){
        $_SESSION['admin'] = $usrnm;
        echo '<script>
                alert("Selamat Datang Admin '.$usrnm.'");
                document.location="admin/index.php";
              </script>';
    } else {
        $_SESSION['guest'] = $usrnm;
        echo '<script>
                alert("Selamat Datang Pengunjung '.$usrnm.'"); 
                document.location="guest/"
              </script>';
    }
}