<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
    
        return view ('users.index')->with ('users',$users);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view ('users.singleUser')->with ('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view ('users.edit')->with ('user',$user);
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
        $user = User::find($id) ;
        $message = 'Edited User Data Successfully.';
        $adminLevel = auth()->user()->level;
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'level' => 'required|integer|min:0|max:5'
        ]);
        
        $user ->name = $request->input ('name');
        $user ->email = $request->input ('email');
        $user ->phone = $request->input ('phone');
        if ($request->input ('level')>$adminLevel) {
            echo "Have a good day!";
            error_log('Some message here.');
            $user ->admin_edited = 'no';
            $message = $message."You can not appoint anyone with admin Level higher than you.";
        }
        else if($request->input ('level')<$user->level){
            $message = $message."You can not demote an admin.";
        }
        else{
            $user->level = $request->input ('level');
            $user ->admin_edited = 'yes';
        }
       
       
        $user ->admin_id = auth()->user()->id;
        

        $user ->save();
        return redirect ('/users')->with ('success',$message);
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
