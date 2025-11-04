<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $all_message = Contact::all()->count();
        return view('backend.pages.dashboard', compact('all_message'));
    }
}
