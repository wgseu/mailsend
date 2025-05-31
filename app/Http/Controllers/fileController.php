<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class fileController extends Controller
{
    public function index()
    {
        return view("sendFile");
    }

    public function store(Request $request)
    {
        $request->validate([
            'arquivo' => 'required|image|mimes:jpeg,png|max:2048',
        ]);
        $path = $request->file("arquivo")->store('store_path', 'public');

        DB::transaction(function () use ($path) {
            Image::create([
                'path' => $path,
            ]);
        }  );
    }
}
