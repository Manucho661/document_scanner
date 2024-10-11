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
body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    header {
        background-color: #f8f9fa;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }
    nav ul {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 20px;
    }
    nav ul li {
        cursor: pointer;
    }
    .content-section {
        display: flex;
        flex-wrap: nowrap;
        height: calc(100vh - 60px); /* Adjust height according to the header size */
    }
    /* Batch Explorer Styles */
    #batchExplorer {
        width: 250px;  /* Initial width */
        min-width: 220px; /* Prevent shrinking below this width */
        padding: 20px;
        border-right: 2px solid #ddd;
        height: 100%;
        overflow-y: auto;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        background-color: #f4f4f4;
        flex-shrink: 0;  /* Make sure it doesn't shrink beyond min-width */
    }
    #batchExplorer h3 {
        font-size: 18px;
        margin-bottom: 20px;
        font-weight: bold;
    }
    #batchExplorer ul {
        padding: 0;
        list-style: none;
    }
    #batchExplorer ul li {
        padding: 10px;
        background-color: #fff;
        margin-bottom: 10px;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    #batchExplorer ul li:hover {
        background-color: #ececec;
    }

    /* PDF Viewer Styles */
    #pdfViewer {
        display: flex;
        flex-wrap: wrap;  /* Allow content to wrap into the next row */
        justify-content: flex-start;  /* Align items from the start */
        align-content: flex-start;  /* Pack rows tightly */
        padding: 20px;
        flex-grow: 1;  /* Allow the viewer to grow and take available space */
        min-width: 400px; /* Prevent shrinking to unreadable size */
        overflow-y: auto;
    }
    .pdf-page {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 10px;
        background-color: #f9f9f9;
        flex-basis: calc(33% - 40px);  /* Responsive page size, takes up 33% of row minus margins */
        box-sizing: border-box;
        height: 400px; /* You can adjust this height as needed */
        overflow: auto;
    }
    canvas {
        max-height: 100%;
        width: auto;
    }

    /* Thumbnail Styles */
    .thumbnail-viewer {
        margin: 20px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .thumbnail {
        margin: 5px;
        border: 2px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .thumbnail img {
        width: 120px;
        height: auto;
    }

  </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>

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
			<ul id="batchList">
				<li>No pages available. Please upload a document.</li>
			</ul>
		</div>

		
		<div id="pdfViewer">
			
		</div>
	
	</div>

	<p class="mx-6">Thumbnail</p>
	<div class="thumbnail-viewer" id="thumbnailViewer"></div>
	
	<script>
	document.getElementById('uploadBtn').addEventListener('click', function() {
		let input = document.createElement('input');
		input.type = 'file';
		input.accept = '.pdf'; // Adjust accepted file types as needed
		input.onchange = event => {
			let file = event.target.files[0];
			if (file) {
				displayDocument(file);
			}
		};
		input.click();
	});
	
	async function displayDocument(file) {
		// Update Batch Explorer with the file name
		let batchExplorer = document.getElementById('batchList');
		batchExplorer.innerHTML = `<p>${file.name}</p>`;
	
		// Prepare PDF.js to render the uploaded PDF
		const fileReader = new FileReader();
		fileReader.onload = async function() {
			const typedarray = new Uint8Array(this.result);
			
			const pdf = await pdfjsLib.getDocument(typedarray).promise;
			const pdfViewer = document.getElementById('pdfViewer');
			const thumbnailViewer = document.getElementById('thumbnailViewer');
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
			}
		};
		fileReader.readAsArrayBuffer(file);
	}
	</script>
	


</body>
</html>



@endsection
