<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BicicletaController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function show()
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);

        $response = $client->request('GET', 'bicicletas');
        $bicicletas = json_decode(($response->getBody()->getContents()));
        return view('show', compact('bicicletas'));
    }

    public function showBici($id)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);

        $response = $client->request('GET', "bicicletas/{$id}");
        $bicicletas = json_decode(($response->getBody()->getContents()));
        return view('showBici', compact('bicicletas'));
    }

    public function newBici()
    {
        return view('newBici');
    }

    public function createBici(Request $request)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);

        $color = $request->input("ncolor");
        $tipo = $request->input("ntipo");
        $lactitud = $request->input("nlactitud");
        $longitud = $request->input("nlongitud");
        $response  = $client->request('POST', "bicicletas/create",[
            'form_params' => [
                'color' => $color,
                'tipo' => $tipo,
                'lactitud' => $lactitud,
                'longitud' => $longitud
            ]
        ]);

        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);

        $response = $client->request('GET', 'bicicletas');
        $bicicletas = json_decode(($response->getBody()->getContents()));
        return view('show', compact('bicicletas'));
    }

    public function upBici2($id, Request $request)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);
        $color = $request->input("color");
        $tipo = $request->input("tipo");
        $lactitud = $request->input("lactitud");
        $longitud = $request->input("longitud");
        //dd($color, $tipo, $lactitud, $longitud);
        $response = $client->request('PUT', "bicicletas/{$id}/update", [
            'form_params' => [
                'color' => $color,
                'tipo' => $tipo,
                'lactitud' => $lactitud,
                'longitud' => $longitud
            ]
        ]);

        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);

        $response = $client->request('GET', 'bicicletas');
        $bicicletas = json_decode(($response->getBody()->getContents()));
        return view('show', compact('bicicletas'));
    }

    public function deltBici($id)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);

        $response = $client->request('DELETE', "bicicletas/{$id}/delete");

        $client = new Client([
            'base_uri' => 'http://localhost:3000/bicicletas',
            'timeout' => 2.0
        ]);

        $response = $client->request('GET', 'bicicletas');
        $bicicletas = json_decode(($response->getBody()->getContents()));
        return view('show', compact('bicicletas'));
    }
}
