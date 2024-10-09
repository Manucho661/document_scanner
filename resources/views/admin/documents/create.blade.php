<!DOCTYPE html>
<html>
<head>
    <title>Upload Document</title>
</head>
<body>
    <h1>Upload Document</h1>

    <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>

        <label for="file">File:</label>
        <input type="file" name="file" required>
        <br>

        <label for="description">Description:</label>
        <input type="text" name="description">
        <br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
