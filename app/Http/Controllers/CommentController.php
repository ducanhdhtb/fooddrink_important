<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //show
    public function getList()
    {
    	$comment = Comment::all();
    	return view('admin.comment.list',compact('comment'));
    }
    //delete
    public function getdelete($id)
    {
    	$cmt = Comment::find($id);
    	$cmt->delete();
    	return redirect()->back();
    }
}
