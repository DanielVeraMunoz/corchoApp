<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Category;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::where('is_completed', false)
        ->when(request('category'), function ($query) {
            $query->where('category_id', request('category'));
        })
        // ->orderBy('created_at', 'desc')
        ->get();
        
        $categories = Category::all();
        return view('notes.index', ['notes' => $notes, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('notes.create', ['categories' => $categories]);
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
            'category_id' => 'required|exists:categories,id',
            
        ]);
        Note::create([
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'user_id' => 1, 
            'category_id' => $request->category_id, 
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
        $comments = $note->comments()->with('user')->get();
        
        $commentUsers = $note->comments()
            ->with('user')
            ->get()
            ->map(fn($comment) => $comment->user)
            ->unique('id')
            ->values();

        $thanks = $note->thanks()->with('giver')->get();
        return view('notes.show', ['note' => $note, 'comments' => $comments, 'thanks' => $thanks, 'commentUsers' => $commentUsers]);
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

        if ($request->has('is_completed')) {
        $note->update(['is_completed' => true]);
        return redirect()->route('notes.index')->with('success', 'Nota cerrada');
        }

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
