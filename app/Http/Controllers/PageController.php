<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PageController extends Controller
{
    public function home()
    {
        $data = User::get();
        return view('pages.index', compact('data'));
    }
}
