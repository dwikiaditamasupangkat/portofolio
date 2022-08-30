<?php

  $koneksi = mysqli_connect('localhost','root','','fila');
  
  function select($sql){
    global $koneksi;
    $result = mysqli_query($koneksi,"SELECT * FROM ".$sql);
    return $result;
  }

  function insert($sql){
    global $koneksi;
    $result = mysqli_query($koneksi,"INSERT INTO ".$sql);
    return $result;
  }

  function update($sql){
    global $koneksi;
    $result = mysqli_query($koneksi,"UPDATE ".$sql);
    return $result;
  }

  function delete($sql){
    global $koneksi;
    $result = mysqli_query($koneksi,"DELETE FROM ".$sql);
    return $result;
  }

  function message($msg){
    echo "<script>alert('$msg');</script>";
  }

  function url($link){
    header('location:'.$link);
  }

  function pindah($link){
    echo "<script>window.location = '$link';</script>";
  }
?>
<script>
  function kosong(){
    alert("Maaf, stok barang habis ^-^");
  }
</script>
