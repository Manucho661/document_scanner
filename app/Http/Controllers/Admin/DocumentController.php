<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all(); // You can keep this for the index view
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        return view('admin.documents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
            // 'description' => 'nullable|string|max:255',
        ]);

        // Store the file
        $path = $request->file('document')->store('documents', 'public');

        Document::create([
            'title' => $request->title,
            'file_path' => $path,
            'description' => $request->description,
        ]);

        return redirect()->route('home')->with('success', 'Document uploaded successfully.');
    }

    public function show($id)
    {
        $document = Document::findOrFail($id);
        // return redirect()->route('home')->with(compact('document'));
         return view('home', compact('document'));

    }
}
