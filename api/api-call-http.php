<!-- using the file_get_contents method we can call a api  -->

<?php
$url = "https://jsonplaceholder.typicode.com/posts";

$response = file_get_contents($url);
$data=json_decode($response, true);
echo gettype($data);
// foreach($data as $key =>$value):
//     echo "<h2>".$value['title']."</h2>";
//     echo "<p>".$value['body']."</p>";
//     echo "<p>Author ID: ".$value['userId']."</p>";
//     echo "<p>Post ID: ".$value['id']."</p>";
// endforeach;

?>



<?php
 

$options = [
    'http' => [
        'method' => 'GET',
        'header' => "Authorization: Bearer YOUR_API_KEY_HERE\r\n" .
                    "Accept: application/json\r\n"
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// echo $response;
?>

<?php

$options = [
    "http" => [
        "method" => "GET",
        "header" => "Accept: application/json\r\n"
    ]
];

$context = stream_context_create($options);
$handle = fopen($url, "r", false, $context);

if ($handle) {
    $response = stream_get_contents($handle);
    fclose($handle);

    // echo $response;
} else {
    echo "Ugh 😩 Couldn't open the URL.";
}
?>
