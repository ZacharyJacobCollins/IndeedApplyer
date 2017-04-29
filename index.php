<?php

namespace learning;

use GuzzleHttp\Client as GuzzleClient;

$client = new GuzzleClient([
    // Base URI is used with relative requests
    'base_uri' => 'https://www.indeed.com/jobs?q=Software+Intern&l=Ann+Arbor,+MI&utm_source=publisher&utm_medium=organic_listings&utm_campaign=affiliate',

    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$response = $client->request('GET', '');

echo $response;


