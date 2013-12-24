<?php

echo "Partindo do zero->Ok!\n\n";

echo "\nAbrindo arquivo XML no HD do Sevidor->Ok!\n";
  $xml = new DOMDocument();
  $xml->load("books.xml");


echo "\nnodeName do documento	: " . $xml->nodeName;
echo $xml->hasChildNodes()?" hasChildNodes":" hasNoChildNodes";
echo "\n";

$level1 = $xml->childNodes;

drill_down($xml->childNodes->item(0));
//List_Siblings($xml->childNodes->item(0)->childNodes->item(0));
List_Siblings($xml->childNodes->item(0));

echo "\nFim\n...\n..\n.\n";


function drill_down($Node)
{

   echo "\nnodeName from drill_down: " . $Node->nodeName;

   if ($Node->hasChildNodes())
   {
     echo " hasChildNodes";
     //drill_down($Node->childNodes->item(0));
   }
   else
   {
     echo " hasNoChildNodes";
   }

}

function List_Siblings($Node)
{
  echo "\n\nPHP_Function List_Siblings ($Node):\n";
  echo $Node->parentNode->nodeName . "\n";
  echo $Node->nodeName . "\n";
  echo $Node->childNodes->item(1)->nodeName . "\n";
  echo $Node->childNodes->item(0)->nextSibling->nodeName . "\n";
//echo $Node->nodeValue . "\n";

}



?>