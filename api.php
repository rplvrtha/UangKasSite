<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

function getData($url)
{
    $client = new Client();
    $response = $client->request('GET', $url);
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        return $data;
    } else {
        echo "E: " . $response->getStatusCode();
        return null;
    }
}

function postData($url, $body)
{
    $client = new Client();
    $response = $client->request('POST', $url, [
        "json" => $body
    ]);
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        return $data;
    } else {
        echo "E: " . $response->getStatusCode();
        return null;
    }
}
function putData($url, $body)
{
    $client = new Client();
    $response = $client->request('PUT', $url, [
        "json" => $body
    ]);
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        return $data;
    } else {
        echo "E: " . $response->getStatusCode();
        return null;
    }
}
function deleteData($url)
{
    $client = new Client();
    $response = $client->request('DELETE', $url);
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        return $data;
    } else {
        echo "E: " . $response->getStatusCode();
        return null;
    }
}
?>