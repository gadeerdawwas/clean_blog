<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class CleanBlogController extends Controller
{
    public function index(){
        // $posts=[
        //     [
        //         'title'=> 'Man must explore, and this is exploration at its greatest' ,
        //         'sub_title'=> 'Problems look mighty small from 150 miles up' ,
        //         'date'=> 'on September 24, 2021'
        //     ],
        //     [
        //         'title'=> 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.' ,
        //         'sub_title'=> 'Problems look mighty small from 150 miles up' ,
        //         'date'=> 'on September 18, 2021'
        //     ],
        //     [
        //         'title'=> 'Science has not yet mastered prophecy.' ,
        //         'sub_title'=> 'We predict too much for the next year and yet far too little for the next ten.' ,
        //         'date'=> 'on August 24, 2021'
        //     ],
        //     [
        //         'title'=> 'Failure is not an option' ,
        //         'sub_title'=> 'Many say exploration is part of our destiny, but it’s actually our duty to future generations' ,
        //         'date'=> 'on July 8, 2021'
        //     ],
        // ];

        $posts=Post::all();
        return view('CleanBlog.index',compact('posts'));
    }
    public function about(){
        return view('CleanBlog.about');
    }
    public function contact(){
        return view('CleanBlog.contact');
    }
    public function sendContact(FormDataRequest $request){
        // dd($request->all());
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $msg=$request->message;

        $data=$request->all();
        $detail= 'Welcome :' .$name .' email : ' .$email .' phone number : '.$phone;
        return view('CleanBlog.contact',compact('detail'));

    }
    public function sample($id){
        $post=Post::find($id);
        return view('CleanBlog.sample',compact('post'));
    }
}
