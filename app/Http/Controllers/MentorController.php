<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMentorRequest;
use App\Http\Requests\UpdateMentorRequest;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    // public function __construct() {
    //     // (Auth::user()) ? a : b ;
    //     print_r(Auth::user()->role);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $email = Auth::user()->email;
        $mentor = Mentor::where('email', $email)->get();
       
        return view('mentor.index', ['mentor' => $mentor]);
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
    public function store(StoreMentorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mentor $mentor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMentorRequest $request, Mentor $mentor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentor $mentor)
    {
        //
    }
}
