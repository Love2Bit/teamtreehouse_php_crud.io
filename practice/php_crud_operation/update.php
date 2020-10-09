<?php

include "connection.php";



$input=$db->exec("update hewan set hewan='".$_POST['hewan']."',Habitat='".$_POST['Habitat']."',Makanan='".$_POST['Makanan']."'where id=".$_POST['id']);

if($input)
{
    header("Location:index.php");
}
// $update=$db->exec("update siswa set nama='".$_POST['nama']."',pekerjaan='".$_POST['pekerjaan']."'where id_siswa=".$_POST['id_siswa']);
