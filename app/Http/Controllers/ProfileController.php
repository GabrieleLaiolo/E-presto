<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    // public $profile_img;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $profile_img = $request->file('profile-img')->store('public');

        $request->validate([
            'profile_img'=>'image|max:2048'
        ]);

        if($request->file('profile_img')) {
            $profile_img = $request->file('profile_img')->store('public/image');
        } else {
            $profile_img = 'public/image/default-profile-img.png';
        }

        if(!Auth::user()->profile) {
            Auth::user()->profile()->create([
                'profile_img' => $profile_img
            ]);
        } else {
            Auth::user()->profile()->update([
                'profile_img' => $profile_img
            ]);
        }


        // Profile::updateOrCreate([
        //     'user_id' => Auth::user()->id
        // ]);

        return redirect('/')->with('message', 'Foto profilo aggiornata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
