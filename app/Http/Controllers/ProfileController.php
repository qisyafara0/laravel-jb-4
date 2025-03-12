<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Qisya Farabila',
            'email' => 'qisyafarabila21@gmail.com',
            'bio' => 'Murid SMK N 1 Sayung',
            'profile_picture' => 'carmen.jpg',
            'skills' => ['Mengaji', 'Mengcoding', 'Makan'],

        ];
        return view('profile', compact('profile'));
    }
}
