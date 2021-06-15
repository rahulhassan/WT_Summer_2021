<?php
	$simplexml = new SimpleXMLElement('<?xml version = "1.0"?><book/>');
	$book1 = $simplexml->addChild('book');
	$book1 ->addChild("Booktitle", "The Wandering Oz");
	$book1 ->addChild("PublicationDate", 2007);
	$mybook1=$book1->addChild('Author');
	$mybook1->addChild("Name", "halen");
	$book2=$simplexml->addChild('book');
	$book2->addChild("Booktitle", "the roaming fox");
	$book2->addChild("PublicationDate", 2009);
	file_put_contents('book.xml', $simplexml->asXML());
	
?>