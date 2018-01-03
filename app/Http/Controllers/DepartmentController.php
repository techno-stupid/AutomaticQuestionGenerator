<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use DB;

class DepartmentController extends Controller
{
    public function createDepartment()
    {
        return view('admin.department.createDepartment');
    }
    public function storeDepartment(Request $request)
    {
        $this->validate($request,[
            'departmentName' => 'required',
            'departmentDescription' => 'required',
        ]);
        $department = new Department();
        $department->departmentName = $request->departmentName;
        $department->departmentDescription = $request->departmentDescription;
        $department->publicationStatus = $request->publicationStatus;
        $department->save();
        return redirect()->back()->with('message','Department Information saved Successfully');
    }
    public function manageDepartment()
    {
        $categories = Department::paginate(10);
        return view('admin.department.manageDepartment',['categories'=>$categories]);
    }
    public function editDepartment($id)
    {
        $departmentById = Department::where('id',$id)->first();
        return view('admin.department.editDepartment',['departmentById'=>$departmentById]);
    }
    public function updateDepartment(Request $request)
    {
        $department = Department::find($request->id);
        $department->departmentName = $request->departmentName;
        $department->departmentDescription = $request->departmentDescription;
        $department->publicationStatus = $request->publicationStatus;
        $department->save();
        return redirect('/department/manage')->with('message','Department Info Updated Successfully!!');
    }
    public function deleteDepartment($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect('/department/manage')->with('message2','Department Deleted Successfully !!');
    }
}
