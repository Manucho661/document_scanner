<div class="wrapper">
    <!-- Sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
					<a href="#" class="nav-link {{ Request::is('admin.documents*') ? 'active' : '' }}">
						<i class="nav-icon fas fa-file-alt text-blue"></i>
						<p>Documents</p>
					</a>
				</li>
				
				@foreach($documents as $document)
    <li class="nav-item">
        <a href="{{ route('admin.documents.show', $document->id) }}" class="nav-link {{ Request::is('admin.documents*') ? 'active' : '' }}">
            <p class="text-muted"></p>{{ $document->title }}
        </a>
    </li>
@endforeach
				
				<li class="nav-item">
					<a href="{{ route('admin.documents.create') }}" class="nav-link">
						<p class="text-muted">Upload Document</p>
					</a>
				</li>
				
    </aside>

    
</div>
