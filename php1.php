<?php 

    $nim=$_GET["nim"];
    if(strlen($nim)==15){
        echo "<script language=\"Javascript\">\n";
        echo "alert('Success Input')";
        echo "</script>";
        
    }
    else{
        echo "<script language=\"Javascript\">\n";
        echo "alert('Data unvalid, check NIM please')";
        echo "</script>";
    }
