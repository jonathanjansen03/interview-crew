<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;

class FieldController extends Controller
{
    public function index(){
        return view('admin.create-job-field');
    }

    public function store(Request $request){
        Field::create([
            'name' => $request->field
        ]);

        return redirect('welcome-admin');
    }
}
