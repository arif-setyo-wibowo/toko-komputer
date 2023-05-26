<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RajaOngkirController extends Controller
{
    public function getProvinces()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => '49d2a27846b2558e5f492769df71aed9', 
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return response()->json($data['rajaongkir']['results']);
    }

    public function getCities(Request $request)
    {
        $provinceId = $request->input('province_id');

        $client = new Client();

        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => '49d2a27846b2558e5f492769df71aed9',
            ],
            'query' => [
                'province' => $provinceId
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        return response()->json($data['rajaongkir']['results']);
    }

    public function getCost(Request $request)
    {
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $weight = $request->input('weight');
        $courier = $request->input('courier');

        $client = new Client();

        $response = $client->request('POST', 'https://api.rajaongkir.com/starter/cost', [
            'headers' => [
                'key' => '49d2a27846b2558e5f492769df71aed9', // Ganti dengan API key RajaOngkir Anda
            ],
            'form_params' => [
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return response()->json($data['rajaongkir']);
    }

    public function getInfoCities(Request $request)
    {
        $provinceId = $request->input('province_id');
        $id = $request->input('id');

        $client = new Client();

        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => '49d2a27846b2558e5f492769df71aed9',
            ],
            'query' => [
                'province' => $provinceId,
                'id'        => $id
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        return response()->json($data['rajaongkir']['results']);
    }
}