<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saved;
use DB;
use PDF;


class GenerateController extends Controller
{
    public function download($id)
    {

        $saved = DB::table('saveds')
            ->where('id',$id)
            ->first();
        $file= 'public/'.$saved->qid;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return response()->download($file, $saved->subject.'.pdf', $headers);
    }
    public function generateBroadQuestion()
    {
    	$subjects = DB::table('subjects')
    		->where('publicationStatus',1)
    		->get();
		$departments = DB::table('departments')
			->where('publicationStatus',1)
			->get();
    	return view('admin.generateQuestion.generateBroadQuestion',['subjects'=>$subjects,'departments'=>$departments]);
    }
    public function generateBroadQuestionPost(Request $request)
    {
        $subject = DB::table('subjects')
            ->where('id',$request->subject)
            ->first();
        $sub = $subject->subjectName;
        $subCode = $subject->subjectCode;
        $mark=10*$request->numberOfQuestions;
        
        $data = array(
            'institute'   => $request->instituteName,
            'examName'    => $request->examName,
            'semester'    => $request->semester,
            'subject'     => $sub,
            'subjectCode' => $subCode,
            'time'        => $request->time,
            'date'        => $request->date,
            'marks'       => $mark,
            'note'        => $request->note,
        );
        $questions1 = DB::table('broad_questions')
            ->where('publicationStatus',1)
            ->where('subjectId',$subject->id)
            ->where('questionDifficultyLevel','<=',$request->examDifficulty)
            ->where('questionMarks',1)
            ->take($request->numberOfQuestions)
            ->get();
        $questions2 = DB::table('broad_questions')
            ->where('publicationStatus',1)
            ->where('subjectId',$subject->id)
            ->where('questionDifficultyLevel','<=',$request->examDifficulty)
            ->where('questionMarks',2)
            ->take($request->numberOfQuestions)
            ->get();
        $questions3 = DB::table('broad_questions')
            ->where('publicationStatus',1)
            ->where('subjectId',$subject->id)
            ->where('questionDifficultyLevel','<=',$request->examDifficulty)
            ->where('questionMarks',3)
            ->take($request->numberOfQuestions)
            ->get();
        $questions4 = DB::table('broad_questions')
            ->where('publicationStatus',1)
            ->where('subjectId',$subject->id)
            ->where('questionDifficultyLevel','<=',$request->examDifficulty)
            ->where('questionMarks',4)
            ->take($request->numberOfQuestions)
            ->get();
        if($request['sub']=='sub')
        {
            $v =  view('admin.question.questionPaper',['questions1'=>$questions1,'questions2'=>$questions2,'questions3'=>$questions3,'questions4'=>$questions4])->with($data);
            return $v;
        }
    	else
        {
            $name = rand(100000000,300000000);
            $pdf = PDF::loadView('test',['questions1'=>$questions1,'questions2'=>$questions2,'questions3'=>$questions3,'questions4'=>$questions4,'data'=>$data])->save('public/qp/'.$name.'.pdf');
            $name = '/qp/'.$name.'.pdf';

            $toSave = new Saved();
            $toSave->qid = $name;
            $toSave->subject = $sub;
            $toSave->save();

            if($request['sub']=='dow') return $pdf->download('Questio Paper.pdf');
            return back();
        }
    }
}
