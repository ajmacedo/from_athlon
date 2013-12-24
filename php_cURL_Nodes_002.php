<?php

echo "\nPartindo do zero->Ok!";

echo "\nAbrindo arquivo XML no HD do Sevidor->Ok!";
  $xml = new DOMDocument();
  $xml->load("books000.xml");


echo "\nAgora bem basico!\n";

List_Siblings_b($xml);


echo "\n\n\nFim\n...\n..\n.\n";


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


function List_Siblings_b($Node)
{
  echo "\n\nPHP_Function List_Siblings_b:\n";
  echo $Node->nodeName . "\n";
  if ($Node->hasChildNodes()) {
     echo "HasChildNodes? => Has\n";
     echo "Trying to drill down...\n";
     
     $Node = $Node->childNodes->item(0);
     echo $Node->nodeValue . "\n";
     $Node->nextSibling;
     echo $Node->nodeValue . "\n";
     List_Siblings_b($Node);

     
  }
  else
  {
      $Node->nextSibling;
      echo "Here in Sibling...\n";
  }

/*
  $tmpNode = $Node->childNodes->item(0);
  while ($tmpNode)
  {
     if (($tmpNode->nodeName!="#text"))
     {
     echo $tmpNode->nodeName . ": " . $tmpNode->nodeValue . "(Type = " . $tmpNode->nodeType . ")\n";
     }
     $tmpNode = $tmpNode->nextSibling;
  }
*/

}




function List_Siblings($Node)
{
  echo "\n\nPHP_Function List_Siblings:\n";
  echo $Node->parentNode->nodeName . "\n";
  echo $Node->nodeName . "\n";
  $tmpNode = $Node->childNodes->item(0);
  while ($tmpNode)
  {
     if (($tmpNode->nodeName!="#text"))
     {
     echo $tmpNode->nodeName . ": " . $tmpNode->nodeValue . "(Type = " . $tmpNode->nodeType . ")\n";
     }
     $tmpNode = $tmpNode->nextSibling;
  }

}


function List_Document($arq)
{
   echo "\n\n\nfunction List_Document";
   $tmpNode = $arq->firstChild;
   echo "\nFirstChild: " . $tmpNode->nodeName;
   echo "\nNow running Siblings...";
   $tmpNode = $tmpNode->firstChild;
   while ($tmpNode)
   {
     if ($tmpNode->nodeName!="#text") 
     {
     echo "\nRodando..." . $tmpNode->nodeName;
     }
     $tmpNode = $tmpNode->nextSibling;
   
   }
}


function List_Document_Plus($arq)
{
   echo "\n\n\nfunction List_Document_Plus";
   $tmpNode = $arq->firstChild;
   echo "\nFirstChild: " . $tmpNode->nodeName;
   $tmpNode = $tmpNode->firstChild;
   jump_or_drill($tmpNode);

}


function jump_or_drill (&$node)
{
 while ($node)
 {
    if ($node->nodeName!="#text") 
    {
    echo "\n" . $node->nodeName;
        //Desce um nível:
        $node = $node->firstChild;
        while ($node)
        {
          if ($node->nodeName!="#text") {
              echo "\n" . $node->nodeName;
             }
           $node = $node->nextSibling;
        }
        $node = $node->parentNode;
    }
    $node = $node->nextSibling;
 }
}


?>