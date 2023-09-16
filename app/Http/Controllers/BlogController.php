<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showEditScreen(Blog $blog){
        return view('edit-blog',['blog'=> $blog]);
}
    public function createBlog(Request $request){
        $incomingFields=$request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

        $incomingFields['title']=strip_tags($incomingFields['title']);
        $incomingFields['body']=strip_tags($incomingFields['body']);
        $incomingFields['user_id']=auth()->id();
        Blog::create($incomingFields);
        return redirect('/welcome');
    }
}
