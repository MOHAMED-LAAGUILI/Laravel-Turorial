<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index()
    {
        $notes = Note::query()->orderBy("created_at", "desc")->get();
      //  dump($notes);
        return view('note.index',['notes' => $notes]);
    }

    public function create()
    {
        return view('note.create');
    }
    
    public function show(Note $note)
    {
        return view('note.show', ['note' => $note]);
  }

    public function edit(Note $note)
    {
        return view('note.edit', ['note' => $note]);
  }

    public function update(Request $request, Note $note)
    {
        
    }
    public function store(Request $request)
    {
        //
    }
    public function destroy(Note $note)
    {
        //
    }
}
