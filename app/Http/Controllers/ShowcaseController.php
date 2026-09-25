<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showcase;

class ShowcaseController extends Controller
{
 public function index()
    {
       $showcases = Showcase::all();

    
    
    return view('pages.showcase.index',  compact('showcases'));
    }
}
