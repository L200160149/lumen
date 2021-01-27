<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('age', ['only' => ['getUser']]);
                                    // except
    }

    public function generateKey()
    {
        return str_random(32);
    }

    public function fooExample() 
    {
        return 'Contoh controller dari POST Request';
    }

    public function getUser($id) 
    {
        return 'User id : ' .$id;
    }

    public function getPost($cat1, $cat2)
    {
        return 'Kategori 1 : ' .$cat1. ' Kategori 2 : ' .$cat2;
    }

    public function getProfile()
    {
        echo '<a href="' .route('profile.action') . '">Profile Action</a>';
    }

    public function getProfileAction()
    {
        return 'Router Profile : ' .route('profile');
    }


    public function fooBar(Request $request)
    {
        // if ($request->is('foo/bar')) {
        //     return 'Success';
        // } else {
        //     return 'Fail';
        // }

        // return $request->path();
        return $request->method();
    }

    public function userProfile(Request $request)
    {
        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['email'] = $request->email;
        // $user['password'] = $request->password;

        // return $user;

        return $request->all();

        // // default value
        // return $request->input('name', 'John Dae');

                        // filled
        // if ($request->has(['name','email'])) {
        //     return 'Sukses';
        // } else {
        //     return 'Fail';
        // }

        // return $request->only(['username','password']);
        // return $request->except(['username','password']);
    }

}
