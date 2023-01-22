<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Interview;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Field;
 
class InterviewController extends Controller
{

    public function cancelInterview($id){
        Interview::destroy($id);
        
        return redirect('/home');
    }

    public function home(){
        $id = Auth::id();
        $recentInterviews = Interview::where('user_id', $id)->where('status', 'Done')->get()->last();
        $interviews = Interview::where('user_id', $id)->where('status', 'Accepted')->get();


        $rShift = 1;
        $iShift = 1;

        $iField = "";
        $rField = "";
        if ($recentInterviews != null){
            $rShift = $recentInterviews->shift;
            $rField = Field::find($recentInterviews->field_id)->name;
        }
        $count = $interviews->count();
        if ($count != 0 ){
            $iShift = $interviews[0]->shift;
            $iField = Field::find($interviews[0]->field_id)->name;
        }

        $rTime = "";
        $iTime = "";
        switch($rShift){
            case 1:
                $rTime = "07.00 - 09.00";
                break;
            case 2:
                $rTime = "09.00 - 11.00";
            
                break;
            case 3:
                $rTime = "11.00 - 13.00";
                break;
            case 4:
                $rTime = "13.00 - 15.00";
                break;
            case 5:
                $rTime = "15.00 - 17.00";
                break;
            case 6:
                $rTime = "17.00 - 19.00";
                break;
        }

        switch($iShift){
            case 1:
                $iTime = "07.00 - 09.00";
                break;
            case 2:
                $iTime = "09.00 - 11.00";
            
                break;
            case 3:
                $iTime = "11.00 - 13.00";
                break;
            case 4:
                $iTime = "13.00 - 15.00";
                break;
            case 5:
                $iTime = "15.00 - 17.00";
                break;
            case 6:
                $iTime = "17.00 - 19.00";
                break;
        }



        return view('user.home', compact('interviews', 'recentInterviews', 'iTime', 'rTime', 'rField', 'iField'));
    }

    public function create(){
        $fields = Field::all();
        return view('user.request-interview', compact('fields'));
    }

    public function store(Request $request)
    {
        
        $title = $request->title;
        $date = $request->date;
        $link = $request->link;

        $interview = new Interview;
        $interview->user_id = Auth::id();
        $interview->title = $title;
        $interview->date  = $date;
        $interview->status = 'Accepted';

        $interview->field_id = $request->field_id;
        $interview->link = $link;
        $interview->shift = (int)$request->inverview_shift;
        $interview->save();


        return redirect('/home');
    }
    
    public function admin(){
        return view('admin.welcome');
    }

    public function delete($id){
        Interview::destroy($id);
        return redirect('/home');
    }

    public function history(){
        $interviews = Interview::all();
        return view('user.interview-history', compact('interviews'));
    }

}
