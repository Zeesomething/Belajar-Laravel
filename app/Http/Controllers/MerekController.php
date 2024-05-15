<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Merek;

class MerekController extends Controller
{
    public function menampilkan()
    {
        $merek = Merek::all();

        return view('mereks.index', compact('merek'));

    }

    public function show($id) {
        $merek = Merek::findOrFail($id);

        return view('mereks.show', compact('merek'));
    }
}


