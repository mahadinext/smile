<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\TeacherProfileController;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('web.courses');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function courseDetails(string $slug)
    {
        return view('web.course-details');
    }
}
