<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function addEmployee()
    {
        return view ('add-post');
    }

    public function createEmployee(Request $req)
    {
       $post = new Post;
       $post->name = $req->name;
       $post->designation = $req->designation;
       $post->salary = $req->salary;
       $post->save();

       return back()->with('success','Employee added successfully');
    }

    public function getEmployee()
    {
       $posts = Post::orderBy('id','ASC')->get();
       return view('posts',compact('posts'));
    }
    public function getEmployeeById($id)
    {
       $post = Post::where('id',$id)->first();
       return view ('single-post',compact('post'));
    }

    public function deleteEmployee($id)
    {
        $post = Post::where('id',$id)->delete();
        return back()->with('success','Employee successfully deleted');
    }

    public function editEmployee($id)
    {
      $post = Post::find($id);
      return view ('edit-employee',compact('post'));
    }

    public function updateEmployee(Request $req)
    {
        $post =Post::find($req->id);
        $post->name = $req->name;
        $post->designation = $req->designation;
        $post->salary = $req->salary;
        $post->save();
        return back()->with('success','Updated Successfully');
    }
}
