
<?php

getdeta("https://www.google.com",5);

function getdeta($url,$depth) {
   $j=1;
    while ($j<=$depth) {
         $doc =new DOMDocument();
         $doc->loadHTML(file_get_contents($url));
         $linklist =$doc->getElementsByTagName("a");
         $links=array();
         $index=0;

    foreach ($linklist as $link) {
         $links[$index] =$link->getAttribute("href");
         echo "<br>";

    if (preg_match("/photo/", $links[$index])){
	     echo "the url images == $links[$index] = depth is".$j;
         }

    else {
	     echo "the url Links == $links[$index]= depth is".$j;
         }
         $index++;
         echo "<br>";
    }   
         $url=$links[$j-1];
         
         $j++;
    }   
}s
  ?>
