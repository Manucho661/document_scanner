<!-- need to remove -->
<li class="nav-item">
	<a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
		<i class="nav-icon fas fa-home"></i>
		<p>Dashboard</p>
	</a>
</li>

{{-- <li class="nav-item">
	<a href="{{ route('admin.employees.index') }}"
		class="nav-link {{ Request::is('admin.employees*') ? 'active' : '' }}">
		
		<i class="nav-icon fas fa-file-alt text-blue"></i>
		<p>Documents</p>
	</a>
</li> --}}

