<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
      return view('ke.index');
    }

    public function about()
    {
      return view('ke.about');
    }
    public function services()
    {
      return view('ke.services');
    }
}
