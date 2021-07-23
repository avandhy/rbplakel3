<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    //ZALDI EDITTTTTTTT
    public function index()
    {
        $upload_profile = DB::table('users')->get();
        return view('profile.edit',['users' => $upload_profile]);
    }

    public function store(Request $request){

        auth()->user()->store($request->all());
		// menyimpan data file yang diupload ke variabel $upload_file
		$upload_profile = $request->university;
        $upload_profile = $request->major;
        $upload_profile = $request->motto;

		Profile::create([
			'university' => $request->university,
			'major' => $request->major,
            'motto' => $request->motto,
		]);

		return redirect('/profile');
	}
    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_profile' => __('You are not allowed to change data for a default user.')]);
        }

        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));

                
        //if ($request -> hasFile('photo')){
          //  $request->file('photo')->move('images/',$request->file('photo')->getClientOriginalName())
        //}
        //return back()->withStatus(__('Photo profile successfully updated.'));

    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_password' => __('You are not allowed to change the password for a default user.')]);
        }

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
