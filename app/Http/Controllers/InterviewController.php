<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;
use App\Models\Field;

class InterviewController extends Controller
{
    public function home(){
        $interviews = Interview::all();
        return view('home', compact('interviews'));
    }

    public function create(){
        $fields = Field::all();
        return view('create', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required', 
            'date' => 'required'
        ]);

        Interview::create([
            'title' => $request->title, 
            'date' => $request->date, 
            'field_id' => $request->field_id
        ]);

        return redirect('/home')->with('success', 'Interview Made Succesfully');
    }

    public function admin(){
        return view('admin');
    }

    public function delete($id){
        Interview::destroy($id);
        return redirect('/home');
    }

}
