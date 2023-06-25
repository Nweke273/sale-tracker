<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\HttpKernel\Profiler\Profile;


/**
 * @group Auth
 */

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'salutation' => ['required', 'string', 'max:25'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'roleId' => ['required', 'int', 'max:255', 'exists:roles,id'],
            'profileId' => ['required', 'int', 'max:255', 'exists:profiles,id'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'salutation' => $request->salutation,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'role_id' => $request->roleId,
            'profile_id' => $request->profileId,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        $device = substr($request->userAgent() ?? '', 0, 255);

        return response()->json([
            'access_token' => $user->createToken($device)->plainTextToken,
        ], Response::HTTP_CREATED);
    }
}
