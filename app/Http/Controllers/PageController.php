<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Festival;
class PageController extends Controller
{
    public function index(){
        $festivals = Festival::All();
        return view('welcome', compact('festivals'));
    }
}
