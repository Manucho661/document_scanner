<!-- resources/views/upload.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload Document</h2>
    <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="document">Select Document:</label>
            <input type="file" name="document" id="document" accept=".pdf" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Enter Title to Upload:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title to Upload" required>
        </div>
        <button type="submit" class="btn btn-primary" title="Upload">Upload</button>
    </form>
</div>
@endsection
