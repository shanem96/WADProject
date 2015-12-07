<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */
//get author from form
$author = $_POST["author"];

if (file_exists('books.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('books.xml');


    //adding new child to the xml
    $newChild = $xml->addChild('book');
    $newChild->addChild('author', $author);
    $newChild->addChild('title', 'XML Rocks');
    $newChild->addChild('genre', 'Computing');
    $newChild->addChild('price', '100 $');


} else {
    exit('Failed to open books.xml.');
}
    file_put_contents('/home/ubuntu/workspace/books.xml', $xml->asXML());


 file_put_contents('/home/ubuntu/workspace/books.xml', $xml->asXML());

    writeRSS();
    function writeRSS(){
        if (file_exists('rss.xml')) {
            //loads the xml and returns a simplexml object
            $rssxml = simplexml_load_file('rss.xml');
            $newChild = $rssxml->channel->addChild('item');
            $newChild->addChild('title', $New Shoes Added);
            $newChild->addChild('link', '/home/ubuntu/workspace/books.xml');

            $newChild->addChild('description', '$title');
            file_put_contents('/home/ubuntu/workspace/rss.xml', $rssxml->asXML());
        }
    }
?>