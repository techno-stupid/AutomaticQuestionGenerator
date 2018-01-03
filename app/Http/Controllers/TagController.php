<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function createTag()
    {
    	return view('admin.tag.createTag');
    }
    public function storeTag(Request $request)
    {
    	$this->validate($request,[
            'tagName' => 'required',
        ]);
        $tag = new Tag();
        $tag->tagName = $request->tagName;
        $tag->save();
        return redirect()->back()->with('message','Tag Information saved Successfully');
    }
    public function manageTag()
    {
        $tags = Tag::paginate(10);
        return view('admin.tag.manageTag',['tags'=>$tags]);
    }
    public function deleteTag($id)
    {
        $tag = Tag::find($id);
        $tag->BroadQuestion()->detach();
        $tag->delete();
        return redirect('/tag/manage')->with('message','Tag Deleted Successfully !!');
    }
}
