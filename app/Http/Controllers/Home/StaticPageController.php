<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('home/index');
    }
    public function register()
    {
        return view('home/register');
    }
    public function login()
    {
        return view('home/register');
    }
    public function promo()
    {
        return view('home/promo');
    }
    public function deposit()
    {
        return view('home/deposit');
    }
}