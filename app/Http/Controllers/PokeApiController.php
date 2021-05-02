<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokeApiController extends Controller
{


    public function Index(){
        $this->Pokemons(0);
    }

    /* Function that calls the PokeApi to get 9 pokemons. Uses an offset coefficient as parametre */
    public function Pokemons($id=0){
        $pokemons= array();
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon?limit=9&offset=".$id*9,
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
            //dd($response);
            foreach ($response->results as $result){
                //$myJson = $this->Pokemon($result->url);
                array_push($pokemons, $this->PokemonInfo($result->url));
            }

            return view('home',['pokemons' => $pokemons,'id' => $id]); // get the home view with the pokemons' array

        }
    }

    /* Function to call the PokeAPi and get all the information about a pokemon and return the result. Needs the the Api request as parameter */
    public function PokemonInfo($link){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $link,
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
            return $response;
        }
    }

    /* Function that calls the pokemon Info fonction and displays the pokemon view with the pokemon Info*/
    public function Pokemon($id){
        $id = strtolower($id);
        $pokeInfo = $this->PokemonInfo('https://pokeapi.co/api/v2/pokemon/'.$id);
        if($pokeInfo== null) {
            header("Location: /?result=0");
            exit;
        }else{
            return view('pokemon',['pokemon' => $pokeInfo]); // get the pokemon view with the pokemon information
        }

    }
}
