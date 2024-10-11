<!DOCTYPE html>
<html>
<head>
    <title>Documents</title>
</head>
<body>
    <h1>Uploaded Documents</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>File</th>
        </tr>
        @foreach($documents as $document)
        <tr>
            <td>{{ $document->title }}</td>
            <td>{{ $document->description }}</td>
            
            <td><a href="{{ asset('storage/' . $document->file_path) }}" target="_blank">View</a></td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('admin.documents.create') }}">Upload New Document</a>
</body>
</html>
