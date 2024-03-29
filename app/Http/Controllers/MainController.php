<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    
    public function mainPage(){
        return view('welcome');
    }

    public function index(){
        // get all data or posts from table posts
        $posts=DB::table('_posts')->get();
        //return $posts;
        return view('/posts/index',compact('posts'));
        //compact is send posts variable to view page
    }

    public function createPosts(){
        return view('posts/create');
    }
    
    public function insertPosts(Request $request){
        DB::table('_posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return view('success');
    }

    public function editPosts($id){
        $post=DB::table('_posts')->where('id',$id)->first();
        return view('/posts/edit',compact('post'));
    }

    public function updatePosts(Request $request, $id){
        DB::table('_posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return view('success');
        //return redirect()->route('posts');
    }

    public function deletePosts($id){
        DB::table('_posts')->where('id',$id)->delete();
        // DB::table('_posts')->delete(); // for deleting all rows
        return view('success');
    }

    public function deleteAllPosts(){
        DB::table('_posts')->truncate();
        return view('success');

    }
    

}
