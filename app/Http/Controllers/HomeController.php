<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class HomeController extends Controller {
    use RegistersUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }
    public function admin(Request $req) {
        $this->middleware('admin');
        return view('admin.dashboard')->withMessage("Admin");
    }
    public function addUser(Request $req) {
        $this->middleware('admin');
        return view('auth.register')->withMessage("Add User");
    }
    public function listUsers(Request $req) {
        $this->middleware('admin');
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.users', ['users' => $users])->withMessage("Admin");
    }
    public function exportTemplate1(Request $req) {
        $this->middleware('admin');
        return (new UsersExport(['id', 'username', 'email'], 1))->download('user_teamplate1.xlsx');
    }
    public function exportTemplate2(Request $req) {
        $this->middleware('admin');
        return (new UsersExport(['first_name', 'last_name', 'city'], 2))->download('user_teamplate2.xlsx');
    }
}
