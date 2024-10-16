<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        return view('admin.documents.create');
    }

    public function store(Request $request)
{
    // Validate the input
    $validated = $request->validate([
        'document' => 'required|mimes:pdf,doc,docx,jpg,png|max:2048', // Ensure file type and size are validated
        'title' => 'required|string|max:255', // Validate title is present
    ]);

    // Store the file and save the path
    if ($request->hasFile('document')) {
        $path = $request->file('document')->store('documents', 'public'); // Store file in 'public' disk
    } else {
        return response()->json(['error' => 'File upload failed'], 422); // Handle no file uploaded
    }

    // Save document details to the database
    $document = Document::create([
        'title' => $validated['title'],
        'file_path' => $path,
    ]);

   return redirect()->route('home')->with('documentId', $document->id);
}

    public function show($id)
    {
        $document = Document::findOrFail($id);
        return view('home', compact('document'));
    }
}
