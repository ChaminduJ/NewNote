<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewNote;

class HomeController extends Controller
{
    public function index(){
        $new_note=NewNote::get()->sortByDesc("id");

        return view('pages.home')->with(
            'newnotes',$new_note
        );
    }
    public function deleteNote($id)
    {
        $delete_note =NewNote::find($id);
        $delete_note->delete();
        return redirect('/')->with('success-delete-note', "Note Successfully Deleted");
    }
}
