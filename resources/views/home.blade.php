@extends('layouts.app')

@section('content')
    <!-- <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>
    </div> -->

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document Scanner App</title>

  <style>
    /* Reset styles for basic consistency across browsers */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

.app-header {
  background-color: #e0e0e0;
  padding: 10px 20px;
  border-bottom: 1px solid #ccc;
}

.header-nav {
  display: flex;
  justify-content: space-between;
}

.nav-list {
  list-style-type: none;
  display: flex;
  gap: 15px;
}

.nav-item {
  cursor: pointer;
  font-size: 14px;
  color: #333;
  padding: 5px 10px;
}

.nav-item:hover {
  background-color: #dcdcdc;
  border-radius: 4px;
}

.tools-section {
    display: flex;
    justify-content: space-around; /* Spread icons evenly */
    align-items: center; /* Center the icons vertically */
    padding: 10px;
    background-color: #f7f7f7; /* Light background for visibility */
    border-bottom: 1px solid #ddd; /* Optional: border for separation */
}

.tools-section button {
    background-color: #fff; /* Button background */
    border: 1px solid #ccc; /* Button border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px;
    cursor: pointer; /* Cursor changes to pointer on hover */
    transition: background-color 0.3s; /* Smooth background change on hover */
}

.tools-section button:hover {
    background-color: #e0e0e0; /* Change background on hover */
}

.tools-section i {
    font-size: 24px; /* Icon size */
}

.content-section {
    display: flex; /* Use flexbox for layout */
    margin-top: 20px; /* Space above the content section */
}

.batch-explorer {
    width: 33.33%; /* 1/3 of the width */
    padding: 10px;
    background-color: #f7f7f7; /* Light background for visibility */
    border-right: 1px solid #ddd; /* Optional: border for separation */
}

.batch-explorer h3 {
    margin-top: 0; /* Remove default margin for headings */
}

.batch-explorer ul {
    list-style: none; /* Remove bullets */
    padding: 0; /* Remove padding */
}

.batch-explorer li {
    padding: 5px 0; /* Space between items */
    cursor: pointer; /* Indicate clickable items */
}

.batch-explorer li:hover {
    background-color: #e0e0e0; /* Highlight on hover */
}

.image-viewer {
    width: 66.67%; /* 2/3 of the width */
    padding: 10px;
}

.image-viewer h3 {
    margin-top: 0; /* Remove default margin for headings */
}

.image-preview {
    display: flex; /* Flex layout for image preview section */
    justify-content: center; /* Center content horizontally */
    align-items: center; /* Center content vertically */
    height: 200px; /* Fixed height for consistency */
    border: 1px dashed #ddd; /* Optional: border to indicate the area */
    color: #999; /* Light gray text for empty state */
    font-style: italic; /* Italic text for the message */
}



  </style>


</head>
<body>
  <header class="app-header">
    <nav class="header-nav">
      <ul class="nav-list">
        <li class="nav-item">File</li>
        <li class="nav-item">Batch</li>
        <li class="nav-item">View</li>
        <li class="nav-item">Capture</li>
        <li class="nav-item">Document</li>
        <li class="nav-item">Edit</li>
        <li class="nav-item">Tools</li>
        <li class="nav-item">Index</li>
        <li class="nav-item">Help</li>
      </ul>
    </nav>
  </header>

  <div class="tools-section">
        <button title="Preview"><i class="fas fa-eye"></i></button>
        <button title="Print"><i class="fas fa-print"></i></button>
        <button title="Edit"><i class="fas fa-edit"></i></button>
        <button title="Zoom In"><i class="fas fa-search-plus"></i></button>
        <button title="Zoom Out"><i class="fas fa-search-minus"></i></button>
        <button title="Delete"><i class="fas fa-trash-alt"></i></button>
        <button title="Convert to PDF"><i class="fas fa-file-pdf"></i></button>
        <button id="uploadBtn" title="Upload"><i class="fas fa-upload"></i></button>
        <button title="Download"><i class="fas fa-download"></i></button>
        <button title="Save"><i class="fas fa-save"></i></button>
        <button title="Share"><i class="fas fa-share-alt"></i></button>
        <button title="Rotate"><i class="fas fa-sync-alt"></i></button>
        <button title="Crop"><i class="fas fa-crop"></i></button>
        <button title="Search"><i class="fas fa-search"></i></button>
        <button title="Settings"><i class="fas fa-cog"></i></button>
        <button title="OCR"><i class="fas fa-text-height"></i></button>
        <button title="Annotations"><i class="fas fa-comment-dots"></i></button>
   </div>

   <div class="content-section">
    <div id="batchExplorer" class="batch-explorer">
        <h3>Batch Explorer</h3>
        <ul>
            <li>No pages available. Please upload a document.</li>
        </ul>
    </div>
    <div id="imageViewer" class="image-viewer">
        <h3>Image Viewer</h3>
        <div class="image-preview">
            <p>No images available. Please upload a document to preview.</p>
        </div>
    </div>
</div>

<script>

document.getElementById('uploadBtn').addEventListener('click', function() {
    let input = document.createElement('input');
    input.type = 'file';
    input.accept = '.pdf, .doc, .docx, .jpg, .png'; // Adjust accepted file types as needed
    input.onchange = event => {
        let file = event.target.files[0];
        if (file) {
            displayDocument(file);
        }
    };
    input.click();
});

function displayDocument(file) {
    // Here, you'd handle parsing and displaying the file
    // For example purposes, we’ll just display file name in Batch Explorer
    let batchExplorer = document.getElementById('batchExplorer');
    batchExplorer.innerHTML = `<p>${file.name}</p>`;
    
    let imageViewer = document.getElementById('imageViewer');
    imageViewer.innerHTML = `<p>Preview of ${file.name} will appear here.</p>`;
}

</script>


</body>
</html>



@endsection
