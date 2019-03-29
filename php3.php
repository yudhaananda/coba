<?php 
    $kategori=$_GET["kategori"];
    $nim1=[155150201111320, 145150101131244, 165210401242122, 175210105124343, 185220101248298, 155220207704958];
    if($kategori=="mandiri"){
        echo "Masuk melalui jalur Mandiri : $nim1[0]";
    }
    elseif($kategori=="SBMPTN"){
        echo "Masuk melalui jalur SBMPTN : $nim1[2] & $nim1[4]";
    }
    elseif($kategori=="SNMPTN"){
        echo "Masuk melalui jalur SNMPTN : $nim1[1], $nim1[3], $nim1[5]" ;
    }
    else{
        echo"tidak ada kategori itu";
    };
    }
