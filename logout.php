<?php
session_start();
session_destroy();

if ($_SESSION['admin']) {
    echo '<script language="javascript">alert("Anda berhasil Logout ' . $_SESSION['admin'] . '"); document.location="index.html";</script>';
} else {
    echo '<script language="javascript">alert("Anda berhasil Logout ' . $_SESSION['guest'] . '"); document.location="index.html";</script>';
}
