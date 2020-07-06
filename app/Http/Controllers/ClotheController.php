<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clothe;

class ClotheController extends Controller
{

    public function index() {
        $all_clothes = Clothe::all();
        // dd($all_clothes);
        $data = [
            'lista_vestiti' => $all_clothes
        ];
        return view('clothes', $data);
    }
}
