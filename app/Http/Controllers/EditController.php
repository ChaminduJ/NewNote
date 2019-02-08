<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewNote;

class EditController extends Controller
{
    public function index($id){
        $editnote = NewNote::find($id); 
        return view('pages.edit-note')->with(
            'editnote',$editnote
        );
    }
    public function editNote(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $new_note = NewNote::find($id);
        $new_note->title = strtoupper($request->title);
        $new_note->note = $request->description;
        $new_note->save();
        return redirect('/')->with('success-new-note', "Note Successfully Edited");
    }
}
