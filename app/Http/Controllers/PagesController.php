<?php

namespace App\Http\Controllers; 

use App\Blogs;
use Illuminate\Http\Request;


class PagesController extends Controller 
{

    public function __construct() 
    {
        $this->middleware('auth')->except('index');
    }

    public function index() //localhost/index
    { 
        
        return view('index');
    }

    public function blogs() //localhost/blogs
     { 
        $blogs = Blogs::where('userid', auth()->id())->get(); //select * from blogs where userid = auth_id
        return view('blogs', compact('blogs'));
    }

    public function info() //localhost/info
    { 
        return view('info');
    }

    public function create() //localhost/blogs/create
    {  
        return view('create');

    }

    public function store() //Skapar inlägg
     {
        request()->validate([
            'title'=>'required',
            'description'=>'required'
            ]);

        $request = request()->all() + ['userid' => auth()->id()];
        Blogs::create($request);
        return redirect('/blogs');    
    }
    
    public function show($id)   //visar inlägg
     {
        $blogs = Blogs::find($id);
        return view('blogpost', compact('blogs'));
    }

    public function edit($id)   //redigera inlägg
    {

        $blogs = Blogs::find($id);
        return view('edit', compact('blogs'));
        

    }
    public function update($id) //uppdaterar redigerade inlägg
     {
        $blogs = Blogs::find($id);
        $blogs->title = request('title');
        $blogs->description = request('description');

        $blogs->save();

        return redirect('blogs');
    }
    public function destroy($id)    //radera inlägg
     {
        $blogs= Blogs::find($id)->delete();

        return redirect('/blogs');
    }

}
 
