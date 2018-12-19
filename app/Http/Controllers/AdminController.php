<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Admin;
use App\User;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth::admin');
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user')->with('users',$users);
    }

    public function destroy($id)
    {
        $users = User::find($id);

        DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->route('admin.user')->withMessage('User Berhasil Dihapus');
    }
}
