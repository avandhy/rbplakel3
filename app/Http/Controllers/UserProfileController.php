<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profiles.show', compact('profile'));
    }


    public function delete()
    public function update()
}
