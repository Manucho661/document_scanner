<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Document;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $documents = Document::all(); //
        $latestDocument = Document::latest()->first();
        return view('home', compact('latestDocument', 'documents'));
    }

    public function show($id){
        
        $document = Document::findOrFail($id);
        // return redirect()->route('home')->with(compact('document'));
         return view('home', compact('document'));
    }
}
