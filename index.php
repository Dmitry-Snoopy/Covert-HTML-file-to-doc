<?php
	// Load library 
	include_once 'HtmlToDoc.class.php';  
	 
	// Initialize class 
	$htd = new HTML_TO_DOC();

	$htd->createDoc("index.html", "my-document");

?>