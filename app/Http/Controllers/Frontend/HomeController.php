<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Activity;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $data['activities']  = Activity::orderBy('updated_at', 'desc')->take('3')->get();
        $data['articles']  = Article::orderBy('updated_at', 'desc')->take('3')->get();
        return view('frontend.home.index', $data);
    }
}
