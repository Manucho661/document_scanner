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

    /* Body Styling */
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f1f3f6;
      color: #333;
    }

    /* Header Styles */
    .app-header {
      background: linear-gradient(135deg,#007bff  0%, #007bff 100%);
      color: white;
      padding: 15px 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .header-nav {
      display: flex;
      justify-content: space-between;
    }

    .nav-list {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-item {
      cursor: pointer;
      font-size: 16px;
      padding: 8px 16px;
      transition: background-color 0.3s ease;
    }

    .nav-item:hover {
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 8px;
    }

    /* Tool Section Styles */
    .tools-section {
      display: flex;
      justify-content: space-around;
      padding: 15px;
      background-color: #fff;
      border-bottom: 2px solid #eaeaea;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .tools-section button {
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.3s;
    }

    .tools-section button:hover {
      transform: scale(1.1);
      box-shadow: 0 4px 12px rgba(37, 117, 252, 0.4);
    }

    .tools-section i {
      font-size: 20px;
    }

    /* Content Section Styling */
    .content-section {
      display: flex;
      margin-top: 20px;
    }

    .batch-explorer {
      width: 250px;
      background-color: #fff;
      padding: 20px;
      box-shadow: 2px 0 8px rgba(0, 0, 0, 0.05);
      border-right: 2px solid #ddd;
    }

    .batch-explorer h3 {
      font-size: 20px;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .batch-explorer ul {
      list-style: none;
      padding: 0;
    }
    .thumbnailText{
      margin: 20px;
     
    }

    .batch-explorer li {
      padding: 10px;
      margin-bottom: 8px;
      background-color: #f9f9f9;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .batch-explorer li:hover {
      background-color: #2575fc;
      color: white;
    }

    /* PDF Viewer Section */
    #pdfViewer {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      align-items: flex-start;
      padding: 20px;
      background-color: #fff;
      flex-grow: 1;
    }

    .pdf-page {
      flex: 1 1 30%;
      margin: 10px;
      padding: 15px;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
      max-width: calc(33% - 20px);
    }

    /* Overlay styling */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 2000;
    }

    .overlay-content {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 90%;
      max-height: 90%;
      overflow: auto;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    .close-overlay {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #ff5f57;
      color: white;
      border: none;
      border-radius: 50%;
      padding: 10px;
      cursor: pointer;
    }

    /* Thumbnail Styling */
    .thumbnail-viewer {
      display: flex;
      flex-wrap: wrap;
      padding: 20px;
    }

    .thumbnail {
      margin: 10px;
      border: 2px solid #2575fc;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .thumbnail img {
      width: 120px;
      height: auto;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .batch-explorer {
        width: 100%;
      }

      .pdf-page {
        flex-basis: 100%; /* Make the pages take up full width on smaller screens */
        max-width: 100%;
      }
     
    } 
    .tSection{
        margin: 10px;
       
      }
      .inputtext{
        height: 30px;
        /* flex: 1; */
    border-radius: none; 
     border: none;  
     outline: none;
    background: transparent;
    padding: 10px;
    border-radius: 15px;
      }
      #selectDocument {
  width: 100%; /* Ensures full width to display the placeholder text */
  height: 40px; /* Adjusts height to match other input fields */
  border: 1px solid #ddd; /* Adds border for consistency */
  border-radius: 15px; /* Rounded corners for aesthetics */
  padding: 10px; /* Padding to ensure text isn't cut off */
  background-color: white; /* Light background for readability */
  font-size: 16px; /* Adequate font size for visibility */
  color: #333; /* Text color */
}
#documentSelect {
  width: 100%;
  padding: 5px;
  border-radius: 15px;
  border: 1px solid #ddd;
  background-color: #fff;
  font-size: 16px;
  color: #333;
  transition: border-color 0.3s;
}

#documentSelect:hover, #documentSelect:focus {
  border-color: #007bff;
  outline: none;
}



    </style>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
</head>
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

<!-- Overlay for viewing specific page -->
<div class="overlay" id="overlay">
  <div class="overlay-content" id="overlayContent">
      <button class="close-overlay" id="closeOverlay">X</button>
      <canvas id="overlayCanvas"></canvas>
  </div>
</div>

<div class="tools-section tSection">
  <label for="selectDocument">Select Document:</label>
  <div class="select-container">
    <select id="documentSelect" class="inputText">
      <option disabled selected>Select</option>
      @foreach ($documents as $document)
        <option value="{{ route('admin.documents.show', $document->id) }}">{{ $document->title }}</option>
      @endforeach
    </select>
  </div>
