<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeocodingController extends Controller
{
    public function getAddress(Request $request)
    {
        $latitude = $request->query('latitude');
        $longitude = $request->query('longitude');
        $apiKey = config('services.google_maps.api_key');

        $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
            'latlng' => "{$latitude},{$longitude}",
            'key' => $apiKey,
        ]);

        // $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json?latlng=10.774626499228205,121.94464035848192&key=AIzaSyD5-6BO3UGKj2JvT8g6vumHNBsQZFk7NMo');
        // $response = file_get_contents($response);
        // die($response);

        // // Log the URL
        // \Log::info("Request URL: https://maps.googleapis.com/maps/api/geocode/json?latlng={$latitude},{$longitude}&key={$apiKey}");

        // // Log the response
        // \Log::info("Response: ", $response->json());

        // if ($response->successful() && str_contains($response->header('Content-Type'), 'application/json')) {
        //     return response()->json($response->json());
        // }

        // return response()->json([
        //     'error' => 'Unable to retrieve address',
        //     'status' => $response->status(),
        //     'message' => $response->body(),
        //     'content_type' => $response->header('Content-Type'),
        // ], $response->status());

        if ($response->successful()) {
            $contentType = $response->header('Content-Type');

            if (str_contains($contentType, 'application/json')) {
                return response()->json($response->json());
            } else {
                return response()->json([
                    'error' => 'Invalid response format',
                    'content_type' => $contentType,
                    'response_body' => $response->body()
                ], 500);
            }
        } else {
            return response()->json([
                'error' => 'Unable to retrieve address',
                'status' => $response->status(),
                'message' => $response->body() // This will give you the HTML error page
            ], $response->status());
        }

    }
}

