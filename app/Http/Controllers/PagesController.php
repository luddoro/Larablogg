<?php

namespace App\Http\Controllers; 

use App\Blogs;
use Illuminate\Http\Request;


class PagesController extends Controller 
{

    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function welcome() { //localhost/
        return view('welcome');
    }
    public function index() { //localhost/index
        
        return view('index');
    }

    public function blogs() { //localhost/blogs
        $blogs = Blogs::where('userid', auth()->id())->get(); //select * from blogs where userid = auth_id
        return view('blogs', compact('blogs'));
    }

    public function info() { //localhost/info
        return view('info');
    }

    public function create() {  //localhost/blogs/create
        return view('create');

    }

    public function store() {
        request()->validate([
            'title'=>'required',
            'description'=>'required'
            ]);


        $user = request()->all() + ['userid' => auth()->id()];
        Blogs::create($user);
        return redirect('/blogs');    
    }
    
    public function show() {
    
    }

    public function edit($id) {

        $Blogs = Blogs::find($id);
        return view('edit', compact('Blogs'));

    }
    public function update($id) {
        $Blogs = Blogs::find($id);
        $Blogs->title = request('title');
        $Blogs->description = request('description');

        $Blogs->save();

        return redirect('blogs');
    }
    public function destroy($id) {
        $Blogs= Blogs::find($id)->delete();

        return redirect('/blogs');
    }

}
 
