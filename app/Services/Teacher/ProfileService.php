<?php

namespace App\Services\Teacher;

use App\Http\Requests\UpdateChangePasswordRequest;
use App\Http\Requests\UpdateTeacherProfileRequest;
use App\Models\Teacher\Teachers;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfileService
{
    /**
     * update teacher profile
     *
     * @param UpdateTeacherProfileRequest $request
     * @param Teachers $teacher
     * @return \App\Models\Teacher\Teachers|null
     */
    public function update(UpdateTeacherProfileRequest $request, $teacher): Teachers|null
    {
        try {
            // dd($request->all());
            DB::beginTransaction();

            $teacher->first_name = $request->first_name;
            $teacher->last_name = $request->last_name;
            $teacher->phone_no = $request->phone_no;
            $teacher->dob = $request->dob;
            $teacher->marital_status = $request->marital_status;
            $teacher->religion = $request->religion;
            $teacher->nid_no = $request->nid_no;
            $teacher->address = $request->address;
            $teacher->experience = $request->experience;
            $teacher->bio = $request->bio;
            $teacher->detailed_info = $request->detailed_info;
            $teacher->updated_by = Auth::user()->id;

            // Define base directory for teacher images
            $teacherDir = 'teacher/' . Auth::user()->id;

            // Ensure the directory exists
            Storage::makeDirectory($teacherDir);

            // Save the profile image
            if ($request->hasFile('image')) {
                $teacher->image = $this->saveImage($request->file('image'), $teacherDir, 'profile-picture.' . $request->file('image')->getClientOriginalExtension());
            }

            // Save the NID front image
            if ($request->hasFile('nid_front_image')) {
                $teacher->nid_front_image = $this->saveImage($request->file('nid_front_image'), $teacherDir, 'nid-front.' . $request->file('nid_front_image')->getClientOriginalExtension());
            }

            // Save the NID back image
            if ($request->hasFile('nid_back_image')) {
                $teacher->nid_back_image = $this->saveImage($request->file('nid_back_image'), $teacherDir, 'nid-back.' . $request->file('nid_back_image')->getClientOriginalExtension());
            }

            $teacher->save();


            DB::commit();

            return $teacher;
        } catch (Exception $exception) {
            Log::error("ProfileService::update()", [$exception]);
            DB::rollback();
            return null;
        }
    }

    /**
     * Save the uploaded image to the specified directory and return the URL.
     *
     * @param \Illuminate\Http\UploadedFile $imageRequest The uploaded image file.
     * @param string $directory The directory where the image should be stored.
     * @param string $imageName The name of the image file to store.
     * @return string|null The URL of the saved image or null if there was an error.
     */
    private function saveImage($imageRequest, $directory, $imageName)
    {
        try {
            $imagePath = $imageRequest->storeAs($directory, $imageName, 'public');
            return Storage::url($imagePath);
        } catch (Exception $exception) {
            Log::error("ProfileService::saveImage()", [$exception]);
            return null;
        }
    }
    /**
     * update password
     *
     * @param UpdateChangePasswordRequest $request
     * @param User $user
     * @return \App\Models\User|null
     */
    public function changePassword(UpdateChangePasswordRequest $request, $user): User|null
    {
        try {
            $user->password = Hash::make($request->password);
            $user->updated_by = Auth::user()->id;

            $user->save();

            return $user;
        } catch (Exception $exception) {
            Log::error("ProfileService::changePassword()", [$exception]);
            return null;
        }
    }
}
