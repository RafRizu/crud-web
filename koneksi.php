<?php

$conn = mysqli_connect("localhost", "root", "", "crud_php");

if (!$conn) {
    echo "koneksi gagal".mysqli_connect_error();
}
?>