<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokeApiController extends Controller
{


    public function Index(){
        $this->Pokemons(0);
    }

    public function Pokemons($id){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon?limit=20&offset=".$id*20,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_COOKIE => "__cfduid=ddad003cffa483028639e7ac80d1b31bb1614332088",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            dd($response);
        }
    }

    public function Pokemon($name){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/".$name,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_COOKIE => "__cfduid=ddad003cffa483028639e7ac80d1b31bb1614332088",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            dd($response);
        }
    }
}
