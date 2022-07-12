<?php

namespace App\Http\Controllers;

use App\lib\Meta;

class WelcomeController
{
    public function index(){
        $meta = new Meta();
        $meta = $meta->getMeta(null);
        return view('welcome', compact('meta'));

    }
}
