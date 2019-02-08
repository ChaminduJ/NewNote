<?php

namespace App\Http\Controllers;

use App\NewNote;
use Illuminate\Http\Request;
use session;

class NewNoteController extends Controller
{
    public function index(){
        return view('pages/add-new-note');
    }

    public function addNewNote(Request $request){
        $this->validate($request, [
                'title' => 'required',
                'description'=>'required',
            ]);

        $new_note = new NewNote;
        $new_note->title = strtoupper($request->title);
        $new_note->note = $request->description;
        $new_note->save();
        return redirect('/')->with('success-new-note',"New Note Successfully Created");
    }

}
