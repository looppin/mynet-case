<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $User=User::all()->where('id',$id)->first();
        return view('backend.user.edit')->with('user',$User);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if( isset($request->password) )
        {

            if( $request->hasFile( 'user_file' ) )
            {
                $request->validate([
                    'user_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                ]);

                $file_name = uniqid().'.'.$request->user_file->getClientOriginalExtension();
                $request->user_file->move( public_path('common/backend/user'),$file_name );

                $user = User::where('id',$id)->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "file" => $file_name
                ]);


            }else {

                $user = User::where('id',$id)->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password)
                ]);


            }


        }else{

            if( $request->hasFile( 'user_file' ) )
            {
                $request->validate([
                    'user_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                ]);

                $file_name = uniqid().'.'.$request->user_file->getClientOriginalExtension();
                $request->user_file->move( public_path('common/backend/user'),$file_name );

                $user = User::where('id',$id)->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "file" => $file_name
                ]);


            }else {

                $user = User::where('id',$id)->update([
                    "name" => $request->name,
                    "email" => $request->email
                ]);


            }

        }



        if( $user )
        {
            return back()->with('success','Kullanıcı Güncellendi!');
        }else {
            return back()->with('error','Kullanıcı Güncellenmedi!');
        }
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
