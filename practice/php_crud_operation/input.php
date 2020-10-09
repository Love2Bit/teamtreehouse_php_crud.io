<?php

include "connection.php";

$input=$db->exec("insert into hewan(hewan,Habitat,Makanan) values('".$_POST['hewan']."','".$_POST['Habitat']."','".$_POST['Makanan']."')");

if($input)
{
    header("Location:index.php");
}