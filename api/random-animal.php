<?php

$getDogs = file_get_contents('https://dog.ceo/api/breeds/image/random');
$dogs[] = json_decode($getDogs, true);


$getCats = file_get_contents('https://api.thecatapi.com/v1/images/search?limit=10');
$cats = json_decode($getCats, true);
