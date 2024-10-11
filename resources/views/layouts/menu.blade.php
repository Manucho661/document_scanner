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
			
				
    </aside>

    
</div>
 
