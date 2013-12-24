<?php


// Create a curl handle
$ch = curl_init('http://www.bmfbovespa.com.br/BancoTitulosBTC/EmprestimoRegistrado.aspx?Idioma=pt-br');



// Execute
curl_exec($ch);


// Check if any error occured
if(!curl_errno($ch))
{

 $info = curl_getinfo($ch);
 echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'] . "\n\n" ;
}


// Close handle
curl_close($ch);

/*

Mesmo questionamento         : http://stackoverflow.com/questions/12046740/how-do-i-get-url-that-is-hidden-by-javascript-on-external-website
Tentando chamar JS           : http://stackoverflow.com/questions/5160718/curl-and-javascript-submit
Mas cURL não roda no browser : http://forums.phpfreaks.com/topic/131111-execute-javascript-using-curl/

Demais Links:

-> http://www.php.net/manual/en/function.curl-setopt-array.php
-> este ainda tenta o __EVENTTARGET: http://www.mishainthecloud.com/2009/12/screen-scraping-aspnet-application-in.html
-> 


*/





?>