<?php

    $db=new PDO("mysql:dbname=latihan;host=localhost","root","");
    // $simpan=$db->query("insert into kelas values('', 'SMk','tkr')");

        $tampil=$db->query("select * from kelas");

        // $tampil_data=$tampil->fetch(PDO::FETCH_OBJ);
        $tampil_data=$tampil->fetchAll(PDO::FETCH_OBJ);

        // echo $tampil['kelas'];
        var_dump($tampil_data);

       
?>