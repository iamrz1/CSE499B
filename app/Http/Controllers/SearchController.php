<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
 $posts;

class SearchController extends Controller
{
    
    /**
     * Display a listing of the resource.
     * * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //$posts = Post:: where('lessee','Golam Ali')->orWhere ('category','ChingryLand')->paginate(5);

        //$posts =khashland::table('posts')->where('category', 'LIKE', '%' . $category . '%')->where ('location', 'LIKE', '%' . $location . '%')->paginate(15);
        //return 123;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$posts = Post::orderBy('id','desc')->paginate(5);
       // return view ('posts.index')->with ('posts',$posts);
        //return 123;
        $category = $request->category;
        $mouja = $request->mouja;
        $daag = $request->daag;
        $lessee = $request->lessee;

        $posts = Post::where('category', 'LIKE', '%' . $category . '%')->where ('mouja', 'LIKE', '%' . $mouja . '%')->where ('daag', 'LIKE', '%' . $daag . '%')->where ('lessee', 'LIKE', '%' . $lessee . '%')->paginate(15);

        return view ('posts.results')->with ('posts',$posts);
        //return $this->index();
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
        //
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
    }
}
