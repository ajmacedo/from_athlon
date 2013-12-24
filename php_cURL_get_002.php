<?php

//Chamando a biblioteca:
include 'Lib_001.php';


//Vou testar no meu próprio site:

$ch = curl_init('http://athlonxpprojeto.zapto.org');
//$ch = curl_init('http://www.bmfbovespa.com.br/BancoTitulosBTC/EmprestimoRegistrado.aspx?Idioma=pt-br');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//curl_exec($ch);


if(!curl_exec($ch))
{
    die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}


 $info = curl_getinfo($ch);
 echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'] . "\n\n" ;
 $saida0 = array("0"=>"Aluisio","1"=>"Ana Paula");
 $saida = get_links($ch);

echo "\n" . 'Agora mostrando a saida da funcao get_links($ch)' . "\n";

echo $saida0['0'] . "\n\n";

echo 'Sozinho ' . $info['url']. "\n...\n..\n.\n\n";


// Close handle
curl_close($ch);

/*

Mesmo questionamento         	: http://stackoverflow.com/questions/12046740/how-do-i-get-url-that-is-hidden-by-javascript-on-external-website
Tentando chamar JS           	: http://stackoverflow.com/questions/5160718/curl-and-javascript-submit
Mas cURL não roda no browser 	: http://forums.phpfreaks.com/topic/131111-execute-javascript-using-curl/
Acho que este vai resolver	: http://codular.com/curl-with-php

Demais Links:

-> http					://www.php.net/manual/en/function.curl-setopt-array.php
-> este ainda tenta o __EVENTTARGET	: http://www.mishainthecloud.com/2009/12/screen-scraping-aspnet-application-in.html
-> Ajuda achar href			: http://stackoverflow.com/questions/19039495/getting-href-of-an-a-tag-with-preg-match-all-and-curl


*/


?>