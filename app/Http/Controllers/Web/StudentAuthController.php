<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\StudentRequest;
use App\Models\Student\Students;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StudentAuthController extends Controller
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
        return view('web.auth.student.login');
    }

    /**
     * Show the dedicated page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registerPage()
    {
        return view('web.auth.student.register');
    }

    /**
     * Write code on Method
     * @param StoreStudentRequest $request
     * @return response()
     */
    public function register(StoreStudentRequest $request)
    {
        try {
            // dd($request);
            $data = $request->all();
            // dd($data);

            $createUser = $this->createUser($data);

            if ($createUser) {
                // Mail::send('v1.careepick.pages.auth.emailVerificationEmail', ['token' => $token], function ($message) use ($request) {
                //     $message->to($request->email);
                //     $message->subject('Email Verification Mail');
                // });

                // $token = Str::random(64);
                // $mailData = [
                //     'token' => $token,
                // ];
                // Mail::to($request->email)->send(new VerifyEmail($mailData));
                // return Redirect()->back()->with('registrationMessage', 'A verification mail has been sent to your email address, please confirm your mail account.');

                return Redirect()->route('student.login-page')->with('signinPageMessage', 'You have been registered, please signin to your account.');
                // dd("Email is sent successfully.");

                // return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
            }

            return Redirect()->back()->with('registrationMessage', 'Something went wrong!');
        } catch (Exception $exception) {
            Log::error("StudentAuthController::register() ", [$exception]);
        }
    }

    /**
     * Write code on Method
     *
     * @return string
     */
    public function createUser(array $data)
    {
        try {
            DB::transaction(function () use ($data) {
                $this->token = Str::random(64);
                // First query: Create a new user
                $this->user = User::create([
                    'name' => $data['first_name'] . ' ' . $data['last_name'],
                    'email' => $data['email'],
                    'phone_no' => $data['phone_no'],
                    'password' => Hash::make($data['password']),
                    'user_type' => User::STUDENT,
                    'email_verified_at' => Carbon::now(),
                    'token' => $this->token,
                    'approved' => 1
                ]);
                // dd($this->user);

                // Second query: Create a new student record
                $student = Students::create([
                    'user_id' => $this->user->id,
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email' => $data['email'],
                    'phone_no' => $data['phone_no'],
                    'password' => $this->user->password
                ]);
                // dd($student);
            });

            DB::commit();

            return $this->token;
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("StudentAuthController::createUser() ", [$exception]);
            return null;
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
                    return redirect()->intended('/student')->withSuccess('Signed in');
                } else {
                    $message = "Your e-mail is already verified. You can now login.";
                    $user = User::where('id', $verifyUser->user_id)->first();

                    Auth::login($user);
                    return redirect()->intended('/student')->withSuccess('Signed in');
                }
            }
            // dd($message);

            return redirect()->route('student.register-page')->with('message', $message);
        } catch (Exception $exception) {
            Log::error("StudentAuthController::verifyAccount() ", [$exception]);
        }
    }
}
