<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->get(config('app.apiFootball.apiURL'). "/?action=get_leagues&country_id=6&APIkey=". config('app.apiFootball.apiKey'));
        $resDecoded = json_decode($response->getBody()->getContents());

        return view('dashboard', compact('resDecoded'));
    }
    
    public function teams(string $leagueId){
        $client = new Client();
        $response = $client->get(config('app.apiFootball.apiURL'). "/?action=get_events&from=2023-01-01&to=2023-04-05&league_id=".  $leagueId ."&APIkey=". config('app.apiFootball.apiKey'));
        $resDecoded = json_decode($response->getBody()->getContents());

        return view('match', compact('resDecoded'));
    }
    
    public function statistics(string $matchId){
        $client = new Client();
        $response = $client->get(config('app.apiFootball.apiURL'). "/?action=get_statistics&match_id=".  $matchId ."&APIkey=". config('app.apiFootball.apiKey'));
        $resDecoded = json_decode($response->getBody()->getContents());
        $resDecoded = $resDecoded->{$matchId}->statistics;
        return view('statistics', compact('resDecoded'));
    }
}
