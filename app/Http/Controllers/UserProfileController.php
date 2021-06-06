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
    public function edit(){}
    public function update(){}
    public function upload(){}
    public function deleteUserAccount(){}


    {

}
