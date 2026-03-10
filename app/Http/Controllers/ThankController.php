<?php

namespace App\Http\Controllers;

use App\Models\Thank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'note_id' => 'required|integer',
            'recipient_id' => 'required|integer',
        ]);

        $existingThank = Thank::where('note_id', $request->input('note_id'))
            ->where('recipient_id', $request->input('recipient_id'))
            ->first();

        if ($existingThank) {
            return redirect()->back()->with('error', 'Ya has agradecido esta nota.');
        } else {
            Thank::create([
                'note_id' => $request->input('note_id'),
                'giver_id' => Auth::id(),
                'recipient_id' => $request->input('recipient_id'),
            ]);
        }
        return redirect()->route('notes.show', $request->note_id)->with('resolver', 'open');
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
