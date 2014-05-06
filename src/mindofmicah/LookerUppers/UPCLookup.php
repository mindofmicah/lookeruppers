<?php
namespace mindofmicah\LookerUppers;

class UPCLookup 
{
     public function lookupByUPC($upc)
     {
        $contents = file_get_contents('http://www.upcdatabase.com/item/' . $upc);

$pattern = '%<tr><td>Description</td><td></td><td>(.+?)</td></tr>%';

        if (preg_match($pattern, $contents, $match)) {
            $product = new \stdClass;            
            $product->title = $match[1];
            return $product;
        }
        return null;
     }
}
