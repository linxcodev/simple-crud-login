<?php

include('koneksi.php');
$usrnm = mysql_real_escape_string(htmlentities($_POST['username']));
$paswd = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
$query = mysql_query("select * from user where username = '$usrnm' and password = '$paswd'") or die(mysql_error());

if (mysql_num_rows($query) == 0){
    echo '<script>alert("user '.$usrnm.' tidak ditemukan"); document.location="index.html"</script>';
} else {
    $cek = mysql_fetch_assoc($query);
    if ($cek['level'] == 1){
        $_SESSION['admin'] = $usrnm;
        echo '<script>alert("Selamat Datang Admin '.$usrnm.'");document.location="admin/index.php";</script>';
    } else {
        $_SESSION['guest'] = $usrnm;
        echo '<script>alert("Selamat Datang Pengunjung '.$usrnm.'"); document.location="guest/"</script>';
    }
}