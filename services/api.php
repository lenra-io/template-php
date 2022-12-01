<?php
function getDoc($api, $coll, $id)
{
    $client = new \GuzzleHttp\Client();
    $result = $client->request('GET', $api["url"] . '/app/colls/' . $coll . '/docs/' . $id, ['headers' => ['Authorization' => 'Bearer ' . $api["token"]]]);
    return json_decode($result->getBody(), true);
}

function createDoc($api, $coll, $doc)
{
    $client = new \GuzzleHttp\Client();
    $result =  $client->request('POST', $api["url"] . '/app/colls/' . $coll . '/docs', ['headers' => ['Authorization' => 'Bearer ' . $api["token"]], GuzzleHttp\RequestOptions::JSON => $doc]);
    return json_decode($result->getBody(), true);
}
function updateDoc($api, $coll, $doc)
{
    $client = new \GuzzleHttp\Client();
    $result = $client->request('PUT', $api["url"] . '/app/colls/' . $coll . '/docs/' . $doc["_id"], ['headers' => ['Authorization' => 'Bearer ' . $api["token"]], GuzzleHttp\RequestOptions::JSON => $doc]);
    return json_decode($result->getBody(), true);
}

function deleteDoc($api, $coll, $doc)
{
    $client = new \GuzzleHttp\Client();
    $result = $client->request('DELETE', $api["url"] . '/app/colls/' . $coll . '/docs/' . $doc["_id"], ['headers' => ['Authorization' => 'Bearer ' . $api["token"]]]);
    return json_decode($result->getBody(), true);
    // return axios . delete(`${api . url}/app/colls/${coll}/docs/${doc . _id}`, options(api));
}

function executeQuery($api, $coll, $query)
{
    $client = new \GuzzleHttp\Client();
    $result = $client->request('POST', $api["url"] . '/app/colls/' . $coll . '/docs/find', ['headers' => ['Authorization' => 'Bearer ' . $api["token"]], GuzzleHttp\RequestOptions::JSON => $query]);
    return json_decode($result->getBody(), true);
}
