<?php

include "../koneksi.php";

$query = mysqli_query($koneksi, "DELETE FROM berita WHERE id='$_GET[id]'");

if ($query) {
    header("location:berita.php");
}
