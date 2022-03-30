<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        $data['isi_konten'] = "Hai aku punya role {$user->roles()->first()->name}";

        return view('content', $data);
    }

    public function nilai()
    {
        $data['isi_konten'] = "Ini Halaman Nilai";

        return view('content', $data);
    }
}
