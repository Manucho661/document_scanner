<!DOCTYPE html>
<html>
<head>
    <title>{{ $document->title }}</title>
</head>
<body>
    <h1>{{ $document->title }}</h1>
    <p>{{ $document->description }}</p>
    <embed src="{{ asset('storage/' . $document->file_path) }}" width="100%" height="600px" />


</div>

</body>
</html>
