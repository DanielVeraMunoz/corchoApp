<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar datos
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'nullable',
        ]);
        Note::create([
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'user_id' => 1, 
            'category_id' => 1, 
            'is_pinned' => false, 
            'is_completed' => false, 
        ]);

        return redirect()->route('notes.index')->with('success', 'Nota creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'nullable',
        ]);

        $note->update([
        'title' => $request->title,
        'description' => $request->description,
        'event_date' => $request->event_date,
        ]);
    
        return redirect()->route('notes.index')->with('success', 'Nota actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Nota eliminada exitosamente');
    }
}
