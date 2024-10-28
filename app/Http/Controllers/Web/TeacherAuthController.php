<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Models\Teacher\Teachers;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeacherAuthController extends Controller
{
    private $user = null;
    private string $token = '';

    /**
     * Show the dedicated page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function loginPage()
    {
        return view('web.auth.teacher.login');
    }
    /**
     * Show the dedicated page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registerPage()
    {
        return view('web.auth.teacher.register');
    }

    /**
     * Write code on Method
     * @param StoreTeacherRequest $request
     * @return response()
     */
    public function register(StoreTeacherRequest $request)
    {
        try {
            $data = $request->all();
            $createUser = $this->createUser($request);
            // dd($data);
        } catch (Exception $exception) {
            dd("TeacherAuthController::register() ☠💀");
            Log::error("TeacherAuthController::register() ", [$exception]);
        }
    }

    /**
     * Write code on Method
     *
     * @return string
     */
    public function createUser(StoreTeacherRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $this->token = Str::random(64);
                // First query: Create a new user
                $this->user = User::create([
                    'name' => $request->first_name . ' ' . $request->last_name,
                    'email' => $request->email,
                    'phone_no' => $request->phone_no,
                    'password' => Hash::make($request->password),
                    'user_type' => User::TEACHER,
                    'email_verified_at' => Carbon::now(),
                    'token' => $this->token,
                    'approved' => 1
                ]);
                // dd($this->user);

                // Define base directory for teacher images
                $teacherDir = 'teacher/' . $this->user->id;

                // Ensure the directory exists
                Storage::makeDirectory($teacherDir);

                // Save the profile image
                $profilePath = null;
                if ($request->hasFile('image')) {
                    $profileImage = $request->file('image');
                    $profilePath = $profileImage->storeAs($teacherDir, 'profile-picture.' . $profileImage->getClientOriginalExtension(), 'public');
                }

                // Save the NID front image
                $nidFrontPath = null;
                if ($request->hasFile('nid_front_image')) {
                    $nidFrontImage = $request->file('nid_front_image');
                    $nidFrontPath = $nidFrontImage->storeAs($teacherDir, 'nid-front.' . $nidFrontImage->getClientOriginalExtension(), 'public');
                }

                // Save the NID back image
                $nidBackPath = null;
                if ($request->hasFile('nid_back_image')) {
                    $nidBackImage = $request->file('nid_back_image');
                    $nidBackPath = $nidBackImage->storeAs($teacherDir, 'nid-back.' . $nidBackImage->getClientOriginalExtension(), 'public');
                }

                // dump(Storage::url($profilePath));
                // dd($profilePath, $nidFrontPath, $nidBackPath);

                // Second query: Create a new teacher record
                $teacher = Teachers::create([
                    'user_id' => $this->user->id,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_no' => $request->phone_no,
                    'password' => $this->user->password,
                    'dob' => $request->dob,
                    'gender' => $request->gender,
                    'marital_status' => $request->marital_status,
                    'religion' => $request->religion,
                    'nid_no' => $request->nid_no,
                    'address' => $request->address,
                    'image' => Storage::url($profilePath),
                    'nid_front_image' => Storage::url($nidFrontPath),
                    'nid_back_image' => Storage::url($nidBackPath),
                ]);
                // dd($teacher);
            });

            DB::commit();

            return $this->token;
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("TeacherAuthController::createUser() ", [$exception]);
            return null;
        }
    }

    private function deleteFile($folderPath, $filePath)
    {
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Check if the directory is empty before deleting
        if (File::isDirectory($folderPath) && count(File::files($folderPath)) === 0) {
            File::deleteDirectory($folderPath);
        }
    }

    private function createDirectory($tempFolderPath)
    {
        if (!File::isDirectory($tempFolderPath)) {
            File::makeDirectory($tempFolderPath, 0777, true, true);
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function verifyAccount($token)
    {
        try {
            $verifyUser = User::where('token', $token)->first();

            $message = 'Sorry your email cannot be identified.';

            if (!is_null($verifyUser)) {
                $user = $verifyUser->user;
                // dd($user);

                if (!$user->email_verified_at) {
                    $verifyUser->user->email_verified_at = Carbon::now()->getTimestamp();
                    $verifyUser->user->save();
                    $message = "Your e-mail is verified. You can now login.";
                    $user = User::where('id', $verifyUser->user_id)->first();

                    Auth::login($user);
                    return redirect()->intended('/teacher')->withSuccess('Signed in');
                } else {
                    $message = "Your e-mail is already verified. You can now login.";
                    $user = User::where('id', $verifyUser->user_id)->first();

                    Auth::login($user);
                    return redirect()->intended('/teacher')->withSuccess('Signed in');
                }
            }
            // dd($message);

            return redirect()->route('teacher.register-page')->with('message', $message);
        } catch (Exception $exception) {
            Log::error("TeacherAuthController::verifyAccount() ", [$exception]);
        }
    }
}
