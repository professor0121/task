<?php
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL            => "https://jsonplaceholder.typicode.com/posts",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => "",
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST  => "GET",
        CURLOPT_POSTFIELDS     => "",
    ]);

    $output = curl_exec($curl);
    $err    = curl_error($curl);
    curl_close($curl);

    $data = json_decode($output, true);
    echo gettype($data);
 

?>

<div>
    <?php foreach($data as $key =>$value):?>
        <div>
            <h2><?php echo $value['title'];?></h2>
            <p><?php echo $value['body'];?></p>
            <p>Author ID: <?php echo $value['userId'];?></p>
            <p>Post ID: <?php echo $value['id'];?></p>
        </div>
    <?php endforeach;?>
</div>