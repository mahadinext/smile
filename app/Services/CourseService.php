<?php

namespace App\Services;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\CourseContents;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CourseService
{
    /**
     * filter course
     *
     * @param Request $request
     * @param $query
     * @return array
     */
    public function filter(Request $request, $query)
    {
        try {
            $query = $this->filterByRequest($request, $query);

            $orderBy = $request->order_by ?? 'DESC';
            $filterOption = $request->filter_option ?? 'id';
            $paginate = $request->paginate ?? 10;

            $courses = $query->orderBy($filterOption, $orderBy)->paginate($paginate);

            return [
                "courses" => $courses,
                "totalCourses" => $courses->total(),
            ];
        } catch (Exception $exception) {
            Log::error("CourseService::filter()", [$exception]);
            return [];
        }
    }

    /**
     * filter course by request params
     *
     * @param Request $request
     * @param $query
     * @return object
     */
    public function filterByRequest(Request $request, $query)
    {
        try {
            if ($request->filled('course_category')) {
                $query->where('category_id', $request->course_category);
            }

            // Filter by status
            if ($request->filled('status')) {
                if ($request->status == 'Active') {
                    $query->where('courses.status', Course::STATUS_ENABLE);
                } elseif ($request->status == 'Inactive') {
                    $query->where('courses.status', Course::STATUS_DISABLE);
                }
            }

            return $query;
        } catch (Exception $exception) {
            Log::error("CourseService::filterByRequest()", [$exception]);
            return [];
        }
    }

    /**
     * store course
     *
     * @param StoreCourseRequest $request
     * @return \App\Models\Course|null
     */
    public function store(StoreCourseRequest $request): Course|null
    {
        try {
            $courseCreate = [
                'teacher_id' => $request->teacher_id ?? Auth::user()->id,
                'category_id' => $request->course_category,
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'course_start_date' => $request->course_start_date,
                'requirments' => $request->requirments,
                'total_class' => $request->total_class,
                'certificate' => $request->certificate ?? null,
                'quizes' => $request->quizes ?? null,
                'qa' => $request->qa ?? null,
                'study_tips' => $request->study_tips ?? null,
                'career_guidance' => $request->career_guidance ?? null,
                'progress_tracking' => $request->progress_tracking ?? null,
                'flex_learning_pace' => $request->flex_learning_pace ?? null,
                'price' => $request->price,
                'discount_type' => $request->discount_type ?? null,
                'discount_amount' => $request->discount_amount ?? null,
                'discount_start_date' => $request->discount_start_date ?? null,
                'discount_expiry_date' => $request->discount_expiry_date ?? null,
                'promotional_video' => $request->promo_video,
                'status' => Course::STATUS_ENABLE, // Set default status or from request
            ];

            // Create a sanitized version of the title for image naming
            $sanitizedTitle = preg_replace('/\s+/', '-', trim($request->title)); // Replace spaces with hyphens
            $sanitizedTitle = substr($sanitizedTitle, 0, 20); // Limit to 10 characters

            // Define base directory for teacher images
            $teacherDir = 'teacher/' . Auth::user()->id . '/course/' . $sanitizedTitle;

            // Ensure the directory exists
            Storage::makeDirectory($teacherDir);

            // Save course card image
            if ($request->hasFile('course_card_image')) {
                $courseCardImage = $request->file('course_card_image');
                $courseCardPath = $courseCardImage->storeAs($teacherDir, 'course-card.' . $courseCardImage->getClientOriginalExtension(), 'public');
                $courseCreate['card_image'] = Storage::url($courseCardPath);
            }

            // Save promotional image
            if ($request->hasFile('promo_image')) {
                $promoImage = $request->file('promo_image');
                $promoPath = $promoImage->storeAs($teacherDir, 'promo-image.' . $promoImage->getClientOriginalExtension(), 'public');
                $courseCreate['promotional_image'] = Storage::url($promoPath);
            }

            DB::beginTransaction();
            $course = Course::create($courseCreate);

            $this->storeCourseContents($request, $course->id);

            DB::commit();

            return $course;
        } catch (Exception $exception) {
            Log::error("CourseService::store()", [$exception]);
            DB::rollback();
            return null;
        }
    }

    /**
     * store course contents
     *
     * @param object $request
     * @param integer $courseId
     */
    private function storeCourseContents($request, $courseId)
    {
        try {
            $courseContents = [];
            foreach ($request->content_title as $key => $value) {
                $courseContents[] = [
                    'course_id' => $courseId,
                    'title' => $value,
                    'description' => $request->content_description[$key],
                    'status' => CourseContents::STATUS_INCOMPLETE,
                ];
            }

            CourseContents::insert($courseContents);
        } catch (Exception $exception) {
            Log::error("CourseService::storeCourseContents()", [$exception]);
            throw $exception;
        }
    }

    /**
     * update course
     *
     * @param UpdateCourseRequest $request
     * @param Course $course
     * @return \App\Models\Course|null
     */
    public function update(UpdateCourseRequest $request, $course): Course|null
    {
        try {
            DB::beginTransaction();
            
            $course->status = $request->status;
            $course->updated_by = Auth::user()->id;
            $course->save();

            $this->deleteAndUpdateCourseInfos($course->id, $request);

            DB::commit();

            return $course;
        } catch (Exception $exception) {
            Log::error("CourseService::update()", [$exception]);
            DB::rollback();
            return null;
        }
    }

    /**
     * delete existing record and than update specific course
     *
     * @param UpdateCourseRequest $request
     * @param integer $courseId
     * @return void
     */
    private function deleteAndUpdateCourseInfos($courseId, $request)
    {
        try {
            CourseContents::where('course_id', $courseId)->delete();
            $this->storeCourseContents($request, $courseId);
        } catch (Exception $exception) {
            Log::error("CourseService::deleteAndUpdateCourseInfos()", [$exception]);
            DB::rollback();
        }
    }
}