</div>

<!-- Upload form -->
<form action="{{route('admin.documents.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="tools-section">
    <input type="file" name="document" id="document" accept=".pdf" multiple required>
    <input type="text" class="inputtext" name="title" placeholder="Enter Title to Upload" required>
    <button type="submit" title="Upload">Upload</button>
  </div>
</form>



<div class="content-section">
  <div id="batchExplorer" class="batch-explorer">
    <h3>Batch Explorer</h3>
    <ul id="batchList">
      <li> Document Pages</li>
    </ul>
  </div>
  
  <div id="pdfViewer">
    <!-- PDF pages will be rendered here -->
  </div>
</div>

  <div class="thumbnailText">  <b> <i>  <p class="mx-6">Thumbnail</p> </i> </b></div>
<div class="thumbnail-viewer" id="thumbnailViewer"></div>

@if(isset($latestDocument))
    <script>
        const DocumentUrl = "{{ asset('storage/' . $latestDocument->file_path) }}";
    </script>
    {{-- @elseif(isset($Document)) --}}
    {{-- <script> --}}
        {{-- const DocumentUrl = "{{ asset('storage/' . $Document->file_path) }}"; --}}
    {{-- </script> --}}
@elseif($documents->isEmpty())
<p>No documents available.</p>

</ul>
@endif
<!-- JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
  if (typeof DocumentUrl !== 'undefined') {
    // Fetch and display the latest document
    fetchDocument(DocumentUrl);
  }
});

async function fetchDocument(url) {
  const response = await fetch(url);
  const arrayBuffer = await response.arrayBuffer();
  const typedarray = new Uint8Array(arrayBuffer);
  const pdf = await pdfjsLib.getDocument(typedarray).promise;
  
  const pdfViewer = document.getElementById('pdfViewer');
  const thumbnailViewer = document.getElementById('thumbnailViewer');
  const batchExplorer = document.getElementById('batchList');
  pdfViewer.innerHTML = ""; // Clear previous content
  thumbnailViewer.innerHTML = ""; // Clear previous thumbnails

  const numPages = pdf.numPages; // Get total number of pages

  // Loop through each page and render it
  for (let pageNum = 1; pageNum <= numPages; pageNum++) {
    const page = await pdf.getPage(pageNum);
    const viewport = page.getViewport({ scale: 1.5 });

    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    const columnDiv = document.createElement('div');
    columnDiv.className = 'pdf-page';
    columnDiv.appendChild(canvas);
    pdfViewer.appendChild(columnDiv);

    // Render the page into the canvas context
    await page.render({ canvasContext: context, viewport: viewport }).promise;

    // Resize canvas to fit within the fixed height
    canvas.style.height = '100%';
    canvas.style.width = 'auto';

    // Add to Batch Explorer
    let listItem = document.createElement('li');
    listItem.textContent = `Page ${pageNum}`;
    batchExplorer.appendChild(listItem);

    // Create Thumbnail for each page
    let thumbCanvas = document.createElement('canvas');
    thumbCanvas.width = 120;
    thumbCanvas.height = (canvas.height / canvas.width) * 120;
    let thumbContext = thumbCanvas.getContext('2d');
    thumbContext.drawImage(canvas, 0, 0, thumbCanvas.width, thumbCanvas.height);

    let thumbDiv = document.createElement('div');
    thumbDiv.className = 'thumbnail';
    thumbDiv.appendChild(thumbCanvas);
    thumbnailViewer.appendChild(thumbDiv);

    // Add click event to view page in overlay on canvas click
    canvas.addEventListener('click', function() {
      showOverlay(page, viewport);
    });

    // Add click event to Batch Explorer list item
    listItem.addEventListener('click', function() {
      showOverlay(page, viewport);
    });
  }
}

async function showOverlay(page, viewport) {
  const overlayCanvas = document.getElementById('overlayCanvas');
  overlayCanvas.width = viewport.width;
  overlayCanvas.height = viewport.height;
  const context = overlayCanvas.getContext('2d');
  await page.render({ canvasContext: context, viewport: viewport }).promise;
  document.getElementById('overlay').style.display = 'flex';
}
document.getElementById('closeOverlay').addEventListener('click', function() {
    document.getElementById('overlay').style.display = 'none';
  });

  document.getElementById('documentSelect').addEventListener('change', async function() {
    const selectedRoute = this.value;
    if (selectedRoute) {
        await fetchDocument(selectedRoute);
    }

  });
 
</script>
</body>
</html>



@endsection
