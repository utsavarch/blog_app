<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    public function deleteblog(Blog $blog){
        if (auth()->user()->id===$blog['user_id']){
            $blog->delete();
            return redirect('/welcome');
        }
        return redirect('/');
    }
    public function postEditedblog(Blog $blog, Request $request){
        if (auth()->user()->id!==$blog['user_id']){
            return redirect('/');
        }
        $incomingFields=$request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $incomingFields['title']=strip_tags($incomingFields['title']);
        $incomingFields['body']=strip_tags($incomingFields['body']);
        $blog->update($incomingFields);
        return redirect('/welcome');

    }
    public function showEditScreen(Blog $blog){
        if (auth()->user()->id!==$blog['user_id']){
            return redirect('/');
        }
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
    public function upvote(Blog $blog)
    {
        // Increment the upvotes count in the 'blogs' table
        $blog->increment('upvotes');

        return back(); // Redirect back to the blog post
    }

    public function downvote(Blog $blog)
    {
        // Increment the downvotes count in the 'blogs' table
        $blog->increment('downvotes');

        return back(); // Redirect back to the blog post
    }

}
