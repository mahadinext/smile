<?php

namespace App\Http\Controllers\Web;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseContents;
use App\Models\Teacher\Teachers;
use App\Services\Web\CourseService;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public $layoutFolder = "web";

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        try {
            $query = Course::query()
                ->with('courseTeacher','courseCategory',
                'courseStudents','courseRatings')
                ->select('id','card_image','title','total_class','short_description','teacher_id','price')
                ->whereNull('courses.deleted_at');
            $result = (new CourseService)->filter($request, $query);

            $courseCategory = Helper::getAllCourseCategory();

            // $teachers = Course::join('teachers', 'courses.teacher_id', '=', 'teachers.user_id')
            // ->select('courses.teacher_id', 'teachers.first_name', 'teachers.last_name')
            // ->distinct()
            // ->get()
            // ->map(function($teacher) {
            //     return [
            //         'teacher_id' => $teacher->teacher_id,
            //         'teacher_name' => $teacher->first_name . ' ' . $teacher->last_name
            //     ];
            // });

            $courseCategories = DB::table('course_categories')
            ->leftJoin('courses', 'course_categories.id', '=', 'courses.category_id')
            ->select('course_categories.id', 'course_categories.name', DB::raw('COUNT(courses.id) as courses_count'))
            ->groupBy('course_categories.id', 'course_categories.name')
            ->get();
            // dd($courseCategories);

            $teachers = DB::table('teachers')
            ->leftJoin('courses', 'teachers.user_id', '=', 'courses.teacher_id')
            ->select('teachers.id', 'teachers.user_id', 'teachers.first_name', 'teachers.last_name', DB::raw('COUNT(courses.id) as courses_count'))
            ->groupBy('teachers.id', 'teachers.user_id', 'teachers.first_name', 'teachers.last_name')
            ->get();
            // dd($teachers);

            $ratings = DB::table('ratings')
            ->leftJoin('course_ratings', 'ratings.star', '=', 'course_ratings.rating')
            ->select('ratings.id', 'ratings.star', DB::raw('COUNT(course_ratings.id) as ratings_count'))
            ->groupBy('ratings.id', 'ratings.star')
            ->get();
            // dd($ratings);

            $data = [
                "courses" => isset($result['courses']) ? $result['courses'] : [],
                "totalCourses" => isset($result['totalCourses']) ? $result['totalCourses'] : 0,
                "courseCategories" => $courseCategories,
                "teachers" => $teachers,
                "ratings" => $ratings,
            ];

            return view("{$this->layoutFolder}.courses", $data);
        } catch (Exception $exception) {
            Log::error("CourseController::index()", [$exception]);
        }
    }

    /**
     * @param string $slug
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function courseDetails(int $id)
    {
        try {
            $course = Course::query()
                ->with('courseTeacher','courseCategory',
                'courseStudents','courseRatings')
                ->select('courses.*')
                ->whereNull('courses.deleted_at')
                ->findOrFail($id);

            $courseContents = CourseContents::select('title', 'description')
            ->where('course_id', $id)
            ->get();

            $teacher = Teachers::with(['courses:id,teacher_id'])
            ->select('teachers.id','teachers.user_id','bio')
            ->where("user_id", $course->teacher_id)
            ->first();

            $teacherCourses = Course::with('courseTeacher','courseCategory','courseStudents','courseRatings')
            ->select('id','card_image','title','total_class','short_description','teacher_id','price')
            ->where("teacher_id", $course->teacher_id)
            ->orderBy("id", "DESC")
            ->limit(2)
            ->get();

            $relatedCourses = Course::with('courseTeacher','courseCategory','courseStudents','courseRatings')
            ->select('id','card_image','title','total_class','short_description','teacher_id','price')
            ->where("category_id", $course->category_id)
            ->orderBy("id", "DESC")
            ->limit(3)
            ->get();

            $data = [
                "course" => $course,
                "courseContents" => $courseContents,
                "teacher" => $teacher,
                "teacherCourses" => $teacherCourses,
                "relatedCourses" => $relatedCourses,
            ];

            return view('web.course-details', $data);
        } catch (ModelNotFoundException $exception) {
            Log::error("CourseController::courseDetails()", [$exception]);
            return redirect()->route('courses')->with('error', $exception->getMessage());
        }  catch (Exception $exception) {
            Log::error("CourseController::courseDetails()", [$exception]);
        }
    }
}
