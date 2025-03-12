<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $foto = [
            'foto-visi-misi' => 'carmen.jpg',
            'foto-1' => 'carmen.jpg',
            'foto-2' => 'carmen.jpg',
            'foto-3' => 'carmen.jpg',

        ];
        return view('about', compact('foto'));
    }
}
