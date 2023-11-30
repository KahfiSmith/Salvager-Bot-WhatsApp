<?php

namespace App\Http\Controllers\Backend;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $data = Profile::all();
        return view('backend.profile', compact('data'));
    }
}
