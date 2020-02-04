<?php

$articleText = file_get_contents("article.txt");
$articleLink = "https://some-site.com/article/123456789";

$articlePreview = substr($articleText,0,200);


echo $articlePreview;