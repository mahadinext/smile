<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher\Teachers;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeacherController extends Controller
{
    /**
     * @param integer $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile(int $id)
    {
        try {
            $teacher = Teachers::where('user_id', $id)->first();

            $teacherCourses = Course::with('courseTeacher','courseCategory','courseStudents','courseRatings')
            ->select('id','card_image','title','total_class','short_description','teacher_id','price')
            ->where("teacher_id", $id)
            ->orderBy("id", "DESC")
            ->paginate(6);

            $data = [
                "teacher" => $teacher,
                "teacherCourses" => $teacherCourses,
            ];

            return view('web.teacher.profile', $data);
        } catch (ModelNotFoundException $exception) {
            Log::error("TeacherController::profile()", [$exception]);
            return redirect()->back()->with('error', $exception->getMessage());
        }  catch (Exception $exception) {
            Log::error("TeacherController::profile()", [$exception]);
        }
    }
}
