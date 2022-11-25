<?php
function getDoc($api, $coll, $id)
{
    $client = new \GuzzleHttp\Client();
    // return axios . get(`${api . url}/app/colls/${coll}/docs/${id}`, options(api));
    return $client->request('GET', "{$api->url}/app/colls/${coll}/docs/{$id}", ["Authorization" => "Bearer {$api->token}"]);
}

function createDoc($api, $coll, $doc)
{
    $client = new \GuzzleHttp\Client();
    // return axios . post(`${api . url}/app/colls/${coll}/docs`, doc, options(api));
    return $client->request('POST', "{$api->url}/app/colls/${coll}/docs", ["Authorization" => "Bearer {$api->token}", "body" => json_encode($doc)]);
}
function updateDoc($api, $coll, $doc)
{
    $client = new \GuzzleHttp\Client();
    return $client->request('PUT', "{$api->url}/app/colls/${coll}/docs/{$doc->_id}", ["Authorization" => "Bearer {$api->token}", "body" => json_encode($doc)]);
    // return axios . put(`${api . url}/app/colls/${coll}/docs/${doc . _id}`, doc, options(api));
}

function deleteDoc($api, $coll, $doc)
{
    $client = new \GuzzleHttp\Client();
    return $client->request('DELETE', "{$api->url}/app/colls/${coll}/docs/{$doc->_id}", ["Authorization" => "Bearer {$api->token}"]);
    // return axios . delete(`${api . url}/app/colls/${coll}/docs/${doc . _id}`, options(api));
}

function executeQuery($api, $coll, $query)
{
    $client = new \GuzzleHttp\Client();
    return $client->request('POST', "{$api->url}app/colls/${coll}/docs/find", ["Authorization" => "Bearer {$api->token}", "body" => json_encode($query)]);
    // return axios . post(`${api . url}/app/colls/${coll}/docs/find`, query, options(api));
}

function options($api)
{
    return ["headers" => headers($api)];
}

function headers($api)
{
    return ["Authorization" => "Bearer {$api->token}"];
}
