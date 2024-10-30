<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotatoController extends Controller
{
   /**
     * Show the profile for a given user.
     */
    public function show($id) 
    {
        // buscar o produto com o Id

        return view('potato', ['xpto' => $id]);
    }
}
