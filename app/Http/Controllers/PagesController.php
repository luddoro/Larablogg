<?php

namespace App\Http\Controllers; 

use App\Blogs;
use Illuminate\Http\Request;


class PagesController extends Controller 
{

    public function welcome() { //localhost/
        return view('welcome');
    }
    public function index() { //localhost/index
        
        return view('index');
    }

    public function blogs() { //localhost/blogs
        $blogs = Blogs::all();
        return view('blogs', compact('blogs'));
    }

    public function info() { //localhost/info
        return view('info');
    }

    public function create() {  //localhost/blogs/create
        return view('create');

    }

    public function store() {
        
        Blogs::create(request()->all());
        return redirect('/blogs');
    }

    public function edit($id) {

        $Blogs = Blogs::find($id);
        return view('edit', compact('Blogs'));

    }
    public function update() {
        dd('hello');
    }
    public function destroy() {

    }

}
 
