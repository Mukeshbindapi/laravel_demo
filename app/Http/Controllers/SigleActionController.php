<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        echo 'invoke SigleActionController';
    }
}
