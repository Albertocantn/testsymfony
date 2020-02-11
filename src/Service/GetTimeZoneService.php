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



    /*public function changeCurrency($products, $currencyAndValues)
    {
        foreach ($products as $product) {
            $productcurrency = $product->getCurrency();
            $productprice = $product->getPrice();

            if ($currencyAndValues['currency'] != $productcurrency) {

                if ($currencyAndValues['currency'] == Product::USD) {
                    $product->setPrice($productprice *= $currencyAndValues['USDPriceFromEUR']);
                } elseif ($currencyAndValues['currency'] == Product::EUR) {
                    $product->setPrice($productprice *= $currencyAndValues['EURPriceFromUSD']);
                }

            }


        }
        return $products;
    }*/
}

?>