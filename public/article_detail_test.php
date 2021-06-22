<?php

$article1 = [
    "id" => 2,
    "regDate" => date('m-d-Y h:i:s a', time()),
    "title" => "제목2",
    "body" => "내용2",
];

$article2 = [
    "id" => 1,
    "regDate" => date('m-d-Y h:i:s a', time()),
    "title" => "제목1",
    "body" => "내용1",
];

$articles = [];

$articles[] = $article1;
$articles[] = $article2;

print_r($articles);
