<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CekOngkirController extends Controller
{
    public $url_ongkir = 'https://api.rajaongkir.com/starter/';
    public function ongkirView(){
        $provinsi = $this->index();
        return view('admin.transaksi.ongkir-view',['provinsi'=>$provinsi]);
    }
    public function index(){
        
        $province = Http::withHeaders([
            'key' => env('ONGKIR_API_KEY')
        ])->get($this->url_ongkir.'province');
        return $province->json('rajaongkir.results');
    }

    public function getCity($provinceId){
        $city = Http::withHeaders([
            'key' => env('ONGKIR_API_KEY')
        ])->get($this->url_ongkir.'city?province='.$provinceId);
        return $city->json();
    }

    public function cekOngkir(Request $request){
        $ongkir = Http::asForm()->withHeaders([
            'key' => env('ONGKIR_API_KEY')
        ])->post($this->url_ongkir.'cost',[
            'origin' => isset($request->origin) ? $request->origin : 22,
            'destination' => $request->destination,
            'weight' => $request->berat,
            'courier'=>$request->kurir
        ]);
        return $ongkir->json();
    }
}
