<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class XmlDataController extends Controller
{
    public function index(Request $request) {
        return view('backend.setting.bot');
    }

    public function ntvTurkey(Request $request) {
        /*$curl = curl_init();

        curl_setopt_array($curl, Array(
            CURLOPT_URL            => 'https://www.ntv.com.tr/turkiye.rss',
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_ENCODING       => 'UTF-8'
        ));

        $data = curl_exec($curl);
        curl_close($curl);

        $xml = simplexml_load_string($data);*/

        $rssUrl = 'https://www.ntv.com.tr/turkiye.rss';
        $xmlObject = simplexml_load_string($rssUrl);


        $json = json_encode($xmlObject);
        $phpDataArray = json_encode($json, true);

        echo "<pre>";
        dd($phpDataArray);
    }
}
