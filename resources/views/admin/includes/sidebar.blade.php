<!-- Sidebar -->
<ul class="sidebar navbar-nav">
	<li class="nav-item @if($menu == 'dashboard_admin') {{ 'active' }}@endif">
		<a class="nav-link" href="{{ URL::to('dashboard_admin') }}">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>
	<li class="nav-item @if($menu == 'experts_admin') {{ 'active' }}@endif">
		<a class="nav-link" href="{{ URL::to('experts_admin') }} ">
			<i class="fas fa-fw fa-folder"></i>
			<span>Experts</span>
		</a>
	</li>
	<li class="nav-item @if($menu == 'production_admin') {{ 'active' }}@endif">
		<a class="nav-link" href="{{ URL::to('production_admin') }}">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Production Awareness data</span>
		</a>
	</li>
	<li class="nav-item @if($menu == 'category_admin') {{ 'active' }}@endif">
		<a class="nav-link" href="{{ URL::to('category_admin') }}">
			<i class="fas fa-fw fa-book"></i>
			<span>Category</span>
		</a>
	</li>
	<li class="nav-item @if($menu == 'user_admin') {{ 'active' }}@endif">
		<a class="nav-link" href="{{ URL::to('adminUser_admin') }}">
			<i class="fas fa-fw fa-book"></i>
			<span>User</span>
		</a>
	</li>

</ul>