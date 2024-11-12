<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateChangePasswordRequest;
use App\Models\User;
use App\Services\Teacher\ProfileService;
use App\Traits\Auditable;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChangePasswordController extends Controller
{
    use Auditable;

    /**
     * @var ProfileService
     */
    public $profileService;

    public $layoutFolder = "teacher.change-password";

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    /**
     * Get page.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $user = User::findOrFail(Auth::user()->id);

            $data = [
                "teacher" => $user,
            ];

            return view("{$this->layoutFolder}.index", $data);
        } catch (ModelNotFoundException $exception) {
            Log::error("ChangePasswordController::index()", [$exception]);
            return redirect()->route('teacher.change-password.index')->with('error', $exception->getMessage());
        } catch (Exception $exception) {
            Log::error("ChangePasswordController::index()", [$exception]);
        }
    }

    /**
     * Update password in DB
     *
     * @param UpdateChangePasswordRequest $request
     * @param integer $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateChangePasswordRequest $request, int $id)
    {
        try {
            $user = User::findOrFail(Auth::user()->id);
            $passwordUpdate = $this->profileService->changePassword($request, $user);
            if ($passwordUpdate) {
                $this->auditLogEntry("password:updated", $user->id, 'course-update', $passwordUpdate);
                return redirect()->route('teacher.change-password.index')->with('success', "Password updated successfully");
            }

            return redirect()->route('teacher.change-password.index')->with('error', "Something went wrong!");
        } catch (ModelNotFoundException $exception) {
            Log::error("ChangePasswordController::update()", [$exception]);
            return redirect()->route('teacher.change-password.index')->with('error', $exception->getMessage());
        } catch (Exception $exception) {
            Log::error("ChangePasswordController::update()", [$exception]);
            return redirect()->route('teacher.change-password.index')->with('error', $exception->getMessage());
        }
    }
}