<?php
session_start();

if(!isset($_SESSION['guest'])){
	echo '<script language="javascript">
			alert("Anda harus Login!"); 
			document.location="../index.html";
		  </script>';
}
?>