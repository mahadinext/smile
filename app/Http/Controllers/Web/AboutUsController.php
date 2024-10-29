<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('web.about-us');
    }
}
