<?php 
    //15-515-02-011-11320
    $nim=$_GET["nim"];
    $tahun=getdate()['year'];
    $angkatan=substr($nim,0,2);
    $fakultas=substr($nim,2,3);
    $prodi=substr($nim,5,2);
    $jalurMasuk=substr($nim,7,3);
    $nomor=substr($nim,10);
    if(strlen($nim)==15){
        $lamaKuliah=$tahun-(2000+$angkatan);
        echo "lama Kuliah : $lamaKuliah Tahun <br>";
        if($fakultas==515){
            echo"Fakultas : Filkom <br>";
        }
        elseif($fakultas==521){
            echo"Fakultas : Fisip <br>";
        }
        elseif($fakultas==522){
            echo"Fakultas : Ftp <br>";
        }
        else{
            echo"Fakultas tidak ditemukan... <br>";
        };
        if($jalurMasuk==011){
            echo"Jalur Masuk : Mandiri <br>";
        }
        elseif($jalurMasuk==012){
            echo"Jalur Masuk : SBMPTN <br>";
        }
        else{
            echo"Jalur Masuk : SNMPTN <br>";
        };
    }
    else{
        echo "<script language=\"Javascript\">\n";
        echo "alert('Data unvalid, check NIM please')";
        echo "</script>";
    }
