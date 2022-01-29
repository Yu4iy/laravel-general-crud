<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$profiles = Profile::all();
		return view('profiles.main', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$data = $request->all();
      
		$new_profile = new Profile();
		$new_profile->first_name = $data['first_name'];
		$new_profile->last_name = $data['last_name'];
		$new_profile->age = $data['age'];
		$new_profile->date_of_birth = $data['date_of_birth'];
		$new_profile->gender = $data['gender'];
		$new_profile->country = $data['country'];
		$new_profile->city = $data['city'];
		$new_profile->address = $data['address'];
		$new_profile->cell = $data['cell'];
		$new_profile->criminal = $data['criminal'];
		$new_profile->active_warants = $data['active_warants'];
		$new_profile->img_url = $data['img_url'];
		$new_profile->slug = Str::slug($data['first_name'] .' '.	 $data['last_name'].'-');
		$new_profile->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
