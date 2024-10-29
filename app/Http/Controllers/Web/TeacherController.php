<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * @param string $slug
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile(string $slug)
    {
        return view('web.course-details');
    }
}
