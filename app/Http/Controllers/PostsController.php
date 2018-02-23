<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id','desc')->paginate(10);
        //$posts = Post::orderBy('id','desc')->get();
        //$posts = Post:: where('lessee','Person One')->where ('category','ChingryLand')->get();
        
        
        return view ('posts.index')->with ('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'category' => 'required',
            'mouja' => 'required',
            'daag' => 'required',
            'size' => 'required',
            'dispute' => 'required'
        ]);

        $post = new Post ;
        $post ->category = $request->input ('category');
        $post ->mouja = $request->input ('mouja');
        $post ->daag = $request->input ('daag');
        $post ->size = $request->input ('size');
        $post ->lessee = $request->input ('lessee');
        $post ->dispute = $request->input ('dispute');
        $post ->added_by = auth()->user()->id;
        $post ->updated_by = auth()->user()->id;

        $post ->save();
        return redirect ('/posts/create')->with ('success','Added Data Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view ('posts.singlePost')->with ('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view ('posts.edit')->with ('post',$post);
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
        $this->validate($request,[
            'category' => 'required',
            'mouja' => 'required',
            'daag' => 'required',
            'size' => 'required',
            'dispute' => 'required'
        ]);

        $post = Post::find($id) ;
        $post ->category = $request->input ('category');
        $post ->mouja = $request->input ('mouja');
        $post ->daag = $request->input ('daag');
        $post ->size = $request->input ('size');
        $post ->lessee = $request->input ('lessee');
        $post ->dispute = $request->input ('dispute');
        
        $post ->updated_by = auth()->user()->id;  

        $post ->save();
        return redirect ('/posts')->with ('success','Edited Data Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id) ;
        $post->delete();
        return redirect ('/posts')->with ('success','Removed Data Successfully.');

    }


    public function searchBlade()
    {

        
        return view ('posts.postSearch');
        
    }
}
