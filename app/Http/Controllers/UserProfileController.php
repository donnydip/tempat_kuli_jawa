<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserProfileRequest;
use App\Http\Requests\UserPasswordRequest;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('userprofile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\UserProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( UserProfileRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_profile' => __('You are not allowed to change data for a default user.')]);
        }

        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }


    /**
     * Change the password
     *
     * @param  \App\Http\Requests\UserPasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(UserPasswordRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_password' => __('You are not allowed to change the password for a default user.')]);
        }

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}

