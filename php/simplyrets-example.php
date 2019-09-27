<?php

/** Set up `curl` to make authenticated API requests */
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.simplyrets.com/properties",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => 
    array(
        "Authorization: Basic '" . base64_encode('simplyrets:simplyrets') . "'",
    ),
));

/**
 * 1. Execute the request 
 * 2. Check for errors 
 * 3. Close the connection 
 */
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
}

/** Decode JSON response - this is a list of listings */
$json_response = json_decode($response);

/** Print address and list price of the first listing */
echo "<h2>" . $json_response[0]->address->full . "</h2>";
echo "<p>List price: " . $json_response[0]->listPrice . "</p>";

?>
