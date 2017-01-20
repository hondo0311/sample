<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function home()
    {
      return view('Static_Pages.home');
    }
    public function help()
    {
      return view('Static_Pages.help');
    }
    public function about()
    {
      return view('Static_Pages.about');
    }
}
