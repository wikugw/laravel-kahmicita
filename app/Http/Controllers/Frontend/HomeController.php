<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Activity;

class HomeController extends Controller
{
    public function index()
    {
        $data['activities']  = Activity::orderBy('updated_at', 'desc')->take('3')->get();
        return view('frontend.home.index', $data);
    }
}
