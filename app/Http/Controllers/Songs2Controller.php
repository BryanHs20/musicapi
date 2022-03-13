<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class Songs2Controller extends Controller
{
    //
    public function mostrarSong()
    {
        $apiapi=Music::all();
        return response()->json(['cancion'=>$apiapi]);
    }

    public function consumoApi($id)
    {
        $conapi=Music::find($id);
        return response()->json(['cancion'=>$conapi]);
    }
}
