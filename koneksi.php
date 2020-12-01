<?php

$conn = mysqli_connect("localhost", "root", "", "assesment2");

function query($query)
{

  global $conn;
  $result = mysqli_query($conn, "SELECT * FROM  makanan");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function queryPesan1($query)
{

  global $conn;
  $result = mysqli_query($conn, "SELECT * FROM  pemesan");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $nama_pemesan = htmlspecialchars($data["nama_pemesan"]);

  //insert data
  $query = "INSERT INTO pengunjung
   VALUES 
   ('','$nama_pengunjung');
";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function tambahPesan1($data)
{
  global $conn;
  $nama_pemesan = htmlspecialchars($data["nama_pemesan"]);
  $nama_makanan = htmlspecialchars($data["nama_makanan"]);
  $harga = htmlspecialchars($data["harga"]);
  //insert data
  $query = "INSERT INTO transaksi
   VALUES 
   ('','$nama_pemesan','$nama_makanan','$harga');
";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
