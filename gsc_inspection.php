<?php 
/*
https://developers.google.com/webmaster-tools/v1/urlInspection.index/inspect
*/
require_once 'google-api-php-client/vendor/autoload.php';

$client = new Google_Client();

// service_account_file.json is the private key that you created for your service account.
$client->setAuthConfig('service_account_file.json');
$client->addScope('https://www.googleapis.com/auth/webmasters');

// Get a Guzzle HTTP Client
$httpClient = $client->authorize();
$endpoint = 'https://searchconsole.googleapis.com/v1/urlInspection/index:inspect';

//languageCode - e.g. "en-US", "or "de-CH". Default value is "en-US".
$content = '{
  "inspectionUrl": "http://example.com/page/",
  "siteUrl": "https://example.com/",
  "languageCode": "en-US"
}';


$response = $httpClient->request('POST', $endpoint, [ 'body' => $content ]);
echo $response->getBody();