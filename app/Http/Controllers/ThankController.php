<?php

namespace App\Http\Controllers;

use App\Models\Thank;
use Illuminate\Http\Request;

class ThankController extends Controller
{
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
        $request->validate([
            'user_id' => 'required|integer',
            'note_id' => 'required|integer',
        ]);

        $thank = Thank::create([
            'user_id' => $request->input('user_id'),
            'note_id' => $request->input('note_id'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Thank $thank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thank $thank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thank $thank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thank $thank)
    {
        //
    }
}
