<?php

/*
		1) Vou usar a experiência que tive no NetBeans de listar os tags, trocando <br> por \n:
			a) Deu certo com books e books000.xml;
		2) Vou tentar com a minha página;
			a) Princípio deu um erro com dist...
			b)


*/

echo "Partindo do zero->Ok!\n\n";

echo "\nAbrindo arquivo XML no HD do Sevidor->Ok!\n";
  $xml = new DOMDocument();
  //$xml->loadHTMLFile("http://athlonxpprojeto.zapto.org");
  //$xml->loadHTMLFile("http://www.uol.com.br");
  //$xml->loadHTMLFile("http://www.bmfbovespa.com.br/BancoTitulosBTC/EmprestimoRegistrado.aspx?Idioma=pt-br");
  $xml->loadHTMLFile("http://www.bmfbovespa.com.br");
List_all_tags($xml);
 
echo "\nFim\n...\n..\n.\n";

function List_all_tags($Node)
{
    $items = $Node->childNodes;
    foreach ($items as $item)
    {
       if ($item->nodeType==1)
       {
           //echo "tagName (" . dist_n($item) . ") => " . $item->tagName . "\n" ;
           echo "nodeType_". $item->nodeType. ", tagName : " . $item->tagName;           
           if ($item->tagName=="a")
           {    
		       echo " _anchor at line (" .$item->getLineNo() . "): ";
		       	if (substr_count($item->getAttribute('href'),'doPostBack')>=1)
			   {
					echo " href(com doPostBack) -> " . $item->getAttribute('href');
			   }
			   
		       echo " _anchor at line (" .$item->getLineNo() . "): ";
		       	if (substr_count($item->getAttribute('href'),'www.')>=1)
			   {
					echo " href(com Link) -> " . $item->getAttribute('href');
			   }
			   
		       echo " _anchor at line (" .$item->getLineNo() . "): ";
		       	if (substr_count($item->getAttribute('href'),'iframe')>=1)
			   {
					echo " href(com iframe) -> " . $item->getAttribute('href');
			   }

		       echo " _anchor at line (" .$item->getLineNo() . "): ";

			   if (substr_count($item->getAttribute('href'),'aspnet')>=1)
			   {
					echo " href(com aspnet) -> " . $item->getAttribute('href');
			   }

			   
			   
			   
			   
			   
			   
			   if ($item->hasAttribute('onclick'))
			   {
					echo ", com onclick";
			   }
			   else
			   {
					echo ", sem onclick";
			   }
           }
           echo "\n";
           List_all_tags($item);
       }
   }
}   
        

function conta_anchors($DOMDoc) /*Acabei não usando*/
{
	echo 'Possui ' . $DOMDoc->getElementsByTagName("a")->length . " anchors.\n";
	
	$anchs = $DOMDoc->getElementsByTagName("a");
	
    foreach ($anchs as $anch)
	{
		echo "href:" . $anch->getAttribute('href') . "\n";
	
	
	}
	
	

}		
		
		
		
function n_attributes($Node)
{
	$length = $a->attributes->length;
    for ($i = 0; $i < $length; ++$i) 
	{
    $name = $a->attributes->item($i)->name;
    echo /*$value =*/ $a->getAttribute($name) . "\n";
    //$attrs[$name] = $value;
    }

}		

function dist_n ($Node)
{
    $dist=0;
    while ($Node->parentNode->nodeType!=9)
    {
      $Node=$Node->parentNode;
      $dist++;
    }
        return $dist;
     
}

function dist_char ($Node)
{
    $dist=$Node->tagName;
    while ($Node->parentNode->nodeType!=9)
    {
      $Node=$Node->parentNode;
      $dist = $Node->tagName . "/" . $dist;
    }
        return "." . $dist;
}


?>