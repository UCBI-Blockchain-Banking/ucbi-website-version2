<?php
use App\Models\Setting;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Category;
use Illuminate\Support\Facades\Http;


//ucbi api from coincodex
if (!function_exists('getCoinData')) {
    function getCoinData()
    {
        // URL of the API
        $url = 'https://coincodex.com/api/coincodex/get_coin/ucbi';

        try {
            // Make a GET request to the API
            $response = Http::get($url);

            // Check if the response is successful
            if ($response->successful()) {
                $data = $response->json();


                // Extract and format specific fields from the response data
                $lastPriceUsd = isset($data['last_price_usd']) ? number_format($data['last_price_usd'], 2) : null;
                $totalSupply = isset($data['total_supply']) ? number_format($data['total_supply'], 0) : null;
                $capitalization = isset($data['volume_24_usd']) ? number_format($data['volume_24_usd'], 2) : null;
                $athUsd = isset($data['ath_data']['ath_usd']) ? number_format($data['ath_data']['ath_usd'], 2) : null;



                return [
                    'last_price_usd' => $lastPriceUsd,
                    'total_supply' => $totalSupply,
                    'volume_24_usd' => $capitalization,
                    'ath_usd' => $athUsd,
                ];
            }

            // Handle non-successful responses
            return [
                'error' => '00.00',
            ];
        } catch (\Exception $e) {
            // Handle errors
            return [
                'error' => 'Exception: ' . $e->getMessage(),
            ];
        }
    }
}


//settting
if(!function_exists('getSettings')){
    function getSettings(){
        return Setting::find(1);
    }
}
//all blgos data
if (!function_exists('getCategory')) {
    function getCategory()
    {
        return Category::all();
    }
}

//all blgos data
if (!function_exists('getAllBlogs')) {
    function getAllBlogs()
    {
        return Blog::all();
    }
}
//all socials data
if (!function_exists('getSocial')) {
    function getSocial()
    {
        return Social::find(1);
    }
}

//if (!function_exists('getSettings')) {
//    function getSettings()
//    {
//        $settings = Setting::find(1);
//        dd($settings); // Add this line for debugging
//        return $settings;
//    }
//}
?>
