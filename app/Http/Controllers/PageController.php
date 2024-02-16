<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function home()
    {
        $data = Blog::get();
        return view('pages.index', compact('data'));
    }

    public function new(){
        return view('pages.create');
    }

    public function store(Request $request){


        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'isi'  => 'required',
        ])->validate();

        Blog::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ])->save();

        return redirect('home')->with('status', 'Blog berhasil di tambah!');
    }
}
