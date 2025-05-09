<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserProfileRequest;
use App\Http\Requests\UserPasswordRequest;

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
    public function update(UserProfileRequest $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'handphone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        /** @var \App\Models\User $user */
        $user = auth()->user();
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->handphone = $request->handphone;
        $user->email = $request->email;
        $user->save();

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
        /** @var \App\Models\User $user */
        $user = auth()->user();

        // Optionally validate old password
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => __('The current password is incorrect.')]);
        }

        $user->password = Hash::make($request->get('password'));
        $user->save();

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    /**
     * Update the user's profile photo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePhoto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        /** @var \App\Models\User $user */
        $user = auth()->user();

        if ($request->hasFile('foto')) {
            // Ensure directory exists
            Storage::makeDirectory('foto/' . $user->id);

            // Delete old photo if exists
            if ($user->foto) {
                Storage::delete('foto/' . $user->id . '/' . $user->foto);
            }

            // Store new photo
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $stored = $file->storeAs('foto/' . $user->id, $filename);


            if ($stored) {
                // Update user's photo in database
                $user->foto = $filename;
                $user->save();
            } else {
                return back()->withErrors(['foto' => 'Failed to upload image.']);
            }
        } else {
            return back()->withErrors(['foto' => 'No file uploaded.']);
        }

        return back()->withStatus(__('Profile photo successfully updated.'));
    }
}

