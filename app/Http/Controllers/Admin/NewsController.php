<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index');
    }

    public function edit()
    {
        return view('admin.news.edit');
    }
}
