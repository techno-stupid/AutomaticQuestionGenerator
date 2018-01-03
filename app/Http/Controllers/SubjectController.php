<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Subject;
use DB;

class SubjectController extends Controller
{
    public function createSubject()
    {
        return view('admin.subject.createSubject');
    }
    public function storeSubject(Request $request)
    {
        $this->validate($request,[
            'subjectName' => 'required',
            'subjectCode' => 'required',
            'subjectDescription' => 'required',
        ]);
        $subject = new Subject();
        $subject->subjectName = $request->subjectName;
        $subject->subjectCode = $request->subjectCode;
        $subject->subjectDescription = $request->subjectDescription;
        $subject->publicationStatus = $request->publicationStatus;
        $subject->save();
        return redirect()->back()->with('message','Subject Information saved Successfully');
    }
    public function manageSubject()
    {
        $categories = Subject::paginate(10);
        return view('admin.subject.manageSubject',['categories'=>$categories]);
    }
    public function editSubject($id)
    {
        $subjectById = Subject::where('id',$id)->first();
        return view('admin.subject.editSubject',['subjectById'=>$subjectById]);
    }
    public function updateSubject(Request $request)
    {
        $subject = Subject::find($request->id);
        $subject->subjectName = $request->subjectName;
        $subject->subjectCode = $request->subjectCode;
        $subject->subjectDescription = $request->subjectDescription;
        $subject->publicationStatus = $request->publicationStatus;
        $subject->save();
        return redirect('/subject/manage')->with('message','Subject Info Updated Successfully!!');
    }
    public function deleteSubject($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/subject/manage')->with('message2','Subject Deleted Successfully !!');
    }
}
