<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //showdata
        $blogs = Blog::all();
        //$search = \Request::get('search');
        //$blogs = Blog::search()->orderBy('title')->paginate(20);
        //return view ('blog.index',compact('blogs'));
        return view('blog.index',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new data
        return view('blog.create');
    }

    public function search()
    {
      //searching the data
      $blog = Blog::FindOrFail($id);
      //return to edit view
      return view('blog.search',compact('blog'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,[
          'title'=>'required',
          'description'=>'required',
        ]);
        //create new data

        $blog = new blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::FindOrFail($id);
        //return to edit view
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
          'title'=>'required',
          'description'=>'required',
        ]);

        $blog = Blog::FindOrFail($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete data
        $blog = Blog::FindOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }

}
