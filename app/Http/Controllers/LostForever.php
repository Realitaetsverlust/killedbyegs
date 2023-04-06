<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LostForever extends Controller
{
    public function displayLosses() {
        $jsonContent = json_decode(file_get_contents(resource_path('js/lostforever.json')), true);

        usort($jsonContent, function($a, $b) {
            return strtotime($b['bornAt']) - strtotime($a['bornAt']);
        });

        return view('murdered', ['jsonContent' => $jsonContent]);
    }
}
