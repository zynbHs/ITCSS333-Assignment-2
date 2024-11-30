<?php

$url="https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

$response= file_get_contents(filename: $url);
$data= json_decode(json:$response, associative: true);



if (!$data || !isset($data["results"])) {
    die('error fetching the data from the api');
}

$result = $data["results"];

?>

<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
        <style>
           tr{
            overflow: auto;
           }
            </style>
</head>
<body>

</body>
</html>