<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RPSApiController extends Controller
{
    function getQuote() {
        $quotes = [
            "Rock",
            "Paper",
            "Scissors",
        ];
        $index = array("Rock", "Paper", "Scissors");
        return $quotes()->json(["Rock"=>$quotes[$index]]);

    }
}
