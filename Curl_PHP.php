<?php

// Long URL to short URL

$long_url = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';

//Create an array with the request body

$request_body = array(
    'url' => $long_url,

);

//Encode the request body as JSON

$json = json_encode($request_body);

//Setup the headers

$request_headers = array(
    'Content-Type: application/json',
    'Content-Length' . strlen($json),
);

// Set up cURL to make the API request

$ch = curl_init('https://tinyurl.com/api-create.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

//Execute the API request

$response=curl_exec($ch);
curl_close($ch);

//Output the short URL or an error message

if($response){

    echo 'Long Link: ' . $long_url;
    echo '<br>Short Link: <a href="' . $response . '">' . $response . '</a>';

}else{
    echo 'Error creating short link';
}

?>