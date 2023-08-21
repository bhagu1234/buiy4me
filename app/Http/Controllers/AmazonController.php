<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AmazonController extends Controller
{
    public function fetchAmazonData(Request $request)
    {
        $url = 'https://www.amazon.in/TIMEWEAR-Functioning-White-Chain-Watch/dp/B07MDGSP8F/ref=sr_1_1?crid=4A346JJVKQAA&keywords=Ingersoll+London+Watches&pf_rd_i=2563504031&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_p=fbf133a3-c4be-4982-a06c-d8aade55b4c6&pf_rd_r=260PZAP5S90NXPKN4ZX7&pf_rd_s=merchandised-search-9&qid=1687753314&s=watches&sprefix=ingersoll+london+watche%2Cwatches%2C200&sr=1-1';

        $client = new Client();
        $response = $client->get($url);
       

        if ($response->getStatusCode() === 200) {
            $html = $response->getBody()->getContents();
            // Use HTML parsing libraries or regular expressions to extract the data you need
            // For example, to get the title of the product:
            dd($html);
            preg_match('/<title>(.*?)<\/title>/', $html, $matches);
            $title = $matches[1] ?? 'Title not found';
            return response()->json(['title' => $title]);
        }

        return response()->json(['error' => 'Failed to fetch data from Amazon']);
    }
}
