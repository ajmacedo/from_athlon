<?php

function get_links($url) {
  // Create a new DOM Document to hold our webpage structure
  $xml = new DOMDocument();

  // Load the url's contents into the DOM (the @ supresses any errors from invalid XML)
  @$xml->loadHTMLFile($url); //tirei @ antes de @$xml

  // Empty array to hold all links to return
  $links = array();

  /*
  echo "\nEntrando no Loop\n";
  echo "Total de links: \n";
  echo  $xml
  echo "\n";
  */

  //Loop through each <a> and </a> tag in the dom
  foreach($xml->getElementsByTagName('a') as $link) {
    echo "\nCirculando";
    //if it has a strong tag in it, save the href link.
    if (count($link->getElementsByTagName('strong')) > 0) {
        // echo "\nachei + 1";
        $links[] = array('url' => $link->getAttribute('href'), 'text' => $link->nodeValue);
    }
    else
    {
        echo "Nada"; 
    }
  }

return $links;

}

?>

