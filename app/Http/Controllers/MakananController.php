<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function tampil()
    {
        $makanans = "Wahyu Nafa ";

        return view('welcome', ['makanans' => $makanans]);
    }
}