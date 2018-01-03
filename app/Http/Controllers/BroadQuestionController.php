<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BroadQuestion;
use App\Subject;
use App\Tag;
use PDF;
use DB;

class BroadQuestionController extends Controller
{
    public function createBroadQuestion()
    {
//         $pdf = App::make('dompdf.wrapper');
// $pdf->loadHTML('<h1>Test</h1>');
// return $pdf->stream();

        $subjects = Subject::where('publicationStatus',1)->get();
        return view('admin.broadQuestion.createBroadQuestion',['subjects'=>$subjects]);
    }
    public function storeBroadQuestion(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'questionTitle' => 'required',
            'subjectId' => 'required',
        ]);
        $question = new BroadQuestion();
        $question->questionTitle = $request->questionTitle;
        $question->subjectId = $request->subjectId;
        $question->questionDifficultyLevel = $request->questionDifficultyLevel;
        $question->questionMarks = $request->questionMarks;
        $question->questionImportance = 1;
        $question->publicationStatus = $request->publicationStatus;
        $question->save();

        $question->tags()->sync($request->tags,false);

        return redirect()->back()->with('message','Broad Question saved Successfully');
    }
    public function manageBroadQuestion()
    {
        $questions = DB::table('broad_questions')
                ->join('subjects','broad_questions.subjectId','=','subjects.id')
                ->select('broad_questions.*','subjects.subjectName')
                ->paginate(10);

         
        return view('admin.broadQuestion.manageBroadQuestion',['questions'=>$questions]);
    }
    public function viewBroadQuestion($id)
    {
        $question = DB::table('broad_questions')
                ->join('subjects','broad_questions.subjectId','=','subjects.id')
                ->select('broad_questions.*','subjects.subjectName')
                ->where('broad_questions.id',$id)
                ->first();
        $tags = DB::table('question_tag')
            ->join('tags','question_tag.tag_id','=','tags.id')
            ->select('question_tag.*','tags.tagName')
            ->where('question_id',$id)
            ->get();
        return view('admin.broadQuestion.viewBroadQuestion',['question'=>$question,'tags'=>$tags]);
    }
    
    public function editBroadQuestion($id)
    {
        $question = DB::table('broad_questions')
                ->where('broad_questions.id',$id)
                ->first();
        $subjects = DB::table('subjects')
                ->where('publicationStatus',1)
                ->get();
        return view('admin.broadQuestion.editBroadQuestion',['question'=>$question,'subjects'=>$subjects]);
    }
    public function updateBroadQuestion(Request $request)
    {
        $question = BroadQuestion::find($request->id);
        $question->questionTitle = $request->questionTitle;
        $question->subjectId = $request->subjectId;
        $question->questionDifficultyLevel = $request->questionDifficultyLevel;
        $question->questionMarks = $request->questionMarks;
        $question->questionImportance = 1;
        $question->publicationStatus = $request->publicationStatus;
        $question->save();

        if(isset($request->tags)) $question->tags()->sync($request->tags);
        else $question->tags()->sync(array());
        
        return redirect('/broad-question/manage')->with('message','BroadQuestion Info Updated Successfully!!');
    }
    public function deleteBroadQuestion($id)
    {
        $question = BroadQuestion::find($id);
        $question->tags()->detach();
        $question->delete();
        return redirect('/broad-question/manage')->with('message2','BroadQuestion Deleted Successfully !!');
    }
}
