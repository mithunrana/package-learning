<?php

namespace Survey\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Survey\Models\Audit;
class SurveyController extends Controller
{
    public function index(){
        $audits = Audit::orderBy('created_at','desc')->paginate(10);
        return view('survey::survey-index',compact('audits'));
    }


    public function surveyAdd(){
        return view('survey::survey-add');
    }

    public function surveystore(Request $request){
        //return view('survey::sur')

        $request->validate([
            'name' => 'required|max:255',
        ]);

        $published = false;
        if($request->has('published')){
            $published = true;
        }

        Audit::create([
            'name' => $request->input('name'),
            'is_published' => $published,
            'user_id' => 1,
            'checklist_id' => 1,
            'is_archived' => 1,
        ]);

        return redirect()->back();
    }


    public function view(Audit $audit){
        return view('survey::survey-view',compact('audit'));
    }
}