<?php

    echo date('d/m/Y', strtotime('Tanggal pertama di bulan ini')); //LAST WEEK



    echo PHP_EOL;
    $result="10/10/2020";

    $result=explode("/",$result);

    var_dump(checkdate($result[0],$result[1],$result[2]));

    echo PHP_EOL;

    
    date_default_timezone_set("Asia/Jakarta");
    $time= date('d/m/Y H:i:s');
    echo $time;



?>