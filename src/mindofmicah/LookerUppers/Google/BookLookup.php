<?php
namespace mindofmicah\LookerUppers\Google;

/**
 * 
 **/
class BookLookup
{
    public function lookupByISBN($isbn)
    {
   $response = json_decode(file_get_contents('https://www.googleapis.com/books/v1/volumes?q=' . $isbn));
    if ($response->totalItems == 0) {
        return null;
    }
    return $response->items[0]->volumeInfo;

   //     $response = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn);
echo '<pre>';
        dd($response);
    }
}
