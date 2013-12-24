<?php

echo "Partindo do zero->Ok!\n\n";

echo "Chamando função interna\n";
echo "Resultado da chamada: " . nada() . "\n";

echo "\nAbrindo arquivo XML no HD do Sevidor->Ok!\n";
  $xml = new DOMDocument();
  $xml->load("books.xml");


echo "\nnodeName do documento	: " . $xml->nodeName;
echo $xml->hasChildNodes()?" hasChildNodes":" hasNoChildNodes";
echo "\n";
drill_down($xml);

$level1 = $xml->childNodes;
//$level1 = $xml->getElementsByTagName('bookstore')->childNodes;

for ($i=0; $i<$level1->length; $i++)
{
  echo "\nnodeName " . $level1->item($i)->nodeName;
  
}



//echo "\nnodeName do documento	: " . ($xml.hasChild?"Sim","Nao");

//echo "\nchildNodes " . $xml->childNodes->length ;

//$tmp = $xml->getElementsByTagName('root')->childNodes->length;
//echo "childNodes de root " . $xml->getElementsByTagName('root')->childNodes->length . "\n";
//echo "\n" . $xml->getElementsByTagName('root')->hasChild;
//echo "\n" . $xml->getElementsByTagName('root')->lastChild->nodeName;

echo "\n\nFazendo a contagem dos precos : ";
  echo $xml->getElementsByTagName('price')->length . "\n";


echo "\n\nListando os preços->Ok!\n";
$books = $xml->getElementsByTagName('price');
foreach ($books as $book) {
    echo $book->nodeValue, PHP_EOL;
}

/*
echo "\n\nAbrindo uma page\n";
  $xml1 = new DOMDocument();  
//$xml1->loadHTML('http://athlonxpprojeto.zapto.org');
  $xml1->loadHTML('http://www.uol.com.br');

echo "\n\nContando:\n";
//echo "childNodes " . $xml1->childNodes->length . "\n";
echo "<html> " . $xml1->getElementsByTagName('html')->length . "\n";
echo "<head> " . $xml1->getElementsByTagName('head')->length . "\n";
echo "<title> " . $xml1->getElementsByTagName('title')->length . "\n";
echo "<body> " . $xml1->getElementsByTagName('body')->length . "\n";
echo "<h1> " . $xml1->getElementsByTagName('h1')->length . "\n";
echo "<p> " . $xml1->getElementsByTagName('p')->length . "\n";
echo "<a> " . $xml1->getElementsByTagName('a')->length . "\n";
echo "<id> " . $xml1->getElementsByTagName('id')->length . "\n";

*/

/*  
echo "\nRetornando apenas 1:-> Sem sucesso nomeu\n\n";
$ts_id = $xml->getElementById("first")->getAttribute("href");

echo "\n\nAbrindo BTC\n";
 $xml->loadHTML('http://www.bmfbovespa.com.br/BancoTitulosBTC/EmprestimoRegistrado.aspx?Idioma=pt-br');

echo "\nRetornando apenas 1:-> Sem sucesso nomeu\n\n";
$ts_id = $xml->getElementById("topo")->nodeValue;
*/


echo "\n\nFim\n...\n..\n.\n\n";

function nada()
{
  return 8;
}

function drill_down($Node)
{

   echo "\n" . $Node.nodeName;
   /*
   if ($Node->hasChildNodes()) 
   {
     echo " hasChild";
   }
   else 
   {
     echo " hasNoChild";
   }
   */
}




?>