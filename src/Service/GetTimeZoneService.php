<?php

namespace App\Service;

use Symfony\Component\HttpClient\CurlHttpClient;


class GetTimeZoneService
{


    public function __construct()
    {

    }

    public function getTimeZone()
    {
        $client = new CurlHttpClient();
        $response = $client->request('GET', 'http://worldtimeapi.org/api/timezone');
        $contents = json_decode($response->getContent(), true);

        return $contents;
    }

}

?>