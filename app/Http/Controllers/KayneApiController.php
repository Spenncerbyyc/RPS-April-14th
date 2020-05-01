<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KayneApiController extends Controller
{
    function getQuote() {
        $quotes = [ //RPS
        "Rock",
        "Paper",
        "Scissors",
        ];
        $index = rand(0, sizeof($quotes)-1);
        return response()->json(["quote"=>$quotes[$index]]);//rock paper scissor or array of moves
    }
}
