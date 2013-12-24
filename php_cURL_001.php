<?php

    
    //Comentado para achar os erros:
    //$url  = '';

    $url='http://www.bmfbovespa.com.br/BancoTitulosBTC/download/DBTCER9999_v2.pdf'; 
    $path = '/srv/samba/share/Projects/PHP/WIN32/Downloads/tst001.pdf';
 
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    $data = curl_exec($ch);
 
    curl_close($ch);
 
    file_put_contents($path, $data);
    echo "\n\nCome to finish without error!\n\n";
    echo "\n";
?>