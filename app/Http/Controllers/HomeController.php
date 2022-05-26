<?php
namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        return view('/home.index');

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}
