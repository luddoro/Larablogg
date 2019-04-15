<?php

namespace App\Http\Controllers; 

use App\Blogs;
use Illuminate\Http\Request;


class PagesController extends Controller 
{

    public function welcome() {
        return view('welcome');
    }
    public function index() {
        
        return view('index');
    }

    public function blogs() {
        $blogs = Blogs::all();
        return view('blogs', compact('blogs'));
    }
    public function info() {
        return view('info');
    }
    public function create() {
        return view('create');
    }
    public function store() {
        

        Blogs::create(request()->all());
        return redirect('/blogs');
    }
}
