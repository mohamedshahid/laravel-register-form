<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required'=>'This field is required.',
            'alpha'=>'This field only contain letters.',
        ];

        $request->validate([
            'fname'=>'required|alpha',
            'lname'=>'required|alpha',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|numeric|unique:users,phone|digits:10',
        ],$message);
        // echo $request->fname."<br>";
        // echo $request->lname."<br>";
        // echo $request->email."<br>";
        // echo $request->phone."<br>";
        $post = $request->all();
        // print_r($post);
        $user = User::create($post);
        $user->save();
        return redirect('/list')->with('msg','Registration Sucessfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $users = User::orderby('id','desc')->paginate(2);
        return view('list')->with('users',$users);
    }
}
