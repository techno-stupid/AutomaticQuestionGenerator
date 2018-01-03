<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saved;
use DB;
use PDF;

class SavedController extends Controller
{
    public function manage()
    {
    	$saveds = DB::table('saveds')
    		->get();
    	// dd($saved);
    	return view('admin.saved.saved',['saveds'=>$saveds]);
    }
    public function delete($id)
    {
    	$saveds = DB::table('saveds')
    		->where('id',$id)
    		->first();
    	unlink('public/'.$saveds->qid);
    	$saved = Saved::find($id);

        $saved->delete();
        return redirect('/saved-questions')->with('message2','Question Set Deleted Successfully !!');
    }
}
