<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;
use App\Models\Field;

class InterviewController extends Controller
{
    public function home(){
        $interviews = Interview::all();
        return view('user.home', compact('interviews'));
    }

    public function create(){
        $fields = Field::all();
        return view('user.request-interview', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required', 
            'date' => 'required',
            'link' => 'required'
        ]);

        Interview::create([
            'title' => $request->title, 
            'date' => $request->date, 
            'field_id' => $request->field_id,
            'link' => $request->link
        ]);

        return redirect('/home');
    }

    public function admin(){
        return view('admin.welcome');
    }

    public function delete($id){
        Interview::destroy($id);
        return redirect('/home');
    }

}
