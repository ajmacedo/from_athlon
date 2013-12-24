<?php

    
    //Comentado para achar os erros:
    //$url  = '';

    //$url='http://www.bmfbovespa.com.br/BancoTitulosBTC/download/DBTCER9999_v2.pdf'; 
    //Tentativa ousada
    $url='http://www.bmfbovespa.com.br/BancoTitulosBTC/EmprestimoRegistrado.aspx?Idioma=pt-br';
    $path = '/srv/samba/share/Projects/PHP/WIN32/Downloads/tst001.txt';
 
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    $data = curl_exec($ch);
 
    curl_close($ch);
 
    file_put_contents($path, $data);
    echo "\nCome to finish without error!";
    echo "\nTentativa para __doPostBack!";
    echo "\n...\n..\n.\n\n";
?>